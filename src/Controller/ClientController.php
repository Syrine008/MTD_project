<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Client Controller
 *
 * @property \App\Model\Table\ClientTable $Client
 */
class ClientController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Client->find();
        $client = $this->paginate($query);

        $this->set(compact('client'));
    }

    /**
     * View method
     *
     * @param string|null $id Client id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $client = $this->Client->get($id, contain: []);
        $this->set(compact('client'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $client = $this->Client->newEmptyEntity();
        if ($this->request->is('post')) {
            $client = $this->Client->patchEntity($client, $this->request->getData());
            if ($this->Client->save($client)) {
                $this->Flash->success(__('The client has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The client could not be saved. Please, try again.'));
        }
        $this->set(compact('client'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Client id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $client = $this->Client->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $client = $this->Client->patchEntity($client, $this->request->getData());
            if ($this->Client->save($client)) {
                $this->Flash->success(__('The client has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The client could not be saved. Please, try again.'));
        }
        $this->set(compact('client'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Client id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    /* public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $client = $this->Client->get($id);
        if ($this->Client->delete($client)) {
            $this->Flash->success(__('The client has been deleted.'));
        } else {
            $this->Flash->error(__('The client could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    } */

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $client = $this->Client->get($id);

        // Check if the client exists in the reference table
        if ($this->isClientReferenced($id)) {
            $this->Flash->error(__('The client cannot be deleted because it is referenced in the reference table.'));
            return $this->redirect(['action' => 'index']);
        }

        if ($this->Client->delete($client)) {
            $this->Flash->success(__('The client has been deleted.'));
        } else {
            $this->Flash->error(__('The client could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    private function isClientReferenced($clientId)
{
    $referenceTable = $this->getTableLocator()->get('Reference');
    $referenceCount = $referenceTable->find()
        ->where(['Reference.id_client' => $clientId])
        ->count();

    return $referenceCount > 0;
}
}