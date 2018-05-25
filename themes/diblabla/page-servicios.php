<?php
	get_header();
	the_post();
?>
	<!--<?php get_template_part( 'template/template-portada' ); ?>-->

	<section id="page-servicios">
		<div class="container container-topb">
			<div class="encabezado-pagina center-align wow fadeInUp" data-wow-delay="0.2s">
				<h2><?php the_title(); ?></h2>
				<p><?php the_content(); ?></p>
			</div>
			<div class="row">
				<?php
				$post_args = array(
					'post_type' => 'dbb-servicios',
					'posts_per_page' => -1,
					'order'=> 'ASC',  //DESC
					'orderby' => 'post_date', //'post_title'
				);
				$post_query = new WP_Query( $post_args );
				if ( $post_query->have_posts() ) : while ( $post_query->have_posts() ) : $post_query->the_post(); ?>
					<div class="col s6">
						<div class="col-container">
							<div class="card wow zoomIn" data-wow-delay="0.2s">
							    <div class="card-image waves-effect waves-block waves-light">
							      <a href="<?php the_permalink(); ?>">
							      	<img class="activator" src="<?php the_post_thumbnail_url('large'); ?>" alt="<?php the_title(); ?>">
							      </a>
							    </div>
							    <div class="card-content">
							      <span class="card-title activator grey-text text-darken-4">
							      	<a href="<?php the_permalink(); ?>">
							      		<?php the_title(); ?>
							      	</a>
							      </span>
							      <p><?php the_excerpt(); ?></p>
							    </div>
							</div>
						</div>
					</div>
				<?php endwhile; wp_reset_postdata(); endif; ?>
			</div>	
			<div class="center-align container-only-b">
			  	<a href="<?php echo site_url('/cotiza'); ?>">
	               <h2>Crea <span>TU PROYECTO</span></h2>
	            </a>
	            <a href="<?php echo site_url('/cotiza'); ?>">
	            <button class="btn">Aquí</button>
	            </a>
			  </div>
		</div>
	</section>
<?php get_footer(); ?>