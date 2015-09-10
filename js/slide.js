$(document).ready(function() {
	
	// Expand Panel
	$("#open").click(function(){
		$("div#panel").slideDown("slow");
		$("div.tab ul.login li ").css("background","none repeat scroll 0 0 rgba(255, 255, 255,0.9)");
	});	
	
	// Collapse Panel
	$("#close").click(function(){
		$("div#panel").slideUp("slow");	
		$("div.tab ul.login li ").css("background","none repeat scroll 0 0 rgba(255, 255, 255,0)");
	});		
	
	// Switch buttons from "Log In | Register" to "Close Panel" on click
	$("#toggle a").click(function () {
		$("#toggle a").toggle();
	});		
		
});