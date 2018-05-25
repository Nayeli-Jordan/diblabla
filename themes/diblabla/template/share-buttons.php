<div class="share-btn-desktop click-to-toggle">
	<h4>Comparte el artículo</h4>
	<div id="share-buttons">
		<!-- Facebook -->
		<div class="social-share-block" data-href="<?php the_permalink(); ?>" data-layout="button" data-size="small" data-mobile-iframe="true">
			<a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>&amp;src=sdkpreparse">
				<i class="fa fa-facebook-square" aria-hidden="true"></i>
			</a>
		</div>
		<!-- Twitter -->
		<div class="social-share-block">
			<a href="https://twitter.com/share?url=<?php the_permalink(); ?>&amp;text=<?php the_title(); ?>" target="_blank">
			    <i class="fa fa-twitter-square" aria-hidden="true"></i>
			</a>
		</div>
		<!-- Whatsapp -->
		<!--<div class="social-share-block">
			<a href="whatsapp://send?text=<?php the_permalink(); ?>" data-action="share/whatsapp/share">
				<i class="fa fa-whatsapp" aria-hidden="true"></i>
			</a>
		</div> -->
	</div>
</div>