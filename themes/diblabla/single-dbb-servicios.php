<?php
	get_header();
	the_post();
	global $post;
	//agregar logo en slider - portada
	$custom_logo_id = get_theme_mod( 'custom_logo' );
    $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
?>
	
	<section id="subservicio" <?php body_class($post->post_name); ?> >
	   <div class="container container-topb">
	   	  <div class="encabezado-pagina center-align wow fadeInUp" data-wow-delay="0.2s">
				<div id="container-logo-encabezado-2">
					<a href="<?php echo site_url(''); ?>">
						<img src="<?php echo $image[0]; ?>" alt="Logotipo Diblabla">
					</a>
				</div>
				<h2><?php the_title(); ?></h2>
				<p><?php the_excerpt(); ?></p>
				<br>
		  </div>
		  <div class="container center-align">
				<div class="wow fadeInUp" data-wow-delay="0.2s">
					<p><?php the_content(); ?></p>
					<br>
				</div>
				<div class="row">
					<?php
					$post_args = array(
						'post_type' => 'dbb-subsicons',
						'posts_per_page' => 3,
						'order'=> 'ASC',  //DESC
						'orderby' => 'post_date', //'post_title'
					);
					$post_query = new WP_Query( $post_args );
					if ( $post_query->have_posts() ) : while ( $post_query->have_posts() ) : $post_query->the_post(); 
					    $custom_fields = get_post_custom();
						$post_id = get_the_ID();
						$icon = get_post_meta( $post_id, 'subservicio_icon_icon', true );
					?>
						<div class="col l4 m12 s12">
					    	<?php if( $icon != "" ) : ?>
								<i class="medium material-icons wow jackInTheBox" data-wow-delay="0.1s"><?php echo $icon; ?></i>
							<?php else : ?>
								<img src="<?php the_post_thumbnail_url('medium'); ?>" alt="<?php the_title(); ?>">
							<?php endif; ?>
					    	<p><?php the_content();?></p>
					    </div>

					<?php endwhile; wp_reset_postdata(); endif; ?>
				</div>
		  </div>
		  <div class="center-align">
		  	<h2>Recibe asesoría gratuita</h2>
            <a href="#free-advice">
            <button class="btn">Aquí</button>
            </a>
		  </div>
	      <div class="row blocks-subservicios-area">
		  	<div class="center-align wow fadeInUp" data-wow-delay="0.2s">
		  		<h2 class="blue-title">Dilo con nosotros y dale un giro a tu negocio.</h2>
	      		<p>En Diblabla desarrollamos e implementamos estrategias en todos los espacios en que tu target interactúa.</p>
	      		<br>
		  	</div>
		  	<?php   // Get terms for post
			 $terms = get_the_terms( $post->ID , 'subservicios' );
			 // Loop over each item since it's an array
			 if ( $terms != null ){
			 foreach( $terms as $term ) {
			 // Print the name method from $term which is an OBJECT

			 echo '<div id="' . $term->slug . '" class="col s6 wow zoomIn" data-wow-delay="0.2s">
			 <a href="#free-advice"><div class="subservicio-block" style="background-image: url(' . THEMEPATH . '/images/subservicios/' . $term->slug . '.jpg)">
			 <p class="valign-wrapper">' . $term->name . '</p>
			 </div></a>
			 <div class="sub-paquetes">
			 <p class="sub-description">' . $term->description . '</p>
			 <!--<div class="accordion">
			 <p>Paquetes</p>
			 <a class="waves-light btn btn-plus"><i class="material-icons">add</i></a>
			 </div>
			 <div class="panel">
			 <p>Esta es la description sobre este paquete</p>
			 </div>-->
			 </div>
			 </div>';
			 // Get rid of the other data stored in the object, since it's not needed
			 unset($term);
			} } ?>
		  </div>
		  <!--<div class="center-align">
		  	<a href="<?php echo site_url('/cotiza'); ?>">
               <h2>Crea <span>TU PROYECTO</span></h2>
            </a>
            <a href="<?php echo site_url('/cotiza'); ?>">
            <button class="btn">Aquí</button>
            </a>
		  </div>-->
		  <div id="free-advice" class="container center-align container-topb">
	        <h2><span>ASESORÍA GRATUITA</span></h2>
	        <p>Déjanos tus datos o si lo prefieres comunícate al teléfono <a href="tel:55-3913-1298" title="telefono">5539131298</a></p>
	        <div id="formulario-contacto">
                  <?php echo do_shortcode('[ninja_form id=3]'); ?>
            </div>
	      </div>
		</div>
	</section>

<?php get_footer(); ?>