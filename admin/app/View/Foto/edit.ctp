<h2>Alterar Foto</h2>
<?php
echo $this->Form->create('Foto', array('type'=>'file'));
echo $this->Form->input('status', array('type'=>'checkbox','checked'=>$this->request->data['Foto']['status']));
echo "<p>Imagem: <br /><img src=".Configure::read('caminhoImage')."p_".$this->request->data['Foto']['imagem']."></p>";
echo $this->Form->input('arquivo', array('type'=>'file'));
echo $this->Form->input('id', array('type' => 'hidden'));
echo $this->Form->end('Alterar');