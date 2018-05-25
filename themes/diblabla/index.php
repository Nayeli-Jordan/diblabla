<?php get_header(); ?>
<?php get_template_part( 'template/template-portada-home' ); ?>

<!--Opcion "Qué hacemos 3" - slider multimagen-->
<section id="hacemos-3">
   <div class="container container-topb">
      <div class="row valign-wrapper">
         <div class="col s5">
            <div>
               <a href="<?php echo site_url('/nosotros'); ?>">
                  <h2>Qué <span>HACEMOS</span></h2>
               </a>
               <p class="center-align">Agencia de comunicación con visión estratégica <br>en medios digitales a nivel personal, <br>social y empresarial. </p>
               <br>
            </div>
         </div>
         <div class="col s7">
            <div class="carousel">
               <?php
                  $post_args = array(
                  	'post_type' => 'dbb-que-hacemos',
                  	'posts_per_page' => -1,
                  	'order'=> 'ASC',  //DESC
                  	'orderby' => 'post_date', //'post_title'
                  );
                  $post_query = new WP_Query( $post_args );
                  if ( $post_query->have_posts() ) : while ( $post_query->have_posts() ) : $post_query->the_post(); ?>
               <a class="carousel-item"><img src="<?php the_post_thumbnail_url('large'); ?>" alt="<?php the_title(); ?>"></a>
               <?php endwhile; wp_reset_postdata(); endif; ?>
            </div>
         </div>
      </div>
   </div>
</section>
<section id="servicios" class="center-align">
   <div class="container container-topb">
      <a href="<?php echo site_url('/servicios'); ?>">
         <h2>Nuestros <span>SERVICIOS</span></h2>
      </a>
      <div class="row servicios-photo">
         <?php
            $post_args = array(
            	'post_type' => 'dbb-servicios',
            	'posts_per_page' => 4,
            	'order'=> 'ASC',  //DESC
            	'orderby' => 'post_date', //'post_title'
            );
            $post_query = new WP_Query( $post_args );
            if ( $post_query->have_posts() ) : while ( $post_query->have_posts() ) : $post_query->the_post();
            	$custom_fields = get_post_custom();
				$post_id = get_the_ID();
				$servicioa = get_post_meta( $post_id, 'servicios_principales_servicioa', true );
				$serviciob = get_post_meta( $post_id, 'servicios_secundarios_serviciob', true );
            ?>
         <div class="col s3 wow zoomIn" data-wow-delay="0.2s">
            <div class="block-circle">
               <a href="<?php the_permalink(); ?>">
                  <div class="servicio-name">
                     <h3><?php the_title(); ?></h3>
                  </div>
                  <div class="circle item">
                     <img src="<?php the_post_thumbnail_url('large'); ?>"  alt="<?php the_title(); ?>" class="circle responsive-img">
                  </div>
               </a>
            </div>
            <div class="servicios-lista-subs">
            	<div class="servicios-principales">
            		<?php if( $servicioa != "" ) : ?>
						<p><?php echo $servicioa; ?></p>
					<?php else : ?>
						<p>Conoce nuestros subservicios principales</p>
					<?php endif; ?>
            	</div>
            	<!-- <div class="accordion">
				    <a class="waves-light btn btn-plus"><i class="material-icons">add</i></a>
   				</div>
   				<div class="panel">
   				    <?php if( $serviciob != "" ) : ?>
   						<p><?php echo $serviciob; ?></p>
   					<?php else : ?>
   						<br>
   					<?php endif; ?>
   				</div> -->
               <a href="<?php the_permalink(); ?>" class="link-blue">Ver más</a>
            </div>
         </div>
         <?php endwhile; wp_reset_postdata(); endif; ?>
      </div>
   </div>
</section>
<section id="cotiza" class="container-topb">
   <div class="row cotiza-photos valign-wrapper">
      <?php
         $post_args = array(
         	'post_type' => 'dbb-cotiza-proyecto',
         	'posts_per_page' => 3,
         	'order'=> 'ASC',  //DESC
         	'orderby' => 'post_date', //'post_title'
         );
         $post_query = new WP_Query( $post_args );
         if ( $post_query->have_posts() ) : while ( $post_query->have_posts() ) : $post_query->the_post(); ?>
      <div class="col s4">
         <img src="<?php the_post_thumbnail_url('large'); ?>" alt="<?php the_title(); ?>">
      </div>
      <?php endwhile; wp_reset_postdata(); endif; ?>
      <div class="cotiza-text">
         <div>
            <a href="<?php echo site_url('/cotiza'); ?>">
               <h2>Crea <span>TU PROYECTO</span></h2>
            </a>
            <a href="<?php echo site_url('/cotiza'); ?>">
            <button class="btn">Aquí</button>
            </a>
         </div>
      </div>
   </div>
</section>
<section id="proyectos" class="container-topb">
   <a href="<?php echo site_url('/proyectos'); ?>">
      <h2>Nuestro <span>TRABAJO</span></h2>
   </a>
   <div class="slider slider-proyectos">
      <ul class="slides">
         <li>
            <div class="row">
               <?php
                  $post_args = array(
                  	'post_type' => 'dbb-proyectos',
                  	'posts_per_page' => 6,
                  	'order'=> 'ASC',  //DESC
                  	'orderby' => 'post_date', //'post_title'
                  	'tax_query' => array(
                  		array(
                  			'taxonomy' => 'sliderproyecto',
                  			'field'    => 'slug',
                  			'terms'    => 'sproyectos-principales'
                  		),
                  	),
                  );
                  $post_query = new WP_Query( $post_args );
                  if ( $post_query->have_posts() ) : 
                  $i = 1;
                  while ( $post_query->have_posts() ) : $post_query->the_post(); ?>
               <div class="col s4 proyectos-block full-window-block">
                  <div class="proyectos-image" style="background-image: url(<?php the_post_thumbnail_url('large'); ?>)">
                     <div class="proyectos-description valign-wrapper">
                        <a class="title-modal-trigger" href="#modal<?php echo $i; ?>"><h3><?php the_title(); ?></h3></a>
                     </div>
                     <!-- Modal Trigger -->
                     <a class="waves-effect waves-light btn btn-plus" href="#modal<?php echo $i; ?>"><i class="material-icons">add</i></a>
                  </div>
               </div>
               <?php $i++ ?>
               <?php endwhile; wp_reset_postdata(); endif; ?>
            </div>
         </li>
         <li>
            <div class="row">
               <?php
                  $post_args = array(
                  	'post_type' => 'dbb-proyectos',
                  	'posts_per_page' => 6,
                  	'order'=> 'ASC',  //DESC
                  	'orderby' => 'post_date', //'post_title'
                  	'tax_query' => array(
                  		array(
                  			'taxonomy' => 'sliderproyecto',
                  			'field'    => 'slug',
                  			'terms'    => 'sproyectos-secundarios'
                  		),
                  	),
                  );
                  $post_query = new WP_Query( $post_args );
                  if ( $post_query->have_posts() ) : 
                  $i = 1;
                  while ( $post_query->have_posts() ) : $post_query->the_post(); ?>
               <div class="col s4 proyectos-block full-window-block">
                  <div class="proyectos-image" style="background-image: url(<?php the_post_thumbnail_url('large'); ?>)">
                     <div class="proyectos-description valign-wrapper">
                        <h3><?php the_title(); ?></h3>
                     </div>
                     <!-- Modal Trigger -->
                     <a class="waves-effect waves-light btn btn-plus" href="#modalsec<?php echo $i; ?>"><i class="material-icons">add</i></a>
                  </div>
               </div>
               <?php $i++ ?>
               <?php endwhile; wp_reset_postdata(); endif; ?>
            </div>
         </li>
      </ul>
   </div>
   <!--Contenetor modales-->
   <div>
      <!--inicia modal li principal-->
      <?php
         $post_args = array(
         	'post_type' => 'dbb-proyectos',
         	'posts_per_page' => 6,
         	'order'=> 'ASC',  //DESC
         	'orderby' => 'post_date', //'post_title'
         	'tax_query' => array(
         		array(
         			'taxonomy' => 'sliderproyecto',
         			'field'    => 'slug',
         			'terms'    => 'sproyectos-principales'
         		),
         	),
         );
         $post_query = new WP_Query( $post_args );
         if ( $post_query->have_posts() ) : 
         $i = 1;
         while ( $post_query->have_posts() ) : $post_query->the_post(); 
         $custom_fields = get_post_custom();
		 $post_id = get_the_ID();
		 $progallery = get_post_meta( $post_id, 'pgallery_short_progallery', true );
       $videoproyect = get_post_meta( $post_id, 'video_proyectos_videoproyect', true );
         ?>


      <!-- Modal Structure -->
      <div id="modal<?php echo $i; ?>" class="modal modal-fixed-footer bottom-sheet full-window">
         <div class="modal-content">
            <div class="modal-container">
               <div class="row">
                  <div class="col s6">
                     <h4><?php the_title(); ?></h4>
                     <br>
                     <p><?php the_content(); ?></p>
                  </div>
                  <div class="col s6">
                     <?php if( $videoproyect != "" ) : ?>
                        <!-- <video class="proyecto-video" src="<?php echo $videoproyect; ?>" controls></video> -->
                        <video class="proyecto-video" src="<?php echo $videoproyect; ?>" controls>
                          <source src="<?php echo $videoproyect; ?>" type="video/mp4">
                          <source src="<?php echo $videoproyect; ?>" type="video/ogg">
                           Your browser does not support the video tag.
                        </video>
                     <?php else : ?>
                        <img src="<?php the_post_thumbnail_url('large'); ?>" alt="<?php the_title(); ?>">
                     <?php endif; ?>
                  </div>
               </div>
               <div class="row">
                  <?php if( $progallery != "" ) : ?>
   						<div>
                        <?php echo do_shortcode('' . $progallery . ''); ?>
                     </div>
   					<?php else : ?>
   						<br>
   						<!-- <p>¿Deseas agregar una galería?</p> -->
   					<?php endif; ?>
				  </div>
            </div>
         </div>
         <div class="modal-footer">
            <a href="#!" class="modal-action modal-close waves-effect waves-green btn">Cerrar</a>
         </div>
      </div>
      <?php $i++ ?>
      <?php endwhile; wp_reset_postdata(); endif; ?>
      <!--Inicia modal li secundario-->
      <?php
         $post_args = array(
         	'post_type' => 'dbb-proyectos',
         	'posts_per_page' => 6,
         	'order'=> 'ASC',  //DESC
         	'orderby' => 'post_date', //'post_title'
         	'tax_query' => array(
         		array(
         			'taxonomy' => 'sliderproyecto',
         			'field'    => 'slug',
         			'terms'    => 'sproyectos-secundarios'
         		),
         	),
         );
         $post_query = new WP_Query( $post_args );
         if ( $post_query->have_posts() ) : 
         $i = 1;
         while ( $post_query->have_posts() ) : $post_query->the_post(); 
         $custom_fields = get_post_custom();
   		$post_id = get_the_ID();
         $progallery = get_post_meta( $post_id, 'pgallery_short_progallery', true );
         $videoproyect = get_post_meta( $post_id, 'video_proyectos_videoproyect', true );
         ?>
      <!-- Modal Structure -->
      <div id="modalsec<?php echo $i; ?>" class="modal modal-fixed-footer bottom-sheet full-window">
         <div class="modal-content">
            <div class="modal-container">
               <div class="row">
                  <div class="col s6">
                     <h4><?php the_title(); ?></h4>
                     <br>
                     <p><?php the_content(); ?></p>
                  </div>
                  <div class="col s6">
                     <?php if( $videoproyect != "" ) : ?>
                        <video class="proyecto-video" src="<?php echo $videoproyect; ?>" controls></video>
                     <?php else : ?>
                        <img src="<?php the_post_thumbnail_url('large'); ?>" alt="<?php the_title(); ?>">
                     <?php endif; ?>
                  </div>
               </div>
               <div class="row">
                  <?php if( $progallery != "" ) : ?>
                     <div>
                        <?php echo do_shortcode('' . $progallery . ''); ?>
                     </div>
                  <?php else : ?>
                     <br>
                     <!-- <p>¿Deseas agregar una galería?</p> -->
                  <?php endif; ?>
              </div>
            </div>
         </div>
         <div class="modal-footer">
            <a href="#!" class="modal-action modal-close waves-effect waves-green btn">Cerrar</a>
         </div>
      </div>
      <?php $i++ ?>
      <?php endwhile; wp_reset_postdata(); endif; ?>
   </div>
   <a href="<?php echo site_url('/proyectos'); ?>">
   <button class="btn mas-proyectos">Ver más</button>
   </a>
</section>
<section id="clientes">
   <div class="container container-topb">
      <a href="<?php echo site_url('/proyectos'); ?>">
         <h2>Algunos de <span>NUESTROS CLIENTES</span></h2>
      </a>
      <div class="row clientes-photo">
         <?php
            $post_args = array(
            	'post_type' => 'dbb-clientes',
            	'posts_per_page' => 8,
            	'order'=> 'ASC',  //DESC
            	'orderby' => 'post_date', //'post_title'
            );
            $post_query = new WP_Query( $post_args );
            if ( $post_query->have_posts() ) : while ( $post_query->have_posts() ) : $post_query->the_post(); ?>
         <span class="block-cliente ">
         <img class="wow swing" data-wow-delay="0.2s" src="<?php the_post_thumbnail_url('small'); ?>" alt="<?php the_title(); ?>">		
         </span>
         <?php endwhile; wp_reset_postdata(); endif; ?>
      </div>
   </div>
</section>
<section id="contacto-2">
   <div>
      <div class="container container-topb">
         <h2><span>CONTÁCTANOS</span></h2>
         <div class="row">
            <div class="col s6">
               <div id="formulario-contacto">
                  <?php echo do_shortcode('[ninja_form id=3]'); ?>
               </div>
            </div>
            <div class="col s6">
               <p>Déjanos tus datos, háblanos del proyecto que quieres desarrollar, y de inmediato nos pondremos de acuerdo contigo para ofrecerte una alternativa de trabajo.</p>
               <div class="contacto-social-link">
                  <p>Síguenos por nuestras redes sociales:</p>
                  <a href="https://www.facebook.com/Diblabla/?ref=bookmarks" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                  <a href="https://www.instagram.com/diblablacomunicacion/?hl=es" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                  <a href="https://www.youtube.com/channel/UCODkX4cAU8EZASKbfgzdSdw?view_as=subscriber" target="_blank"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
               </div>
               <p><b>Suscríbete a nuestro newsletter</b> y recibe las noticias más relevantes para poder desarroyar tu propio proyecto. ¡Dilo con nosotros, Diblabla!</p>
               <!-- Begin MailChimp Signup Form -->
                  <style type="text/css">
                     #contacto-2 #mc_embed_signup input.email{width: 250px!important; background-color: transparent!important;}
                     #mc_embed_signup input.email{background-color: transparent!important;}
                  </style>
                  <link href="//cdn-images.mailchimp.com/embedcode/horizontal-slim-10_7.css" rel="stylesheet" type="text/css">
                  
                  <div id="mc_embed_signup">
                  <form action="https://diblabla.us16.list-manage.com/subscribe/post?u=ef32d6c6aa004a5a0712fb5fa&amp;id=7dbe3a8de9" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                      <div id="mc_embed_signup_scroll">
                     
                     <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Email" required>
                      <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_ef32d6c6aa004a5a0712fb5fa_7dbe3a8de9" tabindex="-1" value=""></div>
                      <div class="clear"><input type="submit" value="Suscribirme" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
                      </div>
                  </form>
                  </div>
               <!--End mc_embed_signup-->
               <p class="form-gray external-contact"><a href="/cotiza">Crea tu proyecto <i class="fa fa-external-link" aria-hidden="true"></i></a></p>
            </div>
         </div>
      </div>
   </div>
</section>

<?php get_footer(); ?>