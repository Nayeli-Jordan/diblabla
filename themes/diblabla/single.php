<?php
	get_header();
	the_post();
?>
	<!--  Layout para entradas de Blog y generales -->
	<section id="page-blog-single">
		<div class="container container-topb">
			<nav class="nav-breadcrumbs">
			    <div class="nav-wrapper">
			      <div class="col s12">
			        <a href="<?php echo site_url(''); ?>" class="breadcrumb">Inicio</a>
			        <a href="<?php echo site_url('/blog-diblabla'); ?>" class="breadcrumb">Blog</a>
			        <a class="breadcrumb"><?php the_title(); ?></a>
			      </div>
			    </div>
		    </nav>
			<div class="row">
				<div class="col s8">
					<div class="container-blog-col1">
						<h3><?php the_title(); ?></h3>
						<img class="activator" src="<?php the_post_thumbnail_url('large'); ?>" alt="<?php the_title(); ?>">
						<p><?php the_content(); ?></p>	
						<?php get_template_part( 'template/share-buttons' ); ?>
						<?php comments_template(); ?>
					</div>
				</div>
				<div class="col s4">
					<div class="container-blog-col2">
						<?php if ( is_active_sidebar( 'blog_right_1' ) ) : ?>
							<div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
								<?php dynamic_sidebar( 'blog_right_1' ); ?>
							</div><!-- #primary-sidebar -->
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</section>
<?php get_footer(); ?>