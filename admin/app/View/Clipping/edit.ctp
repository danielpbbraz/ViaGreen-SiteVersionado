<h2>Alterar Clipping</h2>
<?php
echo $this->Form->create('Clipping', array('type'=>'file'));
echo $this->Form->input('titulo');
echo $this->Form->input('TipoArquivo', array(
    'options' => array('pdf','imagem'),
    'empty' => 'Selecione'
));
echo $this->Form->input('status', array('type'=>'checkbox','checked'=>$this->request->data['Clipping']['status']));
echo $this->Form->input('arquivo', array('type'=>'file'));
echo $this->Form->input('id', array('type' => 'hidden'));
echo $this->Form->end('Alterar');