<?php
class ImprensaController extends AppController {
    public $helpers = array ('Html','Form');
		
	function index() {
		$this->paginate = array(
			'limit' => Configure::read('tamanhoPaginacao')
		);
		$data = $this->paginate('Imprensa');
        $this->set('dados',$data);
    }
	
	public function create() {
        if ($this->request->is('post')) {
			$nomeAleatorio = String::uuid();
			$arqTmp = $this->data['Imprensa']['arquivo'];
			$this->request->data['Imprensa']['imagem'] = $nomeAleatorio.".jpg";
			move_uploaded_file($arqTmp['tmp_name'],Configure::read('caminhoUpload').$arqTmp['name']);
			$this->_imgsave(Configure::read('caminhoUpload').$arqTmp['name'],$nomeAleatorio);
			$this->request->data['Imprensa']['status'] = true;
			$this->request->data['Imprensa']['data'] = date("Y-m-d h:i:s");
            if ($this->Imprensa->save($this->request->data)) {
                $this->Session->setFlash('Criado com sucesso');
                $this->redirect(array('action' => 'index'));
            }
        }
    }
	
	function details($id = null) {
		$this->Imprensa->id = $id;
		$this->set('dados',$this->Imprensa->read());
    }
	
	function delete($id = null) {
		if ($this->Imprensa->delete($id)) {
			$this->Session->setFlash('Deletado com sucesso');
			$this->redirect(array('action' => 'index'));
		}
	}
	function edit($id = null) {
		$this->Imprensa->id = $id;
		if ($this->request->is('get')) {
			$this->request->data = $this->Imprensa->read();
		} else {
			if($this->data['Imprensa']['arquivo']['tmp_name'] !=  null){
				$nomeAleatorio = String::uuid();
				$arqTmp = $this->data['Imprensa']['arquivo'];
				$this->request->data['Imprensa']['imagem'] = $nomeAleatorio.".jpg";
				move_uploaded_file($arqTmp['tmp_name'],Configure::read('caminhoUpload').$arqTmp['name']);
				$this->request->data['Imprensa']['pdf'] = null;
				$this->_imgsave(Configure::read('caminhoUpload').$arqTmp['name'],$nomeAleatorio);
			}
			if ($this->Imprensa->save($this->request->data)) {
				$this->Session->setFlash('Alterado com sucesso');
				$this->redirect(array('action' => 'index'));
			}
		}
	}
	function _imgsave($img, $nomeImg) {
		App::import('Vendor', 'PhpThumbFactory', array('file' => 'thumb/ThumbLib.inc.php'));
		$thumb = PhpThumbFactory::create($img);
		
		$thumb->adaptiveResize(178, 178);
		$thumb->save(Configure::read('caminhoUpload')."imprensa_".$nomeImg.".jpg",'jpg');
	}
}