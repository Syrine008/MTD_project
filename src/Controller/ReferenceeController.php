<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Reference Controller
 *
 * @property \App\Model\Table\ReferenceTable $Reference
 * @method \App\Model\Entity\Reference[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ReferenceeController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        /* $query = $this->Reference->find('all', [
            'contain' => ['Client', 'Societe', 'Secteur', 'Annee', 'Pays', 'Type']
        ]);
        $reference = $this->paginate($query); */

        $this->paginate = [
            'contain' => ['Client', 'Societe', 'Secteur', 'Annee', 'Pays', 'Type'],
        ];
        $reference = $this->paginate($this->Reference);
    
    
        $this->set(compact('reference'));
    }
    

    

    /**
     * View method
     *
     * @param string|null $id Reference id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $reference = $this->Reference->get($id, [
            'contain' => ['Client', 'Societe', 'Secteur', 'Annee', 'Pays', 'Type'],
        ]);

        $this->set(compact('reference'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $reference = $this->Reference->newEmptyEntity();
        
        if ($this->request->is('post')) {
            $data = $this->request->getData();
            
            // Handle file upload
            $image = $this->request->getUploadedFile('logo');
            $name = $image->getClientFilename();
    
            // Additional code to handle the uploaded file, such as moving it to a directory
            $targetPath = WWW_ROOT . 'img' . DS . 'uploads' . DS . $name;
            $image->moveTo($targetPath);
    
            // Save the filename to the reference entity
            $reference->logo = 'uploads' . DS . $name;
    
            // Patch entity with form data 
            $reference = $this->Reference->patchEntity($reference, $data);
   // debug($reference);die;
            if ($this->Reference->save($reference)) {
                $this->Flash->success(__('The reference has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('Unable to add the reference.'));
            }
        }
    
        // Fetch related data from other tables for dropdowns
        $client = $this->Reference->Client->find('list', ['limit' => 200]);
        $societe = $this->Reference->Societe->find('list', ['limit' => 200]);
        $secteur = $this->Reference->Secteur->find('list', ['limit' => 200]);
        $annee = $this->Reference->Annee->find('list', ['limit' => 200]);
        $pays = $this->Reference->Pays->find('list', ['limit' => 200]);
        $type = $this->Reference->Type->find('list', ['limit' => 200]);
    
        $this->set(compact('reference', 'client', 'societe', 'secteur', 'annee', 'pays', 'type'));
    }
    
/* public function add()
{
    $reference = $this->Reference->newEmptyEntity();

if ($this->request->is('post')) {
    // Handle file upload
    $uploadedFile = $this->request->getUploadedFile('logo');

    if ($uploadedFile && $uploadedFile->getError() === UPLOAD_ERR_OK) {
        // Generate a unique filename
        $filename = uniqid() . '-' . $uploadedFile->getClientFilename();

        // Move file to target directory
        $targetPath = WWW_ROOT . 'img' . DS . 'uploads' . DS . $filename;
        $uploadedFile->moveTo($targetPath);

        // Set the file path to the entity
        $reference->logo = 'uploads/' . $filename;
    }
    
    

    // Save the entity
    if ($this->Reference->save($reference)) {
        $this->Flash->success(__('The reference has been saved.'));
        return $this->redirect(['action' => 'index']);
    } else {
        $this->Flash->error(__('Unable to add the reference.'));
    }

    // Patch entity with form data
    $reference = $this->Reference->patchEntity($reference, $this->request->getData());
    
    

}
 */



    /**
     * Edit method
     *
     * @param string|null $id Reference id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $reference = $this->Reference->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $reference = $this->Reference->patchEntity($reference, $this->request->getData());
            if ($this->Reference->save($reference)) {
                $this->Flash->success(__('The reference has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The reference could not be saved. Please, try again.'));
        }
        
        // Fetch related data from other tables
        $client = $this->Reference->Client->find('list', ['limit' => 200]);
        $societe = $this->Reference->Societe->find('list', ['limit' => 200]);
        $secteur = $this->Reference->Secteur->find('list', ['limit' => 200]);
        $annee = $this->Reference->Annee->find('list', ['limit' => 200]);
        $pays = $this->Reference->Pays->find('list', ['limit' => 200]);
        $type = $this->Reference->Type->find('list', ['limit' => 200]);

        $this->set(compact('reference', 'client', 'societe', 'secteur', 'annee', 'pays', 'type'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Reference id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $reference = $this->Reference->get($id);
        if ($this->Reference->delete($reference)) {
            $this->Flash->success(__('The reference has been deleted.'));
        } else {
            $this->Flash->error(__('The reference could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
