<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Type Controller
 *
 * @property \App\Model\Table\TypeTable $Type
 */
class TypeController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Type->find();
        $type = $this->paginate($query);

        $this->set(compact('type'));
    }

    /**
     * View method
     *
     * @param string|null $id Type id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $type = $this->Type->get($id, contain: []);
        $this->set(compact('type'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $type = $this->Type->newEmptyEntity();
        if ($this->request->is('post')) {
            $type = $this->Type->patchEntity($type, $this->request->getData());
            if ($this->Type->save($type)) {
                $this->Flash->success(__('The type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The type could not be saved. Please, try again.'));
        }
        $this->set(compact('type'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Type id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $type = $this->Type->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $type = $this->Type->patchEntity($type, $this->request->getData());
            if ($this->Type->save($type)) {
                $this->Flash->success(__('The type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The type could not be saved. Please, try again.'));
        }
        $this->set(compact('type'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Type id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $type = $this->Type->get($id);

        if ($this->isTypeReferenced($id)) {
            $this->Flash->error(__('The Type cannot be deleted because it is referenced in the reference table.'));
            return $this->redirect(['action' => 'index']);
        }

        if ($this->Type->delete($type)) {
            $this->Flash->success(__('The Type has been deleted.'));
        } else {
            $this->Flash->error(__('The Type could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    private function isTypeReferenced($TypeId)
{
    $referenceTable = $this->getTableLocator()->get('Reference');
    $referenceCount = $referenceTable->find()
        ->where(['Reference.id_type' => $TypeId])
        ->count();

    return $referenceCount > 0;
}
}
