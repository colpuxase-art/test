<?php
/**
 * Page d'accueil du thème Shasitter.
 *
 * @package Shasitter
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>
<main id="primary" class="site-main">
	<section class="section hero">
		<div class="section__inner grid hero-grid">
			<div class="hero-copy">
				<span class="quick-reply">🐾 Réponse rapide · En moyenne sous 1h</span>
				<h1 class="section-title">Une présence douce et fiable pour votre chat, même quand vous êtes loin.</h1>
				<p>Shana prend soin de votre compagnon à domicile avec une approche attentive, rassurante et premium, pour votre sérénité au quotidien.</p>
				<div class="actions">
					<a class="btn btn-primary" href="https://wa.me/33600000000?text=Bonjour%20Shana%2C%20je%20cherche%20une%20cat%20sitter%20pour%20mon%20chat%20%F0%9F%90%B1" target="_blank" rel="noopener noreferrer">💬 WhatsApp</a>
					<a class="btn btn-secondary" href="https://instagram.com/shasitter" target="_blank" rel="noopener noreferrer">📷 Instagram</a>
				</div>
			</div>
			<div class="image-frame">
				<!-- MODIFIER ICI -->
				<img src="https://images.unsplash.com/photo-1573865526739-10659fec78a5?auto=format&fit=crop&w=1200&q=80" alt="Chat détendu sur un coussin confortable">
			</div>
		</div>
	</section>

	<section id="a-propos" class="section section-alt">
		<div class="section__inner grid about-grid">
			<div class="image-frame">
				<!-- MODIFIER ICI -->
				<img src="https://images.unsplash.com/photo-1583337130417-3346a1be7dee?auto=format&fit=crop&w=1200&q=80" alt="Shana en train de câliner un chat">
			</div>
			<div>
				<h2 class="section-title">À propos de Shana</h2>
				<p class="section-lead">Passionnée par les félins, je propose un service de cat sitting élégant et bienveillant. Mon objectif est simple : respecter les habitudes de votre chat, maintenir son confort, et vous tenir informé avec des nouvelles claires à chaque visite.</p>
				<p>Disponibilité, discrétion, délicatesse : chaque détail compte pour offrir une expérience haut de gamme à votre chat et une tranquillité totale pour vous.</p>
			</div>
		</div>
	</section>

	<section id="services" class="section">
		<div class="section__inner">
			<h2 class="section-title">Services pensés pour son bien-être</h2>
			<p class="section-lead">Des prestations complètes, flexibles et personnalisables selon son âge, son caractère et son rythme.</p>
			<div class="grid services-grid">
				<article class="card service-card">
					<span class="micro-icon" aria-hidden="true">🐾</span>
					<h3>Visites à domicile</h3>
					<p>Présence rassurante, repas, eau fraîche, jeu et nettoyage de la litière avec un rituel constant.</p>
				</article>
				<article class="card service-card">
					<span class="micro-icon" aria-hidden="true">🧴</span>
					<h3>Soins & attention</h3>
					<p>Brossage, prise de médicaments simples, surveillance du comportement et du confort général.</p>
				</article>
				<article class="card service-card">
					<span class="micro-icon" aria-hidden="true">📸</span>
					<h3>Nouvelles quotidiennes</h3>
					<p>Photos, vidéos et message détaillé après chaque passage pour rester connecté à votre chat.</p>
				</article>
			</div>
		</div>
	</section>

	<section class="section section-alt">
		<div class="section__inner grid why-grid">
			<div>
				<h2 class="section-title">Pourquoi moi ?</h2>
				<p class="section-lead">Parce que chaque chat est unique. Je m'adapte à son tempérament, qu'il soit joueur, timide ou très indépendant, avec douceur et patience.</p>
				<ul>
					<li>🐾 Routine respectée et environnement apaisé</li>
					<li>🐾 Contact direct WhatsApp avant, pendant et après mission</li>
					<li>🐾 Service premium humain et transparent</li>
				</ul>
			</div>
			<aside class="card featured-quote" aria-label="Témoignage client mis en avant">
				<p>“Shana est exceptionnelle : douce, ponctuelle et ultra rassurante. Mon chat l'adore et moi aussi.”</p>
				<strong>— Claire, Paris</strong>
			</aside>
		</div>
	</section>

	<section id="animaux" class="section">
		<div class="section__inner">
			<h2 class="section-title">Les animaux que j'accompagne</h2>
			<p class="section-lead">Une galerie de compagnons suivis avec attention et tendresse.</p>
			<div class="grid pets-grid">
				<article class="card pet-card">
					<div class="pet-avatar-wrap">
						<!-- MODIFIER ICI -->
						<img class="pet-avatar" src="https://images.unsplash.com/photo-1513360371669-4adf3dd7dff8?auto=format&fit=crop&w=500&q=80" alt="Milo chat européen">
					</div>
					<h3>Milo</h3>
					<p>Curieux et affectueux, adore les séances de jeu au plumeau.</p>
					<a class="pet-link" href="https://instagram.com/shasitter" target="_blank" rel="noopener noreferrer">Voir sur Instagram</a>
				</article>
				<article class="card pet-card">
					<div class="pet-avatar-wrap">
						<!-- MODIFIER ICI -->
						<img class="pet-avatar" src="https://images.unsplash.com/photo-1511275539165-cc46b1ee89bf?auto=format&fit=crop&w=500&q=80" alt="Nala chat tigré">
					</div>
					<h3>Nala</h3>
					<p>Timide au départ, puis très câline une fois la confiance installée.</p>
					<a class="pet-link" href="https://instagram.com/shasitter" target="_blank" rel="noopener noreferrer">Voir sur Instagram</a>
				</article>
				<article class="card pet-card">
					<div class="pet-avatar-wrap">
						<!-- MODIFIER ICI -->
						<img class="pet-avatar" src="https://images.unsplash.com/photo-1519052537078-e6302a4968d4?auto=format&fit=crop&w=500&q=80" alt="Simba chat roux">
					</div>
					<h3>Simba</h3>
					<p>Très joueur et gourmand, aime les routines bien cadrées.</p>
					<a class="pet-link" href="https://instagram.com/shasitter" target="_blank" rel="noopener noreferrer">Voir sur Instagram</a>
				</article>
			</div>
		</div>
	</section>

	<section id="avis" class="section section-alt">
		<div class="section__inner">
			<h2 class="section-title">Avis clients</h2>
			<p class="section-lead">La confiance est au cœur de chaque visite.</p>
			<div class="card">
				<div class="tr-widget" data-id="8050" data-view="badge_left"></div>
				<script src="https://cdn.trust.reviews/widget/embed.min.js" defer></script>
				<div class="rating-row">
					<span class="score">⭐ 5.0 / 5</span>
					<a class="btn btn-secondary" href="https://trust.reviews" target="_blank" rel="noopener noreferrer">Voir les avis</a>
				</div>
			</div>
		</div>
	</section>

	<section id="contact" class="section">
		<div class="section__inner grid contact-grid">
			<div>
				<h2 class="section-title">Parlons du séjour de votre chat</h2>
				<p class="section-lead">Pas de formulaire : un message direct et rapide pour organiser sereinement vos besoins.</p>
			</div>
			<div class="card">
				<!-- MODIFIER ICI -->
				<div class="actions">
					<a class="btn btn-primary" href="https://wa.me/33600000000?text=Bonjour%20Shana%2C%20je%20souhaite%20organiser%20des%20visites%20pour%20mon%20chat." target="_blank" rel="noopener noreferrer">💬 WhatsApp</a>
					<a class="btn btn-secondary" href="https://instagram.com/shasitter" target="_blank" rel="noopener noreferrer">📷 Instagram</a>
				</div>
			</div>
		</div>
	</section>
</main>
<?php
get_footer();
