<?php
	get_header();
	the_post();
?>
	<!--<?php get_template_part( 'template/template-portada' ); ?>-->

	<section id="page-proyectos">
		<div class="container container-topb">
			<div class="encabezado-pagina center-align wow fadeInUp" data-wow-delay="0.2s">
				<h2><?php the_title(); ?></h2>
				<p><?php the_content(); ?></p>
			</div>
		</div>
	</section>
	<section id="clientes">
		<div class="container">
			<a href="<?php echo site_url('/proyectos'); ?>">
				<h2>Nuestros <span>CLIENTES</span></h2>
			</a>
			<div class="row clientes-photo">
				<?php
				$post_args = array(
					'post_type' => 'dbb-clientes',
					'posts_per_page' => -1,
					'order'=> 'ASC',  //DESC
					'orderby' => 'post_date', //'post_title'
				);
				$post_query = new WP_Query( $post_args );
				if ( $post_query->have_posts() ) : while ( $post_query->have_posts() ) : $post_query->the_post(); ?>
					<span class="block-cliente">
						<img class="wow jackInTheBox" data-wow-delay="0.1s" src="<?php the_post_thumbnail_url('small'); ?>" alt="<?php the_title(); ?>">		
					</span>
				<?php endwhile; wp_reset_postdata(); endif; ?>
			</div>		
		</div>
	</section>
	<section id="proyectos" class="proyectos-in-page">
		<a href="<?php echo site_url('/proyectos'); ?>">
			<h2>Nuestros<span>PROYECTOS</span></h2>
		</a>
		<div class="row">
	      		<?php
				$post_args = array(
					'post_type' => 'dbb-proyectos',
					'posts_per_page' => -1,
					'order'=> 'ASC',  //DESC
					'orderby' => 'post_date', //'post_title'
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

					<div class="col s4 proyectos-block full-window-block">
				    	<div class="proyectos-image" style="background-image: url(<?php the_post_thumbnail_url('large'); ?>)">
							<div class="proyectos-description valign-wrapper">
								<a class="title-modal-trigger" href="#modal<?php echo $i; ?>"><h3><?php the_title(); ?></h3></a>
				    		</div>	
						   <!-- Modal Trigger -->
						  <a class="waves-effect waves-light btn btn-plus" href="#modal<?php echo $i; ?>"><i class="material-icons">add</i></a>

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
				    	</div>
				    </div>
					<?php $i++ ?>
				<?php endwhile; wp_reset_postdata(); endif; ?>
	      	</div>
	</section>

<?php get_footer(); ?>