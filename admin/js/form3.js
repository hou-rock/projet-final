$(document).ready(function() {
			$('a.cars-window').click(function() {
				
				// Getting the variable's value from a link 
				var carsBox = $(this).attr('href');

				//Fade in the Popup and add close button
				$(carsBox).fadeIn(300);
				
				//Set the center alignment padding + border
				var popMargTop = ($(carsBox).height() + 24) / 2; 
				var popMargLeft = ($(carsBox).width() + 24) / 2; 
				
				$(carsBox
				).css({ 
					'margin-top' : -popMargTop,
					'margin-left' : -popMargLeft
				});
				
				// Add the mask to body
				$('body').append('<div id="mask"></div>');
				$('#mask').fadeIn(300);
				
				return false;
			});
			
			// When clicking on the button close or the mask layer the popup closed
			$('a.close, #mask').live('click', function() { 
			  $('#mask , .car-popup').fadeOut(300 , function() {
				$('#mask').remove();  
			}); 
			return false;
			});
		});	