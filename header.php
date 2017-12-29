<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset= <?php bloginfo( 'charset' ); ?>">
  <title><?php wp_title(); ?></title>
  <!-- Definir viewport para dispositivos web móviles -->
  <meta name="viewport" content="width=device-width, minimum-scale=1">
  <meta name='Content-Type' content='text/html; charset=iso-8859-1'>
  <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
  <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>"/>
  <?php wp_enqueue_style( "topbaricons", "https://inverspot.mx/wp-content/themes/is-theme/css/font-awesome.min.css" ); ?>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <?php if ( is_singular() ) wp_enqueue_script( "comment-reply" ); ?>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <section class="spot-u-fill--complementary spot-l-top-bar">
      <div class="spot-l-container--menu spot-u-width--full">
        <div class="spot-u-display--flex spot-u-justify-content--space-between ">
          <div class="">
            <p class="spot-u-color--white spot-u-top-bar--padding">Atención al cliente | <b>01 (55) 8000 6555</b> | <a class="spot-u-text-decoration--none  spot-u-color--white" href="#">hola@inverspot.mx</a> | <a class="spot-u-text-decoration--none  spot-u-color--white" href="http://192.168.100.24/casos-de-exito/"><span class="spot-u-color--primary">Conoce nuestros casos de éxito</span></a></p>
          </div>
          <div class="">
            <a href="#"><i class="spot-u-color--white fa fa-vimeo spot-u-text-decoration--none " aria-hidden="true"></i></a>
            <a href="#"><i class="spot-u-color--white fa fa-crosshairs spot-u-text-decoration--none " aria-hidden="true"></i></a>
            <a href="#"><i class="spot-u-color--white fa fa-youtube spot-u-text-decoration--none " aria-hidden="true"></i></a>
            <a href="#"><i class="spot-u-color--white fa fa-twitter spot-u-text-decoration--none " aria-hidden="true"></i></a>
            <a href="#"><i class="spot-u-color--white fa fa-facebook spot-u-text-decoration--none " aria-hidden="true"></i></a>
          </div>
        </div>
      </div>
    </section>
    <header class="spot-u-fill--primary">
      <div class="spot-l-container--menu">
        <div class="spot-u-width--full spot-u-display--flex spot-u-flex-wrap--wrap spot-u-justify-content--space-between">
          <div class="spot-l-menu--responsive spot-u-margin-y--1 spot-u-display--flex spot-u-justify-content--space-between">
            <div>
              <a class="spot-u-text-decoration--none" href="http://192.168.100.24/">
                <div class="brand">
                  <div class="brand-image">
                    <img class="brand__image--primary" alt="Inverspot" src="http://inverspot.apps-1and1.com/wp-content/uploads/2017/11/inverspotblanco.png">
                    <p class="spot-u-color--white spot-h4">Tu punto de inversión inmobiliario</p>
                  </div>
                </div>
              </a>
            </div>
            <button type="button" class="nav-bar__collapsed spot-u-border--0 spot-u-fill--primary spot-u-color--white" data-toggle="collapse" data-target="#navbar-1">
              <i class="fa fa-bars fa-2x" aria-hidden="true"></i>
            </button>
          </div>
          <div class="menu spot-u-fill--primary">
            <div class="spot-u-margin--auto">
              <?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'container_class' => 'menu__items', 'menu_class' => '' ) ); ?>
            </div>
          </div>
        </div>
      </div>
    </header>
