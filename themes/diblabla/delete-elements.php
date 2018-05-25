<!--Opcion "Qué hacemos - 2 bloques más grandes"-->
	<!--<section id="hacemos">
		<div class="container container-only-t">
        	<div class="row">
		      <div class="col s4 p-relative hacemos-text valign-wrapper">
		      	<div>
			      	<a href="<?php echo site_url('/nosotros'); ?>">
			      		<h2>Qué <span>HACEMOS</span></h2>
			      	</a>
			      	<p class="center-align">Agencia de comunicación con visión estratégica en medios digitales a nivel personal, social y empresarial. </p>	
			      	<br>
		      	</div>
		      </div>
		      <div class="col s8 hacemos-photos">
		        <?php
				$post_args = array(
					'post_type' => 'dbb-que-hacemos',
					'posts_per_page' => 2,
					'order'=> 'ASC',  //DESC
					'orderby' => 'post_date', //'post_title'
				);
				$post_query = new WP_Query( $post_args );
				if ( $post_query->have_posts() ) : while ( $post_query->have_posts() ) : $post_query->the_post(); ?>
					<div>
			      		<img src="<?php the_post_thumbnail_url('large'); ?>" alt="<?php the_title(); ?>">
			      	</div>
				<?php endwhile; wp_reset_postdata(); endif; ?>
		      </div>
		   	</div>
	</section>-->

	<!--Opcion "Qué hacemos 2 - slider-defectos"-->
	<!--<section id="hacemos-2">
		<div class="container">
        	<div class="row valign-wrapper">
		      <div class="col s5">
		      	<div>
			      	<a href="<?php echo site_url('/nosotros'); ?>">
			      		<h2>Qué <span>HACEMOS</span></h2>
			      	</a>
			      	<p class="center-align">Somos una Agencia de Comunicación constituida por jóvenes profesionales, creadores de conceptos y constructores de proyectos novedosos, con una visión estratégica en medios digitales a nivel personal, social y empresarial. </p>	
		      	</div>
		      </div>
		      <div class="col s7">
		      	<div class="slider">
    				<ul class="slides">
			        <?php
					$post_args = array(
						'post_type' => 'dbb-que-hacemos',
						'posts_per_page' => 2,
						'order'=> 'ASC',  //DESC
						'orderby' => 'post_date', //'post_title'
					);
					$post_query = new WP_Query( $post_args );
					if ( $post_query->have_posts() ) : while ( $post_query->have_posts() ) : $post_query->the_post(); ?>
						<li>
					        <img src="<?php the_post_thumbnail_url('large'); ?>" alt="<?php the_title(); ?>">
					    </li>
					<?php endwhile; wp_reset_postdata(); endif; ?>
					</ul>
				</div>
		      </div>
		   	</div>
		</div>
	</section>-->

	<!--<section id="proyectos">
		<a href="<?php echo site_url('/proyectos'); ?>">
			<h2>Nuestro <span>TRABAJO</span></h2>
		</a>
		<div class="row proyectos-photo">
			<?php
			$post_args = array(
				'post_type' => 'dbb-proyectos',
				'posts_per_page' => 6,
				'order'=> 'ASC',  //DESC
				'orderby' => 'post_date', //'post_title'
			);
			$post_query = new WP_Query( $post_args );
			if ( $post_query->have_posts() ) : 
			$i = 1;
			while ( $post_query->have_posts() ) : $post_query->the_post(); ?>
				<div class="col s4 proyectos-block">
			    	<div class="proyectos-image valign-wrapper" style="background-image: url(<?php the_post_thumbnail_url('full'); ?>)">
						<div class="proyectos-description">
						<p><?php the_title(); ?></p>
			    			
			    			<a class="waves-effect waves-light btn btn-plus" href="#modal<?php echo $i; ?>"><i class="material-icons">add</i></a>
							  
							  <div id="modal<?php echo $i; ?>" class="modal modal-fixed-footer">
							    <div class="modal-content">
							      <h4><?php the_title(); ?></h4>
							      <img src="<?php the_post_thumbnail_url('large'); ?>" alt="<?php the_title(); ?>">
							      <p><?php the_content(); ?></p>
							    </div>
							    <div class="modal-footer">
							      <a href="#!" class="modal-action modal-close waves-effect waves-green btn">Cerrar</a>
							    </div>
							  </div>
			    		</div>
			    	</div>
			    </div>
				<?php if ($i == 6) { ?>
					<a href="<?php echo site_url('/proyectos'); ?>">
						<button class="btn mas-proyectos">Ver más</button>
					</a>
				<?php } ?>
			<?php $i++ ?>
			<?php endwhile; wp_reset_postdata(); endif; ?>
		</div>
	</section>-->

	<!--<section id="contacto">
		<div>
			<div class="container container-topb">
			<h2><span>CONTÁCTANOS</span></h2>
				<div id="formulario-contacto">
					<?php echo do_shortcode('[contact-form-7 id="87" title="Contact form 1"]'); ?>
				</div>
			</div>
		</div>
	</section>-->


	<!--HOMEPAGE-->

	<?php get_header(); ?>

	<?php get_template_part( 'template/template-portada' ); ?>

	<!--Opcion "Qué hacemos 3" - slider multimagen-->
	<section id="hacemos-3">
		<div class="container">
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
		<div class="container">
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
				if ( $post_query->have_posts() ) : while ( $post_query->have_posts() ) : $post_query->the_post(); ?>
					<div class="col s3">
						<div class="block-circle">
							<a href="<?php echo site_url('/servicios'); ?>">
								<div class="servicio-name">
									<h3><?php the_title(); ?></h3>
								</div>
								<div class="circle item">
									<img src="<?php the_post_thumbnail_url('large'); ?>"  alt="<?php the_title(); ?>" class="circle responsive-img">
								</div>
							</a>
							
						</div>
						<!--<div>
							<div class="content-servicios">
								<p>lorem...<br>
								lorem...<br>
								lorem..<br>
								lorem..<br>
								</p>
							</div>
							<button class="mas-servicios inactive">ver más</button>
						</div>-->
				    </div>
				<?php endwhile; wp_reset_postdata(); endif; ?>
			</div>		
		</div>
		<div class="accordion">
				<h4><?php the_title( ); ?></h4>
			</div>
			<div class="panel">
				<p>hola, hole</p>
			</div>
	</section>
	<section id="cotiza">
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
	<section id="proyectos">
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
									<h3><?php the_title(); ?></h3>
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
			while ( $post_query->have_posts() ) : $post_query->the_post(); ?>
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
			    				<img src="<?php the_post_thumbnail_url('large'); ?>" alt="<?php the_title(); ?>">
			    			</div>
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
			while ( $post_query->have_posts() ) : $post_query->the_post(); ?>
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
			    				<img src="<?php the_post_thumbnail_url('large'); ?>" alt="<?php the_title(); ?>">
			    			</div>
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
		<div class="container">
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
					<span class="block-cliente">
						<img src="<?php the_post_thumbnail_url('small'); ?>" alt="<?php the_title(); ?>">		
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
							<?php echo do_shortcode('[contact-form-7 id="87" title="Contact form 1"]'); ?>
						</div>
					</div>
					<div class="col s6">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sagittis ullamcorper dolor, eget blandit orci imperdiet sed. Donec faucibus, neque porttitor congue elementum.</p>
						<div class="contacto-social-link">
							<p>Síguenos por nuestras redes sociales:</p>
							<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
							<a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
							<a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
						</div>
						<p class="form-gray external-contact"><a href="/cotiza">Crea tu proyecto <i class="fa fa-external-link" aria-hidden="true"></i></a></p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<script>$('.collapsible').collapsible();</script>
<?php get_footer(); ?>




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
            $paquetes = get_metadata( $post_id, 'paquetes_meta_input', true );
            ?>
         <div class="col s3">
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
            <div>
               <?php if( $paquetes != "" ) : ?>
                  <p><?php echo $paquetes; ?></p>
               <?php else : ?>
                  <p>Conoce nuestros subservicios principales</p>
               <?php endif; ?>
            </div>
            <div class="servicios-lista-subs">
            	<div class="servicios-principales">
            		<?php if( $servicioa != "" ) : ?>
						<p><?php echo $servicioa; ?></p>
					<?php else : ?>
						<p>Conoce nuestros subservicios principales</p>
					<?php endif; ?>
            	</div>
            	<div class="accordion">
				    <a class="waves-light btn btn-plus"><i class="material-icons">add</i></a>
   				</div>
   				<div class="panel">
   				    <?php if( $serviciob != "" ) : ?>
   						<p><?php echo $serviciob; ?></p>
   					<?php else : ?>
   						<br>
   						<!--<a href="<?php the_permalink(); ?>">
   							<p class="link-little">Conoce más sobre este servicio</p>	
   						</a>-->
   					<?php endif; ?>
   				</div>
            </div>
         </div>
         <?php endwhile; wp_reset_postdata(); endif; ?>
      </div>




      //Functions.php

      //Servicios - Servicios secundarios
add_action( 'add_meta_boxes', 'servicios_secundarios_custom_metabox' );

function servicios_secundarios_custom_metabox(){
	add_meta_box( 'servicios_secundarios_meta', 'Servicios secundarios', 'display_servicios_secundarios_atributos', 'dbb-servicios', 'side', 'high');
}

function display_servicios_secundarios_atributos( $servicios_secundarios ){
	$serviciob = esc_html( get_post_meta( $servicios_secundarios->ID, 'servicios_secundarios_serviciob', true ) );
?>
	<label>Ingresa los subservicios secundarios:</label>
	<input type="text" name="servicios_secundarios_serviciob" value="<?php echo $serviciob; ?>" placeholder="Ej. Fotografía">
	<br>
	<small>Escritos de forma continua separados por una etiqueta <'br'> (sin las comillas)</small>
<?php

}

add_action( 'save_post', 'servicios_secundarios_save_metas', 10, 2 );
function servicios_secundarios_save_metas( $idservicios_secundarios, $servicios_secundarios ){
	//Comprobamos que es del tipo que nos interesa
	if ( $servicios_secundarios->post_type == 'dbb-servicios' ){
	//Guardamos los datos que vienen en el POST
		if ( isset( $_POST['servicios_secundarios_serviciob'] ) ){
			update_post_meta( $idservicios_secundarios, 'servicios_secundarios_serviciob', $_POST['servicios_secundarios_serviciob'] );
		}
	}
}