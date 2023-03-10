<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * EmailSubscriber Controller
 *
 * @property \App\Model\Table\EmailSubscriberTable $EmailSubscriber
 * @method \App\Model\Entity\EmailSubscriber[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EmailSubscriberController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $emailSubscriber = $this->paginate($this->EmailSubscriber);

        $this->set(compact('emailSubscriber'));
    }

    /**
     * View method
     *
     * @param string|null $id Email Subscriber id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $emailSubscriber = $this->EmailSubscriber->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('emailSubscriber'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $emailSubscriber = $this->EmailSubscriber->newEmptyEntity();
        if ($this->request->is('post')) {
            $emailSubscriber = $this->EmailSubscriber->patchEntity($emailSubscriber, $this->request->getData());
            if ($this->EmailSubscriber->save($emailSubscriber)) {
                $this->Flash->success(__('The email subscriber has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The email subscriber could not be saved. Please, try again.'));
        }
        $this->set(compact('emailSubscriber'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Email Subscriber id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $emailSubscriber = $this->EmailSubscriber->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $emailSubscriber = $this->EmailSubscriber->patchEntity($emailSubscriber, $this->request->getData());
            if ($this->EmailSubscriber->save($emailSubscriber)) {
                $this->Flash->success(__('The email subscriber has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The email subscriber could not be saved. Please, try again.'));
        }
        $this->set(compact('emailSubscriber'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Email Subscriber id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $emailSubscriber = $this->EmailSubscriber->get($id);
        if ($this->EmailSubscriber->delete($emailSubscriber)) {
            $this->Flash->success(__('The email subscriber has been deleted.'));
        } else {
            $this->Flash->error(__('The email subscriber could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
