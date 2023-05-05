<?php
namespace App\Controller;

use App\Controller\AdminController;


// /**
//  * Users Controller
//  *
//  * @property \App\Model\Table\UsersTable $Users
//  *
//  * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
//  */

class UsersController extends AdminController
{
    public $CurrentUser;

    public function initialize(): void
    {
        parent::initialize();
        $this->CurrentUser = $this->session->read('CurrentUser');

    }
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $users = $this->paginate($this->Users)->toArray();

        // debug($users);
        $this->set(compact('users'));
    }

 
    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => ['Activites']
        ]);
        $this->set('user', $user);
    }


    public function add()
    {
        $user = $this->Users->newEmptyEntity();

        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());

            if ($this->Users->save($user)) {
                $this->Flash->success(__('L\'utilisateur a été enregistré.'));
            } else {
                $this->Flash->error(__('L\'utilisateur n\'a pas été enregistré. Veuillez réessayer.'));
            }
            return $this->redirect(['controller' => 'Admin', 'action' => 'index']);
        }
    }


    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => ['Activites']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $activites = $this->Users->Activites->find('list', ['limit' => 200]);
        $this->set(compact('user', 'activites'));
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);


        $user = $this->Users->get($id);

        if ($user->id == $this->CurrentUser->id) {
            $this->Flash->error(__('Vous ne pouvez pas supprimer votre propre compte.'));

            return $this->redirect(['action' => 'index']);
        }

        if ($user->superadmin == 1) {
            $this->Flash->error(__('Vous ne pouvez pas supprimer un compte administrateur.'));

            return $this->redirect(['action' => 'index']);
        }

        if ($this->Users->delete($user)) {
            $this->Flash->success(__('L\'utilisateur a été supprimé.'));
        } else {
            $this->Flash->error(__('L\'utilisateur n\'a pas été supprimé. Veuillez réessayer.'));
        }

        return $this->redirect(['action' => 'index']);
    }


}
