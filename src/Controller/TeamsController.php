<?php
declare(strict_types=1);

namespace App\Controller;

use Cake\Core\Configure;

class TeamsController extends AdminController
{
    
    public function initialize(): void
    {
        parent::initialize();


    }

    public function index()
    {
        // $this->loadModel('Teams');
        $teams = $this->Teams->find('all');
        // debug($teams);
        $this->set(compact('teams'));
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);

        $team = $this->Teams->get($id);

        if ($this->Teams->delete($team)) {
            $this->Flash->success(__('Le membre de l\'équipe a été supprimé.'));
        } else {
            $this->Flash->error(__('Le membre de l\'équipe n\'a pas été supprimé. Veuillez réessayer.'));
        }

        return $this->redirect(['action' => 'index']);

    }

    public function edit($id = null)
    {
        $team = $this->Teams->get($id);
        
        if ($this->request->is(['patch', 'post', 'put'])) {
            $team = $this->Teams->patchEntity($team, $this->request->getData());
            if ($this->Teams->save($team)) {
                $this->Flash->success(__('Le membre de l\'équipe a été modifié.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Le membre de l\'équipe n\'a pas été modifié. Veuillez réessayer.'));
            return $this->redirect(['action' => 'index']);
        }
    }
    
    public function add()
    {
        $teamsTable = $this->getTableLocator()->get('teams');
        $teamEntity = $teamsTable->newEmptyEntity();

        $data = $this->request->getData();


        if ($this->request->is('post')) {
            $teamEntity = $teamsTable->patchEntity($teamEntity, $data);
            if ($teamsTable->save($teamEntity)) {
                $this->Flash->success('Le membre a bien été ajoutée !');

            } else {
                $this->Flash->error('Une erreur est survenue lors de l\'ajout du membre.');
            }
            
            return $this->redirect(["action" => "index"]);
            
        }
    }

}
