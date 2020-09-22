<?php
class UsersController extends AppController {

	
	public function login() {
		 $this->layout = null;
		if ($this->request->is('post')) {
			if ($this->Auth->login()) {
				$this->Session->write('username',$this->request->data["User"]['username']);
				$this->redirect($this->Auth->redirect());
			} else {
				$this->Session->setFlash(__('<div class="validation-summary-errors">E-mail ou senha inválidos</div>'));
			}
		}
	}
	
	public function logout() {
		$this->Session->delete('username');
		$this->redirect($this->Auth->logout());
}
    public function index() {
        $this->paginate = array(
			'limit' => Configure::read('tamanhoPaginacao')
		);
		$data = $this->paginate('User');
        $this->set('dados',$data);
    }

    public function details($id = null) {
        $this->User->id = $id;
		$this->set('dados',$this->User->read());
    }

    public function create() {
        if ($this->request->is('post')) {
			$userExist = $this->User->find('all', array(
			  'conditions' => array('username' => $this->request->data["User"]['username']),
			))==null?false:true;
			if (!$userExist) {
				$this->request->data["User"]['role'] = "admin";
				$this->User->create();
				if ($this->User->save($this->request->data)) {
					$this->Session->setFlash(__('Criado com sucesso'));
					$this->redirect(array('action' => 'index'));
					//print_r($this->request->data);
				} else {
					$this->Session->setFlash(__('Não foi possível criar o usuário'));
				}
			}else {
				$this->Session->setFlash(__('O usuário já estra cadastrado'));
			}
        }
    }

    public function edit($id = null) {
        $this->User->id = $id;
		if ($this->request->is('get')) {
			$this->request->data = $this->User->read();
		} else {
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash('Alterado com sucesso');
				$this->redirect(array('action' => 'index'));
			}
		}
    }

    public function delete($id = null) {
        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('Invalid user'));
        }
        if ($this->User->delete()) {
            $this->Session->setFlash(__('Deletado com sucesso'));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('User was not deleted'));
        $this->redirect(array('action' => 'index'));
    }
}