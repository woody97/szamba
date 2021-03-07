<?php global $Wcms ?>
<!DOCTYPE html>
<html lang="pl">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?=wCMS::get('config','siteTitle')?> - <?=wCMS::page('title')?></title>
<meta name="description" content="<?=wCMS::page('description')?>">
<meta name="keywords" content="<?=wCMS::page('keywords')?>">	
<link rel="stylesheet" href="<?=wCMS::asset('assets/css/font-awesome.min.css')?>">
<link rel="stylesheet" href="<?=wCMS::asset('assets/css/bootstrap.min.css')?>">
<link rel="stylesheet" href="<?=wCMS::asset('assets/css/owl.carousel.min.css')?>">
<link rel="stylesheet" href="<?=wCMS::asset('assets/css/iconfont.css')?>">
<link rel="stylesheet" href="<?=wCMS::asset('assets/css/isotope.css')?>">
<link rel="stylesheet" href="<?=wCMS::asset('assets/css/plugins.css')?>">
<link rel="stylesheet" href="<?=wCMS::asset('assets/css/style.css')?>">
<link rel="stylesheet" href="<?=wCMS::asset('assets/css/responsive.css')?>">
<link rel="stylesheet" href="<?=wCMS::asset('cssmap-poland/cssmap-poland.css')?>">


    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
	
	
	
	<?=wCMS::css()?>

</head>
	<body class="boxed-layout">
	<?=wCMS::alerts()?>
	<?=wCMS::settings()?>
	
	
	

    <!-- nav search -->
    <div class="zoom-anim-dialog mfp-hide modal-searchPanel" id="modal-popup-2">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="xs-search-panel">
                    <form action="#" method="POST" class="xs-search-group">
                        <input type="search" class="form-control" name="search" id="search" placeholder="Search">
                        <button type="submit" class="search-button"><i class="icon icon-search1"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div><!-- End xs modal -->
    <!-- end language switcher strart -->

    <div class="body-wrapper mx-auto">
        <header id="header" class="header-box">
            <div class="topbar">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-2">
                            <!--  <a class="nav-brand" href="#"></a>-->
                            <div class="logo-area">
                                <a href="./index.html" class="logo">
                                    <img class="img-fluid" src="assets/images/logo.png" alt="szamba betonowe" title="szamba betonowe" >
                                </a>
                            </div>
                        </div><!-- Col end -->
                        <div class="col-lg-10">
                            <div class="top-bar pull-right">
                                <ul class="header-nav-right-info">
                                    <li>
                                        <i class="icon icon-phone2"></i>
                                        <span>+ 48 502-562-565</span>
                                        nr tel 1
                                    </li>
									<li>
                                      <i class="icon icon-phone2"></i>
                                        <span>+48 507-414-622</span>
                                        nr tel 2
                                    </li>
                                    <li>
                                        <i class="icon icon-envelope2"></i>
                                        <span>kontakt@zbrojone-szamba.pl</span>
                                       wyślij wiadomość
                                    </li>
                                    
                                </ul>
                            </div><!-- Top bar end -->

                        </div>
                    </div><!-- .row end -->
                </div>
            </div>
            <div class="navbar-sticky navbar-container ts-nav">
                <div class="container">
                    <div class="row ">
                        <div class="col-lg-12 text-right">
                            <nav class="navbar navbar-expand-lg navbar-light">
                                
                          
                                    <ul class="navbar-nav">
                                        <li class="dropdown nav-item active">
                                            <a href="#" class="" >Szamba betonowe</a>
                                            
                                        </li> <li class="dropdown nav-item ">
                                            <a href="#" class="" >O nas </a>
                                            
                                        </li>
										  <li class="dropdown nav-item">       
											    <a href="#" class="" data-toggle="dropdown">Nasze produkty<i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu active" role="menu">
                                    <li><a href="#">Szamba jednokomorowe</a></li>
                                    <li><a href="#">Szamba dwukomorowe</a></li>
                                    <li><a href="#">Kanały samochodowe</a></li>
                                    <li><a href="#">Piwnice ogrodowe</a></li>
                                    <li><a href="#">Dodatkowe elementy</a></li>
                                </ul>
                                    
                                        <li class="nav-item dropdown">
                                            <a href="#czeste-pytania" class="" >Częste pytania </a>
                                           
                                        </li>
										
										<li class="nav-item dropdown">
                                            <a href="#" class="" >Dokumentacja	</a>
                                           
                                        </li>
                                        
                                    
                                        <li class="nav-item dropdown">
                                            <a href="#galeria" class="">
                                                Galeria
                                            </a>
                                          
                                        </li><li class="nav-item dropdown">
                                            <a href="#" class="">
                                                Kontakt 
                                            </a>
                                          
                                        </li>
                                    </ul>
                                <a href="tel:+48502562565"> <div class="phone-call"><img src="https://image.flaticon.com/icons/png/512/131/131133.png" width="50" style="margin-top:20px" alt="zadzwoń do szamba zbrojone" title="zadzwoń do szamba zbrojone">
  <p style="color: black;
    font-weight: bold;
    font-size: 14px;">Zadzwoń!</p></div></a>
                        

                            </nav>
                        </div>
                    </div><!-- .row end -->
                </div><!-- .container end -->
            </div>
        </header>
        <!-- Header end --> 

        <div id="hero-slider" class="hero-slider">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-md-12 mt-5 pr-0">
                        <div class="owl-carousel features-slider" id="feature-slider">
                            <div class="slider-content" style="background-image: url(https://tanieszambabetonowe.pl/wp-content/uploads/2020/02/tanieszambabetonowe-zdjecie-glowne-slajd-1-1024x768.jpg)">
                                <div class="content-wrapper">
                                    <h1 class="slider-title">
                             Jesteśmy liderem w produkcji szamb betonowych w Polsce
                                    </h1>
                                    <a href="#" class="btn btn-primary">
                                       O nas
                                        <i class="icon icon-arrow-right"></i>
                                    </a>
                                    <a href="#" class="btn btn-border-dark">
                                        Kontakt
                                        <i class="icon icon-arrow-right"></i>
                                    </a>
                                </div><!-- content wrapper end -->
                            </div><!-- slider content end -->
                            <div class="slider-content" style="background-image: url(https://tanieszambabetonowe.pl/wp-content/uploads/2019/02/betoniarnia_01a.jpg)">
                                <div class="content-wrapper">
                                    <h1 class="slider-title">
                                       Nowoczesna linia produkcyjna, wdrożona polityka jakości
                                    </h1>
                                    <a href="#" class="btn btn-primary">
                                  Certyfikaty
                                        <i class="icon icon-arrow-right"></i>
                                    </a>
                                    <div class="btn btn-border-dark">
                                      Kontakt
                                        <i class="icon icon-arrow-right"></i>
                                    </div>
                                </div><!-- content wrapper end -->
                            </div><!-- slider content end -->
							
							        <div class="slider-content" style="background-image: url(https://tanieszambabetonowe.pl/wp-content/uploads/2019/06/012.jpg)">
                                <div class="content-wrapper">
                                    <h1 class="slider-title">
                                Transport na terenie całego kraju, Montaż GRATIS
                                    </h1>
                                    <a href="#jak-wyglada" class="btn btn-primary">
                                        Więcej
                                        <i class="icon icon-arrow-right"></i>
                                    </a>
                                    <div class="btn btn-border-dark">
                                      Kontakt
                                        <i class="icon icon-arrow-right"></i>
                                    </div>
                                </div><!-- content wrapper end -->
                            </div><!-- slider content end -->
                         
                        </div><!-- Feature slider end -->
                    </div><!-- col end -->
                    <div class="col-lg-5 col-md-12 slider-feature">
                        <div class="row">
                            <div class="col-lg-6 p-0">
						  <a href="#"> 
                                <div class="featured-box bg-green">
                                  <img src="assets/images/jedno.png" style="max-height: 115px;
    display: block;
    margin: 0 auto;">
                                    <h3 class="ts-title">
                                       Szamba jednokomorowe 
                                    </h3>
                                    <p> </p>
                                </div><!-- post item -->
								 </a>
                            </div>
                            <!-- col end-->
                            <div class="col-lg-6 pl-0">
							<a href="#">
                                <div class="featured-box mr-0 bg-blue">
                                   <img src="assets/images/dwu.png" style="max-height: 115px;
    display: block;
    margin: 0 auto;">
                                    <h3 class="ts-title">
                                       Szamba dwukomowowe
                                    </h3>
                               
                                </div><!-- post item -->
								</a>
                            </div>
                            <!-- col end-->
                            <div class="col-lg-6 p-0 mb-0">    <a href="#">
                                <div class="featured-box bg-blue bg-rev-mob1">
                                              <img src="assets/images/kanal.png" style="max-width: 160px;
    display: block; 
    margin: 45px auto 10px;">
                                    <h3 class="ts-title">
                                    Kanały samochodowe 
                                    </h3>
                                  
                                </div><!-- post item --></a>
                            </div>
                            <!-- col end-->
                            <div class="col-lg-6 pl-0 mb-0"> <a href="#">
                                <div class="featured-box mr-0 bg-green bg-rev-mob2">
                                   <img src="assets/images/piwnica-dluzsza.png" style="max-height: 80px;
    display: block;
       margin: 27px auto;"> 
                                    <h3 class="ts-title">
                                       Piwnice ogrodowe 
                                    </h3>
                              
                                </div><!-- post item --></a>
                            </div><!-- col end-->
                        </div><!-- row end -->
                    </div><!-- col end -->
                </div><!-- .row END -->
            </div><!-- .container END -->
        </div>
        <!-- Slider section end -->
		     <div class="navbar-container ts-nav">
                <div class="container">
                    <div class="row ">
                        <div class="col-lg-12 text-right">
                            <nav class="navbar navbar-expand-lg navbar-light">
                                
                            
                                    <ul class="navbar-nav">
                                        <li class="nav-item">
                                            <a href="#gdzie-powinno" class="" >Gdzie zamontować? </a>
                                            
                                        </li>
                                        <li class="dropdown nav-item">
                                            <a href="#jak-przygotowac" class="" >Jak przygotować teren?
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a href="#jak-wyglada" class="" >Transport i montaż </a>
                                           
                                        </li>
                                        
                                    
                                        <li class="nav-item dropdown">
                                            <a href="#o-czym-trzeba-wiedziec" class="">
                                                Na co zwrócić uwagę?
                                            </a>
                                          
                                        </li>
                                    </ul>
                              
                             

                            </nav>
                        </div>
                    </div><!-- .row end -->
                </div><!-- .container end -->
            </div>
		
		
      <section class="ts-funfact ts-funfact-classic pt-40 ts-feature-box">
            <div class="container">
			<div class="row pb-30"><div class="col-lg-12 text-center"><span>Nasze </span><h1>Szamba betonowe</h1><span> to: </span></div></div>
                <div class="row ">
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="single-funfact">
                            <i class="icon icon-Funfacts"></i>
                            <h3 class="funfact-title">Oszczędność<br> pieniędzy</h3>
                            <p>Szamba betonowe są tańsze nawet to 70% od innych szamb dotępnych na rynku</p>
                        </div>
                    </div>
                  
                    <div class="col-lg-3 col-md-6 col-sm-12 wow fadeInUp">
                        <div class="single-funfact">
                            <i class="icon icon-Funfacts-3"></i>
                            <h3 class="funfact-title">Szybki czas <br>realizacji</h3>
                            <p>Nawet do 3 dni możemy zamontować szambo na twojej posesji.</p>
                        </div>
                    </div>
					
					  <div class="col-lg-3 col-md-6 col-sm-12 wow fadeInUp">
                        <div class="single-funfact">
                            <i class="icon icon-Funfacts-2"></i>
                            <h3 class="funfact-title">16 lat <br>doświadczenia</h3>
                            <p>Wybierając naszą ofertę decydujesz się na firmę z ugrutnowaną pozycją na rynku</p>
                        </div>
                    </div>
					
                    <div class="col-lg-3 col-md-6 col-sm-12 wow fadeInUp">
                        <div class="single-funfact">
                            <i class="icon icon-Funfacts-4"></i>
                            <h3 class="funfact-title">Certyfikaty <br>państwowe</h3>
                            <p>Posiadamy certyfikaty państwowego instytutu technicznego, nasze produktu są w 100% bezpieczne.</p>
                        </div>
                    </div>
					   </div><!-- row end -->
					<div class="row  pt-50">
					        <div class="col-lg-6">
                        <div class="about-intro">
                            <p>totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex. ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"
totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. </p>
                        </div>
                    </div><!-- col end -->

                    <div class="col-lg-6">
                        <div class="intro-image-box">
                            <img class="img-fluid promo-foto" src="assets/images/006.jpg" alt="">
                            <div class="intro-shape"></div>
                        </div>
                    </div><!-- col end -->
             
				<div class="row">
				<div class="col-lg-12">
				  <div class="about-intro">
					<p>ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"
totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex. 
                            </p>
							
							 <div class="row pt-30 pb-20">
                    <div class="col-lg-4 ts-feature">
                        <div class="ts-feature-info">
                            <div class="feature-icon">
                              <img src="https://www.flaticon.com/svg/vstatic/svg/1156/1156728.svg?token=exp=1613949168~hmac=4cea8190bd25e6db21760fee171c1c67" alt="" style="width:100px">
                            </div>
                            <span class="feature-number">5</span>
                            <h3 class="ts-title">5 lat gwarancji</h3>
                            <p>ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur
                            </p>
                        </div>
                        <!-- feature 1 end-->
                    </div>
                    <!-- Col end-->
                    <div class="col-lg-4 ts-feature">
                        <div class="ts-feature-info">
                            <div class="feature-icon">
                                <img src="https://www.flaticon.com/svg/vstatic/svg/157/157609.svg?token=exp=1613949341~hmac=b73ac002196dae36ffbed16c9d2263bc" alt="" style="width:140px">
                            </div>
                            <span class="feature-number">1-3</span>
                            <h3 class="ts-title">Dostawa 1-3 dni</h3>
                            <p>ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur
                            </p>
                        </div>
                        <!-- feature 2 end-->
                    </div>
                    <!-- Col end-->
                    <div class="col-lg-4 ts-feature">
                        <div class="ts-feature-info">
                            <div class="feature-icon">
                                <img src="https://www.flaticon.com/svg/vstatic/svg/273/273750.svg?token=exp=1613949488~hmac=e2e585aa34bd3835a07b74e78b6bd12a" alt="" style="width:100px">
                            </div>
                            <span class="feature-number">free</span>
                            <h3 class="ts-title">Darmowy montaż</h3>
                            <p>ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur</p>
                        </div>
                        <!-- feature 3 end-->
                    </div>
                    <!-- Col end-->
						<p class="pb-20">ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"
totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex.
                            </p>
                </div>
							
							
				</div>
						</div>
			
				</div>
					
					
                </div><!-- row end-->
            </div><!-- .container end -->
        </section>
        <!-- Fun Fact area end-->

       
		
		  <section id="ts-cta-area" class="ts-cta-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="cta-title text-left">
                            <h2>
                               Specjalistyczny i bezpieczny transport
                            </h2>
                            <p>Konkurencyjne ceny, bezpłatny montaż </p>
                        </div>
                        <!-- Col End -->
                    </div><!-- col end -->
                    <div class="col-lg-5 align-self-center">
                        <div class="cta-btn text-right">
                            <a href="#jak-wyglada" class="btn btn-primary">
                               Więcej o transporcie i montażu
                                <i class="icon icon-arrow-right"></i>
                            </a>
                        </div>
                    </div><!-- col end -->
                </div>
				
				<div class="row"><div class="col-lg-12"> 
                        </div></div></div>
                <!--/ Content row end -->
            </div>
            <!--/ Container end -->
        </section>
        <!-- Section end -->
		
		
   


	   <!-- start latest news section -->
        <section class="ts-latest-news ts-latest-news-standard pb-0 section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="section-title">
                       Szamba betonowe - oferta regionalna
                        </h2>
						
						<p class="pb-20">ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"
totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex.
                            </p>
						
                    </div>
                </div><!-- row end-->
                 
                  

			<div class="row">
<div class="col-lg-12">
<div id="map-poland" >
 <ul class="poland">
  <li class="pl1"><a href="#dolnoslaskie">Dolnośląskie</a></li>
  <li class="pl2"><a href="#kujawsko-pomorskie">Kujawsko-pomorskie</a></li>
  <li class="pl3"><a href="#lubelskie">Lubelskie</a></li>
  <li class="pl4"><a href="#lubuskie">Lubuskie</a></li>
  <li class="pl5"><a href="#lodzkie">Łódzkie</a></li>
  <li class="pl6"><a href="#malopolskie">Małopolskie</a></li>
  <li class="pl7"><a href="#mazowieckie">Mazowieckie</a></li>
  <li class="pl8"><a href="#opolskie">Opolskie</a></li>
  <li class="pl9"><a href="#podkarpackie">Podkarpackie</a></li>
  <li class="pl10"><a href="#podlaskie">Podlaskie</a></li>
  <li class="pl11"><a href="#pomorskie">Pomorskie</a></li>
  <li class="pl12"><a href="#slaskie">Śląskie</a></li>
  <li class="pl13"><a href="#swietokrzyskie">Świętokrzyskie</a></li>
  <li class="pl14"><a href="#warminsko-mazurskie">Warmińsko-mazurskie</a></li>
  <li class="pl15"><a href="#wielkopolskie">Wielkopolskie</a></li>
  <li class="pl16"><a href="#zachodniopomorskie">Zachodniopomorskie</a></li>
 </ul>
</div>
</div>
 
</div>
					
					
					
                    
            
            </div><!-- .container end -->
        </section><!-- End latest news section -->

        <section class="quote-area-classic solid-bg" id="quote-area">
            <div class="container">
                <div class="row">
				<div class="col-lg-12">
					<div id="czeste-pytania"></div>
				 <h2 class="column-title pt-40"> Szamba betonowe - częste pytania</h2>
				
				    <div class="card">
						<div id="jak-przygotowac"></div>
                                <div class="card-header" >
                                
                                       1. Jak przygotować teren pod montaż szamba betonowego?
                                     
                               
                                </div> <!-- Card Header End -->
                                <div  class="collapse show">
                                    <div class="card-body">Prosimy o przygotowanie wykopu pod szambo tego samego dnia, którego ma nastąpić dostawa zbiornika. Ewentualnie można przygotować wykop dzień wcześniej.
Należy pamiętać o odpowiednich wymiarach wykopu. Wymiary wykopu podane są na naszej stronie internetowej.
Dno wykopu musi być wyrównane i poziomowane, a następnie podsypane żwirem lub piaskiem (w zależności od rodzaju zbiornika betonowego) o grubości 10 cm
Należy przygotować wjazd dla samochodu ze zbiornikiem – usunąć wszystkie zbędne przedmioty znajdujące się na drodze, a w razie konieczności utwardzić teren dojazdu
                                    </div> <!-- Card Body End -->
                                </div> <!-- Collapse End -->
                            </div> <!-- Card End -->   
							
							
								<div class="card">
									<div id="gdzie-powinno"></div>
                                <div class="card-header" >
                                
                                       2. Gdzie powinno być osadzone szambo betonowe?
                                     
                               
                                </div> <!-- Card Header End -->
                                <div  class="collapse show">
                                    <div class="card-body">ROZPORZĄDZENIE MINISTRA GOSPODARKI PRZESTRZENNEJ I BUDOWNICTWA
z dnia 12 kwietnia 2002 r. w sprawie warunków technicznych, jakim powinny odpowiadać budynki i ich usytuowanie (Dz.U.02.75.690).

Odległość pokryw i wylotów wentylacji ze zbiorników bezodpływowych na nieczystości ciekłe, o pojemności do 10 m3 powinna wynosić co najmniej: 
1) od okien i drzwi zewnętrznych do pomieszczeń przeznaczonych na pobyt ludzi – 5 m 
2) od granicy działki sąsiedniej, drogi (ulicy) lub ciągu pieszego – 2 m.

Odległości pokryw i wylotów wentylacji zbiorników o pojemności powyżej 10 m3 do 50 m3 powinny wynosić co najmniej: 
1) od okien i drzwi zewnętrznych do pomieszczeń wymienionych 30 m, 
2) od granicy działki sąsiedniej – 7,5 m, 
3) od linii rozgraniczającej drogi (ulicy) lub ciągu pieszego – 10 m.
                                    </div> <!-- Card Body End -->
                                </div> <!-- Collapse End -->
                            </div> <!-- Card End -->  
							
						
				
				</div>
				
				    <div class="col-lg-6">
                 
                       	

							<div class="card">
							<div id="o-czym-trzeba-wiedziec"></div>
                                <div class="card-header"  >
                                 
                                       3. O czym jeszcze trzeba pamiętać przed montażem szamba betonowego?
                                     
                               
                                </div> <!-- Card Header End -->
                                <div class="collapse show">
                                    <div class="card-body">Głównie należy zagwarantować dojazd dla samochodu ciężarowego do wykopu gdzie osadzony będzie zbiornik. Należy również zagwarantować dostęp do prądu w celu podłączenia wiertarko/mieszarki. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex.
                                    </div> <!-- Card Body End -->
                                </div> <!-- Collapse End -->
                            </div> <!-- Card End -->   <div class="card">
								<div id="jak-wyglada"></div>
                                <div class="card-header"  >
                                
                                       4. Jak wygląda transport szamba?
                                     
                               
                                </div> <!-- Card Header End -->
                                <div  class="collapse show">
                                    <div class="card-body">Firma zapewnia dwa rodzaje transportu:

transport łączony
transport indywidualny
Transport łączony polega na połączeniu ze sobą kilku zleceń transportowych co zdecydowanie obniża koszt transportu, który w tym wypadku rozbity jest na kilka osób. Dostawa najczęściej trwa od 1-3 dni roboczych.

Transport indywidualny wykonywany jest wtedy kiedy klient chce otrzymać szambo betonowe jeszcze tego samego dnia lub najpóźniej na dzień następny. Jest to nieco droższa forma transportu z uwagi na fakt iż transport kierowany jest indywidualnie tylko do Państwa i nie mamy możliwości dołączenia do niego innego zlecenia transportowego.
                                    </div> <!-- Card Body End -->
                                </div> <!-- Collapse End -->
                            </div> <!-- Card End -->
							

                 
                  
                </div>
                    <div class="col-lg-6">
                        <div class="quote_form" style="background-image: url(https://tanieszambabetonowe.pl/wp-content/uploads/2019/01/dodatkowe-elementy-szamba-betonowe.jpg)">
                            <h2 class="column-title title-white">Masz więcej pytań?</h2>
                            <p>Napisz do nas! odpowiemy najszybciej jak to możliwe!</p>
                            <form class="contact-form" id="ts-contact-form" action="contact-form.php" method="POST">
                                <div class="error-container"></div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input class="form-control form-name" id="name" name="name"
                                                placeholder="Imię i nazwisko" required="">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input class="form-control form-email" type="email" id="email" name="email"
                                                placeholder="Email" required="">
                                        </div>
                                    </div>
                                </div>
                                <!-- Row 1 end-->
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input class="form-control form-subject" id="subject" name="subject"
                                                type="text" placeholder="Temat" required="">
                                        </div>
                                    </div>
                                </div>
                                <!-- Row end-->
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <textarea class="form-control form-message" placeholder="Wiadomość" rows="6"
                                                name="message" required=""></textarea>
                                        </div>
                                    </div>
                                </div>
                                <!-- Row end-->
                                <div class="form-group text-right mb-0">
                                    <input class="button btn btn-primary" type="submit" value="Wyślij">
                                </div>
                            </form>
                            <div id="server-results"></div>
                        </div>
                        <!-- Quote form end-->
                    </div>
                    <!-- Col end-->
                  
                    <!-- Col end-->
                </div>
                <!-- Content row end-->
            </div>
            <!-- Container end-->
        </section>
		
		
		
     



    
    

        <section id="ts-project-area" class="ts-project-area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title-item">
<div id="galeria"></div>
                            <h2 class="section-title">
                              Galeria produktów
                            </h2>
                        </div>
                        <div class="recent-folio-menu">
                            <ul>
                                <li class="active filter" data-filter="all">Wszystkie</li>
                                <li class="filter" data-filter=".cat1">Szamba jednokomorowe</li>
                                <li class="filter" data-filter=".cat2">Szamba dwukomorowe</li>
                                <li class="filter" data-filter=".cat3">Kanały samochodowe</li>
                                <li class="filter" data-filter=".cat4">Piwnice ogrodowe</li>
								   <li class="filter" data-filter=".cat5">Pozostałe elementy</li>
                            </ul>
                        </div>
                    </div>
                </div><!-- row end-->
                <div class="row" id="mixcontent">
                    <div class="col-lg-3 mix cat1 col-sm-6 mb-10">
                        <a href="" class="ts-image-popup" data-effect="mfp-zoom-in">
                            <div class="single-recent-work">
                                <img src="https://tanieszambabetonowe.pl/wp-content/uploads/2019/06/007-400x300.jpg" alt="">
                                <div class="recet-work-footer">
                                   

                                </div>
                        
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-3 mix cat1 col-sm-6 mb-10">
                        <a href="" class="ts-image-popup" data-effect="mfp-zoom-in">
                            <div class="single-recent-work">
                                <img src="assets/images/szamba (6).jpg" alt="">
                                <div class="recet-work-footer">
                               
                                   
                                </div>
                            
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-3 mix cat1 col-sm-6 mb-10">
                        <a href="" class="ts-image-popup" data-effect="mfp-zoom-in">
                            <div class="single-recent-work">
                                <img src="assets/images/szamba (8).jpg" alt="">
                                <div class="recet-work-footer">
                             
                                 
                                </div>
                           
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-3 mix cat1 col-sm-6 mb-10">
                        <a href="" class="ts-image-popup" data-effect="mfp-zoom-in">
                            <div class="single-recent-work">
                                <img src="https://tanieszambabetonowe.pl/wp-content/uploads/2019/06/010-400x300.jpg" alt="">
                                <div class="recet-work-footer">
                                   
                                   
                                </div>
                            
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-3 mix cat2 col-sm-6">
                        <a href="" class="ts-image-popup" data-effect="mfp-zoom-in">
                            <div class="single-recent-work">
                                <img src="assets/images/szamba (5).jpg" alt="">
                                <div class="recet-work-footer">
                                   
                                </div>
                            
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-3 mix cat2 col-sm-6">
                        <a href="" class="ts-image-popup" data-effect="mfp-zoom-in">
                            <div class="single-recent-work">
                                <img src="assets/images/szamba (16).jpg" alt="">
                                <div class="recet-work-footer">
                                    
                                </div>
                             
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-3 mix cat2 col-sm-6">
                        <a href="" class="ts-image-popup" data-effect="mfp-zoom-in">
                            <div class="single-recent-work">
                                <img src="https://tanieszambabetonowe.pl/wp-content/uploads/2020/02/szamba-betonowe-dwukomorowe-1.jpg" alt="">
                                <div class="recet-work-footer">
                                  
                                </div>
                               
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-3 mix cat2 col-sm-6">
                        <a href="" class="ts-image-popup" data-effect="mfp-zoom-in">
                            <div class="single-recent-work">
                                <img src="https://tanieszambabetonowe.pl/wp-content/uploads/2019/01/szamba-dwukomorowe.jpg" alt="">
                                <div class="recet-work-footer">
                                   
                                </div>
                          
                            </div>
                        </a>
                    </div>
					
					
					
					            <div class="col-lg-3 mix cat4 col-sm-6">
                        <a href="" class="ts-image-popup" data-effect="mfp-zoom-in">
                            <div class="single-recent-work">
                                <img src="assets/images/szamba (27).jpg" alt="">
                                <div class="recet-work-footer">
                                   
                                </div>
                          
                            </div>
                        </a>
                    </div>
					     <div class="col-lg-3 mix cat4 col-sm-6">
                        <a href="" class="ts-image-popup" data-effect="mfp-zoom-in">
                            <div class="single-recent-work">
                                <img src="assets/images/szamba (28).jpg" alt="">
                                <div class="recet-work-footer">
                                   
                                </div>
                          
                            </div>
                        </a>
                    </div>
					     <div class="col-lg-3 mix cat4 col-sm-6">
                        <a href="" class="ts-image-popup" data-effect="mfp-zoom-in">
                            <div class="single-recent-work">
                                <img src="assets/images/szamba (31).jpg" alt="">
                                <div class="recet-work-footer">
                                   
                                </div>
                          
                            </div>
                        </a>
                    </div>
					     <div class="col-lg-3 mix cat4 col-sm-6">
                        <a href="" class="ts-image-popup" data-effect="mfp-zoom-in">
                            <div class="single-recent-work">
                                <img src="assets/images/szamba (25).jpg" alt="">
                                <div class="recet-work-footer">
                                   
                                </div>
                          
                            </div>
                        </a>
                    </div>
					
					
					
					
					

                </div><!-- row end-->
            </div><!-- .container end -->

        </section><!-- Project area end -->


    


  



        <footer id="ts-footer" class="ts-footer"
            style="background: url( https://www.tanieszambabetonowe.pl/wp-content/uploads/2019/02/ban003.jpg); background-size: cover">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-4">
                        <!-- End Footer info -->
                        <a href="index.html" class="footer-logo">
                            <img src="assets/images/logo-footer.png" alt="footer_logo" style="max-width: 240px;
    margin-bottom: 30px;background: radial-gradient(#101010 0%,transparent 80%);">
                        </a>
                        <div class="widget-details">
                          
                            <ul>
                                <li>Kontakt</li>
                                <li>Email: <span>kontakt@zbrojone-szamba.pl</span></li>
                            </ul>
                            <h3>
                              Pracujemy:
                            </h3>
                            <p>
                            Poniedziałek - Sobota, 7:00-18:00
                            </p>
                        </div>
                        <!--Inner row 1 end -->
                    </div>
                    <!-- End Col -->
                    <div class="col-md-12 col-lg-4">
                        <div class="footer-widget footer-left-widget">
                            <h3 class="widget-title">Oferta regionalna</h3>
                            <ul>
                                <li><a href="#">mazowieckie</a></li>
                                <li><a href="#">świętokrzyskie</a></li>
                                <li><a href="#">lubelskie</a></li>
                                <li><a href="#">podkarpackie</a></li>
                                <li><a href="#">podlaskie</a></li>
								 <li><a href="#">warminsko-mazurskie</a></li>
								  <li><a href="#">łódzkie</a></li>
								    <li><a href="#">małopolskie</a></li>
                            </ul>
                            <ul>
                              
                                <li><a href="#">śląskie</a></li>
                                <li><a href="#">dolnośląskie</a></li>
                                <li><a href="#">opolskie</a></li>
                                <li><a href="#">lubuskie</a></li>
								   <li><a href="#">wielkopolskie</a></li>
								   			   <li><a href="#">kujawsko-pomorskie</a></li>
											      <li><a href="#">zachodniopomorskie</a></li>
											   			   <li><a href="#">pomorskie</a></li>
                            </ul>
                        </div>
                        <!-- End Col -->
                    </div>


                    <div class="col-lg-4">
                        <div class="ts-footer-info-box text-center">
                            <span class="box-border"></span>
                            <h3 class="widget-title">Zostaw kontakt</h3>
                            <div class="intro-form" data-eqcss-0-0-parent="" data-eqcss-1-0-parent="">
                                <!-- START copy section: General Contact Form -->
                                <form id="ts-contact-form" class="contactMe small" action="contact-form.php" method="POST"
                                    enctype="multipart/form-data" data-eqcss-0-0="" data-eqcss-1-0="">
                                    <div class="form-row">
                                        <div class="col-md-12">
                                            <input type="text" name="name" data-displayname="Name" class="field"
                                                placeholder="Name" required="">
                                        </div>
                                    </div>
                                    <div class="form-row form-row-second">
                                        <div class="col-md-12">
                                            <input type="email" name="email" data-displayname="Email" class="field"
                                                placeholder="Email" required="">
                                        </div>
                                    </div>

                                    <div class="msg "></div>

                                    <div class="col-md-12 form-btn">
                                        <button class="btn btn-bordered" type="submit" data-sending="Sending..."
                                            data-text="get discount">Wyślij <i class="icon icon-arrow-right"></i>
                                        </button>
                                    </div>
                                </form>
                                <!-- END copy section: General Contact Form -->
                            </div>
                            <h4 class="call-us">lub
                                <span> Zadzwoń: + 48 502-562-565
</span>
                            </h4>
                            <img src="assets/images/icon-image/newsletter-bg.png" alt="">
                        </div>
                    </div>
                </div>
                <!-- End Widget Row -->
            </div>
            <!-- End Contact Container -->
        </footer>
        <!-- Footer End -->

        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <span>Copyright © 2021 | wykonanie: <a href="#">JR-Software strony internetowe</a> </span>
                    </div>
                    <!-- End Col -->
                   
                    <!-- End col -->
                </div>
                <!-- End Row -->
            </div>
            <!-- End Copyright Container -->
        </div>
        <!-- Copyright end -->
 

        <!-- Javascripts File
=============================================================================-->
        <!-- initialize jQuery Library -->
      <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/owl.carousel.min.js"></script>
        <script src="assets/js/jquery-mixtub.js"></script>
        <script src="assets/js/jquery.appear.min.js"></script>
        <script src="assets/js/jquery.magnific-popup.min.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/main.js"></script>
	<script type="text/javascript" src="https://cssmapsplugin.com/5/jquery.cssmap.min.js"></script>

<script type="text/javascript">
$(document).ready(function(){

// CSSMap;
$("#map-poland").CSSMap({
  "size": 960,
  "mapStyle": "blue",
  "cities": true,
  "tooltips": "floating-top-center",
  "responsive": "auto",
  "tapOnce": true
});
// END OF THE CSSMap;

});
</script>
	
	
	
	
	
	
	
	
	

	<nav class="navbar navbar-default">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu-collapse">
					<span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="<?=wCMS::url()?>">
					<?=wCMS::get('config','siteTitle')?>

				</a>
			</div>
			<div class="collapse navbar-collapse" id="menu-collapse">
				<ul class="nav navbar-nav navbar-right">
					<?=wCMS::menu()?>

				</ul>
			</div>
		</div>
	</nav>

	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center padding40">
				<?=wCMS::page('content')?>

			</div>
		</div>
	</div>

	<div class="container-fluid blueBackground whiteFont">
		<div class="row">
			<div class="col-lg-12 text-center padding40">
				<?=wCMS::block('subside')?>

			</div>
		</div>
	</div>

	<footer class="container-fluid">
		<div class="text-right padding20">
			<?=wCMS::footer()?>

		</div>
	</footer>
	  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/owl.carousel.min.js"></script>
        <script src="assets/js/jquery-mixtub.js"></script>
        <script src="assets/js/jquery.appear.min.js"></script>
        <script src="assets/js/jquery.magnific-popup.min.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/main.js"></script>
	<script type="text/javascript" src="https://cssmapsplugin.com/5/jquery.cssmap.min.js"></script>
	
	
	<?=wCMS::js()?>
</body>
</html>