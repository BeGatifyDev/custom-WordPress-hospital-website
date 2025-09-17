<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Load Google Font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header class="site-header">
  <div class="container header-container">

    <!-- Logo -->
    <div class="site-logo">
      <?php the_custom_logo(); ?>
    </div>

    <!-- Contact & Social (Top Right) -->
    <div class="header-top-right">
      <div class="header-contact">
        <p>
          <a href="tel:+2348112270977">📞 +234 811 227 0977</a> | 
          <a href="mailto:info@snhospital.com">✉️ info@snhospital.com</a>
        </p>
      </div>
      <div class="header-social">
        <a href="#"><i class="fab fa-facebook-f"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-linkedin-in"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
      </div>
    </div>

    <!-- Navigation -->
    <nav class="main-nav">
      <?php wp_nav_menu(['theme_location' => 'primary']); ?>
    </nav>
  </div>
</header>
