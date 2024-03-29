<?php
	$action = strtolower(Request::current()->action());
?>
<nav id="menu-lateral">
	<div class="box-menu-produtos-mobile">
		<button class="c-hamburger c-hamburger--htx">
			<span>menu</span>
		</button>
		<span class="txt">Menu</span>
	</div>
	<a href="" class="btn"><span></span>MENU</a>
	<div class="middle">
		<ul>
			<li><a href="produtos/ecofreight" <?php echo $action == 'ecofreight' ? 'class="active"' : ''; ?>>ECOFREIGHT</a></li>
			<li><a href="produtos/ecorotas" <?php echo $action == 'ecorotas' ? 'class="active"' : ''; ?>>ECOROTAS</a></li>
			<li><a href="produtos/ecoflight" <?php echo $action == 'ecoflight' ? 'class="active"' : ''; ?>>ECOFLIGHT</a></li>
		</ul>

		<ul>
			<li><a href="produtos/calculadora" <?php echo $action == 'calculadora' ? 'class="active"' : ''; ?>>CALCULATOR</a></li>
			<li><a href="produtos/compensacao" <?php echo $action == 'compensacao' ? 'class="active"' : ''; ?>>CARBON COMPENSATION</a></li>
			<li><a href="produtos/projetos" <?php echo $action == 'projetos' ? 'class="active"' : ''; ?>>PROJECTS</a></li>
			<li><a href="produtos/plantio_de_arvores" <?php echo $action == 'plantio_de_arvores' ? 'class="active"' : ''; ?>>TREE PLANTING</a></li>
			<li><a href="produtos/ecommerce" <?php echo $action == 'ecommerce' ? 'class="active"' : ''; ?>>E-COMMERCE</a></li>
			<li><a href="produtos/mudancas" <?php echo $action == 'mudancas' ? 'class="active"' : ''; ?>>CLIMATE CHANGES</a></li>
		</ul>
	</div>
</nav>