<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Secteur Controller
 *
 * @property \App\Model\Table\SecteurTable $Secteur
 */
class SecteurController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Secteur->find();
        $secteur = $this->paginate($query);

        $this->set(compact('secteur'));
    }

    /**
     * View method
     *
     * @param string|null $id Secteur id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $secteur = $this->Secteur->get($id, contain: []);
        $this->set(compact('secteur'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $secteur = $this->Secteur->newEmptyEntity();
        if ($this->request->is('post')) {
            $secteur = $this->Secteur->patchEntity($secteur, $this->request->getData());
            if ($this->Secteur->save($secteur)) {
                $this->Flash->success(__('The secteur has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The secteur could not be saved. Please, try again.'));
        }
        $this->set(compact('secteur'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Secteur id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $secteur = $this->Secteur->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $secteur = $this->Secteur->patchEntity($secteur, $this->request->getData());
            if ($this->Secteur->save($secteur)) {
                $this->Flash->success(__('The secteur has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The secteur could not be saved. Please, try again.'));
        }
        $this->set(compact('secteur'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Secteur id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $secteur = $this->Secteur->get($id);
        if ($this->Secteur->delete($secteur)) {
            $this->Flash->success(__('The secteur has been deleted.'));
        } else {
            $this->Flash->error(__('The secteur could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
