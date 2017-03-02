
<?php if(Session::get('usuario')){ ?>

<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?php echo Session::get('usuario');?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
         {!!Html::style('css/bootstrap.min.css')!!}
         {!!Html::style('css/carousel.css')!!}
         {!!Html::style('css/bootstrap-theme.min.css')!!}
         {!!Html::style('css/main.css')!!}
         {!!Html::style('css/estilos.css')!!}
         {!!Html::script('js/vendor/modernizr-2.8.3-respond-1.4.2.min.js')!!}

    </head>
    <body>
        <!-- Cabecera -->
        <div class="container">
            <nav class="navbar navbar-inverse navbar-static-top">
                <div class="container">
                   <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">Sistema de Control de Procesos </a>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">
                           <li class="active"><a href="#">Inicio</a></li>
                            <li class="dropdown">
                                <a href="#about" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Gestion de Registro<span class="caret"></span></a>
                                <ul class="dropdown-menu">

                                    <li><a href="usuario/registro" >Registro de Alumnos</a></li>
                                    <li><a href="#about">Registro de trabajores</a></li>
                                    <li><a href="#about">Asignacion de Cursos</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#contact" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Matricula<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#about">Registrar de Matricula</a></li>
                                    <li><a href="#about">Modificar de Matricula</a></li>
                                    <li><a href="#about">Eliminar de Matricula</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#contact" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Control de Notas<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#about">Registrar Notas</a></li>
                                    <li><a href="#about">Rendimiento de Alumnos</a></li>

                                </ul>
                            </li>                               
                            <li class="dropdown">
                                <a href="#contact" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Mantenimiento del sistema<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#about">Fijar fecha limite para insercion de notas</a></li>                                      
                                    <li><a href="#about">Extender fecha limite</a></li>                                      
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#contact" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Registro de Actividades<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#about">Historial de actividades en el sistema</a></li>                                      
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#contact" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Boletas de Notas<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#about">Impresion de Notas por unidad y bimestral</a></li>                                      
                                </ul>
                            </li>
                  
                        </ul>
                        <ul class="nav navbar-nav">


                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user" aria-hidden="true"></span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Configurar cuenta</a></li>

                                    <li role="separator" class="divider"></li>
                                    <li class="dropdown-header">Extension</li>
                                    <li><a href="validador?valor=salir"><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span> Salir</a></li>              
                                </ul>
                            </li>

                        </ul>
                    </div>
                  
                    
                </div>
            </nav>
        </div>
        <!-- Cabecera -->
        <!-- Menu otra vista -->
        <div class="container">
           
                      @yield('content')
        </div>

        <!-- Menu otra vista -->





        <div class="container">
            <!-- Example row of columns -->
            <hr>
            <footer>
                <p>&copy; Company 2015</p>
            </footer>
            
            
            
            
        </div> <!-- /container -->{!!Html::script('//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.js')!!}
        <script>window.jQuery || document.write('{!!Html::script('js/vendor/jquery-1.11.2.js')!!}')</script>
       
       {!!Html::script('js/vendor/bootstrap.min.js')!!}
        
{!!Html::script('js/main.js')!!}
        
        

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function (b, o, i, l, e, r) {
                b.GoogleAnalyticsObject = l;
                b[l] || (b[l] =
                        function () {
                            (b[l].q = b[l].q || []).push(arguments)
                        });
                b[l].l = +new Date;
                e = o.createElement(i);
                r = o.getElementsByTagName(i)[0];
                e.src = "{!!Html::script('//www.google-analytics.com/analytics.js')!!}";
                r.parentNode.insertBefore(e, r)
            }(window, document, 'script', 'ga'));
            ga('create', 'UA-XXXXX-X', 'auto');
            ga('send', 'pageview');
        </script>
    </body>
</html>
<?php }
else{
	Session::forget('usuario');
	 return redirect()->to('/')->send();			
			}
?>
