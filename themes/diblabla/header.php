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

      <div id="item-servicios" class="ico-menu-3 horizontal">
          <a href="<?php echo site_url('/servicios'); ?>" class="btn-floating btn-large black">
            <div class="photo-menu-icon ico-3"></div>
          </a>
          <ul>
            <li><a href="<?php echo site_url('/servicios'); ?>" class="btn-floating black">Servicios</a></li>
            <ul id="sub-servicios">
              <li>
                <a href="<?php echo site_url('/nuestros-servicios/cobertura-de-eventos'); ?>">Cobertura de eventos</a>
                <ul class="sub-servicio-items">
                  <li><a href="<?php echo site_url('/nuestros-servicios/cobertura-de-eventos'); ?>#eventos-empresariales">Eventos empresariales</a></li>
                  <li><a href="<?php echo site_url('/nuestros-servicios/cobertura-de-eventos'); ?>#eventos-culturales">Eventos culturales</a></li>
                </ul>
              </li>
              <li>
                <a href="<?php echo site_url('/nuestros-servicios/identidad-corporativa'); ?>">Identidad corporativa</a>
                <ul class="sub-servicio-items">
                  <li><a class="sub-item" href="<?php echo site_url('/nuestros-servicios/identidad-corporativa'); ?>#credencializacion">Credencialización</a></li>
                  <li><a class="sub-item" href="<?php echo site_url('/nuestros-servicios/identidad-corporativa'); ?>#fotografia-y-video-de-instalaciones">Fotografía y video de instalaciones</a></li>
                  <li><a class="sub-item" href="<?php echo site_url('/nuestros-servicios/identidad-corporativa'); ?>#logotipo-y-manual-de-identidad">Logotipo y manual de identidad</a></li>
                  <li><a class="sub-item" href="<?php echo site_url('/nuestros-servicios/identidad-corporativa'); ?>#papeleria-institucional">Papelería institucional</a></li>
                  <li><a class="sub-item" href="<?php echo site_url('/nuestros-servicios/identidad-corporativa'); ?>#video-de-capacitacion">Video de capacitación</a></li>
                  <li><a class="sub-item" href="<?php echo site_url('/nuestros-servicios/identidad-corporativa'); ?>#video-institucional">Video institucional</a></li>
                </ul>
              </li>
              <li>
                <a href="<?php echo site_url('/nuestros-servicios/desarrollo-de-contenidos-digitales'); ?>">Desarrollo de contenidos digitales</a>
                <ul class="sub-servicio-items">
                  <li><a class="sub-item" href="<?php echo site_url('/nuestros-servicios/desarrollo-de-contenidos-digitales'); ?>#fotografia-de-producto">Fotografía de producto</a></li>
                  <li><a class="sub-item" href="<?php echo site_url('/nuestros-servicios/desarrollo-de-contenidos-digitales'); ?>#making-of-publicitario">Making of publicitario</a></li>
                  <li><a class="sub-item" href="<?php echo site_url('/nuestros-servicios/desarrollo-de-contenidos-digitales'); ?>#spots-publicitarios">Spots publicitarios</a></li>
                  <li><a class="sub-item" href="<?php echo site_url('/nuestros-servicios/desarrollo-de-contenidos-digitales'); ?>#video-catalogos">Video catálogos</a></li>
                  <li><a class="sub-item" href="<?php echo site_url('/nuestros-servicios/desarrollo-de-contenidos-digitales'); ?>#video-infografias">Video infografías</a></li>
                </ul>
              </li>
              <li>
                <a href="<?php echo site_url('/nuestros-servicios/comunicacion-de-marca'); ?>">Comunicación de marca</a>
                <ul class="sub-servicio-items">
                  <li><a class="sub-item" href="<?php echo site_url('/nuestros-servicios/comunicacion-de-marca'); ?>#asesoria-y-capacitacion-para-manejo-de-rrss">Asesoría y capacitación para manejo de RRSS</a></li>
                  <li><a class="sub-item" href="<?php echo site_url('/nuestros-servicios/comunicacion-de-marca'); ?>#campanas-de-marketing-digital">Campañas de marketing digital</a></li>
                  <li><a class="sub-item" href="<?php echo site_url('/nuestros-servicios/comunicacion-de-marca'); ?>#campanas-de-publicidad-btl">Campañas de publicidad BTL</a></li>
                  <li><a class="sub-item" href="<?php echo site_url('/nuestros-servicios/comunicacion-de-marca'); ?>#creacion-de-paginas-web">Creación de páginas web</a></li>
                  <li><a class="sub-item" href="<?php echo site_url('/nuestros-servicios/comunicacion-de-marca'); ?>#manejo-de-rrss">Manejo de RRSS</a></li>
                  <li><a class="sub-item" href="<?php echo site_url('/nuestros-servicios/comunicacion-de-marca'); ?>#optimiza-tu-inversion">Optimiza tu inversión</a></li>
                </ul>
              </li>
            </ul>
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
              <li>
                <a href="<?php echo site_url('/nuestros-servicios/cobertura-de-eventos'); ?>">Cobertura de eventos</a>
                <a class="sub-item" href="<?php echo site_url('/nuestros-servicios/cobertura-de-eventos'); ?>#eventos-empresariales">Eventos empresariales</a>
                <a class="sub-item" href="<?php echo site_url('/nuestros-servicios/cobertura-de-eventos'); ?>#eventos-culturales">Eventos culturales</a>
              <li>
                <a href="<?php echo site_url('/nuestros-servicios/identidad-corporativa'); ?>">Identidad corporativa</a>
                <a class="sub-item" href="<?php echo site_url('/nuestros-servicios/identidad-corporativa'); ?>#credencializacion">Credencialización</a>
                <a class="sub-item" href="<?php echo site_url('/nuestros-servicios/identidad-corporativa'); ?>#fotografia-y-video-de-instalaciones">Fotografía y video de instalaciones</a>
                <a class="sub-item" href="<?php echo site_url('/nuestros-servicios/identidad-corporativa'); ?>#logotipo-y-manual-de-identidad">Logotipo y manual de identidad</a>
                <a class="sub-item" href="<?php echo site_url('/nuestros-servicios/identidad-corporativa'); ?>#papeleria-institucional">Papelería institucional</a>
                <a class="sub-item" href="<?php echo site_url('/nuestros-servicios/identidad-corporativa'); ?>#video-de-capacitacion">Video de capacitación</a>
                <a class="sub-item" href="<?php echo site_url('/nuestros-servicios/identidad-corporativa'); ?>#video-institucional">Video institucional</a>
              </li>
              <li>
                <a href="<?php echo site_url('/nuestros-servicios/desarrollo-de-contenidos-digitales'); ?>">Desarrollo de contenidos digitales</a>
                <a class="sub-item" href="<?php echo site_url('/nuestros-servicios/desarrollo-de-contenidos-digitales'); ?>#fotografia-de-producto">Fotografía de producto</a>
                <a class="sub-item" href="<?php echo site_url('/nuestros-servicios/desarrollo-de-contenidos-digitales'); ?>#making-of-publicitario">Making of publicitario</a>
                <a class="sub-item" href="<?php echo site_url('/nuestros-servicios/desarrollo-de-contenidos-digitales'); ?>#spots-publicitarios">Spots publicitarios</a>
                <a class="sub-item" href="<?php echo site_url('/nuestros-servicios/desarrollo-de-contenidos-digitales'); ?>#video-catalogos">Video catálogos</a>
                <a class="sub-item" href="<?php echo site_url('/nuestros-servicios/desarrollo-de-contenidos-digitales'); ?>#video-infografias">Video infografías</a>
              </li>
              <li>
                <a href="<?php echo site_url('/nuestros-servicios/comunicacion-de-marca'); ?>">Comunicación de marca</a>
                <a class="sub-item" href="<?php echo site_url('/nuestros-servicios/comunicacion-de-marca'); ?>#asesoria-y-capacitacion-para-manejo-de-rrss">Asesoría y capacitación para manejo de RRSS</a>
                <a class="sub-item" href="<?php echo site_url('/nuestros-servicios/comunicacion-de-marca'); ?>#campanas-de-marketing-digital">Campañas de marketing digital</a>
                <a class="sub-item" href="<?php echo site_url('/nuestros-servicios/comunicacion-de-marca'); ?>#campanas-de-publicidad-btl">Campañas de publicidad BTL</a>
                <a class="sub-item" href="<?php echo site_url('/nuestros-servicios/comunicacion-de-marca'); ?>#creacion-de-paginas-web">Creación de páginas web</a>
                <a class="sub-item" href="<?php echo site_url('/nuestros-servicios/comunicacion-de-marca'); ?>#manejo-de-rrss">Manejo de RRSS</a>
                <a class="sub-item" href="<?php echo site_url('/nuestros-servicios/comunicacion-de-marca'); ?>#optimiza-tu-inversion">Optimiza tu inversión</a>
              </li>
            </ul>
          <li><a class="waves-effect" href="<?php echo site_url('/proyectos'); ?>">Proyectos</a></li>
          <li><a class="waves-effect" href="<?php echo site_url('/cotiza'); ?>">Crea tu proyecto</a></li>
          <li><a class="waves-effect" href="<?php echo site_url('#contacto-2'); ?>">Contacto</a></li>
          <!-- <li><a class="waves-effect" href="<?php echo site_url('/blog-diblabla'); ?>">Blog</a></li> -->
        </ul>
      </header>
      <div class="[ main-body ]">