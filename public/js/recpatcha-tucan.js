doc.ready(function() {
    $("#enviar-contacto").attr("disabled","disabled");
    var ran1=0;
    var ran2=0;
    var rant=0;
    ran1=Math.floor(Math.random()*10);
    ran2=Math.floor(Math.random()*10);
    rant=ran1+ran2;
    $("#ebcaptchatext").text("Cuanto es "+ran1+" + "+ran2);
    $("#ebcaptchainput").keyup(function(e){
        var nr=$(this).val();
        if(nr==rant){
            $("#enviar").removeAttr("disabled");
        }
        else{
            $("#enviar-contacto").attr("disabled","disabled");
        }
    });
    $("#enviar-contacto").click(function(){
        $("#form1").submit();
    });
});