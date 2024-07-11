<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Societe Controller
 *
 * @property \App\Model\Table\SocieteTable $Societe
 */
class SocieteController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Societe->find();
        $societe = $this->paginate($query);

        $this->set(compact('societe'));
    }

    /**
     * View method
     *
     * @param string|null $id Societe id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $societe = $this->Societe->get($id, contain: []);
        $this->set(compact('societe'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $societe = $this->Societe->newEmptyEntity();
        if ($this->request->is('post')) {
            $societe = $this->Societe->patchEntity($societe, $this->request->getData());
            if ($this->Societe->save($societe)) {
                $this->Flash->success(__('The societe has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The societe could not be saved. Please, try again.'));
        }
        $this->set(compact('societe'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Societe id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $societe = $this->Societe->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $societe = $this->Societe->patchEntity($societe, $this->request->getData());
            if ($this->Societe->save($societe)) {
                $this->Flash->success(__('The societe has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The societe could not be saved. Please, try again.'));
        }
        $this->set(compact('societe'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Societe id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $societe = $this->Societe->get($id);
        if ($this->Societe->delete($societe)) {
            $this->Flash->success(__('The societe has been deleted.'));
        } else {
            $this->Flash->error(__('The societe could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
