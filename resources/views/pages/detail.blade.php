<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Autos de lujo</title>
    
    <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0, Minimum-scale=1.0, Maximum-scale=1.0"> 
    <meta name="description" content="Autos de lujo en Colombia, vende tu autos de lujo, alquila tu auto de lujo, permuta tu auto de lujo, compra tu auto de lujo" />
    <meta name="keywords" content="autos, carros, vehiculos, lujo, autos de lujo, carros de lujo, vehiculos de lujo, vende tu auto de lujo, alquila tu auto de lujo, compra tu auto de lujo, permuta tu auto de lujo" />
    <meta name="author" content="ANT" />
    <link rel="shortcut icon" href="../../images/favicon.png">    
    <script src="../../js/jquery.min.js" type="text/javascript"></script>
    
    <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="../../css/bootstrap.min.css" >
    <link rel="stylesheet" type="text/css" href="../../css/style-tucan.css">
    <link rel="stylesheet" href="../../font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../css/detail-tucan.css">
    <link rel="stylesheet" href="../../css/formulario.css">
    <script src="../../js/prefixfree.min.js" type="text/javascript"></script>
    <script src="../../js/jquery.min.js" type="text/javascript"></script>
    <script src="../../js/detail-tucan.js" type="text/javascript"></script>
</head>
<!--@if (Session::has('error-messages'))
	{{ Session::get('error-messages') }}
@endif-->
<body>
	<header class="container-fluid">
        <nav class="row top-nav">
            <div class="logo-autoslujo col-xs-4 col-sm-3 col-md-2 ">
                    <a href="/">
                    <img src="../../images/logo.png" alt="autos de lujo">
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
    <!-- fin SECTION INICIO FOOTER-->
    @if (Auth::guest())
        <?php $log=true; ?>
    @else
        <?php $log=false; ?>
    @endif
    <section class="container-fluid">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <a href="/vehicles/allvehicles#carro{{ $vehicle->id }}">Regresar al listado</a>
            </div>
            <article class="col-md-12 col-sm-12 col-xs-12 container-title">
                <div class="col-md-8 col-sm-12 col-xs-12 title-detail">
                    <h1>{!! $vehicle->brand !!}</h1> <h2>{!! $vehicle->ref_car !!} {!! $vehicle->year !!}</h2>
                </div>
                <div class="col-md-4 col-sm-12 col-xs-12">
                    <h2>${!! number_format($vehicle->value) !!}</h2>
                </div>
            </article>
            <article class="row col-md-8 col-sm-12 col-xs-12 cont-img">
                <div class="col-md-12">
                    <div class="col-md-12 img-main">
                        <img src="../../{!! $vehicle->photo_main !!}" id="img-main" alt="{!! $vehicle->brand !!}-{!! $vehicle->ref_car !!}">
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12 div-mini-img">
                        @if($vehicle->photo_main)
                            <div class="col-md-1 col-sm-1 col-xs-2">
                                <img src="../../{!! $vehicle->photo_main !!}" id="img1" alt="{!! $vehicle->brand !!}-{!! $vehicle->ref_car !!}">
                            </div>
                        @endif
                        @if($vehicle->photo_2)
                            <div class="col-md-1 col-sm-1 col-xs-2">
                                <img src="../../{!! $vehicle->photo_2 !!}" id="img2" alt="{!! $vehicle->brand !!}-{!! $vehicle->ref_car !!}">
                            </div>
                        @endif
                        @if($vehicle->photo_3)
                            <div class="col-md-1 col-sm-1 col-xs-2">
                                <img src="../../{!! $vehicle->photo_3 !!}" id="img3" alt="{!! $vehicle->brand !!}-{!! $vehicle->ref_car !!}">
                            </div>
                        @endif
                        @if($vehicle->photo_4)
                            <div class="col-md-1 col-sm-1 col-xs-2">
                                <img src="../../{!! $vehicle->photo_4 !!}" id="img4" alt="{!! $vehicle->brand !!}-{!! $vehicle->ref_car !!}">
                            </div>
                        @endif
                        @if($vehicle->photo_5)
                            <div class="col-md-1 col-sm-1 col-xs-2">
                                <img src="../../{!! $vehicle->photo_5 !!}" id="img5" alt="{!! $vehicle->brand !!}-{!! $vehicle->ref_car !!}">
                            </div>
                        @endif
                        @if($vehicle->photo_6)
                            <div class="col-md-1 col-sm-1 col-xs-2">
                                <img src="../../{!! $vehicle->photo_6 !!}" id="img6" alt="{!! $vehicle->brand !!}-{!! $vehicle->ref_car !!}">
                            </div>
                        @endif
                        @if($vehicle->photo_7)
                            <div class="col-md-1 col-sm-1 col-xs-2">
                                <img src="../../{!! $vehicle->photo_7 !!}" id="img7" alt="{!! $vehicle->brand !!}-{!! $vehicle->ref_car !!}">
                            </div>
                        @endif
                        @if($vehicle->photo_8)
                            <div class="col-md-1 col-sm-1 col-xs-2">
                                <img src="../../{!! $vehicle->photo_8 !!}" id="img8" alt="{!! $vehicle->brand !!}-{!! $vehicle->ref_car !!}">
                            </div>
                        @endif
                        @if($vehicle->photo_9)
                            <div class="col-md-1 col-sm-1 col-xs-2">
                                <img src="../../{!! $vehicle->photo_2 !!}" id="img9" alt="{!! $vehicle->brand !!}-{!! $vehicle->ref_car !!}">
                            </div>
                        @endif
                        @if($vehicle->photo_10)
                            <div class="col-md-1 col-sm-1 col-xs-2">
                                <img src="../../{!! $vehicle->photo_2 !!}" id="img10" alt="{!! $vehicle->brand !!}-{!! $vehicle->ref_car !!}">
                            </div>
                        @endif
                        @if($vehicle->photo_11)
                            <div class="col-md-1 col-sm-1 col-xs-2">
                                <img src="../../{!! $vehicle->photo_2 !!}" id="img11" alt="{!! $vehicle->brand !!}-{!! $vehicle->ref_car !!}">
                            </div>
                        @endif
                    </div>
                </div>
            </article>
            <aside class="row col-md-4 col-sm-12 col-xs-12">
                <div class="col-md-12 col-sm-12 col-xs-12 title1-form">
                    <h4>TE INTERESO ESTE CARRO?</h3>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <h4>CONTACTANOS</h3>
                </div>
                <div class="row col-md-12">
                    @if ($errors->has()) 
                        <div class="col-md-12 alert alert-danger">
                            Revisa estos items, para enviar contactarnos!
                        </div>
                        <div>   
                            <ul class="col-md-12 alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    @if (Session::has('success-messages'))
                        <div>  
                            <ul class="col-md-12 alert alert-success">
                                <li>
                                    {{ Session::get('success-messages') }}
                                </li>
                            </ul>
                        </div>
                    @endif
                    <form class="form-inline" action="{{ route('send') }}" method="POST">
                        {{ csrf_field() }}
                        <input type="hidden" name="detail" value="http:www.autosdelujo.com.co/vehicles/detail/{{ $vehicle->id }}" required >
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <input type="text" class="form-control input-contacto" id="inlineFormInput" placeholder="Nombre" name="name" value="{{ old('name') }}" required>
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <input required type="email" name="email_contact" class="form-control input-contacto" id="ejemplo_email_3" placeholder="Email*" value="{{ old('email-contact') }}" required>
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <input type="number" class="form-control input-contacto" placeholder="telefono movil" name="movil" value="{{ old('movil') }}" required>
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <input type="hidden" name="subject" class="form-control input-contacto"  placeholder="Asunto" value="{!! $vehicle->brand !!}-{!! $vehicle->ref_car !!}-{!! $vehicle->year !!}">
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <textarea name="body" class="form-control" rows="4" required></textarea>
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            {!! Recaptcha::render() !!}
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12 enviar" id="button-contacto">
                            <button id="enviar-contacto" type="submit" class="btn btn-primary btn-formulario">Enviar</button>
                        </div>
                    </form>
                </div>
            </aside>
            <aside>
                
            </aside>
        </div>
    </section>


    <!-- fin SECTION INICIO FOOTER-->
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
