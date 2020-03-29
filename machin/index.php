<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name ="viewport" content="width=device-width, initial-scale=1">

	<meta name="description" content="Le Requin bleu, dénommé également Peau bleue (Prionace glauca)"/>



	<?php wp_head(); ?>

</head>


<body>
 <header id="header" class="fixed-top">
            <div class="container">

                <div class="logo float-left">
                    <h1 class="text-light"><a href="index.php"><span>Acceuil</span></a></h1>

                </div>
                <nav class="nav-menu float-right d-none d-lg-block">
                    <ul>
                        <li class="drop-down"><a href="#">Présentation</a>
                            <ul> 
                                <li ><a  class="top_b" href=""> Présentation</a></li>
                                <li><a class="top_b" href="">Mot du directeur</a></li>
                                <li><a class="top_b" href="">ESTSB en chiffres </a></li>
                            </ul>
                        </li>
                        <li class="drop-down"><a href="#">Formation</a>
                                    <ul>
                                        <li ><a class="top_b" href=""> Formation intial</a></li>
                                        <li><a class="top_b" href="">Formation secondaire</a></li>
                                    </ul>
                        </li>
                        <li class="drop-down"><a href="#">Recherche</a>
                            <ul>
                                <li class="top_b"><a class="top_b" href="">Structures de recherche </a></li>
                                <li><a class="top_b" href="">Centre des études Doctorales</a></li>
                            </ul>
                        </li>
                        <li class="drop-down"><a href="#">Carrières</a>
                            <ul>
                                <li class="top_b"><a class="top_b" href=""> Stage</a></li>
                                <li><a class="top_b" href="">Emploi</a></li>
                            </ul>
                        </li>
                        <li ><a href="">Calendrier</a></li>
                        <li ><a href="">Contact</a></li>
                    </ul>

                </nav>

            </div>
        </header> 
	<!--<header>
		
		<nav class="navbar navbar-default navbar-static-top">
			<div class="container">
				<div class="navbar-header" >
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapsed" data-target="#navbar" aria-expanded="false" aria-controls="navbar" >
						<span class="sr-only" > Toggle navigation</span>
						<span class="icone-bar"></span>
						<span class="icone-bar"></span>
						<span class="icone-bar"></span>
					</button>
					<a class="navbar-brand" href="/">home</a>
				</div>
				<div id="navbar" class="navbar-collapse collapse">
					<ul class="nav navbar-nav navbar-right ">
						<li class="active"><a href="#">menu 1</a>></li>
						<li><a href="#">menu 2</a>></li>
						<li><a href="#">menu 3</a>></li>
					</ul>
				</div>
			</nav>

		</header>-->
<br><br>
<div id="carouselId" class="carousel slide" data-ride="carousel">
     <ol class="carousel-indicators">
         <li data-target="#carouselId" data-slide-to="0" class="active"></li>
         <li data-target="#carouselId" data-slide-to="1"></li>
         <li data-target="#carouselId" data-slide-to="2"></li>
     </ol>
     <div class="carousel-inner" role="listbox">
         <div class="carousel-item active">
             <img style="width:100%; height:70vh" src="<?php echo get_template_directory_uri()?>/image/img1.jpg"
                 alt="First slide">
             <div class="carousel-caption d-none d-md-block">
                 <h1 style="color: red ; font-size:500%" > Génie Informatique </h1>
                 <p style="color: red ; font-size:200% ">Description</p>
             </div>
         </div>
         <div class="carousel-item">
             <img style="width:100%; height:70vh" src="<?php echo get_template_directory_uri()?>/image/img3.jpg"
                 alt="Second slide">
             <div class="carousel-caption d-none d-md-block">
                 <h3  style="color: red ; font-size:500%">Technique de Management</h3>
                 <p style="color: red ; font-size:200% ">Description</p>
             </div>
         </div>
         <div class="carousel-item">
             <img style="width:100%; height:70vh" src="<?php echo get_template_directory_uri()?>/image/img2.jpg"
                 alt="Third slide">
             <div class="carousel-caption d-none d-md-block">
                 <h3  style="color: red ; font-size:500%">Génie Agronomique</h3>
                 <p style="color: red ; font-size:200% ">Description</p>
             </div>
         </div>
     </div>
     <a class="carousel-control-prev" href="#carouselId" role="button" data-slide="prev">
         <span class="carousel-control-prev-icon" aria-hidden="true"></span>
         <span class="sr-only">Previous</span>
     </a>
     <a class="carousel-control-next" href="#carouselId" role="button" data-slide="next">
         <span class="carousel-control-next-icon" aria-hidden="true"></span>
         <span class="sr-only">Next</span>
     </a>
 </div>

<br><br><br>
<div class="container">
     <h1 style="text-align:center;">ACTUALITÉS</h1>
 </div>
 <hr style=" width: 20vh;
  height: 10px;
  color: red;
  display: block;
  margin-top: 0.5em;
  margin-bottom: 0.5em;
  margin-left: auto;
  margin-right: auto;
  border-style: inset;
  border-width: 2px;
  background:rgb(38, 207, 236);">
	

		<?php wp_footer(); ?>


	</body>
	</html>