<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ecp
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php echo file_get_contents( get_template_directory() . '/assets/dist/sprite/sprite.svg' ); ?>

  <div class="js-menu-screen sliding-menu-fade-screen"></div>

  <div class="offcanvas js-menu">

		<span class="close-offcanvas js-menu-screen">&#215;</span>

    <nav class="offcanvas-navigation" role="navigation">

      <?php
      wp_nav_menu( array(
        'theme_location' => 'primary',
        'container'      => false,
        'menu_class'     => 'offcanvas-menu',
        'depth'          => 1,
      ) );
      ?>

    </nav>

  </div>

  <?php if( is_front_page() ) {
    $site_tag = 'h1';
  } else {
    $site_tag = 'h2';
  } ?>

	<header class="masthead row column" role="banner">

		<<?php echo $site_tag; ?> class="site-title">
			<a href="<?php esc_attr_e( home_url( '/' ) ); ?>" rel="home">
				<?php bloginfo( 'name' ); ?>
			</a>
		</<?php echo $site_tag; ?>>


		<nav class="site-navigation" role="navigation">

			<?php
      wp_nav_menu( array(
        'theme_location' => 'primary',
        'container'      => false,
        'menu_class'     => 'navigation-menu',
        'depth'          => 1,
      ) );
      ?>

		</nav><!-- #site-navigation -->

    <ul class="header-social">
      <li>
        <a href="">
          <svg class="icon">
            <use xlink:href="#linkedin2"></use>
          </svg>
        </a>
      </li>
      <li>
        <a href="https://twitter.com/ECPcoaching" rel="nofollow">
          <svg class="icon">
            <use xlink:href="#twitter"></use>
          </svg>
        </a>
      </li>
      <li>
        <a href="https://www.instagram.com/essentialcoaching/" rel="nofollow">
          <svg class="icon">
            <use xlink:href="#instagram"></use>
          </svg>
        </a>
      </li>
      <li>
        <a href="https://www.facebook.com/Essential-Coaching-Partners-912724458845695/" rel="nofollow">
          <svg class="icon">
            <use xlink:href="#facebook"></use>
          </svg>
        </a>
      </li>
    </ul>

    <div class="hamburger-wrapper">
      <a class="js-menu-trigger sliding-menu-button">
        <span class="hamburger"></span>
      </a>
    </div>

  </header><!-- .masthead -->

  <?php if ( ! is_front_page() ) : ?>

    <div class="site-hero"></div>

  <?php endif; ?>

	<div class="site-content">
