<?php
declare(strict_types=1);

namespace App\Controller;
use CakePdf\Pdf\CakePdf;



/**
 * Reference Controller
 *
 * @property \App\Model\Table\ReferenceTable $Reference
 */
class ReferenceController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */

    public function index()
    {


         $query = $this->Reference->find()
        ->contain(['Client', 'Societe', 'Secteur', 'Annee', 'Pays', 'Type']);
    
        // Pass the query object to paginate()
        $reference = $this->paginate($query);

        $this->set(compact('reference')); 


// une méthode pour faire une recherche en utilisant une barre de recherche 

        /* $key = $this->request->getQuery('key');
        if($key){
            $query = $this->Reference->find('all', [
                'contain' => ['Client', 'Societe', 'Secteur', 'Annee', 'Pays', 'Type']
            ])->where(['OR' => [
                'Client.name LIKE' => '%' . $key . '%',
                'Societe.name LIKE' => '%' . $key . '%',
                'Secteur.name LIKE' => '%' . $key . '%',
                'Annee.name LIKE' => '%' . $key . '%',
                'Pays.name LIKE' => '%' . $key . '%',
                'Type.name LIKE' => '%' . $key . '%',
                'Reference.name LIKE' => '%' . $key . '%']
            ]);
        }else{
            $query=$this->Reference;
        }

        $reference = $this->paginate($query);
        $this->set(compact('reference')); */
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
                      


            $reference = $this->Reference->patchEntity($reference,$this->request->getData());
                   // Handle file upload
        $image = $this->request->getUploadedFile('logo');
       // debug($image);die;
        
        if ($image && $image->getError() === UPLOAD_ERR_OK) {
            $name = $image->getClientFilename();
    
            // Additional code to handle the uploaded file, such as moving it to a directory
            $targetPath = WWW_ROOT . 'img' . DS . 'uploads' . DS . $name;
            $image->moveTo($targetPath);
    
            // Save the filename to the reference entity
            $reference->logo = 'uploads' . DS . $name;
            
        } // debug($this->request->getData());//die;
          //  debug($reference);die;
         
            if ($this->Reference->save($reference)) {
                $this->Flash->success(__('The reference has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            //debug($reference->getErrors());die;
            $this->Flash->error(__('The reference could not be saved. Please, try again.'));
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

    /**
     * Edit method
     *
     * @param string|null $id Reference id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $reference = $this->Reference->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            
            $reference = $this->Reference->patchEntity($reference,$this->request->getData());
                   // Handle file upload
        $image = $this->request->getUploadedFile('logo');
       // debug($image);die;
        
        if ($image && $image->getError() === UPLOAD_ERR_OK) {
            $name = $image->getClientFilename();
    
            // Additional code to handle the uploaded file, such as moving it to a directory
            $targetPath = WWW_ROOT . 'img' . DS . 'uploads' . DS . $name;
            $image->moveTo($targetPath);
    
            // Save the filename to the reference entity
            $reference->logo = 'uploads' . DS . $name;
            
        } // debug($this->request->getData());//die;
          //  debug($reference);die;
         
            if ($this->Reference->save($reference)) {
                $this->Flash->success(__('The reference has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            //debug($reference->getErrors());die;
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

    // une méthode pour faire une état

    public function search()
{
    $query = $this->Reference->find('all', [
        'contain' => ['Client', 'Societe', 'Secteur', 'Annee', 'Pays', 'Type']
    ]);

    if ($this->request->is('post')) {
        $data = $this->request->getData();

        if (!empty($data['id_client'])) {
            $query->matching('Client', function ($q) use ($data) {
                return $q->where(['Client.id_client' => $data['id_client']]);
            });
        }

        if (!empty($data['id_societe'])) {
            $query->matching('Societe', function ($q) use ($data) {
                return $q->where(['Societe.id' => $data['id_societe']]);
            });
        }

        if (!empty($data['id_secteur'])) {
            $query->matching('Secteur', function ($q) use ($data) {
                return $q->where(['Secteur.id_secteur' => $data['id_secteur']]);
            });
        }

        if (!empty($data['id_annee'])) {
            $query->matching('Annee', function ($q) use ($data) {
                return $q->where(['Annee.id_annee' => $data['id_annee']]);
            });
        }

        if (!empty($data['id_pays'])) {
            $query->matching('Pays', function ($q) use ($data) {
                return $q->where(['Pays.id_pays' => $data['id_pays']]);
            });
        }

        if (!empty($data['id_type'])) {
            $query->matching('Type', function ($q) use ($data) {
                return $q->where(['Type.id_type' => $data['id_type']]);
            });
        }
    }

    $client = $this->Reference->Client->find('list', ['limit' => 200]);
    $societe = $this->Reference->Societe->find('list', ['limit' => 200]);
    $secteur = $this->Reference->Secteur->find('list', ['limit' => 200]);
    $annee = $this->Reference->Annee->find('list', ['limit' => 200]);
    $pays = $this->Reference->Pays->find('list', ['limit' => 200]);
    $type = $this->Reference->Type->find('list', ['limit' => 200]);

    $reference = $this->paginate($query);
    $hasData = !empty($reference);
    $this->set(compact('reference', 'client', 'societe', 'secteur', 'annee', 'pays', 'type'));
}

public function print()
{
    $this->request->allowMethod(['post']);

    $data = $this->request->getData('reference');

    if (empty($data)) {
        $this->Flash->error(__('No data to print.'));
        return $this->redirect(['action' => 'search']);
    }

    $reference = json_decode($data);

    $this->set('reference', $reference);

    $this->viewBuilder()
        ->enableAutoLayout(false)
        ->setClassName('CakePdf.Pdf')
        ->setOptions([
            'orientation' => 'portrait',
            'pageSize' => 'A4'
        ]);

    $this->render('print');
}




}
