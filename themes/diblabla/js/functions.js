var $=jQuery.noConflict();

(function($){
	"use strict";
	$(function(){

		/*------------------------------------*\
			#GLOBAL
		\*------------------------------------*/

		$(document).ready(function() {
			new WOW().init();
			/*$('.fixed-action-btn').openFAB();
			$('.fixed-action-btn').closeFAB();
			$('.fixed-action-btn.toolbar').openToolbar();
			$('.fixed-action-btn.toolbar').closeToolbar();*/
			$('.parallax').parallax();
			$('.slider').slider();
			$('.slider.slider-proyectos').slider('pause');
			//Oculta abajo para evitar el fullwidth100 en proyectos
			//proyetoImpar(); 
			// the "href" attribute of the modal trigger must specify the modal ID that wants to be triggered
			$('.carousel').carousel();
			autoplay();   
			function autoplay() {
			    $('.carousel').carousel('next');
			    setTimeout(autoplay, 4000);
			}
			$('.tap-target').tapTarget('open');
			  $('.tap-target').tapTarget('close');
			$('.modal').modal();
			$('.dropdown-button').dropdown('open');
			$('.collapsible').collapsible();
			jsAccordion();
			$(".button-collapse").sideNav();

			// Video intro
			if ($("#homeVideo")[0]){
				var promise = document.querySelector('video').play();
				if (promise !== undefined) {
					promise.then(_ => {
						// Autoplay started!
						$('#logo-diblabla').addClass('hide');
						$('#portada-video').addClass('opacity-0').removeClass('opacity-1');
					}).catch(error => {
						// Autoplay was prevented.
						$('#controls-play').removeClass('hide').addClass('block');
						$('#controls-stop').removeClass('block').addClass('hide');
					});
				}	
				//Al terminar el video
				$('#homeVideo').on('ended',function(){
					$('#portada-video').addClass('opacity-1').removeClass('opacity-0');
					$('#controls-play').removeClass('hide').addClass('block');
					$('#controls-stop, #logo-diblabla').removeClass('block').addClass('hide');
				});							
			} else {
				console.log('No hay video');
			}
			
   		});

		/*$(window).on('resize', function(){
			footerBottom();
		});

		$(document).scroll(function() {
			headerFixedScroll();
		});*/

		$('.btn-plus').on('click touchstart', function(e){
			$('.slider').slider('pause');
		});

		$('.btn-close-nav').on('click touchstart', function(e){
			$('.slide-out').sideNav('destroy');
		});

		// Reproducción y Audio video intro
		if ($("#homeVideo")[0]){
			$('#controls-play').on('click', function(e){
				$('#controls-play, #logo-diblabla').removeClass('block').addClass('hide');
				$('#controls-stop').removeClass('hide').addClass('block');
				document.getElementById('homeVideo').play();
				$('#portada-video').addClass('opacity-0').removeClass('opacity-1');
			});
			$('#controls-stop').on('click', function(e){
				$('#controls-stop').removeClass('block').addClass('hide');
				$('#controls-play, #logo-diblabla').removeClass('hide').addClass('block');
				document.getElementById('homeVideo').pause();
				document.getElementById('homeVideo').currentTime = 0;
				$('#portada-video').addClass('opacity-1').removeClass('opacity-0');
			});
			// Audio video intro
			$('#muteButton').on('click', function(e){
				$('#muteButton').removeClass('block').addClass('hide');
				$('#unmuteButton').removeClass('hide').addClass('block');
				$('video').prop('muted', true);
			});
			unmuteButton.addEventListener('click', function() {
				$('#unmuteButton').removeClass('block').addClass('hide');
				$('#muteButton').removeClass('hide').addClass('block');
				homeVideo.muted = false;
			});
		}

		$(document).on('change', '#nf-field-58-0', function() {
			console.log('Checkbox change');
			if($(this).prop('checked') == true) {
		        console.log("Checked Box Selected");
		        $('.block-subservicio-options-1').addClass('block').removeClass('hide');
		    } else {
		        console.log("Checked Box deselect");
		        $('.block-subservicio-options-1').addClass('hide').removeClass('block');
		    }
		});

		$(document).on('change', '#nf-field-59-0', function() {
			console.log('Checkbox change');
			if($(this).prop('checked') == true) {
		        console.log("Checked Box Selected");
		        $('.block-subservicio-options-2').addClass('block').removeClass('hide');
		    } else {
		        console.log("Checked Box deselect");
		        $('.block-subservicio-options-2').addClass('hide').removeClass('block');
		    }
		});

		$(document).on('change', '#nf-field-60-0', function() {
			console.log('Checkbox change');
			if($(this).prop('checked') == true) {
		        console.log("Checked Box Selected");
		        $('.block-subservicio-options-3').addClass('block').removeClass('hide');
		    } else {
		        console.log("Checked Box deselect");
		        $('.block-subservicio-options-3').addClass('hide').removeClass('block');
		    }
		});

		$(document).on('change', '#nf-field-61-0', function() {
			console.log('Checkbox change');
			if($(this).prop('checked') == true) {
		        console.log("Checked Box Selected");
		        $('.block-subservicio-options-4').addClass('block').removeClass('hide');
		    } else {
		        console.log("Checked Box deselect");
		        $('.block-subservicio-options-4').addClass('hide').removeClass('block');
		    }
		});

		// $( ".mas-servicios.inactive" ).click(function() {
			
		// 		/*$( ".content-servicios" ).animate({
		// 	    height: "100px"
		// 	  }, 1500 );*/
		// 		$('.mas-servicios').addClass('active').removeClass('inactive');
			
		  
		// });
		// $( ".mas-servicios.active" ).click(function() {
			
		// 		/*$( ".content-servicios" ).animate({
		// 	    height: "50px"
		// 	  }, 1500 );*/
		// 		$('.mas-servicios').removeClass('active').addClass('inactive');
			
		  
		// });

	});
})(jQuery);

function proyetoImpar(){
	var ElementosProyectos = $(".proyectos-block"); 
	//alert ("Hay " + ElementosProyectos.length + " elementos de la clase mitexto");
	//console.log(ElementosProyectos);
	var BloqueImpar = ElementosProyectos.length; 
	//console.log(BloqueImpar);
	if (ElementosProyectos.length % 2 == 1) {
		//console.log("impar");
	$('.proyectos-block:last-child').addClass('full-width100')
	}
}

function jsAccordion(){
    var acc = document.getElementsByClassName("accordion");
    var i;

    for (i = 0; i < acc.length; i++) {
        acc[i].onclick = function(){
            /* Toggle between adding and removing the "active" class,
            to highlight the button that controls the panel */
            this.classList.toggle("active");

            /* Toggle between hiding and showing the active panel */
            var panel = this.nextElementSibling;
            if (panel.style.display === "block") {
                panel.style.display = "none";
            } else {
                panel.style.display = "block";
            }
        }
    }
}

