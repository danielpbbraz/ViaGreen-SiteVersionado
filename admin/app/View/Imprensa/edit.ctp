<h2>Alterar Clipping</h2>
<?php
echo $this->Form->create('Imprensa', array('type'=>'file'));
echo $this->Form->input('titulo');
echo "<label>Texto</label>";
echo $this->Form->textarea('texto');
echo $this->Form->input('status', array('type'=>'checkbox','checked'=>$this->request->data['Imprensa']['status']));
echo $this->Form->input('arquivo', array('type'=>'file'));
echo $this->Form->input('id', array('type' => 'hidden'));
echo $this->Form->end('Alterar');