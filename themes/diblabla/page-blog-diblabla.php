<?php
	get_header();
	the_post();
?>

	<?php get_template_part( 'template/template-portada' ); ?>

	<section id="page-blog">
		<div class="container container-only-b">
			<!--<div class="encabezado-pagina center-align">
				<h2><?php the_title(); ?></h2>
				<p><?php the_content(); ?></p>
			</div>-->
			<div class="row container-only-t">
				<?php
				$post_args = array(
					'post_type' => 'post',
					'posts_per_page' => -1,
					'order'=> 'ASC',  //DESC
					'orderby' => 'post_date', //'post_title'
				);
				$post_query = new WP_Query( $post_args );
				if ( $post_query->have_posts() ) : while ( $post_query->have_posts() ) : $post_query->the_post(); ?>
					<div class="col s4">
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
							      <div class="blog-excerpt">
							      	<p><?php the_excerpt(); ?></p>
							      </div>
							      <a href="<?php the_permalink(); ?>" class="link-vermas"><p>Ver más</p></a>
							    </div>
							</div>
						</div>
					</div>
				<?php endwhile; wp_reset_postdata(); endif; ?>
			</div>	
		</div>
	</section>
<?php get_footer(); ?>

