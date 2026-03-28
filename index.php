<?php
/**
 * Main template file.
 *
 * @package ShaSitter_Theme
 */

get_header();
?>

<main>
	<header class="hero section">
		<div class="container">
			<div class="hero-card p-4 p-md-5">
				<div class="row align-items-center g-4">
					<div class="col-lg-7">
						<p class="eyebrow mb-2">Cat sitter premium · Genève</p>
						<h1 class="display-5 mb-3">Je prends soin de votre chat comme du mien. <span class="signature-moon" aria-hidden="true">🌙</span></h1>
						<p class="lead text-secondary mb-4">
							Visites à domicile, soins attentifs, nouvelles quotidiennes et approche douce pour rassurer votre compagnon (et vous).
						</p>
						<div class="d-flex flex-wrap gap-2">
							<a class="btn btn-brand btn-lg" href="https://wa.me/41000000000" target="_blank" rel="noreferrer noopener">WhatsApp</a>
							<a class="btn btn-outline-dark btn-lg" href="https://instagram.com" target="_blank" rel="noreferrer noopener">Instagram</a>
						</div>
					</div>
					<div class="col-lg-5">
						<div class="soft-card p-4 h-100">
							<h2 class="h3 mb-3">Pourquoi ShaSitter ?</h2>
							<ul class="mb-0 ps-3">
								<li class="mb-2">Approche humaine, calme et bienveillante.</li>
								<li class="mb-2">Routine respectée selon les besoins de votre chat.</li>
								<li>Nouvelles quotidiennes avec photos/vidéos.</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<section class="section" id="a-propos">
		<div class="container">
			<h2 class="section-title">À propos de Shana</h2>
			<div class="soft-card p-4 p-md-5">
				<p class="mb-0">
					Shana accompagne les familles qui veulent le meilleur pour leur chat pendant leurs absences. Son objectif : une présence fiable, rassurante et chaleureuse.
					<span class="paw" aria-hidden="true">🐾</span>
				</p>
			</div>
		</div>
	</section>

	<section class="section section-soft" id="services">
		<div class="container">
			<h2 class="section-title">Services</h2>
			<div class="row g-3">
				<div class="col-md-4">
					<div class="soft-card p-4 h-100">
						<h3 class="h4">Visites à domicile</h3>
						<p class="mb-0 text-secondary">Passages ponctuels ou réguliers adaptés au rythme de votre chat.</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="soft-card p-4 h-100">
						<h3 class="h4">Soins & confort</h3>
						<p class="mb-0 text-secondary">Nourriture, eau, litière, jeux, câlins et soins légers selon vos consignes.</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="soft-card p-4 h-100">
						<h3 class="h4">Nouvelles quotidiennes</h3>
						<p class="mb-0 text-secondary">Compte-rendu journalier avec photos pour une tranquillité totale.</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="section" id="animaux">
		<div class="container">
			<div class="d-flex justify-content-between align-items-center mb-4 flex-wrap gap-2">
				<h2 class="section-title mb-0">Les petits protégés</h2>
				<a href="https://instagram.com" target="_blank" rel="noreferrer noopener" class="btn btn-outline-dark">Voir Instagram</a>
			</div>
			<div class="row g-3">
				<div class="col-md-4">
					<article class="soft-card p-4 h-100">
						<div class="animal-avatar mb-3" aria-hidden="true">🐱</div>
						<h3 class="h4 mb-1">Milo</h3>
						<p class="text-secondary mb-0">Très joueur, aime les routines du soir et les petites sessions câlins.</p>
					</article>
				</div>
				<div class="col-md-4">
					<article class="soft-card p-4 h-100">
						<div class="animal-avatar mb-3" aria-hidden="true">🐈</div>
						<h3 class="h4 mb-1">Luna</h3>
						<p class="text-secondary mb-0">Timide au départ, puis très affectueuse après quelques visites.</p>
					</article>
				</div>
				<div class="col-md-4">
					<article class="soft-card p-4 h-100">
						<div class="animal-avatar mb-3" aria-hidden="true">🐾</div>
						<h3 class="h4 mb-1">Nori</h3>
						<p class="text-secondary mb-0">Curieuse et sensible, besoin d'une présence calme et régulière.</p>
					</article>
				</div>
			</div>
		</div>
	</section>

	<section class="section section-soft" id="avis">
		<div class="container">
			<h2 class="section-title">Avis clients</h2>
			<div class="soft-card p-4 p-md-5">
				<p class="mb-2"><span class="star" aria-hidden="true">★★★★★</span> 4.9/5 sur Google</p>
				<p class="text-secondary mb-3">« Shana est adorable, fiable et notre chat est apaisé à chaque absence. »</p>
				<a class="btn btn-outline-dark" href="#" aria-label="Voir tous les avis Google">Voir tous les avis</a>
				<p class="small small-note mt-3 mb-0">Intégration TrustReviews prête à connecter ici.</p>
			</div>
		</div>
	</section>

	<section id="contact" class="section">
		<div class="container">
			<div class="contact-wrap p-4 p-md-5">
				<h2 class="section-title text-white">Contact rapide</h2>
				<p class="mb-4">Un message, une réponse rapide, zéro friction. <span aria-hidden="true">✨</span></p>
				<div class="d-flex flex-wrap gap-2">
					<a class="btn btn-light btn-lg" href="https://wa.me/41000000000" target="_blank" rel="noreferrer noopener">WhatsApp direct</a>
					<a class="btn btn-outline-light btn-lg" href="https://instagram.com" target="_blank" rel="noreferrer noopener">Instagram direct</a>
				</div>
			</div>
		</div>
	</section>
</main>

<?php
get_footer();
