<?php

/* 
Template Name: Accueil
*/
get_header();
?>

    <!-- =========================
HEADER
========================= -->

    <header>
      <div class="logo">
        <div class="logo-icon"></div>
        AFROHAIRITAGE
        
      </div>

      <nav>
        <a href="#">Accueil</a>
        <a href="#">Articles</a>
        <a href="#">Histoire</a>
        <a href="#">Culture</a>
        <a href="#">Soins</a>
        <a href="#">Contact</a>
      </nav>

      <div class="header-right">
        <div class="search"></div>
        <div class="profile"></div>
      </div>
    </header>

    <!-- =========================
HERO
========================= -->

    <main>
      <section class="hero">
        <div class="hero-text">
          <h1>
            HISTOIRE, CULTURE ET CONSEILS
            <br />
            AUTOUR DU <span>CHEVEU AFRO</span>
          </h1>

          <p>
            Découvrez notre héritage, explorez nos articles et prenez soin de
            vos cheveux avec amour.
          </p>

          <div class="hero-buttons">
            <a href="#" class="btn-primary"> Explorer les articles </a>

            <a href="#" class="btn-secondary"> Découvrir notre histoire </a>
          </div>
        </div>

        <div class="hero-image">
          <img
            src="https://i.pinimg.com/1200x/21/c1/55/21c1558a85342a24be9814a191f5723b.jpg"
            alt="Femme aux cheveux afro"
          />
        </div>
      </section>

      <!-- =========================
WELCOME
========================= -->

      <section class="welcome">
        <h2>BIENVENUE SUR AFROHAIRITAGE</h2>

        <p>Mon héritage capillaire</p>
      </section>

      <!-- =========================
ARTICLES
========================= -->

      <section class="articles-container">
        <div class="articles-title">VOIR LES ARTICLES</div>

        <div class="articles">
          <article class="article-card">
            <img
              src="https://i.pinimg.com/736x/02/7c/0d/027c0dadefc259ebd3615b0597fa5fc4.jpg"
              alt="Coiffure afro"
            />
          </article>

          <article class="article-card">
            <img
              src="https://i.pinimg.com/736x/55/bd/a6/55bda6f69988769bb6b973a79f4c4b82.jpg"
              alt="Huile et soins capillaires"
            />
          </article>

          <article class="article-card">
            <img
              src="https://i.pinimg.com/736x/cb/87/9f/cb879f207c08b1105fc54cbd82718142.jpg"
              alt="Histoire et culture afro"
            />
          </article>
        </div>
      </section>
    </main>




<?php get_footer(); ?>

