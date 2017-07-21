doc = $(document) ;
doc.ready(function(){
	$("#section1").click(function(){
		side = $("#art3");
		side.remove().delay(1000).fadeOut( "slow", function() {
    		// Animation complete.
  		});
	});	
});
newArt3 = 