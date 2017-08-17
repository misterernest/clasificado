<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Autos de lujo</title>
    
    <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0, Minimum-scale=1.0, Maximum-scale=1.0"> 
    <meta name="description" content="Autos de lujo en Colombia, vende tu autos de lujo, alquila tu auto de lujo, permuta tu auto de lujo, compra tu auto de lujo" />
    <meta name="keywords" content="autos, carros, vehiculos, lujo, autos de lujo, carros de lujo, vehiculos de lujo, vende tu auto de lujo, alquila tu auto de lujo, compra tu auto de lujo, permuta tu auto de lujo" />
    <meta name="author" content="ANT" />
    <link rel="shortcut icon" href="../images/favicon.png">    
    <script src="../js/jquery.min.js" type="text/javascript"></script>
    
    <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css" >
    <link rel="stylesheet" type="text/css" href="../css/style-tucan.css">
    <link rel="stylesheet" href="../font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/catalogo-tucan.css">
    <script src="../js/prefixfree.min.js" type="text/javascript"></script>
</head>
<!--@if (Session::has('error-messages'))
	{{ Session::get('error-messages') }}
@endif-->
<body>
	<header class="container-fluid">
        <nav class="row top-nav">
            <div class="logo-autoslujo col-xs-4 col-sm-3 col-md-2 ">
                    <a href="/">
                    <img src="../images/logo.png" alt="autos de lujo">
                </a>
            </div>
            <div class="social col-xs-6 col-sm-2 col-md-4">
                <a href="https://www.facebook.com/Autosdelujo.Colombia/" target="_blank"><span class="fa fa-facebook-square" aria-hidden="true"></span></a>
                <a href="https://www.instagram.com/autosdelujo_colombia/?hl=es" target="_blank"><span  class="fa fa-instagram" aria-hidden="true"></span></a>
            </div>
            <div class="menu-ham col-xs-2 col-sm-7 col-md-6">
                
                <div class="navbar-header">
                  <button data-toggle="collapse-side" data-target=".side-collapse" data-target-2=".side-collapse-container" type="button" class="btn btn-default navbar-toggle pull-left" aria-label="Left Align">
                    <span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span>
                  </button>
                </div>
                <div class="navbar-inverse side-collapse in">
                  <nav role="navigation" class="navbar-collapse">
                    <ul class="nav navbar-nav nav-right">
                        <li><a href="/#logos-aseguradoras">VENTA</a></li>
                        <li><a href="/#logos-aseguradoras">PERMUTA</a></li>
                        <li><a href="/#logos-aseguradoras">ALQUILER</a></li>
                        <li><a href="/vehicles/allvehicles">COMPRA</a></li>
                        <li><a href="/#form-contact">CONTACTENOS</a></li>
                    </ul>
                  </nav>
                </div>
            </div>
        </nav>     
    </header>

    <section class="content-fluid">
        @forelse ($vehicles as $vehicle)
            <article class="row">
                <div class="col-md-3 col-sm-4 col-xs-6 first-div">
                    <div class="cont-info">
                        <div class="div-img">
                	       <img src="../{!! $vehicle->photo_main !!}">
                        </div>
                    	<div class="brand-car">
                            {!! $vehicle->brand !!} {!! $vehicle->ref_car !!}
                        </div>
                        <div class="year-car">
                            {!! $vehicle->year !!}
                        </div>
                        <div class="km-city-car">
                            {!! number_format($vehicle->km) !!} km - {!! $vehicle->actual_city !!}
                        </div>
                    	<div class="value-car">
                            ${!! number_format($vehicle->value) !!}   
                        </div>
                    </div>
                	
                </div>
            	
            @empty
            	
            	<h3>No hay registros</h3>

            @endforelse
            </article>
    </section>
    <footer class="footer" >
        <div class="row">
            <div class="col-sm-3 col-xs-12">
                <span class="text-footer">Visitanos en:</span>
                <div class="social-footer">
                    <a href="https://www.facebook.com/Autosdelujo.Colombia/" target="_blank"><span class="fa fa-facebook" aria-hidden="true"></span></a>
                    <a href="https://www.instagram.com/autosdelujo_colombia/?hl=es" target="_blank"><span  class="fa fa-instagram" aria-hidden="true"></span></a>
                    <a href="https://www.facebook.com/Autosdelujo.Colombia/" target="_blank"><span class="fa fa-google-plus-official" aria-hidden="true"></span></a>
                </div>
            </div>
            <div class="col-sm-6 col-xs-12">
                <a href="#" ><span class="text-footer" ><br/>Nuestros Servicios<br/></span></a>
            </div>
            <div class="col-sm-3 col-xs-12">
                <span class="text-footer" >Contacto<br/></span>
                <a href="mailto:info@autosdelujo.com.co" ><span class="text-footer">info@autosdelujo.com.co</span></a>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <span class="text-footer">TUCANLAB 2017 © Todos los derechos reservados </span>
            </div>
        </div>
        
    </footer>
    <script> 
    $(document).ready(function() {   
            var sideslider = $('[data-toggle=collapse-side]');
            var sel = sideslider.attr('data-target');
            var sel2 = sideslider.attr('data-target-2');
            sideslider.click(function(event){
                $(sel).toggleClass('in');
                $(sel2).toggleClass('out');
            });
        });
    </script>
</body>
</html> 