<?php
namespace App\Controller;

use App\Controller\AdminController;
use App\Helper;
use Cake\ORM\TableRegistry;

class FaqsController extends AdminController
{

    public function initialize(): void
    {
        parent::initialize();

    }

    public function index() {
        $faqs = $this->Faqs->find('all');
        $this->set(compact('faqs'));


    }

    public function add()
    {
        $faqEntity = $this->Faqs->newEmptyEntity();
        $data = $this->request->getData();

        if ($this->request->is('post')) {
            $faqEntity->question = $data['question'];
            $faqEntity->text = $data['text'];

            if ($this->Faqs->save($faqEntity)) {
                $this->Flash->success('La question : '. $data['question'] .' à été ajouté.');
                return $this->redirect(['action' => 'index']);

            } else {
                $this->Flash->error('La question : '. $data['question'] .' n\'a pas été ajouté.');
                return;
            }

        }
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);

        $faq = $this->Faqs->get($id);

        if ($this->Faqs->delete($faq)) {
            $this->Flash->success(__('La question a été supprimé.'));
        } else {
            $this->Flash->error(__('La question n\'a pas été supprimé. Veuillez réessayer.'));
        }

        return $this->redirect(['action' => 'index']);
    }


}