doc = $(document) ;
doc.ready(function(){
	$("#tg4Img1").click(function(){
		side1 = $("#tg4-content1");
		side1.fadeOut( "slow", function() {
    		// Animation complete.
  		}).delay(200).slideUp("slow",function(){});
  		side2 = $("#tg4-content2");
		side2.slideDown("fast",function(){}).css("display", "flex");
	});
	$("#tg4Img2").click(function(){
		side1 = $("#tg4-content1");
		side1.fadeOut( "slow", function() {
    		// Animation complete.
  		}).delay(200).slideUp("slow",function(){});
  		side2 = $("#tg4-content2");
		side2.slideDown("fast",function(){}).css("display", "flex");
	});
	$("#tg4Img3").click(function(){
		side1 = $("#tg4-content1");
		side1.fadeOut( "slow", function() {
    		// Animation complete.
  		}).delay(200).slideUp("slow",function(){});
  		side2 = $("#tg4-content2");
		side2.slideDown("fast",function(){}).css("display", "flex");
	});
	$("#tg4Img4").click(function(){
		side1 = $("#tg4-content1");
		side1.fadeOut( "slow", function() {
    		// Animation complete.
  		}).delay(200).slideUp("slow",function(){});
  		side2 = $("#tg4-content2");
		side2.slideDown("fast",function(){}).css("display", "flex");
	});
});
