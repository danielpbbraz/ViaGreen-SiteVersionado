<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />
	<?php echo $this->Html->charset(); ?>
	<title>ÓCSSO - Gestão de marcas <?php echo $title_for_layout; ?></title>
	<?php
		echo $this->Html->css('Reset');
		echo $this->Html->css('Tabelas');
		echo $this->Html->css('Validacoes');
		echo $this->Html->css('Formularios');
		echo $this->Html->css('Site');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
		
	?>
	<script src="http://www.viagreen.com.br/js/libs/modernizr-2.0.6.min.js"></script>
</head>
<body>
    <section id="pagina">
		<div id="container">
			<header>
				<h1>ÓCSSO - Gestão de marcas</h1>
				<ul id="menu-topo-minha-conta">
					<li><?php echo $this->Session->read('username'); ?></li>
					<li><?php echo $this->Html->link("Sair",array('controller'=>'users','action'=>'logout'));?></li>
				</ul>
				<div id="sistema-txt"></div>
			</header>
			<nav id="menu-topo">
				<ul>
					<li>
						<?php echo $this->Html->link("Clipping",array('controller'=>'clipping','action'=>'index'));?>
						<div class="sub-menu">
							<ul class="menu-aux">
								<li><?php echo $this->Html->link("Índice",array('controller'=>'clipping','action'=>'index'));?></li>
								<li><?php echo $this->Html->link("Criar",array('controller'=>'clipping','action'=>'create'));?></li>
							</ul>
						</div>
					</li>
					<li>
						<?php echo $this->Html->link("Imprensa",array('controller'=>'imprensa','action'=>'index'));?>
						<div class="sub-menu">
							<ul class="menu-aux">
								<li><?php echo $this->Html->link("Índice",array('controller'=>'imprensa','action'=>'index'));?></li>
								<li><?php echo $this->Html->link("Criar",array('controller'=>'imprensa','action'=>'create'));?></li>
							</ul>
						</div>
					</li>
					<li>
						<?php echo $this->Html->link("Foto",array('controller'=>'foto','action'=>'index'));?>
						<div class="sub-menu">
							<ul class="menu-aux">
								<li><?php echo $this->Html->link("Índice",array('controller'=>'foto','action'=>'index'));?></li>
								<li><?php echo $this->Html->link("Criar",array('controller'=>'foto','action'=>'create'));?></li>
							</ul>
						</div>
					</li>
					<li>
						<?php echo $this->Html->link("Usuários",array('controller'=>'users','action'=>'index'));?>
						<div class="sub-menu">
							<ul class="menu-aux">
								<li><?php echo $this->Html->link("Índice",array('controller'=>'users','action'=>'index'));?></li>
								<li><?php echo $this->Html->link("Criar",array('controller'=>'users','action'=>'create'));?></li>
							</ul>
						</div>
					</li>
				</ul>
			</nav>
			<section id="conteudo">
				<?php echo $this->Session->flash(); ?>
				<?php echo $this->fetch('content'); ?>
			</section>
			<footer>
				<p>ÓCSSO - Gestão de marcas - <?php echo date("d/m/Y"); ?></p>
			</footer>
		</div>
	</section>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>