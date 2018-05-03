<!DOCTYPE HTML>
<html>
<head>
<title>Home</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery-1.11.0.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link rel="stylesheet" type="text/css" href="css/style1.css" />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--Google Fonts-->
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Rambla:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
	</script>
<!-- //end-smoth-scrolling -->
<script type="text/javascript" src="js/modernizr.custom.js"></script> 
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
<script src="js/bootstrap.min.js"></script>

</head>
<body>
<!--banner strat here-->
<div class="banner">
	<div class="container">
		<div class="banner-main">
			<div class="banner-text">
				<a href="index.html"><div class="logo">
					<h1>Tom's Dog Grooming</h1>
					<p>Get your dog grooming in your house</p>
				</div></a>			 
			</div>
			<h3>We provide best online dog grooming service!</h3>
		</div>
	</div>
</div>
<!--baner end here-->
<!--header start here-->
<div class="header-bottom">
  <div class="fixed-header">	
	<div class="container">
		<div class="header-main">
			<div class="header-left">
				<h2><a href="index.html"></a></h2>
			</div>
			<div class="header-right">					
				  <div class="top-nav">
					<span class="menu"><img src="images/menu.png" alt=""/></span>
					<ul class="nav1">
						<li><a href="index.html" class="active">Home</a></li>
						<li><a class="scroll" href="#about">About</a></li>
						<li><a class="scroll" href="#services">Services</a></li>
						<li><a class="scroll" href="#gallery">Gallery</a></li>
						<li><a class="scroll" href="#contact" >Contact</a></li>
						<li><a href="/profile">Profile</a></li>
						<li><a href="/dogs">Dogs</a></li>
					<!-- script-for-menu --> 
					 <script>
					   $( "span.menu" ).click(function() {
						 $( "ul.nav1" ).slideToggle( 300, function() {
						 // Animation complete.
						  });
						 });
					</script>
					<!-- /script-for-menu -->
					<!-- script-for sticky-nav -->
		<script>
		$(document).ready(function() {
			 var navoffeset=$(".header-bottom").offset().top;
			 $(window).scroll(function(){
				var scrollpos=$(window).scrollTop(); 
				if(scrollpos >=navoffeset){
					$(".header-bottom").addClass("fixed");
				}else{
					$(".header-bottom").removeClass("fixed");
				}
			 });
			 
		});
		</script>
		<!-- /script-for sticky-nav -->
				</div>
			 </div>
			</div>
		  <div class="clearfix"> </div>
		</div>
	</div>
</div>
<!--header end here-->
<!--About strat here-->
<div class="about" id="about">
	<div class="container">
		<div class="about-main">
			          <h3>About</h3>
			<div class="col-md-6 about-left">
				<img src="images/a1.png" alt="" class="img-responsive">
			</div>
			<div class="col-md-6 about-right">
				<h4>Tom's Online Dog Grooming house</h4>
				<h5>Book a service online for your dog</h5>
				<p>This house aims to provide you fantastic online grooming booking service. As long as you are living in Melbourne, you can book a grooming service for your dog at anytime! so convenienct!</p>			
			    <ul>
			    	<li><a href="#"> <span class="fts"> </span>Foots </a></li>
			    	<li><a href="#"> <span class="brh"> </span>Brush</a></li>
			    	<li><a href="#"> <span class="feed"> </span>Feed </a></li>
			    </ul>
			</div>
		  <div class="clearfix"> </div>
		</div>
	</div>
</div>
<!--About text end here-->
<!--pets show strat here-->
<div class="pets-show">
	<div class="container">
		<section class="slider">
		 <div class="flexslider">
			<ul class="slides">
			  <li>
			  	<div class="pets-show-main">
					<div class="col-md-6 pets-show-left">
						<h3>Temporibus autem quibusdam et aut officiis </h3>
						<h4>cum soluta nobis est eligendi optio</h4>
						<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate</p>
					</div>
					<div class="col-md-6 pets-show-right">
						<img src="images/p2.png" alt="" class="img-responsive">
					</div>
				 <div class="clearfix"> </div>
				</div>
			  </li>
			  <li>
			 	<div class="pets-show-main">
					<div class="col-md-6 pets-show-left">
						<h3>Temporibus autem quibusdam et aut officiis </h3>
						<h4>cum soluta nobis est eligendi optio</h4>
						<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate</p>
					</div>
					<div class="col-md-6 pets-show-right">
						<img src="images/p4.png" alt="" class="img-responsive">
					</div>
				  <div class="clearfix"> </div>
				</div>
			  </li>
			  <li>
			 	<div class="pets-show-main">
					<div class="col-md-6 pets-show-left">
						<h3>Temporibus autem quibusdam et aut officiis </h3>
						<h4>cum soluta nobis est eligendi optio</h4>
						<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate</p>
					</div>
					<div class="col-md-6 pets-show-right">
						<img src="images/p5.png" alt="" class="img-responsive">
					</div>
				 <div class="clearfix"> </div>
				</div>
			  </li>
		    </ul>
		 </div>
	  </section>
	</div>
</div>
<!--pets show end here-->
<!-- FlexSlider -->
				  <script defer src="js/jquery.flexslider.js"></script>
				  <script type="text/javascript">
					$(function(){
					 
					});
					$(window).load(function(){
					  $('.flexslider').flexslider({
						animation: "slide",
						start: function(slider){
						  $('body').removeClass('loading');
						}
					  });
					});
				  </script>
			<!-- FlexSlider -->

<!--services start here-->
<div class="services" id="services">
	<div class="container">
		<div class="services-main">
			<div class="ser-top">
				<h3>Pet Services</h3>
			</div>
			<div class="ser-bottom">
				<div class="col-md-4 ser-grid">
					 <div class="view view-first">
	                    <img src="images/s1.png" />
	                    <div class="mask">
	                        <h2>Pets</h2>	                                              
	                    </div>
                    </div>
					<h4>Lorem ipsum</h4>
					<p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit</p>
					<div class="ser-btn">
						<a href="single.html">Learn More</a>
					</div>
				</div>
				<div class="col-md-4 ser-grid">
					<div class="view view-first">
	                    <img src="images/s2.png" />
	                    <div class="mask">
	                        <h2>Pets</h2>	                                              
	                    </div>
                    </div>
					<h4>Lorem ipsum</h4>
					<p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit</p>
					<div class="ser-btn">
						<a href="single.html">Learn More</a>
					</div>
				</div>
				<div class="col-md-4 ser-grid">
					<div class="view view-first">
	                    <img src="images/s3.png" />
	                    <div class="mask">
	                        <h2>Pets</h2>	                                              
	                    </div>
                    </div>
					<h4>Lorem ipsum</h4>
					<p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit</p>
					<div class="ser-btn">
						<a href="single.html">Learn More</a>
					</div>
				</div>
				<div class="col-md-4 ser-grid">
					<div class="view view-first">
	                    <img src="images/s4.png" />
	                    <div class="mask">
	                        <h2>Pets</h2>	                                              
	                    </div>
                    </div>
					<h4>Lorem ipsum</h4>
					<p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit</p>
					<div class="ser-btn">
						<a href="single.html">Learn More</a>
					</div>
				</div>
				<div class="col-md-4 ser-grid">
					<div class="view view-first">
	                    <img src="images/s5.png" />
	                    <div class="mask">
	                        <h2>Pets</h2>	                                              
	                    </div>
                    </div>
					<h4>Lorem ipsum</h4>
					<p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit</p>
					<div class="ser-btn">
						<a href="single.html">Learn More</a>
					</div>
				</div>
				<div class="col-md-4 ser-grid">
					<div class="view view-first">
	                    <img src="images/s6.png" />
	                    <div class="mask">
	                        <h2>Pets</h2>	                                              
	                    </div>
                    </div>
					<h4>Lorem ipsum</h4>
					<p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit</p>
					<div class="ser-btn">
						<a href="single.html">Learn More</a>
					</div>
				</div>
			 <div class="clearfix"> </div>
			</div>
		</div>
	</div>
</div>
<!--services end here-->
<!--service call strat here-->
<div class="service-call">
	<div class="container">
		<div class="service-call-main">
			<div class="services-call-left">
				<h4>Nor again is there anyone who loves</h4>
				<p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system</p>
			</div>
			<div class="services-call-right">
				<a href="single.html">Read More</a>
			</div>
		  <div class="clearfix"> </div>
		</div>	
	</div>
</div>
<!--service call end here-->
<!---gallery strat here-->
<div id="gallery" class="gallery">
	<div class="container">
		<h3 class="tittle need_col">Gallery</h3>
		<div class="gallery-grids">
				<div class="gallery-grid">
					<div class="gallery-img slideanim">
						<figure class="effect-jazz">
							<a href="#portfolioModal1"  data-toggle="modal">		
								<img src="images/g1.jpg" alt="img25" class="img-responsive"/>										
									</a>													
							</figure>
					</div>
					<div class="gallery-img slideanim">
						<figure class="effect-jazz">
							<a href="#portfolioModal2"  data-toggle="modal">		
								<img src="images/g2.jpg" alt="img25" class="img-responsive"/>										
									</a>															
							</figure>
					</div>
					<div class="gallery-img slideanim">
						<figure class="effect-jazz">
							<a href="#portfolioModal3"  data-toggle="modal">		
								<img src="images/g3.jpg" alt="img25" class="img-responsive"/>										
									</a>															
							</figure>
					</div>
				</div>
				<div class="gallery-grid">
					<div class="gallery-img slideanim">
						<figure class="effect-jazz">
							<a href="#portfolioModal4"  data-toggle="modal">		
								<img src="images/g4.jpg" alt="img25" class="img-responsive"/>										
									</a>						
							</figure>
					</div>
					<div class="gallery-img slideanim">
						<figure class="effect-jazz">
							<a href="#portfolioModal5"  data-toggle="modal">		
								<img src="images/g5.jpg" alt="img25" class="img-responsive"/>										
									</a>						
							</figure>
					</div>
					<div class="gallery-img slideanim">
						<figure class="effect-jazz">
							<a href="#portfolioModal6"  data-toggle="modal">		
								<img src="images/g6.jpg" alt="img25" class="img-responsive"/>										
									</a>						
							</figure>
					</div>
				</div>
				<div class="gallery-grid">
					 <div class="gallery-img slideanim">
						<figure class="effect-jazz">
							<a href="#portfolioModal7"  data-toggle="modal">		
								<img src="images/g7.jpg" alt="img25" class="img-responsive"/>										
									</a>						
							</figure>
					</div>
					<div class="gallery-img slideanim">
						<figure class="effect-jazz">
							<a href="#portfolioModal8"  data-toggle="modal">		
								<img src="images/g8.jpg" alt="img25" class="img-responsive"/>										
									</a>						
						</figure>
					</div>
					<div class="gallery-img slideanim">
						<figure class="effect-jazz">
							<a href="#portfolioModal9"  data-toggle="modal">		
								<img src="images/g9.jpg" alt="img25" class="img-responsive"/>										
									</a>					
							</figure>
					</div>
				</div>
				<div class="clearfix"> </div>
		</div>		
	</div>
</div>
<!-- Portfolio Modals -->
<div class="portfolio-modal modal fade slideanim" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl"></div>
            </div>
        </div>
        <div class="container">
		
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">
                        <h3>Lorem ipsum</h3>						
                        <img src="images/g1.jpg" class="img-responsive" alt="">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
                    </div>
                </div>
           
        </div>
    </div>
</div>
<div class="portfolio-modal modal fade slideanim" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl"></div>
            </div>
        </div>
        <div class="container">
         
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">
                        <h3>Dummy text</h3>
                      
                        <img src="images/g2.jpg" class="img-responsive" alt="">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
                    </div>
                </div>
           
        </div>
    </div>
    </div>
<div class="portfolio-modal modal fade slideanim" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl"></div>
            </div>
        </div>
        <div class="container">
           
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">
                        <h3>Popular belief</h3>
                     
                        <img src="images/g3.jpg" class="img-responsive" alt="">
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
                    </div>
                </div>
            </div>
       
    </div>
</div>
<div class="portfolio-modal modal fade slideanim" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl"></div>
            </div>
        </div>
        <div class="container">
			
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">
                        <h3>Lorem ipsum</h3>
                       
                        <img src="images/g4.jpg" class="img-responsive" alt="">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
                    </div>
                </div>
            
        </div>
    </div>
</div>
<div class="portfolio-modal modal fade slideanim" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl"></div>
            </div>
        </div>
        <div class="container">

                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">
                        <h3>Dummy text</h3>
                       
                        <img src="images/g5.jpg" class="img-responsive" alt="">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
                    </div>
                </div>
           
        </div>
    </div>
</div>
<div class="portfolio-modal modal fade slideanim" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl"></div>
            </div>
        </div>
        <div class="container">
           
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">
                        <h3>Popular belief</h3>
                       
                        <img src="images/g6.jpg" class="img-responsive" alt="">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
                    </div>
                </div>
            </div>
        
    </div>
</div>
<div class="portfolio-modal modal fade slideanim" id="portfolioModal7" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl"></div>
            </div>
        </div>
        <div class="container">
            
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">
                        <h3>Lorem ipsum</h3>
                     
                        <img src="images/g7.jpg" class="img-responsive" alt="">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
                    </div>
                </div>
         
        </div>
    </div>
</div>
<div class="portfolio-modal modal fade slideanim" id="portfolioModal8" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl"></div>
            </div>
        </div>
        <div class="container">
            
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">
                        <h3>Lorem ipsum</h3>
                     
                        <img src="images/g8.jpg" class="img-responsive" alt="">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
                    </div>
                </div>
         
        </div>
    </div>
</div>
<div class="portfolio-modal modal fade slideanim" id="portfolioModal9" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl"></div>
            </div>
        </div>
        <div class="container">
            
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">
                        <h3>Lorem ipsum</h3>
                     
                        <img src="images/g9.jpg" class="img-responsive" alt="">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
                    </div>
                </div>
         
        </div>
    </div>
</div>
<!-- /Portfolio Modals -->
<!-- //gallery -->
<!--contact strat-->
<div class="contact" id="contact">
	<div class="container">
		<div class="contact-main">
			<div class="contact-top">
				<h3>Contact Us</h3>
			</div>
			<div class="contact-bottom">
				<div class="col-md-6 contact-left">
					<form>
						<p>Your Name</p>
						<input type="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}">
						<p>Your Email</p>
						<input type="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}">
						<p>Your Message</p>
						<textarea onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}">  </textarea>
						<input type="submit" value="Submit">
					</form>
				</div>
				<div class="col-md-6 contact-right">
					<h4>Contact Info</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				    <ul>
				    	<li><span class="glyphicon glyphicon-map-marker" aria-hidden="true"> </span> voluptatem accusantium</li>
				    	<li><span class="glyphicon glyphicon-phone" aria-hidden="true"></span>+1289 595 657</li>
				    	<li><a href="mailto:example@email.com"><span class="glyphicon glyphicon-envelope" aria-hidden="true"> </span> mail@example.com</a></li>
				    </ul>
				</div>
			  <div class="clearfix"> </div>
			</div>
		</div>
	</div>
</div>
<!--contact end here-->
<!--footer strat here-->
<div class="footer">
		<div class="container">
			<div class="footer-main">
				<div class="col-md-3 footer-left">
					<h4>Useful Links</h4>
					<ul>
						<li><a href="#"><span class="pt-foot"> </span>Mirum est notare quam</a></li>
						<li><a href="#"><span class="pt-foot"> </span>Nunc malesuada rhoncus</a></li>
						<li><a href="#"><span class="pt-foot"> </span>Suspendisse purus orci</a></li>
						<li><a href="#"><span class="pt-foot"> </span>Proin malesuada orci puru</a></li>
						<li><a href="#"><span class="pt-foot"> </span>Quisque ullamcorper ut</a></li>
					</ul>
				</div>
				<div class="col-md-3 footer-left">
					<h4>Information</h4>
					<ul>
						<li><a class="scroll" href="index.html"><span class="pt-foot"> </span>Home</a></li>
						<li><a class="scroll" href="#about"><span class="pt-foot"> </span>About</a></li>
						<li><a class="scroll" href="#services"><span class="pt-foot"> </span>Services</a></li>
						<li><a class="scroll" href="#gallery"><span class="pt-foot"> </span>Gallery</a></li>
						<li><a class="scroll" href="#contact"><span class="pt-foot"> </span>Contact</a></li>
					</ul>
				</div>
				<div class="col-md-3 footer-left">
					<h4>New Solutions</h4>
					<ul>
						<li><a href="#"><span class="pt-foot"> </span>Notare quam littera</a></li>
						<li><a href="#"><span class="pt-foot"> </span>Malesuada rhoncus congue</a></li>
						<li><a href="#"><span class="pt-foot"> </span>Suspendisse finibus purus</a></li>
						<li><a href="#"><span class="pt-foot"> </span>Malesuada orci purus</a></li>
						<li><a href="#"><span class="pt-foot"> </span>Quisque ullamcorper tellus</a></li>
					</ul>
				</div>
				<div class="col-md-3 footer-left">
					<h4>Flickr Posts</h4>
					<div class="flickr">
						<div class="f-one">
							<div class="f-left">
								<a href="single.html"><img src="images/f3.jpg" alt="" /></a>
							</div>
							<div class="f-left">
								<a href="single.html"><img src="images/f4.jpg" alt="" /></a>
							</div>
							<div class="f-left">
								<a href="single.html"><img src="images/f5.jpg" alt="" /></a>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="f-one">
							<div class="f-left">
								<a href="single.html"><img src="images/f2.jpg" alt="" /></a>
							</div>
							<div class="f-left">
								<a href="single.html"><img src="images/f1.jpg" alt="" /></a>
							</div>
							<div class="f-left">
								<a href="single.html"><img src="images/f6.jpg" alt="" /></a>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="footer-text">			
				<div class="ft-right">
					<p>Copyright &copy; 2016.Company name All rights reserved.More Templates <a href="http://www.cssmoban.com/" target="_blank" title="模板之家">模板之家</a> - Collect from <a href="http://www.cssmoban.com/" title="网页模板" target="_blank">网页模板</a></p>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<script type="text/javascript">
										$(document).ready(function() {
											/*
											var defaults = {
									  			containerID: 'toTop', // fading element id
												containerHoverID: 'toTopHover', // fading element hover id
												scrollSpeed: 1200,
												easingType: 'linear' 
									 		};
											*/
											
											$().UItoTop({ easingType: 'easeOutQuart' });
											
										});
									</script>
						<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

</div>
</body>
</html>

		