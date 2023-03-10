<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * QuoteRequest Controller
 *
 * @property \App\Model\Table\QuoteRequestTable $QuoteRequest
 * @method \App\Model\Entity\QuoteRequest[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class QuoteRequestController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $quoteRequest = $this->paginate($this->QuoteRequest);

        $this->set(compact('quoteRequest'));
    }

    /**
     * View method
     *
     * @param string|null $id Quote Request id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $quoteRequest = $this->QuoteRequest->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('quoteRequest'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $quoteRequest = $this->QuoteRequest->newEmptyEntity();
        if ($this->request->is('post')) {
            $quoteRequest = $this->QuoteRequest->patchEntity($quoteRequest, $this->request->getData());
            if ($this->QuoteRequest->save($quoteRequest)) {
                $this->Flash->success(__('The quote request has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The quote request could not be saved. Please, try again.'));
        }
        $this->set(compact('quoteRequest'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Quote Request id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $quoteRequest = $this->QuoteRequest->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $quoteRequest = $this->QuoteRequest->patchEntity($quoteRequest, $this->request->getData());
            if ($this->QuoteRequest->save($quoteRequest)) {
                $this->Flash->success(__('The quote request has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The quote request could not be saved. Please, try again.'));
        }
        $this->set(compact('quoteRequest'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Quote Request id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $quoteRequest = $this->QuoteRequest->get($id);
        if ($this->QuoteRequest->delete($quoteRequest)) {
            $this->Flash->success(__('The quote request has been deleted.'));
        } else {
            $this->Flash->error(__('The quote request could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
