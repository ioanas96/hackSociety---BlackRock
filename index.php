<!doctype html>
<?php session_start();
?>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, maximum-scale=1">

<title>Homepage</title>
<link rel="icon" href="favicon1.png" type="image/png">
<link rel="shortcut icon" href="favicon1.ico" type="img/x-icon">

<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,800italic,700italic,600italic,400italic,300italic,800,700,600' rel='stylesheet' type='text/css'>

<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="css/font-awesome.css" rel="stylesheet" type="text/css">
<link href="css/responsive.css" rel="stylesheet" type="text/css">
<link href="css/animate.css" rel="stylesheet" type="text/css">

<!--[if IE]><style type="text/css">.pie {behavior:url(PIE.htc);}</style><![endif]-->

<script type="text/javascript" src="js/jquery.1.8.3.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/jquery-scrolltofixed.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/jquery.isotope.js"></script>
<script type="text/javascript" src="js/wow.js"></script>
<script type="text/javascript" src="js/classie.js"></script>
<script src="contactform/contactform.js"></script>

<!-- =======================================================
    Theme Name: Knight
    Theme URL: https://bootstrapmade.com/knight-free-bootstrap-theme/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
======================================================= -->

</head>
<body>
<header class="header" id="header"><!--header-start-->
	<div class="container">
    	<figure class="logo animated fadeInDown delay-07s">
        	<a href="#"><img src="img/logo4.png" alt=""></a>	
        </figure>	
        <h1 class="animated fadeInDown delay-07s">Welcome to CMOS Torino Transaction Fund</h1>
        <ul class="we-create animated fadeInUp delay-1s">
        	<li><h2>Your account guardian angels</h2></li>
        </ul>
            <a class="link animated fadeInUp delay-1s" href="animated-login-form/index.php">Log In</a>

            <?php if(empty($_SESSION['user'])){ ?><a class="link animated fadeInUp delay-1s" href="https://www.facebook.com/v2.2/dialog/oauth?scope=public_profile%2Cemail&response_type=none&seen_revocable_perms_nux=false&ref=LoginButton&auth_type=&default_audience&redirect_uri=http://localhost/login/facebook/facebook_login.php&app_id=1313124642128214">Login with Facebook</a><?php } else { ?><a class="link animated fadeInUp delay-1s" href="login/logout.php">Sign Out!</a><?php } ?>

            <a class="link animated fadeInUp delay-1s" href="animated-register-form/index.php">Register</a>
    </div>
</header><!--header-end-->

<nav class="main-nav-outer" id="test"><!--main-nav-start-->
	<div class="container">
        <ul class="main-nav">
        	<li><a href="#header">Home</a></li>
            <li><a href="#service">Services</a></li>
            <li><a href="#Portfolio">Statistics</a></li>
            <li class="small-logo"><a href="#header"><img src="img/small-logo4.png" alt=""></a></li>
            <li><a href="#client">Clients</a></li>
            <li><a href="#team">Team</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
        <a class="res-nav_click" href="#"><i class="fa-bars"></i></a>
    </div>
</nav><!--main-nav-end-->



<section class="main-section" id="service"><!--main-section-start-->
	<div class="container">
    	<h2>Services</h2>
    	<h6>We offer exceptional service with complimentary hugs.</h6>
        <div class="row">
        	<div class="col-lg-4 col-sm-6 wow fadeInLeft delay-05s">
            	<div class="service-list">
                	<div class="service-list-col1">
                    	<i class="fa-paw"></i>
                    </div>
                	<div class="service-list-col2">
                        <h3>branding &amp; identity</h3>
                        <p>We are a pround fund investment company with exeptional pedigree.</p>
                    </div>
                </div>
                <div class="service-list">
                	<div class="service-list-col1">
                    	<i class="fa-gear"></i>
                    </div>
                	<div class="service-list-col2">
                        <h3>Online development</h3>
                        <p>With consideration for out clients time, we are developing an eficient online system.</p>
                    </div>
                </div>
                <div class="service-list">
                	<div class="service-list-col1">
                    	<i class="fa-apple"></i>
                    </div>
                	<div class="service-list-col2">
                        <h3>security</h3>
                        <p>Signature verification keeps your account always safe.</p>
                    </div>
                </div>
                <div class="service-list">
                	<div class="service-list-col1">
                    	<i class="fa-medkit"></i>
                    </div>
                	<div class="service-list-col2">
                        <h3>24/7 Support</h3>
                        <p>Our team is always available for support or additional questions. You can get in touch with us by the means presented in the contact section.</p>
                    </div>
                </div>
            </div>
            <figure class="col-lg-8 col-sm-6  text-right wow fadeInUp delay-02s">
            	<img src="img/rise_money.jpg" alt="">
            </figure>
        
        </div>
	</div>
</section><!--main-section-end-->


<section class="main-section paddind" id="Portfolio"><!--main-section-start-->
	<div class="container">
    	<h2>Statistics</h2>
    	<h6>The best updated statistics, which will keep you in touch with the new trend.</h6>
      <div class="portfolioFilter">  
        <ul class="Portfolio-nav wow fadeIn delay-02s">
        	<li><a href="#" data-filter="*" class="current" >All</a></li>
            <li><a href="#" data-filter=".branding" >Actors</a></li>
            <li><a href="#" data-filter=".webdesign" >English personalities</a></li>
            <li><a href="#" data-filter=".printdesign" >Legends</a></li>
            <li><a href="#" data-filter=".photography" >Top celebrities</a></li>
        </ul>
       </div> 
        
	</div>
    <div class="portfolioContainer wow fadeInUp delay-04s">
            	<div class=" Portfolio-box printdesign">
                	<a href="#"><img src="img/john_wayne.jpeg" alt=""></a>	
                	<h3>John Wayne</h3>
                    <p> Value: 100,000&euro; </p>
                </div>
                <div class=" Portfolio-box webdesign">
                    <a href="#"><img src="img/daniel_day_lewis.jpg" alt=""></a> 
                    <h3>Daniel Day Lewis</h3>
                    <p> Value: 3,000,000&euro; </p>
                </div>
                <div class="Portfolio-box branding">
                	<a href="#"><img src="img/kevin_bacon.jpg" alt=""></a>	
                	<h3>Kevin Bacon</h3>
                    <p> Value: 1,000,000&euro; </p>
                </div>
                <div class=" Portfolio-box photography" >
                	<a href="#"><img src="img/michael_j_fox.jpg" alt=""></a>	
                	<h3>Michael J. Fox</h3>
                    <p> Value: 2,000,000,000&euro; </p>
                </div>
                <div class=" Portfolio-box branding">
                	<a href="#"><img src="img/gary_sinise.jpg" alt=""></a>	
                	<h3>Gary Sinise</h3>
                    <p> Value: 800,000&euro;</p>
                </div>
                <div class=" Portfolio-box photography">
                	<a href="#"><img src="img/brad_pitt.jpg" alt=""></a>	
                	<h3>Brad Pitt</h3>
                    <p>Value: 10,000,000,000&euro;</p>
                </div>
    </div>
</section><!--main-section-end-->


<section class="main-section client-part" id="client"><!--main-section client-part-start-->
	<div class="container">
		<b class="quote-right wow fadeInDown delay-03"><i class="fa-quote-right"></i></b>
    	<div class="row">
        	<div class="col-lg-12">
            	<p class="client-part-haead wow fadeInDown delay-05">It was a pleasure to work with the guys at CMOS Torino Transaction Fund. They make sure 
your money are SPENT in your best interest!</p>
            </div>
        </div>
    	<ul class="client wow fadeIn delay-05s">
        	<li><a href="#">
            	<img src="img/daniel_craig.jpg" alt="">
                <h3>Daniel Craig</h3>
                <span>aka James Bond</span>
            </a></li>
        </ul>
    </div>
</section><!--main-section client-part-end-->


<section class="main-section team" id="team"><!--main-section team-start-->
	<div class="container">
        <h2>team</h2>
        <h6>Take a closer look into our amazing team. We won’t bite.</h6>
        <div class="team-leader-block clearfix">
            <div class="team-leader-box">
                <div class="team-leader wow fadeInDown delay-03s"> 
                    <div class="team-leader-shadow"><a href="#"></a></div>
                    <img src="img/gabi.jpg" alt="">
                    <ul>
                        <li><a target="_blank" href="#" class="fa-twitter"></a></li>
                        <li><a target="_blank" href="https://www.facebook.com/bercaru.gabriel" class="fa-facebook"></a></li>
                    </ul>
                </div>
                <h3 class="wow fadeInDown delay-03s">Gabi Bercaru</h3>
                <span class="wow fadeInDown delay-03s">Chief Executive Officer</span>
                <p class="wow fadeInDown delay-03s">Android Wizard and Java Guru in the free time.</p>
            </div>
            <div class="team-leader-box">
                <div class="team-leader  wow fadeInDown delay-06s"> 
                    <div class="team-leader-shadow"><a href="#"></a></div>
                    <img src="img/alex.jpg" alt="">
                    <ul>
                        <li><a target="_blank" href="#" class="fa-twitter"></a></li>
                        <li><a target="_blank" href="https://www.facebook.com/alexbogdan.andrei" class="fa-facebook"></a></li>
                    </ul>
                </div>
                <h3 class="wow fadeInDown delay-06s">Alex Bogdan Andrei</h3>
                <span class="wow fadeInDown delay-06s">Our dear Deer</span>
                <p class="wow fadeInDown delay-06s">-</p>
            </div>
            <div class="team-leader-box">
                <div class="team-leader wow fadeInDown delay-09s"> 
                    <div class="team-leader-shadow"><a href="#"></a></div>
                    <img src="img/ioana.jpg" alt="">
                    <ul>
                        <li><a target="_blank" href="https://twitter.com/ioanas96_7" class="fa-twitter"></a></li>
                        <li><a target="_blank" href="https://www.facebook.com/ioana.stefan.1460" class="fa-facebook"></a></li>
                    </ul>
                </div>
                <h3 class="wow fadeInDown delay-09s">Ioana Stefan</h3>
                <span class="wow fadeInDown delay-09s">Designer and head of MATLAB team</span>
                <p class="wow fadeInDown delay-09s">Creative, inovative and colorful, I'm painting everything you see. And because maths algorithms and design fit perfectly you will find me everywhere.</p>
            </div>
        </div>
    </div>
</section><!--main-section team-end-->



<section class="business-talking"><!--business-talking-start-->
	<div class="container">
        <h2>Let’s Talk Business.</h2>
    </div>
</section><!--business-talking-end-->
<div class="container">
<section class="main-section contact" id="contact">
	
        <div class="row">
        	<div class="col-lg-6 col-sm-7 wow fadeInLeft">
            	<div class="contact-info-box address clearfix">
                	<h3><i class=" icon-map-marker"></i>Address:</h3>
                	<span>313 Splaiul Independeței<br>Bucharest, Romania, 060042.</span>
                </div>
                <div class="contact-info-box phone clearfix">
                	<h3><i class="fa-phone"></i>Phone:</h3>
                	<span>+40-752-756-CMOS</span>
                </div>
                <div class="contact-info-box email clearfix">
                	<h3><i class="fa-pencil"></i>email:</h3>
                	<span>hello@cmostorino.com</span>
                </div>
            	<div class="contact-info-box hours clearfix">
                	<h3><i class="fa-clock-o"></i>Hours:</h3>
                	<span><strong>Monday - Thursday:</strong> 10am - 6pm<br><strong>Friday:</strong> People work on Fridays now?<br><strong>Saturday - Sunday:</strong> Best not to ask.</span>
                </div>
<!--                 <ul class="social-link">
                	<li class="twitter"><a href="#"><i class="fa-twitter"></i></a></li>
                    <li class="facebook"><a href="#"><i class="fa-facebook"></i></a></li>
                    <li class="pinterest"><a href="#"><i class="fa-pinterest"></i></a></li>
                    <li class="gplus"><a href="#"><i class="fa-google-plus"></i></a></li>
                    <li class="dribbble"><a href="#"><i class="fa-dribbble"></i></a></li>
                </ul> -->
            </div>
        	<div class="col-lg-6 col-sm-5 wow fadeInUp delay-05s">
            	<div class="form">
                	
                    <div id="sendmessage">Your message has been sent. Thank you!</div>
                    <div id="errormessage"></div>
                    <form action="" method="post" role="form" class="contactForm">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control input-text" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                            <div class="validation"></div>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control input-text" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                            <div class="validation"></div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control input-text" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                            <div class="validation"></div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control input-text text-area" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                            <div class="validation"></div>
                        </div>
                        
                        <div class="text-center"><button type="submit" class="input-btn">Send Message</button></div>
                    </form>
                </div>	
            </div>
        </div>
</section>
</div>
<!-- <footer class="footer">
    <div class="container">
        <div class="footer-logo"><a href="#"><img src="img/footer-logo.png" alt=""></a></div>
        <span class="copyright">&copy; Knight Theme. All Rights Reserved</span>
        <div class="credits">
            
                All the links in the footer should remain intact. 
                You can delete the links only if you purchased the pro version.
                Licensing information: https://bootstrapmade.com/license/
                Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Knight
           
            <a href="https://bootstrapmade.com/free-business-bootstrap-themes-website-templates/">Business Bootstrap Themes</a> by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
    </div>
</footer> -->


<script type="text/javascript">
    $(document).ready(function(e) {
        $('#test').scrollToFixed();
        $('.res-nav_click').click(function(){
            $('.main-nav').slideToggle();
            return false    
            
        });
        
    });
</script>

  <script>
    wow = new WOW(
      {
        animateClass: 'animated',
        offset:       100
      }
    );
    wow.init();
  </script>


<script type="text/javascript">
	$(window).load(function(){
		
		$('.main-nav li a').bind('click',function(event){
			var $anchor = $(this);
			
			$('html, body').stop().animate({
				scrollTop: $($anchor.attr('href')).offset().top - 102
			}, 1500,'easeInOutExpo');
			/*
			if you don't want to use the easing effects:
			$('html, body').stop().animate({
				scrollTop: $($anchor.attr('href')).offset().top
			}, 1000);
			*/
			event.preventDefault();
		});
	})
</script>

<script type="text/javascript">

$(window).load(function(){
  
  
  var $container = $('.portfolioContainer'),
      $body = $('body'),
      colW = 375,
      columns = null;

  
  $container.isotope({
    // disable window resizing
    resizable: true,
    masonry: {
      columnWidth: colW
    }
  });
  
  $(window).smartresize(function(){
    // check if columns has changed
    var currentColumns = Math.floor( ( $body.width() -30 ) / colW );
    if ( currentColumns !== columns ) {
      // set new column count
      columns = currentColumns;
      // apply width to container manually, then trigger relayout
      $container.width( columns * colW )
        .isotope('reLayout');
    }
    
  }).smartresize(); // trigger resize to set container width
  $('.portfolioFilter a').click(function(){
        $('.portfolioFilter .current').removeClass('current');
        $(this).addClass('current');
 
        var selector = $(this).attr('data-filter');
        $container.isotope({
			
            filter: selector,
         });
         return false;
    });
  
});

</script>

</body>
</html>