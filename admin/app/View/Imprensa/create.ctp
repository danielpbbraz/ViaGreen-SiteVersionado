<h2>Criar</h2>
<?php
echo $this->Form->create('Imprensa', array('type'=>'file'));
echo $this->Form->input('titulo');
echo "<label>Texto</label>";
echo $this->Form->textarea('texto');
echo $this->Form->input('arquivo', array('type'=>'file'));
echo $this->Form->end('Criar');