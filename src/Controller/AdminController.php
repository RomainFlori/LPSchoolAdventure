<?php
declare(strict_types=1);

namespace App\Controller;

use Cake\Core\Configure;
use Cake\Http\Exception\ForbiddenException;
use Cake\Http\Exception\NotFoundException;
use Cake\Http\Response;
use Cake\View\Exception\MissingTemplateException;
use Cake\ORM\Locator\LocatorAwareTrait;
use Cake\Auth\DefaultPasswordHasher; //Add this linea

class AdminController extends AppController
{
    public $isConnected = false;
    public $Settings;
    public $currentUser;

    public $session;
    
    public function initialize(): void
    {
        parent::initialize();
        $this->session = $this->request->getSession();
        
        $this->loadComponent('Auth', [
            'authorize' => 'Controller',
            'authenticate' => [
                'Form' => [
                    'fields' => [
                        'username' => 'email',
                        'password' => 'password'
                        ]
                ]
            ],
            'authError' => "Veuillez vous connecter pour accéder à cette page.",
            'loginAction' => [
                'controller' => 'Admin',
                'action' => 'login'
            ],
            'loginRedirect' => [
                'controller' => 'Admin',
                'action' => 'index'
            ],
            'logoutRedirect' => [
                'controller' => 'Admin',
                'action' => 'login'
            ],
            // Si pas autorisé, on renvoit sur la page précédente
            // 'unauthorizedRedirect' => $this->referer()
        ]);
        
        
        // get controller name
        $controllerName = $this->request->getParam('controller');
        $this->set('controllerName', $controllerName);

        $this->viewBuilder()->setLayout('admin');
        $this->loadComponent('Flash');
        $this->Settings = $this->getTableLocator()->get('settings')->find('all')->toArray();

        $settingsArray = [];
        foreach ($this->Settings as $settings) {
            $settingsArray = array_merge($settingsArray, [$settings['name'] => $settings['value']]);
        }

        $CurrentUser = $this->session->read('CurrentUser');
        $this->set('Settings', $settingsArray);

        $this->set('currentUser', $CurrentUser);
    
    }

    public function isAuthorized($user = null)
    {
        return (true);
    }

    public function isUserConnected()
    {

        // if (!is_null($this->session->read('IsAdminLogin'))) {
        //     return true;
        // } else {
        //     return false;
        // }
    }

    public function index()
    {

    }

    public function settings()
    {
 
    }
    
    public function login()
    {

        $this->viewBuilder()->setLayout('login');

        $usersTable = $this->getTableLocator()->get('users');
        $data = $this->request->getData();

        if ($this->request->is('post')) {
            $user = $usersTable->find()->where(['email' => $data['email']])->first();

            if (empty($user)) {
                $this->Flash->error('Username or password is incorrect');
                return;
                
            } else {
                
                $valid = password_verify($data['password'], $user->password);

                if ($valid) {
                    $this->currentUser = $user;
                    $this->session->write('IsAdminLogin', true);
                    $this->session->write('CurrentUser', $user);

                    // Auth component
                    $user = $this->Auth->identify();
                    if ($user) {
                        $this->Auth->setUser($user);
                    }

                    // $this->Flash->success('Vous êtes connecté');
                    return $this->redirect(['action' => 'index']);
                } else {
                    $this->Flash->error('Password is incorrect');
                    return;
                }
            }
        }
    }

    public function add()
    {
        $usersTable = $this->getTableLocator()->get('users');
        $userEntity = $usersTable->newEmptyEntity();

        $data = $this->request->getData();

        if ($this->request->is('post')) {
            $userEntity->first_name = $data['first_name'];
            $userEntity->last_name = $data['last_name'];
            $userEntity->email = $data['email'];

            $userEntity->password = password_hash($data['password'], PASSWORD_DEFAULT);

            if ($usersTable->save($userEntity)) {
                $this->Flash->success('L\'utilisateur :'. $data['first_name'] . " " . $data['last_name'] .' à été ajouté');

            }


        }
    }


    public function logout()
    {
        if ($this->session->read('IsAdminLogin')) {
            $this->session->write('IsAdminLogin', false);
        }
        $this->session->write('CurrentUser', null);
        $this->currentUser = null;


        return $this->redirect(['Controller' => 'Admin', "action" => "login"]);
    }

    public function resetPassword()
    {
        $CurrentUser = $this->session->read('CurrentUser');
        $usersTable = $this->getTableLocator()->get('users');
        $userQuery = $usersTable->find()->where(['email' => $CurrentUser->email])->first();
        $data = $this->request->getData();

        if ($this->request->is(['patch', 'post', 'put'])) {
                
            if ($data['password'] != $data['password_confirm']) {
                $this->Flash->error(__('Les mots de passe ne correspondent pas.'));
                
                return $this->redirect(['action' => 'resetPassword']);
            }
                

            $user = $usersTable->patchEntity($userQuery, $data);
            if ($usersTable->save($user)) {
                $this->Flash->success(__('Votre mot de passe à bien été modifié.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Une erreur est survenue lors de la modification de votre mot de passe. Veuillez réessayer.'));
        }
    }

    public function changeEmail()
    {
        $CurrentUser = $this->session->read('CurrentUser');
        $usersTable = $this->getTableLocator()->get('users');
        $userQuery = $usersTable->find()->where(['email' => $CurrentUser->email])->first();
        $data = $this->request->getData();

        if ($this->request->is(['patch', 'post', 'put'])) {

            if ($data['email'] != $data['email_confirm']) {
                $this->Flash->error(__('Les emails ne correspondent pas.'));
                
                return $this->redirect(['action' => 'changeEmail']);
            }


            $user = $usersTable->patchEntity($userQuery, $data);
            if ($user = $usersTable->save($user)) {
                $this->Flash->success(__('Votre email à bien été modifié.'));
                $this->session->write('CurrentUser', $user);

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Une erreur est survenue lors de la modification de votre email. Veuillez réessayer.'));
        }

        $this->set('currentUser', $CurrentUser);

    }
}
