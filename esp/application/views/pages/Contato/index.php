<main>
	<div class="banner banner-internal-top pag-banner">
		<figure></figure>
		<img src="media/img/banner-fake.gif">
		<div class="center">
			<h1 data-ani-type="fade-top" data-ani-delay=".2">ContaCto</h1>
		</div>
	</div>
	<section id="section-contact" class="center">
		<?php if($success = Session::instance()->get_once('success', FALSE)): ?>
	    	<div class="alert alert-success" data-ani-type="fade-top" data-ani-delay=".2"><?php echo $success ?></div>
	    <?php endif ?>
		<div class="form" data-ani-type="fade-top" data-ani-delay=".2">
			<form id="form-contact" method="post">
				<label>
					<input type="text" name="name" required="required" placeholder="Nombre">
				</label>
				<label>
					<input type="email" name="email" required="required" placeholder="CORREO ELECTRÓNICO">
				</label>
				<label>
					<input type="text" name="tel" required="required" placeholder="Tel.">
				</label>
				<label>
					<textarea name="message" required="required" placeholder="MENSAJE"></textarea>
				</label>
				<button type="submit">Enviar</button>
			</form>
		</div>
		<div class="map" data-ani-type="fade-top" data-ani-delay=".2">
			<img src="media/img/map.png">
			<a href="https://maps.google.com/maps?ll=-23.936803,-46.321859&z=16&t=m&hl=pt-BR&gl=BR&mapclient=embed&q=R.%20Amador%20Bueno%2C%20333%20-%20Centro%20Santos%20-%20SP%2011013-151" class="lk-external-map" target="_blank">ABRIR EN GOOGLE MAPS</a>
			<address>
				<p class="address" data-ani-type="fade-top" data-ani-delay=".2">
					Rua Amador Bueno 333, conj. 615<br>
					Centro – Santos /SP – Brasil<br>
					Código Postal: 11013-153
				</p>
				<p class="tel" data-ani-type="fade-top" data-ani-delay=".2">
					<a href="tel:+551330610656">+55 13 3061.0656</a><br>
					<a href="mailto:contato@viagreen.org.br">contato@viagreen.org.br</a>
				</p>
			</address>
		</div>
	</section>
	<section class="work">
		<div class="center">
			<h2 data-ani-type="fade-top" data-ani-delay=".2">TRABAJE CON NOSOTROS</h2>
			<div class="email" data-ani-type="fade-top" data-ani-delay=".2">
				<p class="light">SEA PARTE DE NUESTRO EQUIPO.</p>
				<p class="txt-send">Envíe su currículo para <a href="mailto:trabalhe@viagreen.org.br">trabalhe@viagreen.org.br</a></p>
			</div>
		</div>
	</section>
</main>