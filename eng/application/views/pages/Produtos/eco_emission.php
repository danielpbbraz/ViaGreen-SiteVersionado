<?php
//video youtube
$video_id = 'EcsxUfiAXe8';
?>
<main>
<?php echo View::factory('shared/partial/menu-prods') ?>
	<div class="banner banner-internal-top pag-banner" data-ani-type="fade-top" data-ani-delay=".2">
		<div class="bg">
			<figure></figure>
		</div>
		<h1 data-ani-type="fade-top" data-ani-delay=".2">Eco Emission</h1>
		<div class="center">
			<div class="embed-container" data-ani-type="fade-top" data-ani-delay=".2">
				<iframe width="640" height="360" src="https://www.youtube.com/embed/<?php echo $video_id; ?>?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
			</div>
		</div>
	</div>
	<section class="content">
		<div class="embed-container" data-ani-type="fade-top" data-ani-delay=".2">
			<iframe width="640" height="360" src="https://www.youtube.com/embed/<?php echo $video_id; ?>?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
		</div>
		<div class="center">
			<p data-ani-type="fade-top" data-ani-delay=".2">The increase of Greenhouse Gases emission into the atmosphere has been causing the rise of the Earth's temperature and resulting imbalance climate. ECOEMISSION concept conceived by Via Green Institute, through of ECOFREIGHT, ECOROTAS and ECOFLIGHT seals, which consist of calculating and offsetting GHG emissions from transport sector.</p>

			<p data-ani-type="fade-top" data-ani-delay=".2">The awareness about relevance of the <strong><a href="produtos/mudancas" style="color:#3CC";>Climate Change </a></strong> provides an opportunity for organizations to support and foster environmental projects that reduce and avoid CO<span class="sub">2</span>emissions around the world.</p>

			<ul data-ani-type="fade-top" data-ani-delay=".2">
				<li>
					<a href="produtos/ecofreight">
						<h2 class="icon-eco-freight">Eco Freight</h2>
						<p>Freight transport </p>
						<span class="know-more">LEARN MORE +</span>
					</a>
				</li>
				<li>
					<a href="produtos/ecorotas">
						<h2 class="icon-eco-rotas">Eco Rotas</h2>
						<p>Passenger transport </p>
						<span class="know-more">LEARN MORE +</span>
					</a>
				</li>
				<li>
					<a href="produtos/ecoflight">
						<h2 class="icon-eco-flight">Eco Flight</h2>
						<p>Airline tickets</p>
						<span class="know-more">LEARN MORE +</span>
					</a>
				</li>
			</ul>
		</div>
	</section>
</main>