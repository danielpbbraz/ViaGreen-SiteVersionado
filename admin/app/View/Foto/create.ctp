<h2>Criar</h2>
<?php
echo $this->Form->create('Foto', array('type'=>'file'));
echo $this->Form->input('arquivo', array('type'=>'file'));
echo $this->Form->end('Criar');