<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Annee Controller
 *
 * @property \App\Model\Table\AnneeTable $Annee
 */
class AnneeController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Annee->find();
        $annee = $this->paginate($query);

        $this->set(compact('annee'));
    }

    /**
     * View method
     *
     * @param string|null $id Annee id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $annee = $this->Annee->get($id, contain: []);
        $this->set(compact('annee'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $annee = $this->Annee->newEmptyEntity();
        if ($this->request->is('post')) {
            $annee = $this->Annee->patchEntity($annee, $this->request->getData());
            if ($this->Annee->save($annee)) {
                $this->Flash->success(__('The annee has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The annee could not be saved. Please, try again.'));
        }
        $this->set(compact('annee'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Annee id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $annee = $this->Annee->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $annee = $this->Annee->patchEntity($annee, $this->request->getData());
            if ($this->Annee->save($annee)) {
                $this->Flash->success(__('The annee has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The annee could not be saved. Please, try again.'));
        }
        $this->set(compact('annee'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Annee id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $annee = $this->Annee->get($id);
        if ($this->Annee->delete($annee)) {
            $this->Flash->success(__('The annee has been deleted.'));
        } else {
            $this->Flash->error(__('The annee could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
