
(function(){


	$.fn.smint = function( options ) {

		var settings = $.extend({
			'scrollSpeed'  : 500,
			'mySelector'     : 'div'}, options);

		// adding a class to users div
		$(this).addClass('smint');

		
		
		//Set the variables needed
		var optionLocs = new Array();
		var lastScrollTop = 0;
		var menuHeight = $(".smint").height();
		var $this = $(this);
		var smint = $('.smint');
        var smintA = $('.smint a');
        var myOffset = smint.height();


		if ( settings.scrollSpeed ) {
				var scrollSpeed = settings.scrollSpeed
			}

		if ( settings.mySelector ) {
				var mySelector = settings.mySelector
		};


		return smintA.each( function(index) {
            
			var id = $(this).attr('href').split('#')[1];

			

			if (!$(this).hasClass("extLink")) {
				$(this).attr('id', id);
			}

			
			//Fill the menu
			optionLocs.push(Array(
				$(mySelector+"."+id).position().top-menuHeight, 
				$(mySelector+"."+id).height()+$(mySelector+"."+id).position().top, id)
			);

			///////////////////////////////////

			// get initial top offset for the menu 
			var stickyTop = smint.offset().top;	

			// check position and make sticky if needed
			var stickyMenu = function(direction){

				// current distance top
				var scrollTop = $(window).scrollTop()+myOffset; 

				// if we scroll more than the navigation, change its position to fixed and add class 'fxd', otherwise change it back to absolute and remove the class
				if (scrollTop > stickyTop+myOffset) { 
					smint.css({ 'position': 'fixed', 'top':0, 'left':0 }).addClass('fxd');	
				} else {
					smint.css( 'position', 'relative').removeClass('fxd'); 
				}   

				// Check if the position is inside then change the menu
				// Courtesy of Ryan Clarke (@clarkieryan)
				if(optionLocs[index][0] <= scrollTop && scrollTop <= optionLocs[index][1]){	
					if(direction == "up"){
						$("#"+id).addClass("active");
						$("#"+optionLocs[index+1][2]).removeClass("active");
					} else if(index > 0) {
						$("#"+id).addClass("active");
						$("#"+optionLocs[index-1][2]).removeClass("active");
					} else if(direction == undefined){
						$("#"+id).addClass("active");
					}
					$.each(optionLocs, function(i){
						if(id != optionLocs[i][2]){
							
							$("#"+optionLocs[i][2]).removeClass("active");
						}
					});
				}
			};

			// run functions
			stickyMenu();

			// run function every time you scroll
			$(window).scroll(function() {
				//Get the direction of scroll
				var st = $(this).scrollTop()+myOffset;
				if (st > lastScrollTop) {
				    direction = "down";
				} else if (st < lastScrollTop ){
				    direction = "up";
				}
				lastScrollTop = st;
				stickyMenu(direction);

				// Check if at bottom of page, if so, add class to last <a> as sometimes the last div
				// isnt long enough to scroll to the top of the page and trigger the active state.

				if($(window).scrollTop() + $(window).height() == $(document).height()) {
	       			smintA.removeClass('active')
	       			$(".smint a:not('.extLink'):last").addClass('active')
	       			
   				} else {
   					smintA.last().removeClass('active')
   				}
			});

			///////////////////////////////////////
    		

        
        	$(this).on('click', function(e){
				// gets the height of the users div. This is used for off-setting the scroll so the menu doesnt overlap any content in the div they jst scrolled to
				var myOffset = smint.height();   

        		// stops hrefs making the page jump when clicked
				e.preventDefault();

				
				// get the hash of the button you just clicked
				var hash = $(this).attr('href').split('#')[1];


				// gets the distance from top of the div class that matches your button id minus the height of the nav menu. This means the nav wont initially overlap the content.
				if (smint.hasClass('fxd')) {
					var goTo =  $(mySelector+'.'+ hash).offset().top-myOffset;
				} else {
					var goTo =  $(mySelector+'.'+ hash).offset().top-myOffset*2;
				}

				// Scroll the page to the desired position!
				$("html, body").stop().animate({ scrollTop: goTo }, scrollSpeed);

				// if the link has the '.extLink' class it will be ignored 
		 		// Courtesy of mcpacosy ‏(@mcpacosy)
				if ($(this).hasClass("extLink"))
                {
                    return false;
                }

               

			});	


			//This lets yo use links in body text to scroll. Just add the class 'intLink' to your button and it will scroll



			$('.intLink').on('click', function(e){
				var myOffset = smint.height();   

        		
				e.preventDefault();

				
				
				var hash = $(this).attr('href').split('#')[1];


				if (smint.hasClass('fxd')) {
					var goTo =  $(mySelector+'.'+ hash).position().top-myOffset;
				} else {
					var goTo =  $(mySelector+'.'+ hash).position().top-myOffset*2;
				}

				
				$("html, body").stop().animate({ scrollTop: goTo }, scrollSpeed);

				
				if ($(this).hasClass("extLink"))
                {
                    return false;
                }



			});	
		});


	};


})();


$(document).ready(function(){

    var slideShow = $('#slideShow'),
        ul = slideShow.find('ul'),
        li = ul.find('li'),
        cnt = li.length;

    // As the images are positioned absolutely, the last image will be shown on top.
    // This is why we force them in the correct order by assigning z-indexes:

    updateZindex();

    if($.support.transform){

        // Modern browsers with support for css3 transformations

        li.find('img').css('rotate',function(i){
            // Rotating the images counter-clockwise
            return (-90*i) + 'deg';
        });

        // Binding a custom event. the direction and degrees parameters
        // are passed when the event is triggered later on in the code.

        slideShow.bind('rotateContainer',function(e,direction,degrees){

            // Zooming in the slideshow:

            slideShow.animate({
                width		: 510,
                height		: 510,
                marginTop	: 0,
                marginLeft	: 0
            },'fast',function(){

                if(direction == 'next'){

                    // Moving the topmost image containing Li at
                    // the bottom after a fadeOut animation

                    $('li:first').fadeOut('slow',function(){
                        $(this).remove().appendTo(ul).show();
                        updateZindex();
                    });
                }
                else {

                    // Showing the bottommost Li element on top
                    // with a fade in animation. Notice that we are
                    // updating the z-indexes.

                    var liLast = $('li:last').hide().remove().prependTo(ul);
                    updateZindex();
                    liLast.fadeIn('slow');
                }

                // Rotating the slideShow. css('rotate') gives us the
                // current rotation in radians. We are converting it to
                // degrees so we can add +90 or -90.

                slideShow.animate({
                    rotate:Math.round($.rotate.radToDeg(slideShow.css('rotate'))+degrees) + 'deg'
                },'slow').animate({
                    width		: 490,
                    height		: 490,
                    marginTop	: 10,
                    marginLeft	: 10
                },'fast');
            });
        });

        // By triggering the custom events below, we can
        // show the previous / next images in the slideshow.

        slideShow.bind('showNext',function(){
            slideShow.trigger('rotateContainer',['next',90]);
        });

        slideShow.bind('showPrevious',function(){
            slideShow.trigger('rotateContainer',['previous',-90]);
        });
    }


    else{
        // Fallback for Internet Explorer and older browsers

        slideShow.bind('showNext',function(){
            $('li:first').fadeOut('slow',function(){
                $(this).remove().appendTo(ul).show();
                updateZindex();
            });
        });

        slideShow.bind('showPrevious',function(){
            var liLast = $('li:last').hide().remove().prependTo(ul);
            updateZindex();
            liLast.fadeIn('slow');
        });
    }

    // Listening for clicks on the arrows, and
    // triggering the appropriate event.

    $('#previousLink').click(function(){
        if(slideShow.is(':animated')){
            return false;
        }

        slideShow.trigger('showPrevious');
        return false;
    });

    $('#nextLink').click(function(){
        if(slideShow.is(':animated')){
            return false;
        }

        slideShow.trigger('showNext');
        return false;
    });

    // This function updates the z-index properties.
    function updateZindex(){

        // The CSS method can take a function as its second argument.
        // i is the zero-based index of the element.

        ul.find('li').css('z-index',function(i){
            return cnt-i;
        });
    }

});