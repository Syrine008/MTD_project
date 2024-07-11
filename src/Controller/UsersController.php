<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 */
class UsersController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Users->find();
        $users = $this->paginate($query);

        $this->set(compact('users'));
    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $user = $this->Users->get($id, contain: []);
        $this->set(compact('user'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $user = $this->Users->newEmptyEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $this->set(compact('user'));
    }

    public function login()
    {
        $result = $this->Authentication->getResult();
    
        // If the user is already logged in, redirect them to another page (e.g., Reference index).
        if ($result->isValid()) {
            return $this->redirect(['controller' => 'Reference', 'action' => 'index']);
        }
    
        // If it's a POST request and login credentials are invalid, show an error message.
        if ($this->request->is('post') && !$result->isValid()) {
            $this->Flash->error('Invalid username or password');
        }
    
        // Set the logged-in user's identity to the view.
        $this->set('user', $this->Authentication->getIdentity());
    }
    
public function beforeFilter(\Cake\Event\EventInterface $event)
{
    parent::beforeFilter($event);

    $this->Authentication->allowUnauthenticated(['login']);
}

public function logout()
{
    $this->Authentication->logout();
    return $this->redirect(['controller' => 'Users', 'action' => 'login']);
}

public function signup()
    {
        $user = $this->Users->newEmptyEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $this->set(compact('user'));
    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $user = $this->Users->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $this->set(compact('user'));
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }


    public function forgotpassword()
{
if ($this->request->is('post')) {
		$email = $this->request->getData('email');
		$token = Security::hash(Security::randomBytes(25));
		
		$userTable = TableRegistry::get('Users');
			if ($email == NULL) {
				$this->Flash->error(__('Please insert your email address')); 
			} 
			if	($user = $userTable->find('all')->where(['email'=>$email])->first()) { 
				$user->token = $token;
				if ($userTable->save($user)){
					$mailer = new Mailer('default');
					$mailer->setTransport('smtp');
					$mailer->setFrom(['noreply[at]codethepixel.com' => 'myCake4'])
					->setTo($email)
					->setEmailFormat('html')
					->setSubject('Forgot Password Request')
					->deliver('Hello<br/>Please click link below to reset your password<br/><br/><a href="http://localhost/myCake4/users/resetpassword/'.$token.'">Reset Password</a>');
				}
				$this->Flash->success('Reset password link has been sent to your email ('.$email.'), please check your email');
			}
			if	($total = $userTable->find('all')->where(['email'=>$email])->count()==0) {
				$this->Flash->error(__('Email is not registered in system'));
			}
	}
}

public function resetpassword($token)
{
	if($this->request->is('post')){
		$hasher = new DefaultPasswordHasher();
		$newPass = $hasher->hash($this->request->getData('password'));

		$userTable = TableRegistry::get('Users');
		$user = $userTable->find('all')->where(['token'=>$token])->first();
		$user->password = $newPass;
		if ($userTable->save($user)) {
			$this->Flash->success('Password successfully reset. Please login using your new password');
			return $this->redirect(['action'=>'login']);
		}
	}
}

}
