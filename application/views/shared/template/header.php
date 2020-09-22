<header id="header">
	
	<div class="center">
		<div class="box-access" data-ani-type="fade-bottom" data-ani-delay=".1">
			<div class="box-query-certificate">
				<a href="">ACESSO CERTIFICADO</a>
				<form action="home/acesso" method="post" target="_blank">
					<label>
						<span>CONSULTA DE CERTIFICADO</span>
						<input type="text" name="value" placeholder="Nº" class="field-form" required>
					</label>
					<input type="hidden" name="type" value="ecomission">
					<input type="submit" value="" class="btn-send">
				</form>
			</div>
			<div class="box-vgp-accerss">
				<a href="">ACESSO VGP</a>
				<form action="home/acesso" method="post" target="_blank">
					<label>
						<span>Acesso ao VGP</span>
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
			<li><a href="home" class="lnk-start">Início</a></li>
			<li>
				<a href="javascript:void(0);" class="lk-sub lnk-company">O instituto</a>
				<ul>
					<li><a href="empresa/viagreen">Quem somos</a></li>
					<li><a href="empresa/transparencia">transparência</a></li>
                    <li><a href="produtos/governanca">Governança</a></li>
				</ul>
			</li>
			<li>
				<a href="javascript:void(0);" class="lk-sub lnk-products">INICIATIVAS</a>
				<ul>
					<li><a href="produtos/vgp">VGP</a></li>
					<li><a href="produtos/apoio_tec">Apoio técnico ambiental</a></li>
					<li><a href="produtos/compensacao">Compensação de carbono</a></li>
					<li><a href="produtos/ecoevent">EcoEvent</a></li>
					<li><a href="produtos/recuperacao">Recuperação de Áreas Degradadas</a></li>
					<li><a href="produtos/log_sust">Logistica sustentável</a></li>
				</ul>
				
			</li>


			<li>
				<a href="javascript:void(0);" class="lk-sub lnk-doacao">COLABORE</a>
				<ul>
					<li><a href="colabore/doacao">Doações</a></li>
					<li><a href="colabore/sejavoluntario">Voluntário</a></li>
					
				</ul>
				
			</li>
			<li><a href="contato" class="lnk-contact">Contato</a></li>
		</ul>
	</nav>
</div>
</header>
