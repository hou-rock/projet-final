$(document).ready(function () {
		
		var colour = $("#overlay");
		var content = $("#hover");
		
		content.hide();
		colour.hide();	
			
		$(".presentation").hover(function() {
			content.stop().show().css({ "left" : "-250px","opacity":1 }).animate({left : 0}, 300);
			colour.stop().fadeTo(500, .7)
		}
		,function() {
			content.stop().animate({left : 0,"opacity":0}, 300);
			colour.stop().fadeTo(500, 0)
		});
	});
	
	$(document).ready(function () {
		
		var colour1 = $("#overlay1");
		var content1 = $("#hover1");
		
		content1.hide();
		colour1.hide();	
			
		$(".automobiles").hover(function() {
			content1.stop().show().css({ "left" : "-250px","opacity":1 }).animate({left : 0}, 300);
			colour1.stop().fadeTo(500, .7)
		}
		,function() {
			content1.stop().animate({left : 0,"opacity":0}, 300);
			colour1.stop().fadeTo(500, 0)
		});
	});
	
	$(document).ready(function () {
		
		var colour2 = $("#overlay2");
		var content2 = $("#hover2");
		
		content2.hide();
		colour2.hide();	
			
		$(".gallery").hover(function() {
			content2.stop().show().css({ "left" : "-250px","opacity":1 }).animate({left : 0}, 300);
			colour2.stop().fadeTo(500, .7)
		}
		,function() {
			content2.stop().animate({left : 0,"opacity":0}, 300);
			colour2.stop().fadeTo(500, 0)
		});
	});
	
	$(document).ready(function () {
		
		var colour3 = $("#overlay3");
		var content3 = $("#hover3");
		
		content3.hide();
		colour3.hide();	
			
		$(".youtube").hover(function() {
			content3.stop().show().css({ "left" : "-250px","opacity":1 }).animate({left : 0}, 300);
			colour3.stop().fadeTo(500, .7)
		}
		,function() {
			content3.stop().animate({left : 0,"opacity":0}, 300);
			colour3.stop().fadeTo(500, 0)
		});
	});