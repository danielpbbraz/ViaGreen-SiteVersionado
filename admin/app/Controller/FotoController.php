<?php
class FotoController extends AppController {
	public $helpers = array ('Html','Form');
		
	function index() {
		$this->paginate = array(
			'limit' => Configure::read('tamanhoPaginacao')
		);
		$data = $this->paginate('Foto');
        $this->set('dados',$data);
    }
	
	public function create() {
        if ($this->request->is('post')) {
			$nomeAleatorio = String::uuid();
			$arqTmp = $this->data['Foto']['arquivo'];
			
			$this->request->data['Foto']['imagem'] = $nomeAleatorio.".jpg";
			move_uploaded_file($arqTmp['tmp_name'],Configure::read('caminhoUpload').$arqTmp['name']);
			$this->_imgsave(Configure::read('caminhoUpload').$arqTmp['name'],$nomeAleatorio);
			
			$this->request->data['Foto']['status'] = true;
			$this->request->data['Foto']['data'] = date("Y-m-d h:i:s");
            if ($this->Foto->save($this->request->data)) {
                $this->Session->setFlash('Criado com sucesso');
                $this->redirect(array('action' => 'index'));
            }
        }
    }
	
	function details($id = null) {
		$this->Foto->id = $id;
		$this->set('dados',$this->Foto->read());
    }
	
	function delete($id = null) {
		if ($this->Foto->delete($id)) {
			$this->Session->setFlash('Deletado com sucesso');
			$this->redirect(array('action' => 'index'));
		}
	}
	function edit($id = null) {
		$this->Foto->id = $id;
		if ($this->request->is('get')) {
			$this->request->data = $this->Foto->read();
		} else {
			if($this->data['Foto']['arquivo']['tmp_name'] !=  null){
				$nomeAleatorio = String::uuid();
				$arqTmp = $this->data['Foto']['arquivo'];
				$this->request->data['Foto']['imagem'] = $nomeAleatorio.".jpg";
				move_uploaded_file($arqTmp['tmp_name'],Configure::read('caminhoUpload').$arqTmp['name']);
				$this->_imgsave(Configure::read('caminhoUpload').$arqTmp['name'],$nomeAleatorio);
			}
			if ($this->Foto->save($this->request->data)) {
				$this->Session->setFlash('Alterado com sucesso');
				$this->redirect(array('action' => 'index'));
			}
		}
	}
	function _imgsave($img, $nomeImg) {
		App::import('Vendor', 'PhpThumbFactory', array('file' => 'thumb/ThumbLib.inc.php'));
		$thumb = PhpThumbFactory::create($img);
		$thumb1 = PhpThumbFactory::create($img);
		
		$thumb->resize(700,420);
		$thumb->save(Configure::read('caminhoUpload')."g_".$nomeImg.".jpg",'jpg');
		
		$thumb1->adaptiveResize(58, 36);
		$thumb1->save(Configure::read('caminhoUpload')."p_".$nomeImg.".jpg",'jpg');
	}
}