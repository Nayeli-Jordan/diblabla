		<footer>
			<div id="footer">
				<div class="row container">
					<div class="col s4">
						<h3>Conócenos</h3>
						<a href="<?php echo site_url('/nosotros'); ?>"><h4>Nosotros</h4></a>
						<a href="<?php echo site_url('/servicios'); ?>"><h4>Servicios</h4></a>
						<a href="<?php echo site_url('/proyectos'); ?>"><h4>Clientes</h4></a>
						<a href="<?php echo site_url('/proyectos'); ?>"><h4>Proyectos</h4></a>
					</div>
					<div class="col s4">
						<h3>Contáctanos</h3>
						<a href="https://www.facebook.com/Diblabla/?ref=bookmarks" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
						<a href="https://www.instagram.com/diblablacomunicacion/?hl=es" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
						<a href="https://www.youtube.com/channel/UCODkX4cAU8EZASKbfgzdSdw?view_as=subscriber" target="_blank"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
						<a href="#contacto"><h4>Contacto</h4></a>
						<a href="<?php echo site_url('/cotiza'); ?>"><h4>Crea tu proyecto</h4></a>
					</div>
					<div class="col s4">
						<h3>Suscríbete</h3>
						<!-- MailChimp Newsletter-->
						<link href="//cdn-images.mailchimp.com/embedcode/slim-10_7.css" rel="stylesheet" type="text/css">
						<style type="text/css">
							#mc_embed_signup{clear:left; font:14px Helvetica,Arial,sans-serif; }
							/* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
							   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
							   #mc_embed_signup input{border: none!important;     border-radius: 0px!important; border-bottom: 1px solid #494949!important;}
							   #mc_embed_signup form{padding: 0!important;}
							   #mc_embed_signup input.email{width: 100%!important;}
						</style>
						<div id="mc_embed_signup">
						<form action="//diblabla.us16.list-manage.com/subscribe/post?u=ef32d6c6aa004a5a0712fb5fa&amp;id=7dbe3a8de9" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
						    <div id="mc_embed_signup_scroll">
							
							<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Email" required>
						    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
						    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_ef32d6c6aa004a5a0712fb5fa_7dbe3a8de9" tabindex="-1" value=""></div>
						    <div class="clear"><input type="submit" value="Suscribirme" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
						    </div>
						</form>
						</div>
						<!--End mc_embed_signup newsletter-->
					</div>
				</div>	
			</div>
			<div id="subfooter" class="center-align">
				<p>© Diblabla <?php echo date ("Y"); ?> | <a href="<?php echo site_url('/privacidad'); ?>">Aviso de privacidad</a> | <a href="https://www.behance.net/lizbethjorc2ea" target="_blank">LJDevelopment</a></p>
				
			</div>
		</footer>
		</div><!--Cierra main body-->
		<?php wp_footer(); ?>
		<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
		<script type="text/javascript" src="<?php echo THEMEPATH; ?>js/bin/materialize.min.js" ></script>
		<script type="text/javascript" src="<?php echo THEMEPATH; ?>js/wow.js" ></script>
		<script type="text/javascript" src="<?php echo THEMEPATH; ?>js/functions.js"></script>
	</body>
</html>