<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width" />
    <title>ÓCSSO - Gestão de marcas</title>
	<?php
		echo $this->Html->css('Reset');
		echo $this->Html->css('Validacoes');
		echo $this->Html->css('Login');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
		
		echo $this->Html->script('modernizr');
	?>
	<script src="http://www.viagreen.com.br/js/libs/modernizr-2.0.6.min.js"></script>
</head>
<body>
    <h1>ÓCSSO - Gestão de marcas</h1>
    <section id="area-login">
<?php echo $this->Session->flash('auth'); ?>
<?php echo $this->Form->create('User', array(
			'inputDefaults' => array(
				'label' => false,
				'div' => false
			)
		));?>
    <fieldset>
		
			<?php echo $this->Session->flash(); ?>
		<label>E-mail</label>
        <?php echo $this->Form->input('username');
		?>
		<label>Senha</label>
        <?php echo $this->Form->input('password');
    ?>
    </fieldset>
<?php echo $this->Form->end(__('Login')); ?>

	<?php //echo phpinfo(); ?>
	</section>
</body>
</html>