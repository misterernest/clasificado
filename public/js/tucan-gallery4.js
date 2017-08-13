//Variables de Vender
var img_comprar = "images/category/1.png";
var txt_h2_comprar="VENDER";
var txt_p_comprar = "Si estás interesado en vender tu auto o camioneta de lujo, te ofrecemos una gran experiencia de más de 25 años comercializando en el sector automotriz Colombiano, Logrando la consecución de los  clientes para carros de lujo y haciendo realidad las negociaciones.";
var txt_a_comprar = "VENDER AHORA";
var href_a_comprar = "#button-contacto";
var const_array_div1=[img_comprar, txt_h2_comprar, txt_p_comprar, txt_a_comprar, href_a_comprar];
//Variables de Comprar
var img_vender = "images/category/2.png";
var txt_h2_vender="COMPRAR";
var txt_p_vender = "Si estás interesado en adquirir o comprar un auto o camioneta de lujo, está es tu oportunidad de conseguirlo. Se identifica el carro de lujo según especificaciones soñadas, además se realiza toda la gestión de financiamiento y aseguramiento de los vehículos.";
var txt_a_vender = "COMPRAR AHORA";
var href_a_vender = "#form-contact";
var const_array_div2=[img_vender, txt_h2_vender, txt_p_vender, txt_a_vender, href_a_vender];

//Variables de ALQUILA
var img_alquilar = "images/category/3.png";
var txt_h2_alquilar="ALQUILAR";
var txt_p_alquilar = "Un auto de lujo de alquiler promete una experiencia inolvidable de vida, donde vivirás la experiencia de estatus & prestigio con el máximo confort y los mayores estándares de seguridad.";
var txt_a_alquilar = "ALQUILAR AHORA";
var href_a_alquilar = "#form-contact";
var const_array_div3=[img_alquilar, txt_h2_alquilar, txt_p_alquilar, txt_a_alquilar, href_a_alquilar];

//Variables de PERMUTA
var img_permutar = "images/category/4.png";
var txt_h2_permutar="PERMUTAR";
var txt_p_permutar = "Si alguien quiere tu auto de lujo y te ofrece una oportunidad sin igual de cambio o si piensas que ya es hora de cambiarlo por otra experiencia de estatus & prestigio, Te ofrecemos la mejor oportunidad de lograrlo.";
var txt_a_permutar = "PERMUTAR";
var href_a_permutar = "#button-contacto";
var const_array_div4=[img_permutar, txt_h2_permutar, txt_p_permutar, txt_a_permutar, href_a_permutar];

var array_div1 = [];
var array_div2 = [];
var array_div3 = [];
var array_div4 = [];

doc = $(document);

doc.ready(function(){
	//captcha de suma
	$("#enviar-contacto").attr("disabled","disabled");
    var ran1=0;
    var ran2=0;
    var rant=0;
    ran1=Math.floor(Math.random()*10);
    ran2=Math.floor(Math.random()*10);
    rant=ran1+ran2;
    $("#ebcaptchainput").attr("placeholder", "Cuanto es "+ran1+" + "+ran2);
    $("#ebcaptchainput").keyup(function(e){
        var nr=$(this).val();
        if(nr==rant){
            $("#enviar-contacto").removeAttr("disabled");
        }
        else{
            $("#enviar-contacto").attr("disabled","disabled");
        }
    });
    $("#enviar-contacto").click(function(){
        $("#form1").submit();
    });

	//oculta y muestra los div de la segunda seccion en el orden que es
	$("#tg4Img1").click(function(){
		changeDiv(const_array_div1, const_array_div2, const_array_div3, const_array_div4);
	});

	$("#tg4Img2").click(function(){
		changeDiv(const_array_div2, const_array_div1, const_array_div3, const_array_div4);
	});
	$("#tg4Img3").click(function(){
		changeDiv(const_array_div3, const_array_div1, const_array_div2, const_array_div4);
	});

	$("#tg4Img4").click(function(){
		changeDiv(const_array_div4, const_array_div1, const_array_div2, const_array_div3);
	});
	//reubica los div segun donde se haga clic
	$("#tg4-div-img6").click(function(){
		organizationDiv(array_div2);
	});
	$("#tg4-div-img7").click(function(){
		organizationDiv(array_div3);
	});
	$("#tg4-div-img8").click(function(){
		organizationDiv(array_div4);
	});


///////////////////////////////////////////////////
//funciones de ordenamiento de los div de la gallery
	function changeDiv(div1, div2, div3, div4){
		toAssignArrayDiv(div1, div2, div3, div4);
		$("#tg4-content1").fadeOut( "slow", function() {
    		// Animation complete.
  		}).delay(200).slideUp("slow",function(){});	
		$("#tg4-content2").slideDown("fast",function(){});
		createMainDiv(array_div1);
		changeSubDiv(div2, $("#tg4-img-img6"), $("#tg4-span-img6"));
		changeSubDiv(div3, $("#tg4-img-img7"), $("#tg4-span-img7"));
		changeSubDiv(div4, $("#tg4-img-img8"), $("#tg4-span-img8"));
	}
	//Decide que orden va a tomar los div
	function organizationDiv(divMain){
		if(divMain[1] == "VENDER"){
			newOrderDiv(const_array_div1, const_array_div2, const_array_div3, const_array_div4);
		}else if(divMain[1] == "COMPRAR"){
			newOrderDiv(const_array_div2, const_array_div1, const_array_div3, const_array_div4);
		}else if(divMain[1] == "ALQUILAR"){
			newOrderDiv(const_array_div3, const_array_div1, const_array_div2, const_array_div4);
		}else if(divMain[1] == "PERMUTAR"){
			newOrderDiv(const_array_div4, const_array_div1, const_array_div2, const_array_div3);
		}
	}
	//Redistribuye los div segun los parametros recibidos
	function newOrderDiv(div1, div2, div3, div4){
		
		toAssignArrayDiv(div1, div2, div3, div4);
		createMainDiv(div1);
		changeSubDiv(div2, $("#tg4-img-img6"), $("#tg4-span-img6"));
		changeSubDiv(div3, $("#tg4-img-img7"), $("#tg4-span-img7"));
		changeSubDiv(div4, $("#tg4-img-img8"), $("#tg4-span-img8"));
	}
//recibe arreglos
//organiza los array en el orden en que van los div vs array
	function toAssignArrayDiv(div1, div2, div3, div4){
		array_div1 = div1.slice();
		array_div2 = div2.slice();
		array_div3 = div3.slice();
		array_div4 = div4.slice();
	}
//crea el div principal
	function createMainDiv(divMain){
		$("#tg4-img-5").attr("src", divMain[0]);
		$("#tg4-span-5").text(divMain[1]);
		$("#tg4-h2-txt").text(divMain[1]);
		$("#tg4-p-txt").text(divMain[2]);
		$("#tg4-a-txt").text(divMain[3]);
		$("#tg4-a-5").attr("href", divMain[4]);
		$("#tg4-a-txt").attr("href", divMain[4]);
		
	}
//Cambia los div que estan de tercero
	function changeSubDiv(divChange, img1, span1){
		img1.attr("src", divChange[0]);
		span1.text(divChange[1]);
	}
});