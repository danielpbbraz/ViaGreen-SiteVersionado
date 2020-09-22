<h2>Editar</h2>
<?php echo $this->Form->create('User'); ?>
    <fieldset>
        <?php echo $this->Form->input('username', array('label' => 'E-mail'));
    ?>
	<div class="input password required"><label for="UserPassword">Senha</label><input name="data[User][password]" type="password" value="" id="UserPassword" required="required"></div>
    </fieldset>
<?php echo $this->Form->end("Editar"); ?>