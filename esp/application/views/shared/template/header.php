<header id="header">
	<div class="center">
		<div class="box-access" data-ani-type="fade-bottom" data-ani-delay=".1">
			<div class="box-query-certificate">
				<a href="">ACESSO CERTIFICADO</a>
				<form action="home/acesso" method="post" target="_blank">
					<label>
						<span>Consulta ECOEMISSION</span>
						<input type="text" name="value" placeholder="Nº" class="field-form" required>
					</label>
					<input type="hidden" name="type" value="ecomission">
					<input type="submit" value="" class="btn-send">
				</form>
			</div>
			<div class="box-vgp-accerss">
				<a href="">ACCESO AL VGP</a>
				<form action="home/acesso" method="post" target="_blank">
					<label>
						<span>ACCESO AL VGP</span>
						<input type="text" name="value" placeholder="Empresa" class="field-form" required>
					</label>
					<!--<label>
						<input type="password" name="password" placeholder="senha" class="field-form">
					</label>-->
					<input type="hidden" name="type" value="vgp">
					<input type="submit" value="" class="btn-send">
				</form>
			</div>
			<?php if(false): ?>
				<div id="google_translate_element" style="float: right;
				overflow: hidden;
				position: absolute;
				right: 0;
				top: -14px;"></div><script type="text/javascript">
				function googleTranslateElementInit() {
					new google.translate.TranslateElement({pageLanguage: 'pt', includedLanguages: 'en,es,pt'}, 'google_translate_element');
				}
			</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
		<?php endif ?>
		<ul class="languages">
			<li><a href="http://www.viagreen.org.br" class="btn-portuguese">Português</a></li>
			<li><a href="http://www.viagreen.org.br/eng" class="btn-english" style="cursor: default;">Inglês</a></li>
			<li><a href="http://www.viagreen.org.br/esp" class="btn-spanish" style="cursor: default;">Espanhol</a></li>
		</ul>
	</div>
	<a href="home" class="logo-viagreen" data-ani-type="fade-bottom" data-ani-delay=".1"><h1>Via Green - Institute</h1></a>
	<div class="box-menu-mobile">
		<button class="c-hamburger c-hamburger--htx menu-mobile">
			<span>menu</span>
		</button>
	</div>
	<nav id="menu" data-ani-type="fade-bottom" data-ani-delay=".1">
		<ul class="dropdown">
			<li><a href="home" class="lnk-start">INICIO</a></li>
			<li>
				<a href="javascript:void(0);" class="lk-sub lnk-company">EL INSTITUTO</a>
				<ul>
					<li><a href="empresa/viagreen">QUINES SOMOS</a></li>
					<li><a href="empresa/nossamarca">NUESTRA MARCA</a></li>
                    <li><a href="produtos/governanca">GOBERNANZA</a></li>
				</ul>
			</li>
			<li>
				<a href="javascript:void(0);" class="lk-sub lnk-products">INICIATIVAS</a>
				<ul>
					<li><a href="produtos/vgp">VGP</a></li>
					<li><a href="produtos/eco-emission">EcoEmission</a></li>
					<li><a href="produtos/consultoria">CONSULTORÍA</a></li>
				</ul>
			</li>
			<li><a href="contato" class="lnk-contact">CONTACTO</a></li>
		</ul>
	</nav>
</div>
</header>
