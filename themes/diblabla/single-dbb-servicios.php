<?php
	get_header();
	the_post();
	global $post;
?>
<?php get_template_part( 'template/template-portada' ); ?>

	<section id="subservicio">
	   <div class="container container-topb">
	      <h2 class="blue-title"><?php the_title(); ?></h2>
		  <p><?php the_content(); ?></p>
		  <br>
		  <div class="row">
		  	<?php   // Get terms for post
			 $terms = get_the_terms( $post->ID , 'subservicios' );
			 // Loop over each item since it's an array
			 if ( $terms != null ){
			 foreach( $terms as $term ) {
			 // Print the name method from $term which is an OBJECT

			 echo '<div class="col s6 wow zoomIn" data-wow-delay="0.2s">
			 <div class="subservicio-block" style="background-image: url(' . THEMEPATH . '/images/subservicios/' . $term->slug . '.jpg)">
			 <p class="valign-wrapper">' . $term->name . '</p>
			 </div>
			 <div class="sub-paquetes">
			 <p class="sub-description">' . $term->description . '</p>
			 </div>
			 </div>';
			 // Get rid of the other data stored in the object, since it's not needed
			 unset($term);
			} } ?>
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