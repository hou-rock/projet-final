$(document).ready(function(){ 
		
		// Add the value of "Search..." to the input field
		$("#rechercher").val("Rechercher...");
		
		// When you click on #search
		$("#rechercher").focus(function(){
			
			// If the value is equal to "Search..."
			if($(this).val() == "Rechercher...") {
				// remove all the text
				$(this).val("");	
			}
			
		});
		
		// When the focus on #search is lost
		$("#rechercher").blur(function(){
			
			// If the input field is empty
			if($(this).val() == "") {
				// Add the text "Search..."
				$(this).val("Rechercher...");	
			}
			
		});
		
		$("#search-submit").hover(function(){
			$(this).addClass("hover");
		});

	});
	
$(document).ready(function(){ 
		
		// Add the value of "Search..." to the input field
		$("#news").val("Mail");
		
		// When you click on #search
		$("#news").focus(function(){
			
			// If the value is equal to "Search..."
			if($(this).val() == "Mail") {
				// remove all the text
				$(this).val("");	
			}
			
		});
		
		// When the focus on #search is lost
		$("#news").blur(function(){
			
			// If the input field is empty
			if($(this).val() == "") {
				// Add the text "Search..."
				$(this).val("Mail");	
			}
			
		});
		
		$("#search-submit").hover(function(){
			$(this).addClass("hover");
		});

	});	