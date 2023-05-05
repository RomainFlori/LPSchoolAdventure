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
use Cake\Mailer\Email;
use Cake\Mailer\Mailer;
use Cake\Mailer\TransportFactory;

class EmailController extends AdminController
{
    
    public function initialize(): void
    {
        parent::initialize();

        // debug($this->currentUser);
    }

    public function index()
    {
    }

    public function delete()
    {
    }


    public function resetPassword()
    {
        $this->viewBuilder()->setLayout('login');
        $data = $this->request->getData();
        $usersTable = $this->getTableLocator()->get('users');
        $mailer = new Mailer('default');
        
        if ($this->request->is('post')) {
            $user = $usersTable->find()->where(['email' => $data['email']])->first();

            if(is_null($user)) {
                $this->Flash->error('Cet email n\'existe pas dans notre base de données.');
                return;
            }
            $newPassword = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 8);

            $user->password = $newPassword;
            if ($usersTable->save($user)) {
                $messageToUser = "Bonjour,<br>Vous avez demandé à réinitialiser votre mot de passe. <br>Voici votre nouveau mot de passe : <br><b>". $newPassword ."</b><br>Vous pouvez le modifier une fois connecté.";
                $mailer
                ->setTransport('gmail')
                ->setFrom([$data['email'] => $this->settingsTable['project_name']])
                    ->setTo($data['email'])
                    ->setEmailFormat('html')
                    ->setSubject('Réinitialisation de votre mot de passe')
                    ->deliver($messageToUser);

            } else {
                $this->Flash->error('Une erreur est survenue. Merci de reessayer');
                return;
            }

            $this->Flash->success('Un email vous a été envoyé avec votre nouveau mot de passe.');

            return $this->redirect(['controller' => 'Admin', 'action' => 'login']);
        }
        

    }

    public function email()
    {
        $data = $this->request->getData();
        $mailer = new Mailer('default');
        $maileruser = new Mailer('default');

        if ($this->request->is('post')) {
            $emailSchoolAdventure = $this->Email;

            // Email to the admin
            $messageToUser = $data['name'] ." vous a contacté pour ". $data['subject'] ."<br>Voici son message: <br>". $data['message'] .".<br> Voici ses informations personnelles : <br>Email: ". $data['email'] ."<br>Téléphone: " . $data['phone'] ."\n";
            $mailer
            ->setTransport('gmail')
            ->setFrom([$emailSchoolAdventure => $this->settingsTable['project_name']])
                ->setTo($emailSchoolAdventure)
                ->setEmailFormat('html')
                ->setSubject('Message de la part de '. $data['name'])
                ->deliver($messageToUser);


            // Email to The user
            $messageToUser = "Merci ". $data['name'] ." de nous avoir contacté, nous vous répondrons dans les plus brefs délais.";
            $maileruser
            ->setTransport('gmail')
            ->setFrom([$emailSchoolAdventure => 'SchoolAdventure'])
                ->setTo($data['email'])
                ->setEmailFormat('html')
                ->setSubject('Vous avez contacté '. $this->settingsTable['project_name'])
                ->deliver($messageToUser);

            $this->Flash->success('Nous reviendrons vers vous rapidement.');
        }

        return $this->redirect(['controller' => 'Pages', 'action' => 'index']);

    }

}
