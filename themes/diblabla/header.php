<?php 
      $custom_logo_id = get_theme_mod( 'custom_logo' );
      $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
      
      global $post;
      $post_slug=$post->post_name;
?>

<!DOCTYPE html>
<!-- Importante agregar el prefijo para cuando dice que og no se está usando -->
<html prefix="og: http://ogp.me/ns#">
   <head>
      <meta charset="utf-8">
      <title><?php bloginfo('name'); ?> <?php if( !is_front_page() ): ?> - <?php echo $post_slug; ?><?php endif; ?> </title>
      <!-- Sets initial viewport load and disables zooming -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- SEO -->
      <meta name="keywords" content="agencia comunicación, video, imagen, contenido">
      <meta name="description" content="<?php bloginfo('description'); ?>">
      <!-- Meta robots -->
      <meta name="robots" content="index, follow" />
      <meta name="googlebot" content="index, follow" />
      <!-- Facebook, Twitter metas -->
      <meta property="og:title" content="<?php bloginfo('name'); ?>" />
      <meta property="og:type" content="website" />
      <meta property="og:url" content="<?php echo site_url(); ?>" />
      <meta property="og:image" content="<?php echo THEMEPATH; ?>images/social.jpg">
      <meta property="og:description" content="<?php bloginfo('description'); ?>" />
      <meta name="twitter:description" content="<?php bloginfo('description'); ?>" />
      <meta name="twitter:image" content="<?php echo THEMEPATH; ?>images/social.jpg" />
      <meta name="twitter:title" content="<?php bloginfo('name'); ?>" />
      <meta property="og:image:width" content="210" />
      <meta property="og:image:height" content="110" />
      <meta property="fb:app_id" content="" />
      <meta name="twitter:card" content="summary" />
      <meta name="twitter:site" content="@" />
      <!-- Google+ -->
      <link rel="publisher" href="https://plus.google.com/+diblabla">
      <!-- Compatibility -->
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
      <meta http-equiv="cleartype" content="on">
      <!-- Google font(s) -->
      <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,800,700,400italic,600italic,700italic,800italic,300italic" rel="stylesheet" type="text/css">
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="<?php echo THEMEPATH; ?>stylesheets/materialize.css" media="screen,projection" />
      <!--Import animate.css-->
      <link type="text/css" rel="stylesheet" href="<?php echo THEMEPATH; ?>stylesheets/animate.css" />
      <!--Raleway Google font-->
      <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600,700,900" rel="stylesheet">
      <!--Fontawesome-->
      <link rel="stylesheet" href="<?php echo THEMEPATH; ?>css/font-awesome.min.css">
      <!-- Canonical URL -->
      <link rel="canonical" href="<?php echo site_url(); ?>" />
      <!-- Compatibility -->
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
      <meta http-equiv="cleartype" content="on">
      <!-- Sitemap Google Verify -->
      <!--  https://www.google.com/webmasters/verification/home?hl=en&authuser=0 -->
      <!--<meta name="google-site-verification" content="" />-->
      <meta name="google-site-verification" content="l4lBO-8tt4PtHYdUfIJkEnGuJti6PDjAwczBdmoEEGk" />
      <!-- Noscript -->
      <noscript>Tu navegador no soporta JavaScript!</noscript>
      <?php wp_head(); ?>
      <!-- Global Site Tag (gtag.js) - Google Analytics -->
      <script async src="https://www.googletagmanager.com/gtag/js?id=UA-107421250-1"></script>
      <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments)};
        gtag('js', new Date());

        gtag('config', 'UA-107421250-1');
      </script>
   </head>
   <body>
      <!-- Load Facebook SDK for JavaScript -->
      <div id="fb-root"></div>
      <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.10";
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));</script>
      <header>
      	 <nav>
           

		    <div class="fixed-action-btn  ico-menu-1 horizontal">
			    <a href="<?php echo site_url(''); ?>" class="btn-floating btn-large black">
                        <div class="photo-menu-icon ico-1"></div>
			    </a>
			    <ul>
			      <li><a href="<?php echo site_url(''); ?>" class="btn-floating black">Inicio</a></li>
			    </ul>
			</div>
			<div class="fixed-action-btn  ico-menu-2 horizontal">
			    <a href="<?php echo site_url('/nosotros'); ?>" class="btn-floating btn-large black">
			      <div class="photo-menu-icon ico-2"></div>
			    </a>
			    <ul>
			      <li><a href="<?php echo site_url('/nosotros'); ?>" class="btn-floating black">Nosotros</a></li>
			    </ul>
			</div>
			
      <div class="fixed-action-btn  ico-menu-3 horizontal">
          <a href="<?php echo site_url('/servicios'); ?>" class="btn-floating btn-large black">
            <div class="photo-menu-icon ico-3"></div>
          </a>
          <ul>
            <li>
              <div>
                <a href="<?php echo site_url('/servicios'); ?>" class="btn-floating black menu-servicios-drop" id="servicios-dropdown">Servicios</a>
                <span class="dropdown-button" data-activates="dropdown1"></span>
              </div>
              <ul id="dropdown1" class="dropdown-content">
                <li><a href="<?php echo site_url('/nuestros-servicios/cobertura-de-eventos'); ?>">Cobertura de eventos</a></li>
                <li><a href="<?php echo site_url('/nuestros-servicios/identidad-corporativa'); ?>">Identidad corporativa</a></li>
                <li><a href="<?php echo site_url('/nuestros-servicios/desarrollo-de-contenidos-digitales'); ?>">Desarrollo de contenidos digitales</a></li>
                <li><a href="<?php echo site_url('/nuestros-servicios/comunicacion-de-marca'); ?>">Comunicación de marca</a></li>
              </ul>
            </li>
        
          </ul>
      </div>
			<div class="fixed-action-btn  ico-menu-4 horizontal">
			    <a href="<?php echo site_url('/proyectos'); ?>" class="btn-floating btn-large black">
			      <div class="photo-menu-icon ico-4"></div>
			    </a>
			    <ul>
			      <li><a href="<?php echo site_url('/proyectos'); ?>" class="btn-floating black">Proyectos</a></li>
			    </ul>
			</div>
			<div class="fixed-action-btn  ico-menu-5 horizontal">
             <a href="<?php echo site_url('/cotiza'); ?>" class="btn-floating btn-large black">
               <div class="photo-menu-icon ico-5"></div>
             </a>
             <ul>
               <li><a href="<?php echo site_url('/cotiza'); ?>" class="btn-floating black">Crea tu proyecto</a></li>
             </ul>
         </div>
         <div class="fixed-action-btn  ico-menu-6 horizontal">
			    <a href="<?php echo site_url('#contacto-2'); ?>" class="btn-floating btn-large black">
			      <div class="photo-menu-icon ico-6"></div>
			    </a>
			    <ul>
			      <li><a href="<?php echo site_url('#contacto-2'); ?>" class="btn-floating black">Contacto</a></li>
			    </ul>
			</div>
        
        </nav>

        <!--Menu responsive view-->
        <a href="#" data-activates="slide-out" id="responsive-menu" class="btn button-collapse">
          <i class="material-icons">menu</i>
        </a>
        
        <ul id="slide-out" class="side-nav" style="transform: translateX(-100%);">
          <li class="btn-close-nav"><i class="material-icons">close</i></li>
          <li><a class="waves-effect" href="<?php echo site_url(''); ?>">Inicio</a></li>
          <li><a class="waves-effect" href="<?php echo site_url('/nosotros'); ?>">Nosotros</a></li>
          <li><a class="waves-effect" href="<?php echo site_url('/servicios'); ?>">Servicios</a></li>
            <ul id="dropdown2">
              <li><a href="<?php echo site_url('/nuestros-servicios/cobertura-de-eventos'); ?>">Cobertura de eventos</a></li>
              <li><a href="<?php echo site_url('/nuestros-servicios/identidad-corporativa'); ?>">Identidad corporativa</a></li>
              <li><a href="<?php echo site_url('/nuestros-servicios/desarrollo-de-contenidos-digitales'); ?>">Desarrollo de contenidos digitales</a></li>
              <li><a href="<?php echo site_url('/nuestros-servicios/comunicacion-de-marca'); ?>">Comunicación de marca</a></li>
            </ul>
          <li><a class="waves-effect" href="<?php echo site_url('/proyectos'); ?>">Proyectos</a></li>
          <li><a class="waves-effect" href="<?php echo site_url('/cotiza'); ?>">Crea tu proyecto</a></li>
          <li><a class="waves-effect" href="<?php echo site_url('#contacto-2'); ?>">Contacto</a></li>
          <!-- <li><a class="waves-effect" href="<?php echo site_url('/blog-diblabla'); ?>">Blog</a></li> -->
        </ul>
      </header>
      <div class="[ main-body ]">