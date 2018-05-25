<?php
	get_header();
	the_post();
?>
	<section id="page-privacidad">
		<div class="container container-topb">
			<div class="encabezado-pagina">
				<h2><?php the_title(); ?></h2>
				<p><?php the_content(); ?></p>
			</div>
		</div>
	</section>
<?php get_footer(); ?>