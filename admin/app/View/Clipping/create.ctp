<h2>Criar</h2>
<?php
echo $this->Form->create('Clipping', array('type'=>'file'));
echo $this->Form->input('titulo');
echo $this->Form->input('TipoArquivo', array(
    'options' => array('pdf','imagem'),
    'empty' => 'Selecione'
));
echo $this->Form->input('arquivo', array('type'=>'file'));
echo $this->Form->end('Criar');