$(function(){

	// menu form mobile

	$('.btn-mob').on('click', function(){

		if ($(this).hasClass('active')) {

			$(this).removeClass('active');

			$('.menu_mobile').animate({height: 'hide', opacity: 'hide'});

		} else {

			$(this).addClass('active');

			$('.menu_mobile').animate({height: 'show', opacity: 'show'});

		}

	});



	// owl carousel

	$('.advants').owlCarousel({

		loop: true,

		margin: 60,

		nav: true,

		responsive: {

			0: {

				items: 1

			},

			620: {

				items: 1

			},

			680: {

				items: 3,

			},

			768: {

				items: 5,

				margin: 30,

				nav: false

			},

			1000: {

				items: 5,

				nav: false

			}

		}

	});



	// resize

	function resizeContent(){

		var width = $(window).width();

		if (width < 664) {

			$('.ls-footer').before( $('.fm-footer') );

		} else {

			$('.ls-footer').after( $('.fm-footer') );

		}

	}

	$(window).resize(resizeContent);

	$(document).ready(resizeContent);



	// Till before is

	// Gallery ( Photo )

	$('.popup-gallery').magnificPopup({

		delegate: 'a',

		type: 'image',

		tLoading: 'Loading image #%curr%...',

		mainClass: 'mfp-img-mobile',

		gallery: {

			enabled: true,

			navigateByImgClick: true,

			preload: [0,1] // Will preload 0 - before current, and 1 after the current image

		},

		image: {

			tError: '<a href="%url%">The image #%curr%</a> could not be loaded.'

		}

	});



	$('.pag a').on('click', ScrollToReview);



	$('.pag-next').bind('click', function(){

	    var nextElement = $('.pag.active').next('li').find('a[data-toggle="tab"]');

	    if(nextElement.html()===undefined){

	        $('.pag').first().tab('show');

	    }else{

	        nextElement.tab('show');

	    }

	    ScrollToReview();

		return false;

	});



	$('.pag-prev').bind('click', function(){

	    var previousElement = $('.pag.active').prev('li').find('a[data-toggle="tab"]');

	    if(previousElement.html()===undefined){

	        $('.pag').last().tab('show');

	    }else{

	        previousElement.tab('show');

	    }

	    ScrollToReview();

		return false;

	});



	function ScrollToReview(){

		$('html, body').animate({

	        scrollTop: $("#review-block").offset().top - 50

	    }, 1500);

	}



	$('.add_rew').on('submit', function(){

		if ( $(this).find('input').val() ) {

			alert('Спасибо за Ваш комментарий, скоро он появится на сайте.');

		}

		return false;

	});



	// $(".cnt_form").submit(function(e) {

	// 	$.ajax({

	// 		   type: "POST",

	// 		   url: $(this).attr('action'),

	// 		   data: $('.cnt_form').serialize(),

	// 		   success: function(data)

	// 		   {

	// 			   alert(data);

	// 		   }

	// 		 });

	// 	e.preventDefault();

	// });


	    $('#form').submit(function (event) {
       event.preventDefault();
       var themes =  $(this).find('input[name=themes]').val();
       if(themes.length==0){
       		$(this).find('input[name=themes]').val('Страница отзыва');
       }
        console.log($(this).find('input[name=themes]').val());
 
       $.ajax({
           url: $(this).attr('action'),
           type: 'POST',
           data: {
               name: $(this).find('input[name=name]').val(),
               mail: $(this).find('input[name=email]').val(),
               themes: $(this).find('input[name=themes]').val(),
               info: $(this).find('textarea[name=message]').val()
           },
           success: function(response) {
               $('#form').find('input[name=name]').val('');
               $('#form').find('input[name=email]').val('');
               $('#form').find('input[name=themes]').val('');
               $('#form').find('textarea[name=message]').val('');
               alert('Ваше сообщение отправлено. Спасибо');
               console.log(response);
           }
       })
    
    });







    var today = new Date(),

        ts = new Date( today.getFullYear(), today.getMonth(), today.getDate() + 7),

        newYear = true;



    $('#countdown').countdown({

        timestamp	: ts,

        callback	: function(days, hours, minutes, seconds){



            var message = "";



            message += days + " <i>дней</i> " + ( days==1 ? '':'' ) + "";

            message += hours + "" + ( hours==1 ? '':':' ) + "";

            message += minutes + "" + ( minutes==1 ? '':':' ) + "";

            message += seconds + " " + ( seconds==1 ? '':' ' ) + " ";



            if(newYear){

                message += "";

            }

            else {

                message += "";

            }

        }

    });

});