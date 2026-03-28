<?php
/**
 * Main template file for ShaSitter Theme.
 *
 * @package ShaSitter_Theme
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title><?php bloginfo( 'name' ); ?> — Cat sitter à Genève</title>
    <meta
      name="description"
      content="ShaSitter, cat sitter premium à Genève : visites à domicile, soins et nouvelles quotidiennes."
    />

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@500;600;700&family=Space+Grotesk:wght@400;500;700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="<?php echo esc_url( get_stylesheet_uri() ); ?>" />
    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <nav class="navbar navbar-expand-lg bg-white border-bottom sticky-top">
      <div class="container py-2">
        <a class="navbar-brand" href="#">ShaSitter <span class="signature-moon">🌙</span></a>
        <a class="btn btn-sm btn-brand" href="#contact">Contacter Shana</a>
      </div>
    </nav>

    <header class="hero">
      <div class="container">
        <div class="hero-card p-4 p-md-5">
          <div class="row align-items-center g-4">
            <div class="col-lg-7">
              <p class="text-uppercase fw-semibold mb-2" style="color: var(--lavender-deep)">Cat sitter premium · Genève</p>
              <h1 class="display-5 mb-3">Je prends soin de votre chat comme du mien. <span class="signature-moon">🌙</span></h1>
              <p class="lead text-secondary mb-4">
                Visites à domicile, soins attentifs, nouvelles quotidiennes et approche douce pour rassurer
                votre compagnon (et vous).
              </p>
              <div class="d-flex flex-wrap gap-2">
                <a class="btn btn-brand btn-lg" href="https://wa.me/41000000000" target="_blank" rel="noreferrer">WhatsApp</a>
                <a class="btn btn-outline-dark btn-lg" href="https://instagram.com" target="_blank" rel="noreferrer">Instagram</a>
              </div>
            </div>
            <div class="col-lg-5">
              <div class="soft-card p-4 h-100">
                <h2 class="h3 mb-3">Pourquoi ShaSitter ?</h2>
                <ul class="mb-0 ps-3">
                  <li class="mb-2">Approche humaine, calme et bienveillante.</li>
                  <li class="mb-2">Routine respectée selon les besoins de votre chat.</li>
                  <li>Preuves quotidiennes avec photos/vidéos sur WhatsApp ou Instagram.</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>

    <section class="section">
      <div class="container">
        <h2 class="display-6 mb-4">À propos de Shana</h2>
        <div class="soft-card p-4 p-md-5">
          <p class="mb-0">
            Shana accompagne les familles qui veulent le meilleur pour leur chat pendant leurs absences.
            L'objectif est simple : une présence fiable, rassurante et chaleureuse. <span class="paw">🐾</span>
          </p>
        </div>
      </div>
    </section>

    <section class="section section-soft">
      <div class="container">
        <h2 class="display-6 mb-4">Services</h2>
        <div class="row g-3">
          <div class="col-md-4">
            <div class="soft-card p-4 h-100">
              <h3 class="h4">Visites à domicile</h3>
              <p class="mb-0 text-secondary">Passages ponctuels ou réguliers, adaptés au rythme de votre chat.</p>
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

    <section class="section">
      <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-4">
          <h2 class="display-6 mb-0">Les petits protégés</h2>
          <a href="https://instagram.com" target="_blank" rel="noreferrer" class="btn btn-outline-dark">Voir Instagram</a>
        </div>
        <div class="row g-3">
          <div class="col-md-4">
            <article class="soft-card p-4 h-100">
              <div class="animal-avatar mb-3">🐱</div>
              <h3 class="h4 mb-1">Milo</h3>
              <p class="text-secondary mb-0">Très joueur, aime les routines du soir et les petites sessions câlins.</p>
            </article>
          </div>
          <div class="col-md-4">
            <article class="soft-card p-4 h-100">
              <div class="animal-avatar mb-3">🐈</div>
              <h3 class="h4 mb-1">Luna</h3>
              <p class="text-secondary mb-0">Timide au départ, puis très affectueuse après quelques visites.</p>
            </article>
          </div>
          <div class="col-md-4">
            <article class="soft-card p-4 h-100">
              <div class="animal-avatar mb-3">🐾</div>
              <h3 class="h4 mb-1">Nori</h3>
              <p class="text-secondary mb-0">Curieuse et sensible, besoin d'une présence calme et régulière.</p>
            </article>
          </div>
        </div>
      </div>
    </section>

    <section class="section section-soft">
      <div class="container">
        <h2 class="display-6 mb-4">Avis clients</h2>
        <div class="soft-card p-4 p-md-5">
          <p class="mb-2"><span class="star">★★★★★</span> 4.9/5 sur Google</p>
          <p class="text-secondary mb-3">"Shana est adorable, fiable et notre chat est apaisé à chaque absence."</p>
          <a class="btn btn-outline-dark" href="#" aria-label="Voir tous les avis Google">Voir tous les avis</a>
          <p class="small small-note mt-3 mb-0">Intégration TrustReviews prête à connecter dans cette section.</p>
        </div>
      </div>
    </section>

    <section id="contact" class="section">
      <div class="container">
        <div class="contact-wrap p-4 p-md-5">
          <h2 class="display-6 mb-3">Contact rapide</h2>
          <p class="mb-4">Un message, une réponse rapide, zéro friction. <span aria-hidden="true">✨</span></p>
          <div class="d-flex flex-wrap gap-2">
            <a class="btn btn-light btn-lg" href="https://wa.me/41000000000" target="_blank" rel="noreferrer">WhatsApp direct</a>
            <a class="btn btn-outline-light btn-lg" href="https://instagram.com" target="_blank" rel="noreferrer">Instagram direct</a>
          </div>
        </div>
      </div>
    </section>

    <footer class="py-4 text-center text-secondary">
      <div class="container">ShaSitter © <?php echo esc_html( gmdate( 'Y' ) ); ?> · Genève</div>
    </footer>

    <?php wp_footer(); ?>
  </body>
</html>
