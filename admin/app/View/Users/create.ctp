<h2>Criar</h2>
<?php echo $this->Form->create('User'); ?>
    <fieldset>
        <?php echo $this->Form->input('username', array('label' => 'E-mail'));
        echo $this->Form->input('password', array('label' => 'Senha'));
    ?>
    </fieldset>
<?php echo $this->Form->end("Criar"); ?>