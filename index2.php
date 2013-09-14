<?php
include_once 'statsfeed.php'; 
$todayStats=getTodayTops();
define('IN_MYBB', NULL);
require_once 'forum/global.php';
require_once 'forum/MyBBIntegrator.php';
$MyBBI = new MyBBIntegrator($mybb, $db, $cache, $plugins, $lang, $config); 
$forumpath = 'forum/';

chdir($forumpath);
require_once MYBB_ROOT."inc/class_parser.php";
$parser = new postParser;
chdir('../');

include_once("session.php");
if(!isacmlogged()){
    echo '<script language="javascript">
			window.top.location="signin.php"
			</script>';
    exit();
}
?><!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>
			Linekkit
		</title>
		<meta name="description" content="app, web app, responsive, admin dashboard, admin, flat, flat ui, ui kit, off screen nav">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
          <link rel="stylesheet" href="css/animate.css" type="text/css" />
          <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" />
          <link rel="stylesheet" href="css/font.css" type="text/css" cache="false" />
          <link rel="stylesheet" href="css/plugin.css" type="text/css" />
          <link rel="stylesheet" href="css/app.css" type="text/css" />
        <link rel="stylesheet" href="css/lkcss.css">
        <link href='http://fonts.googleapis.com/css?family=Alegreya+SC' rel='stylesheet' type='text/css'>
		<!--[if lt IE 9]>
			<script src="js/ie/respond.min.js" cache="false">
			</script>
			<script src="js/ie/html5.js" cache="false">
			</script>
			<script src="js/ie/fix.js" cache="false">
			</script>
		<![endif]-->
	</head>
	<body style="background-image:url(images/bg-raid-boss.jpg) !important; background-size:cover !important;">
		
        <!-- API de Facebook -->
        <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/all.js#xfbml=1&appId=438576089566191";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
		<!-- / API de Facebook -->

        <section class="hbox stretch">
			<?php
            include_once('barralateral.php');
            getBar(1,1);//getbar(tipoDeBarra,<li>activo)
            ?>
			<!-- .vbox -->
			<section id="content">
				<section class="vbox">
					<section class="scrollable wrapper">
                    
                    	<div class="col-lg-12 row m-b-lg">
                        <img src="images/logo.png" width="450" height="127"> 
                        </div>
                        
 				       <?php if (isset($_GET['error'])) {
					require_once './acm/language/spanish.php'; ?>
					<div class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert"><i class="icon-remove"></i></button>
                    <i class="icon-ban-circle"></i> <?php echo $vm[$_GET['error']];?> </div>
					 <?php };?>
					 <?php if (isset($_GET['valid'])) {
					 require_once './acm/language/spanish.php';?>
					 <div class="alert alert-success">
                     <button type="button" class="close" data-dismiss="alert"><i class="icon-remove"></i></button>
                     <i class="icon-ok-sign"></i> <?php echo $vm[$_GET['valid']];?> </div>
					 <?php };?>  
                        
                        <div class="panel-group m-b" id="accordion10">
                            <div class="panel no-border fondo-transparente-negro-075">
                                <div class="panel-heading fondo-transparente-000">
                                    <a class="accordion-toggle pull-right" data-toggle="collapse" data-parent="#accordion10" href="#collapseTop"> 
                                    	<strong>Minimizar</strong>
                                    </a>
                                </div>
                                
                                <div id="collapseTop" class="panel-collapse in">

                             		<!-- Margen superior-->
                             		<div class="row"></div>
                             
                                    <!-- Columna 1 -->  		
                                    <div class="col-lg-12">
                                        
                                        
                                        <section class="panel fondo-transparente-000 borde-transparente-negro no-borders">
                                        <div class="row wrapper" style="padding-bottom:0; padding-top:0">
                                        <h1 class="text-center" style="font-family:Alegreya SC; margin-top:0; color:rgb(243, 194, 0);"><b>Los mejores jugadores de hoy</b></h1>
                                        
                                        </div>
                                        
                                        <div class="row linea-azul-1"></div>
                                        
                                        <!-- TOP mejores jugadores-->
                                        <div class="row  wrapper-lg">
                                            
                                            <div class="col-xs-1" style="width:14%">
                                                <div class="row text-center">
                                                    <img class="img-rounded" src="images/emblem_1.jpg" width="150" height="150">
                                                </div>
                                                <div class="row text-center letras-blancas">
                                                	<b>Mejores puntajes</b>
                                                </div>
                                            
                                            
                                            </div>
                                            <div class="col-xs-11" style="width:86%">
                                            
                                            	<!-- #1 -->
                                                <div class="thumb-lg">
                                                
                                                	<div class="row m-b-xs">
                                                    	<div class="col-xs-4"></div>
                                                        <span class="col-xs-4 label fondo-solido-rojo-1" style="font-size:12px;">
                                                        <i class="icon-star"></i> 1</span>
                                                    </div>
                                                    <div class="row" style="padding-left:38px;">
                                                        <img src="images/avatar.jpg" style="width:84px !important; height:84px !important;" class="img-rounded">
                                                    </div>
                                                    <div class="row text-center letras-blancas">
                                                        JugadorMegamanXX
                                                        <br>
                                                        123456789 Puntos
                                                    </div>
                                                    <!-- Premium-->
                                                    <div class="row text-center letras-blancas" style="height:11px">
                                                    <img src="images/mini_premium.png" width="75" height="11"> 
                                                    </div>
                                                    <!-- / Premium-->
                                                
                                                </div>
                                                <!-- / #1 -->
                                                
                                                <!-- #2 -->
                                                <div class="thumb-lg">
                                                
                                                	<div class="row m-b-xs">
                                                    	<div class="col-xs-4"></div>
                                                        <span class="col-xs-4 label fondo-solido-rojo-1" style="font-size:12px;">
                                                        <i class="icon-star-half-full"></i> 2</span>
                                                    </div>
                                                    <div class="row" style="padding-left:38px;">
                                                        <img src="images/avatar.jpg" style="width:84px !important; height:84px !important;" class="img-rounded">
                                                    </div>
                                                    <div class="row text-center letras-blancas">
                                                        JugadorMegamanXX
                                                        <br>
                                                        123456789 Puntos
                                                    </div>
                                                    <!-- Premium-->
                                                    <div class="row text-center letras-blancas" style="height:11px">
                                                    <div style="margin-top:11px"></div>
                                                    </div>
                                                    <!-- / Premium-->
                                                
                                                </div>
                                                <!-- / #2 -->
                                                
                                                <!-- #3 -->
                                                <div class="thumb-lg">
                                                
                                                	<div class="row m-b-xs">
                                                    	<div class="col-xs-4"></div>
                                                        <span class="col-xs-4 label fondo-solido-rojo-1" style="font-size:12px;">
                                                        <i class="icon-star-half-full"></i> 3</span>
                                                    </div>
                                                    <div class="row" style="padding-left:38px;">
                                                        <img src="images/avatar.jpg" style="width:84px !important; height:84px !important;" class="img-rounded">
                                                    </div>
                                                    <div class="row text-center letras-blancas">
                                                        JugadorMegamanXX
                                                        <br>
                                                        123456789 Puntos
                                                    </div>
                                                    <!-- Premium-->
                                                    <div class="row text-center letras-blancas" style="height:11px">
                                                    
                                                    </div>
                                                    <!-- / Premium-->
                                                
                                                </div>
                                                <!-- / #3 -->
                                                
                                                
                                                <!-- #4 -->
                                                <div class="thumb-lg">
                                                
                                                	<div class="row m-b-xs">
                                                    	<div class="col-xs-4"></div>
                                                        <span class="col-xs-4 label fondo-solido-rojo-1" style="font-size:12px;">
                                                        <i class="icon-star-empty"></i> 4</span>
                                                    </div>
                                                    <div class="row" style="padding-left:38px;">
                                                        <img src="images/avatar.jpg" style="width:84px !important; height:84px !important;" class="img-rounded">
                                                    </div>
                                                    <div class="row text-center letras-blancas">
                                                        JugadorMegamanXX
                                                        <br>
                                                        123456789 Puntos
                                                    </div>
                                                    <!-- Premium-->
                                                    <div class="row text-center letras-blancas" style="height:11px">
                                                    
                                                    </div>
                                                    <!-- / Premium-->
                                                
                                                </div>
                                                <!-- / #4 -->
                                                
                                                
                                                <!-- #5 -->
                                                <div class="thumb-lg">
                                                
                                                	<div class="row m-b-xs">
                                                    	<div class="col-xs-4"></div>
                                                        <span class="col-xs-4 label fondo-solido-rojo-1" style="font-size:12px;">
                                                        <i class="icon-star-empty"></i> 5</span>
                                                    </div>
                                                    <div class="row" style="padding-left:38px;">
                                                        <img src="images/avatar.jpg" style="width:84px !important; height:84px !important;" class="img-rounded">
                                                    </div>
                                                    <div class="row text-center letras-blancas">
                                                        JugadorMegamanXX
                                                        <br>
                                                        123456789 Puntos
                                                    </div>
                                                    <!-- Premium-->
                                                    <div class="row text-center letras-blancas" style="height:11px">
                                                    <img src="images/mini_premium.png" width="75" height="11"> 
                                                    </div>
                                                    <!-- / Premium-->
                                                
                                                </div>
                                                <!-- / #5 -->
                                                
                                                <!-- #6 -->
                                                <div class="thumb-lg">
                                                
                                                	<div class="row m-b-xs">
                                                    	<div class="col-xs-4"></div>
                                                        <span class="col-xs-4 label fondo-solido-rojo-1" style="font-size:12px;">
                                                        <i class="icon-star-empty"></i> 6</span>
                                                    </div>
                                                    <div class="row" style="padding-left:38px;">
                                                        <img src="images/avatar.jpg" style="width:84px !important; height:84px !important;" class="img-rounded">
                                                    </div>
                                                    <div class="row text-center letras-blancas">
                                                        JugadorMegamanXX
                                                        <br>
                                                        123456789 Puntos
                                                    </div>
                                                    <!-- Premium-->
                                                    <div class="row text-center letras-blancas" style="height:11px">
                                                     
                                                    </div>
                                                    <!-- / Premium-->
                                                
                                                </div>
                                                <!-- / #6 -->
                                                
                                                <!-- #7 -->
                                                <div class="thumb-lg">
                                                
                                                	<div class="row m-b-xs">
                                                    	<div class="col-xs-4"></div>
                                                        <span class="col-xs-4 label fondo-solido-rojo-1" style="font-size:12px;">
                                                        <i class="icon-star-empty"></i> 7</span>
                                                    </div>
                                                    <div class="row" style="padding-left:38px;">
                                                        <img src="images/avatar.jpg" style="width:84px !important; height:84px !important;" class="img-rounded">
                                                    </div>
                                                    <div class="row text-center letras-blancas">
                                                        JugadorMegamanXX
                                                        <br>
                                                        123456789 Puntos
                                                    </div>
                                                    <!-- Premium-->
                                                    <div class="row text-center letras-blancas" style="height:11px">
                                                    
                                                    </div>
                                                    <!-- / Premium-->
                                                
                                                </div>
                                                <!-- / #7 -->
                                                
                                                
                                            
                                            </div>
                                        </div>
                                        
										<!-- / TOP mejores jugadores-->
                                        
                                        <div class="row linea-azul-1"></div>   
                                        
                                        <!-- TOP PVP -->
                                        <div class="col-xs-6">
                                        <div class="row  wrapper-lg" style="padding-right:0">
                                            
                                            <div class="col-xs-2" style="width:22%">
                                                <div class="row">
                                                <img class="img-rounded" src="images/emblem_2.jpg" width="120" height="120"> 
                                                </div>
                                                <div class="row text-center letras-blancas">
                                                	<b>Mejores PVP</b>
                                                </div>
                                            
                                            
                                            </div>
                                            <div class="col-xs-10" style="width:78%">
                                            
                                            	<!-- #1 -->
                                                <div class="thumb-lg">
                                                
                                                	<div class="row m-b-xs">
                                                    	<div class="col-xs-4" style="width:38%"></div>
                                                        <span class="col-xs-3 label fondo-solido-rojo-1" style="font-size:12px;">
                                                        <i class="icon-star"></i> 1</span>
                                                    </div>
                                                    <div class="row" style="padding-left:48px;">
                                                        <img src="images/avatar.jpg" style="width:64px !important; height:64px !important;" class="img-rounded">
                                                    </div>
                                                    <div class="row text-center letras-blancas">
                                                        JugadorMegamanXX
                                                        <br>
                                                        21 Kills
                                                    </div>
                                                    <!-- Premium-->
                                                    <div class="row text-center letras-blancas" style="height:11px">
                                                    
                                                    </div>
                                                    <!-- / Premium-->
                                                
                                                </div>
                                                <!-- / #1 -->
                                                
                                                <!-- #2 -->
                                                <div class="thumb-lg">
                                                
                                                	<div class="row m-b-xs">
                                                    	<div class="col-xs-4" style="width:38%"></div>
                                                        <span class="col-xs-3 label fondo-solido-rojo-1" style="font-size:12px;">
                                                        <i class="icon-star-half-full"></i> 2</span>
                                                    </div>
                                                    <div class="row" style="padding-left:48px;">
                                                        <img src="images/avatar.jpg" style="width:64px !important; height:64px !important;" class="img-rounded">
                                                    </div>
                                                    <div class="row text-center letras-blancas">
                                                        JugadorMegamanXX
                                                        <br>
                                                        12 Kills
                                                    </div>
                                                    <!-- Premium-->
                                                    <div class="row text-center letras-blancas" style="height:11px">
                                                    <img src="images/mini_premium.png" width="75" height="11"> 
                                                    </div>
                                                    <!-- / Premium-->
                                                
                                                </div>
                                                <!-- / #2 -->
                                                
                                                <!-- #3 -->
                                                <div class="thumb-lg">
                                                
                                                	<div class="row m-b-xs">
                                                    	<div class="col-xs-4" style="width:38%"></div>
                                                        <span class="col-xs-3 label fondo-solido-rojo-1" style="font-size:12px;">
                                                        <i class="icon-star-empty"></i> 3</span>
                                                    </div>
                                                    <div class="row" style="padding-left:48px;">
                                                        <img src="images/avatar.jpg" style="width:64px !important; height:64px !important;" class="img-rounded">
                                                    </div>
                                                    <div class="row text-center letras-blancas">
                                                        JugadorMegamanXX
                                                        <br>
                                                        8 Kills
                                                    </div>
                                                    <!-- Premium-->
                                                    <div class="row text-center letras-blancas" style="height:11px">
                                                     
                                                    </div>
                                                    <!-- / Premium-->
                                                
                                                </div>
                                                <!-- / #3 -->
                                                                                                
                                                
                                            
                                            </div>
                                        </div>

                                        </div>
                                        <!-- / TOP PVP-->
                                        
                                        <!-- TOP PK -->
                                        <div class="col-xs-6">
                                        <div class="row  wrapper-lg" style="padding-left:0">
                                            
                                            <div class="col-xs-2" style="width:22%">
                                                <div class="row">
                                                    <img class="img-rounded" src="images/emblem_4.jpg" width="120" height="120">
                                                </div>
                                                <div class="row text-center letras-blancas">
                                                	<b>Mejores PK</b>
                                                </div>
                                            
                                            
                                            </div>
                                            <div class="col-xs-10" style="width:78%">
                                            
                                            	<!-- #1 -->
                                                <div class="thumb-lg">
                                                
                                                	<div class="row m-b-xs">
                                                    	<div class="col-xs-4" style="width:38%"></div>
                                                        <span class="col-xs-3 label fondo-solido-rojo-1" style="font-size:12px;">
                                                        <i class="icon-star"></i> 1</span>
                                                    </div>
                                                    <div class="row" style="padding-left:48px;">
                                                        <img src="images/avatar.jpg" style="width:64px !important; height:64px !important;" class="img-rounded">
                                                    </div>
                                                    <div class="row text-center letras-blancas">
                                                        JugadorMegamanXX
                                                        <br>
                                                        21 Kills
                                                    </div>
                                                    <!-- Premium-->
                                                    <div class="row text-center letras-blancas" style="height:11px">
                                                    
                                                    </div>
                                                    <!-- / Premium-->
                                                
                                                </div>
                                                <!-- / #1 -->
                                                
                                                <!-- #2 -->
                                                <div class="thumb-lg">
                                                
                                                	<div class="row m-b-xs">
                                                    	<div class="col-xs-4" style="width:38%"></div>
                                                        <span class="col-xs-3 label fondo-solido-rojo-1" style="font-size:12px;">
                                                        <i class="icon-star-half-full"></i> 2</span>
                                                    </div>
                                                    <div class="row" style="padding-left:48px;">
                                                        <img src="images/avatar.jpg" style="width:64px !important; height:64px !important;" class="img-rounded">
                                                    </div>
                                                    <div class="row text-center letras-blancas">
                                                        JugadorMegamanXX
                                                        <br>
                                                        12 Kills
                                                    </div>
                                                    <!-- Premium-->
                                                    <div class="row text-center letras-blancas" style="height:11px">
                                                     
                                                    </div>
                                                    <!-- / Premium-->
                                                
                                                </div>
                                                <!-- / #2 -->
                                                
                                                <!-- #3 -->
                                                <div class="thumb-lg">
                                                
                                                	<div class="row m-b-xs">
                                                    	<div class="col-xs-4" style="width:38%"></div>
                                                        <span class="col-xs-3 label fondo-solido-rojo-1" style="font-size:12px;">
                                                        <i class="icon-star-empty"></i> 3</span>
                                                    </div>
                                                    <div class="row" style="padding-left:48px;">
                                                        <img src="images/avatar.jpg" style="width:64px !important; height:64px !important;" class="img-rounded">
                                                    </div>
                                                    <div class="row text-center letras-blancas">
                                                        JugadorMegamanXX
                                                        <br>
                                                        8 Kills
                                                    </div>
                                                    <!-- Premium-->
                                                    <div class="row text-center letras-blancas" style="height:11px">
                                                     
                                                    </div>
                                                    <!-- / Premium-->
                                                
                                                </div>
                                                <!-- / #3 -->
                                                                                                
                                                
                                            
                                            </div>
                                        </div>

                                        </div>
                                        <!-- / TOP PK-->
                                                                                    
                                        </section>
                                        
                                        
                                    </div>
                                    <!-- / Columna 1 -->
                                    
                                    
                                    
                                    <!-- Margen inferior-->
                             		<div class="row m-b-lg"></div>
                                    
                               </div>
                           </div>    
                        </div>	
                                                
						<div class="row">
							<div class="col-lg-9">
                                                                                                                
                                <div class="panel-group m-b" id="accordion2">
                                        <div class="panel no-border" style="background-color:rgba(0,0,0,0);">
                                            <div class="panel-heading fondo-transparente-negro-075">
                                                <a class="accordion-toggle pull-right" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne"> <strong>Minimizar</strong> </a>
                                            </div>
                                            
                                            <div id="collapseOne" class="panel-collapse in fondo-transparente-negro-075">
                                            
                                                    <div class="panel-body no-border" style="padding-top:0;">
                                                        <div class="carousel slide auto panel-body no-border" style="padding-top:0;" id="c-slide">
                                                                <ol class="carousel-indicators out">
                                                                <?php   
                                                                        $stats=getStats($userdata['login']); 
                                                                        $con=0;
                                                                        foreach($stats as $stat){
                                                                            echo '<li data-target="#c-slide" data-slide-to="'.$con.'" '.($con==0?'class="active"':'').' >
                                                                        </li>';
                                                                        $con++;
                                                                        }        
                                                                ?>
    
                                                                </ol>
                                                                <div class="carousel-inner">
                                                                        <?php  
                                                                        $con=0;
                                                                        foreach($stats as $stat){
                                                                        $porcen=floor((($stat['exp']-$stat['prevexp'])/($stat['nextexp']-$stat['prevexp']))*100);
                                                                        $left=$stat['nextexp']-$stat['exp'];
                                                                        
                                                                        echo '<div class="item '.($con==0?'active':'').'">
                                                                            <div class="panel-body no-border">
                                                                                    <div class="row m-b-lg">
                                                                                            <div class="col-lg-4">
                                                                                                    <img src="images/'.$stat['race'].'.png" width="240" height="369">
                                                                                            </div>
                                                                                            <div class="col-lg-8" style="text-align:center;">
                                                                                                    <div class="letras-blancas">
                                                                       
                                                                                                            <div class="row">
																											
																												<h2 class="m-t-none m-b-none"  style="font-family:Alegreya SC;">
																														Nombre: '.$stat['name'].'
																														<br>
																														Raza: '.$stat['race'].'
																														<br>
																														Clase: '.$stat['class'].'
																												</h2>
																												
																											</div>
																											
																											<div class="m-t-lg col-xs-12 row">
																										
																												<div class="col-xs-4">
																													
																													<!-- Premium -->
																													<img class="m-b-xs img-rounded" src="images/premium.jpg" style="width:100%;">
																													<!-- / Premium -->																													
																													<img class="img-rounded" src="images/warrior.jpg" style="width:100%">
																													<div class="m-t-xs bg-warning img-rounded">
																														<h1 class="letras-negras" style="font-family:Alegreya SC; margin-top:0">
																																Nivel
																														</h1>
																														<h1 class="letras-negras" style="font-family:Alegreya SC; font-size:128px; margin-top:-35px">
																																<b>
																																		'.$stat['level'].'
																																</b>
																														</h1>
																													</div>
																													
																											
																												</div>
																												
																												<div class="col-xs-8" style="font-family:Alegreya SC; font-size:16px; text-align:left;">
																												Tiempo jugado: 00:00 Hs
																												<br>
																												Estrellas Completas: 3
																												<br>
																												Medias Estrellas: 5
																												<br>
																												Estrellas: 24
																												<br>
																												Eventos ganados: 12
																												<br>
																												Experiencia por minuto: 12
																												<br>
																												Karma: 0
																												<br>
																												Fecha de creación: 00/00/00
																												
																												<!-- Barra de XP-->
																												<div class="row m-n m-t-xs letras-blancas text-center"><b>'.$stat['exp'].'/'.$stat['nextexp'].' EXP</b>
																														<div class=" progress m-t-sm progress-striped active" style="margin-bottom:0;margin-top:0">
																															<div class="progress-bar progress-bar-warning" data-toggle="tooltip" data-original-title="'.$left.' puntos restantes para alcanzar el nivel '.($stat['level']+1).'" style="width: '.$porcen.'%;color: #000;">'.$porcen.'%
																															</div>
																														</div>
																												</div>
																												<!-- / Barra de XP-->
																												
																												
																												</div>
																											
																											</div>
                                                                                                    </div>
                                                                                                    
                                                                                                    
                                                                                            </div>
                                                                                    </div>
                                                                                    <div class="row">
                                                                                            <div class="col-lg-4">
                                                                                                    <section class="panel no-borders">
                                                                                                            <header class="panel-heading bg-success lter">
                                                                                                                    <span class="pull-right">
                                                                                                                            Hoy
                                                                                                                    </span>
                                                                                                                    <span class="h4">
                                                                                                                            '.$stat[1]['semana'].' KILLS
                                                                                                                            <br>
                                                                                                                            <small class="text-muted">
                                                                                                                                    Esta semana
                                                                                                                            </small>
                                                                                                                    </span>
                                                                                                                    <div class="text-center padder m-b-n-sm m-t-sm">
                                                                                                                            <div class="sparkline" data-type="line" data-resize="true" data-height="65" data-width="100%" data-line-width="2" data-line-color="#fff" data-spot-color="#fff" data-fill-color="" data-highlight-line-color="#fff"
                                                                                                                            data-spot-radius="3" data-data="'.$stat[1]['stringdias'].'">
                                                                                                                                    <canvas style="display: inline-block; width: 148px; height: 65px; vertical-align: top;" width="148" height="65">
                                                                                                                                    </canvas>
                                                                                                                            </div>
                                                                                                                            <div class="m-t-lg">
                                                                                                                            </div>
                                                                                                                    </div>
                                                                                                            </header>
                                                                                                            <div class="panel-body">
                                                                                                                    <div>
                                                                                                                            <span class="text-muted">
                                                                                                                                    Total de Kills:
                                                                                                                            </span>
                                                                                                                            <span class="h3 block">
                                                                                                                                    '.$stat[1]['total'].' Kills
                                                                                                                            </span>
                                                                                                                    </div>
                                                                                                                    <div class="row m-t-sm">
                                                                                                                            <div class="col-xs-4">
                                                                                                                                    <small class="text-muted block">
                                                                                                                                            D&iacute;as Jugados
                                                                                                                                    </small>
                                                                                                                                    <span>
                                                                                                                                            '.$stat['diastotales'].' D&iacute;as
                                                                                                                                    </span>
                                                                                                                            </div>
                                                                                                                            <div class="col-xs-4">
                                                                                                                                    <small class="text-muted block">
                                                                                                                                            Promedio
                                                                                                                                    </small>
                                                                                                                                    <span>
                                                                                                                                            '.$stat[1]['promedio'].' Kills
                                                                                                                                    </span>
                                                                                                                            </div>
                                                                                                                            <div class="col-xs-4">
                                                                                                                                    <small class="text-muted block">
                                                                                                                                            Máximo
                                                                                                                                    </small>
                                                                                                                                    <span>
                                                                                                                                            '.$stat[1]['max'].' Kills
                                                                                                                                    </span>
                                                                                                                            </div>
                                                                                                                    </div>
                                                                                                            </div>
                                                                                                    </section>
                                                                                            </div>
                                                                                            <div class="col-lg-4">
                                                                                                    <section class="panel no-borders">
                                                                                                            <header class="panel-heading bg-danger lter">
                                                                                                                    <span class="pull-right">
                                                                                                                            Hoy
                                                                                                                    </span>
                                                                                                                    <span class="h4">
                                                                                                                            '.$stat[2]['semana'].' PKs
                                                                                                                            <br>
                                                                                                                            <small class="text-muted">
                                                                                                                                    Esta semana
                                                                                                                            </small>
                                                                                                                    </span>
                                                                                                                    <div class="text-center padder m-b-n-sm m-t-sm">
                                                                                                                            <div class="sparkline" data-type="line" data-resize="true" data-height="65" data-width="100%" data-line-width="2" data-line-color="#fff" data-spot-color="#fff" data-fill-color="" data-highlight-line-color="#fff"
                                                                                                                            data-spot-radius="3" data-data="'.$stat[2]['stringdias'].'">
                                                                                                                                    <canvas style="display: inline-block; width: 148px; height: 65px; vertical-align: top;" width="148" height="65">
                                                                                                                                    </canvas>
                                                                                                                            </div>
                                                                                                                            <div class="m-t-lg">
                                                                                                                            </div>
                                                                                                                    </div>
                                                                                                            </header>
                                                                                                            <div class="panel-body">
                                                                                                                    <div>
                                                                                                                            <span class="text-muted">
                                                                                                                                    Total de PKs:
                                                                                                                            </span>
                                                                                                                            <span class="h3 block">
                                                                                                                                    '.$stat[2]['total'].' PKs
                                                                                                                            </span>
                                                                                                                    </div>
                                                                                                                    <div class="row m-t-sm">
                                                                                                                            <div class="col-xs-4">
                                                                                                                                    <small class="text-muted block">
                                                                                                                                            D&iacute;as Jugados
                                                                                                                                    </small>
                                                                                                                                    <span>
                                                                                                                                            '.$stat['diastotales'].' D&iacute;as
                                                                                                                                    </span>
                                                                                                                            </div>
                                                                                                                            <div class="col-xs-4">
                                                                                                                                    <small class="text-muted block">
                                                                                                                                            Promedio
                                                                                                                                    </small>
                                                                                                                                    <span>
                                                                                                                                            '.$stat[2]['promedio'].' PKs
                                                                                                                                    </span>
                                                                                                                            </div>
                                                                                                                            <div class="col-xs-4">
                                                                                                                                    <small class="text-muted block">
                                                                                                                                            M&aacute;ximo
                                                                                                                                    </small>
                                                                                                                                    <span>
                                                                                                                                            '.$stat[2]['max'].' PKs
                                                                                                                                    </span>
                                                                                                                            </div>
                                                                                                                    </div>
                                                                                                            </div>
                                                                                                    </section>
                                                                                            </div>
                                                                                            <div class="col-lg-4">
                                                                                                    <section class="panel no-borders">
                                                                                                            <header class="panel-heading bg-dark lter">
                                                                                                                    <span class="pull-right">
                                                                                                                            Hoy
                                                                                                                    </span>
                                                                                                                    <span class="h4">
                                                                                                                            '.$stat[3]['semana'].' Puntos
                                                                                                                            <br>
                                                                                                                            <small class="text-muted">
                                                                                                                                    Esta semana
                                                                                                                            </small>
                                                                                                                    </span>
                                                                                                                    <div class="text-center padder m-b-n-sm m-t-sm">
                                                                                                                            <div class="sparkline" data-type="line" data-resize="true" data-height="65" data-width="100%" data-line-width="2" data-line-color="#fff" data-spot-color="#fff" data-fill-color="" data-highlight-line-color="#fff"
                                                                                                                            data-spot-radius="3" data-data="'.$stat[3]['stringdias'].'">
                                                                                                                                    <canvas style="display: inline-block; width: 148px; height: 65px; vertical-align: top;" width="148" height="65">
                                                                                                                                    </canvas>
                                                                                                                            </div>
                                                                                                                            <div class="m-t-lg">
                                                                                                                            </div>
                                                                                                                    </div>
                                                                                                            </header>
                                                                                                            <div class="panel-body">
                                                                                                                    <div>
                                                                                                                            <span class="text-muted">
                                                                                                                                    Total de puntos de Experiencia:
                                                                                                                            </span>
                                                                                                                            <span class="h3 block">
                                                                                                                                    '.$stat[3]['total'].' Ptos
                                                                                                                            </span>
                                                                                                                    </div>
                                                                                                                    <div class="row m-t-sm">
                                                                                                                            <div class="col-xs-4">
                                                                                                                                    <small class="text-muted block">
                                                                                                                                            D&iacute;as Jugados
                                                                                                                                    </small>
                                                                                                                                    <span>
                                                                                                                                            '.$stat['diastotales'].' D&iacute;as
                                                                                                                                    </span>
                                                                                                                            </div>
                                                                                                                            <div class="col-xs-4">
                                                                                                                                    <small class="text-muted block">
                                                                                                                                            Promedio
                                                                                                                                    </small>
                                                                                                                                    <span>
                                                                                                                                            '.$stat[3]['promedio'].' Ptos
                                                                                                                                    </span>
                                                                                                                            </div>
                                                                                                                            <div class="col-xs-4">
                                                                                                                                    <small class="text-muted block">
                                                                                                                                            Máximo
                                                                                                                                    </small>
                                                                                                                                    <span>
                                                                                                                                            '.$stat[3]['max'].' Ptos
                                                                                                                                    </span>
                                                                                                                            </div>
                                                                                                                    </div>
                                                                                                            </div>
                                                                                                    </section>
                                                                                            </div>
                                                                                    </div>
                                                                            </div>
                                                                        </div>';
                                                                        $con++;
                                                                        }
                                                                        ?>
                                                                </div>
                                                                <a class="left carousel-control" href="#c-slide" data-slide="prev"> <i class="icon-angle-left"></i> </a>
                                                                <a class="right carousel-control" href="#c-slide" data-slide="next"> <i class="icon-angle-right"></i> </a>
                                                        </div>
                                                </div>
                                            
                                            </div>
                                            
                                        </div>
                                  </div>
                            
                            	<!-- Noticias -->
                            
								<section class="panel fondo-transparente-negro-075 borde-transparente-negro">
									<header class="panel-heading  fondo-transparente-negro-075 borde-transparente-negro" >
										Últimas noticias
									</header>
                                    
									<section class="panel-body">
                                    <?php 
                                            include 'newsfeed.php';
											$cantidad=3;
                                            $notis=getNews($cantidad,1); 
                                            foreach($notis as $noti){
                                                $noti['fecha']= $noti['fecha'] - (4*60*60);
                                                echo'<article class="media">
											<div class="pull-left thumb-sm">
												<span class="icon-stack">
													<i class="icon-circle text-success icon-stack-base">
													</i>
													<i class="icon-flag icon-light">
													</i>
												</span>
											</div>
											<div class="media-body">
												<div class="pull-right media-xs text-center text-muted">
													<strong class="h4">
														'.date('d',$noti['fecha']).'
													</strong>
													<br>
													<small class="label bg-light">
														'.date('M',$noti['fecha']).'
													</small>
												</div>
												<a href="#" class="h4 text-center letras-blancas" style="font-family:Alegreya SC;">'.$noti['titulo'].'</a>
                                                <small class="block text-muted">
															Por '.$noti[autor].'
												</small>
												<small class="block m-t-sm">
													'.$noti['contenido'].'
												</small>
											</div>
										</article><div class="line pull-in linea-azul-1">
										</div>';
                                                }
                                            
                                            ?>
										
									</section>
								</section>
								<!-- /Noticias -->

							</div>   
                            
                            <!-- Panel de la derecha-->
                            <div class="col-lg-3">
                                                        
                                <!-- Votos -->
                                <section class="panel clearfix borde-transparente-negro" style="background-color:transparent">
									<div class="panel-body fondo-transparente-negro-075 borde-transparente-negro" >
										
										<div class="clear">
											
                                            <h2 class="text-center letras-blancas" style="font-family:Alegreya SC; margin-top:0">Apoya a Linekkit</h2>
                                            
                                            <div class="pull-in clearfix m-b-n">
											     <div class="m-t-sm m-b text-center animated bounceInDown">
                                                 	
                                                    <div class="row">
                                                    <a href="http://vgw.hopzone.net/site/vote/95232/1" target="_blank"><img src="http://linekkit.com/images/hopzone.png" alt="Votar por Linekkit" ></a>
                                                    </div>
                                                    
                                                    <div class="row m-t-sm m-b-lg">
                                                    <a rel="nofollow" target="_blank" href="http://l2topzone.com/vote.php?id=9744" title="Lineage 2 Servers"><img src="http://linekkit.com/images/topzone.png" alt="Votar por Linekkit" ></a>
                                                    </div>
                                                    
                                                    <!-- Sección de Facebook-->
                                                    <div class="row">
                                                    	<div class="fb-like-box" data-href="https://www.facebook.com/Linekkit" data-width="260" data-height="300" data-colorscheme="dark" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false"></div>                                                   </div>
                                                    
                                                </div>
											</div>
										</div>
									</div>
								</section>
                                <!-- /Votos -->     
                                
                                <section>
									<?php 
                                        include_once('status.php');
                                        getStatus();
                                    ?>
                                </section>                      
								
								<section class="panel fondo-transparente-negro-075 borde-transparente-negro">
                                
                                <h2 class="text-center letras-blancas" style="font-family:Alegreya SC;">Seven Signs</h2>
									<div class="text-center wrapper">
										<div class="sparkline inline" data-type="pie" data-height="150" data-slice-colors="['#3E4DBD','#EB6106']">
											<?php $seven=get7SStats(); echo $seven['dawn'].','.$seven['dusk']; ?>
										</div>
									</div>
									<ul class="list-group list-group-flush no-radius alt">
										<li class="list-group-item fondo-transparente-000 linea-azul-1">
											<span class="pull-right">
												<?php echo $seven['dawn']; ?>
											</span>
											<span class="label fondo-solido-azul-2">
												1
											</span>
											 <span class="m-l-xs">Priest of Dawn</span>
										</li>
										<li class="list-group-item fondo-transparente-000 linea-azul-1">
											<span class="pull-right">
												<?php echo $seven['dusk']; ?>
											</span>
											<span class="label fondo-solido-naranja-1">
												2
											</span>
											 <span class="m-l-xs">Priest of Dusk</span>
										</li>
									</ul>
								</section>
							 </div>
                             <!-- / Panel de la derecha-->
                             
						</div>
					</section>
				</section>
				<a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen" data-target="body"></a>
			</section>
			<!-- /.vbox -->
		</section>
        
        <script src="js/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="js/bootstrap.js"></script>
        <!-- Sparkline Chart -->
        <script src="js/charts/sparkline/jquery.sparkline.min.js"></script>
        <!-- App -->
        <script src="js/app.js"></script>
        <script src="js/app.plugin.js"></script>
        <script src="js/app.data.js"></script>  
		
        <!--  fix carousel canvas -->
        <script type="text/javascript">
        $('#c-slide').on('slid.bs.carousel', function () {
            $.sparkline_display_visible();
        });
        </script>
        <!--  /fix carousel canvas -->

	</body>

</html>