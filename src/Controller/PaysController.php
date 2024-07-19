<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Pays Controller
 *
 * @property \App\Model\Table\PaysTable $Pays
 */
class PaysController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Pays->find();
        $pays = $this->paginate($query);

        $this->set(compact('pays'));
    }

    /**
     * View method
     *
     * @param string|null $id Pays id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $pays = $this->Pays->get($id, contain: []);
        $this->set(compact('pays'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $pays = $this->Pays->newEmptyEntity();
        if ($this->request->is('post')) {
            $pays = $this->Pays->patchEntity($pays, $this->request->getData());
            if ($this->Pays->save($pays)) {
                $this->Flash->success(__('The country has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The country could not be saved. Please, try again.'));
        }
        $this->set(compact('pays'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Pays id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $pays = $this->Pays->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $pays = $this->Pays->patchEntity($pays, $this->request->getData());
            if ($this->Pays->save($pays)) {
                $this->Flash->success(__('The country has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The country could not be saved. Please, try again.'));
        }
        $this->set(compact('pays'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Pays id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $pays = $this->Pays->get($id);

        if ($this->isPaysReferenced($id)) {
            $this->Flash->error(__('The country cannot be deleted because it is referenced in the reference table.'));
            return $this->redirect(['action' => 'index']);
        }

        if ($this->Pays->delete($pays)) {
            $this->Flash->success(__('The country has been deleted.'));
        } else {
            $this->Flash->error(__('The country could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    private function isPaysReferenced($PaysId)
{
    $referenceTable = $this->getTableLocator()->get('Reference');
    $referenceCount = $referenceTable->find()
        ->where(['Reference.id_pays' => $PaysId])
        ->count();

    return $referenceCount > 0;
}
}
