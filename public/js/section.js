doc = $(document) ;
doc.ready(function(){
	$("#section1").click(function(){
		side = $("#art3");
		side.fadeOut( "slow", function() {
    		// Animation complete.
  		}).delay(200).slideUp("slow",function(){});
	});	
});