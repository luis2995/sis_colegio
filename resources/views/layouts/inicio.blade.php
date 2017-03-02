<?php if(Session::get('usuario')){
return redirect()->to('usuario')->send();
} else{?> 
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
 
     <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <?php 
		if(Session::get('error')){
			$re=Session::get('error');
		}else{
			$re='';
			 Session::forget('error');
		}
		?>
        <title>incio de session</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link href="https://fonts.googleapis.com/css?family=Baloo|Cabin" rel="stylesheet">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <style>
            body {
                padding-top: 200px;
                padding-bottom: 200px;                
                font-family: 'Cabin', sans-serif;
                background-image: url(img/predator_lying_face_leopard_1600x1200.jpg);
            }
            #login{
                width: 600px;
                background: rgb(0, 0, 0);
                /* Para navegadores que soportan RGBa mostramos el color sólido con un 50% de opacidad */
                background: rgba(0, 0, 0, 0.5);

                border-radius: 24px 24px 24px 24px;
                -moz-border-radius: 24px 24px 24px 24px;
                -webkit-border-radius: 24px 24px 24px 24px;
                border: 0px solid #000000;
                -webkit-box-shadow: 10px 10px 39px 8px rgba(0,0,0,0.75);
                -moz-box-shadow: 10px 10px 39px 8px rgba(0,0,0,0.75);
                box-shadow: 10px 10px 39px 8px rgba(0,0,0,0.75);


            }
            .input-group{
                margin-bottom: 20px;
            }
            .panel  {

                border: black;

                background: rgb(0, 0, 0);
                /* Para navegadores que soportan RGBa mostramos el color sólido con un 50% de opacidad */
                background: rgba(0, 0, 0, 0.5);
                color: white;

            }
            #operacion{
                color: white;
            }
        </style>
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/jquery-1.11.2.min.js" type="text/javascript"></script>

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
    <body onload="logearse('<?php echo $re;?>')" >
        <script>
			
            $(document).ready(function (){
                 $('#operacion').hide(1000);
            });
            function logearse(re) {
				if(re!=''){
					alert(re);
				}		
                
            }
            function deslogearse() {
                $('#login').show(1000);
                $('#operacion').hide(1000);
            }
        </script>

        <div class="container" id="login" >
            <div class="panel panel-default">               
                <div class="panel panel-body">                   
                   @yield('content')
                </div>
            </div>

        </div>
       
    </body>
</html>
<?php 
			
			}
?>