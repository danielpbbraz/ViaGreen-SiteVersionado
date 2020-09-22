<?php
class ClippingController extends AppController {

    public $helpers = array ('Html','Form');
		
	function index() {
		$this->paginate = array(
			'limit' => Configure::read('tamanhoPaginacao')
		);
		$data = $this->paginate('Clipping');
        $this->set('dados',$data);
    }
	
	public function create() {
        if ($this->request->is('post')) {
			$nomeAleatorio = String::uuid();
			$arqTmp = $this->data['Clipping']['arquivo'];
			
			if($this->request->data['Clipping']['TipoArquivo'] == "0"){
				move_uploaded_file($arqTmp['tmp_name'], Configure::read('caminhoUpload').$nomeAleatorio.'.pdf');
				$this->request->data['Clipping']['pdf'] = $nomeAleatorio.'.pdf';
			} else {
				$this->request->data['Clipping']['imagem'] = $nomeAleatorio.".jpg";
				move_uploaded_file($arqTmp['tmp_name'],Configure::read('caminhoUpload').$arqTmp['name']);
				$this->_imgsave(Configure::read('caminhoUpload').$arqTmp['name'],$nomeAleatorio);
			}
			$this->request->data['Clipping']['status'] = true;
			$this->request->data['Clipping']['data'] = date("Y-m-d h:i:s");
            if ($this->Clipping->save($this->request->data)) {
                $this->Session->setFlash('Criado com sucesso');
                $this->redirect(array('action' => 'index'));
            }
        }
    }
	
	function details($id = null) {
		$this->Clipping->id = $id;
		$this->set('dados',$this->Clipping->read());
    }
	
	function delete($id = null) {
		if ($this->Clipping->delete($id)) {
			$this->Session->setFlash('Deletado com sucesso');
			$this->redirect(array('action' => 'index'));
		}
	}
	function edit($id = null) {
		$this->Clipping->id = $id;
		if ($this->request->is('get')) {
			$this->request->data = $this->Clipping->read();
		} else {
			if($this->data['Clipping']['arquivo']['tmp_name'] !=  null){
				$nomeAleatorio = String::uuid();
				$arqTmp = $this->data['Clipping']['arquivo'];
				if($this->request->data['Clipping']['TipoArquivo'] == "0"){
					move_uploaded_file($arqTmp['tmp_name'], Configure::read('caminhoUpload').$nomeAleatorio.'.pdf');
					$this->request->data['Clipping']['pdf'] = $nomeAleatorio.'.pdf';
					$this->request->data['Clipping']['imagem'] = null;
				} else {
					$this->request->data['Clipping']['imagem'] = $nomeAleatorio.".jpg";
					move_uploaded_file($arqTmp['tmp_name'],Configure::read('caminhoUpload').$arqTmp['name']);
					$this->request->data['Clipping']['pdf'] = null;
					$this->_imgsave(Configure::read('caminhoUpload').$arqTmp['name'],$nomeAleatorio);
				}
			}
			if ($this->Clipping->save($this->request->data)) {
				$this->Session->setFlash('Alterado com sucesso');
				$this->redirect(array('action' => 'index'));
			}
		}
	}
	function _imgsave($img, $nomeImg) {
		App::import('Vendor', 'PhpThumbFactory', array('file' => 'thumb/ThumbLib.inc.php'));
		$thumb = PhpThumbFactory::create($img);
		$thumb1 = PhpThumbFactory::create($img);
		
		$thumb->adaptiveResize(640, 480);
		$thumb->save(Configure::read('caminhoUpload')."g_".$nomeImg.".jpg",'jpg');
		
		$thumb1->adaptiveResize(116, 72);
		$thumb1->save(Configure::read('caminhoUpload')."p_".$nomeImg.".jpg",'jpg');
	}
}