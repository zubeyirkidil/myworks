<!doctype html>
<html lang="en">
  <head>
	  
	<title>zubeyirkidil</title>
	  
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Websitesi Tasarımları">
    <meta name="keyword" content="zübeyir, kıdil, website, tasarım, şablon, modern, yeni, nesil, responsive, laptop, pc, bilgisayar, tablet, telefon, mobil, uyumlu, landing, page, tek, sayfa, HTML, CSS, Javascript, teknoloji, web, design, technology">
    <meta name="author" content="Zübeyir Kıdil">

    <!-- CSS Connections -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link  rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,300,300i,400&display=swap"> 
	<link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
	<link rel="stylesheet" type="text/css" href="css/main.css"> 
	<link rel="stylesheet" type="text/css" href="css/animate.min.css">
	<link rel="stylesheet" type="text/css" href="css/lightbox.css"/>
	<link rel="stylesheet" type="text/css" href="css/responsive.css"/>
	  
	  
	  
	 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-
	UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="js/wow.min.js"></script>
	
	  
	  <script>
			  
		window.addEventListener("load", function(){
			
			const loader = document.querySelector(".loader-container");
			loader.style.display = "none";
		})
			  
			  
	 </script>
	
	  
	<!-- Smooth Scroll Scripti-->	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  // Add smooth scrolling to all links
  $("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
		
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});
</script>
	  
	  
	  
      <script>
              new WOW().init();
      </script>

	  <!-- Hamburger Menu Efekti Scripti-->
	  
	  <script>
		  
		  var counter = 0;
		  
		  function myFunction(){
		
	
		var x = document.getElementById('hamburger-menu');
		
			  if (x.style.left == '-100%' || x.style.left == '') {
				
				x.style.left = '0%';
				 
			} 
			
			 else if ( x.style.left == '0%' || x.style.left == '') {
				
				  if (x.style.left == '0%' && counter == 0){
					  x.style.left = '100%';
				      counter = 1;
					  }
				   if (x.style.left == '0%' && counter == 1){
					  x.style.left = '-100%';
				      counter = 0;
					  }
				
			} 
			  
			
			else if (x.style.left == '100%' || x.style.left == '') {
				
				x.style.left = '0%';
				  
			} 
			
			  
		}
		  
		  </script>
	  
	  
		  <script>
		  $(document).scroll(function() {
  var y = $(this).scrollTop();
  if (y > 800) {
    $('.scrollDown').fadeIn();
	
  } else {
    $('.scrollDown').fadeOut();
  }
});
	</script>
    
  </head>
  <body>
	  <div class="all">
	  <?php require 'mail.php'; ?>
	  
	  
	  <!-- Loading İşlemi -->
	  
	 
	  <div class="loader-container" id="loader-container">

    <div class="loader-content">
        <span class="loader"></span>
        <span class="loader-text">loading the page..</span>
    </div>
    
</div>
	  
	  <!-- HEADER BÖLÜMÜ -->
	  
    <header>
	  <div class="container">
	  	 <div class="row">
		      <div class="logo"><a href="#home">zubeyirkidil<span>.</span>com</a></div>
			  <nav class="menu ml-auto" id="menu">
			  	  <ul>
					  <li><a href="#home">Home</a></li>
					  <li><a href="#about">About</a></li>
					  <li><a href="#designs">Designs</a></li>
					  <li><a href="#contact">Contact</a></li>
					  <li><a href="../index.php"><span>TR/EN</span></a></li>
				  </ul>
			  </nav>
			 	<div class="hamburger-menu-icon"  onClick="myFunction()" id="hamburger-menu-icon">
					 <i class="fas fa-bars"></i>
				</div>
		  </div>
		  <div class="hamburger-menu" >
				  
			  	  <ul id="hamburger-menu">
					  <li><a href="#home">Home</a></li>
					  <li><a href="#about">About</a></li>
					  <li><a href="#designs">Designs</a></li>
					  <li><a href="#contact">Contact</a></li>
					  <li><a href="../index.php"><span>TR/EN</span></a></li>
				  </ul>
			  </div>
	  </div>
	</header>
	  
	  <!-- ANASAYFA BÖLÜMÜ -->
	  
	  <section class="text-center" id="home">
		  <div class="container">
			  <div class="mainArea wow bounceInDown">
					
				   <div class="mainContentFirst">
					<span class="wow fadeIn" data-wow-delay="1.0s">&lt;</span>
					<span class="wow fadeIn" data-wow-delay="1.1s">p</span>
					<span class="wow fadeIn" data-wow-delay="1.2s">h</span>
					<span class="wow fadeIn" data-wow-delay="1.3s">p</span>
					<span class="wow fadeIn" data-wow-delay="1.4s">?</span>
				   </div>
				  
				   <div class="mainContentSecond">
					<span class="echo wow fadeIn" data-wow-delay="1.5s">e</span>
				  	<span class="echo wow fadeIn" data-wow-delay="1.6s">c</span>
				  	<span class="echo wow fadeIn" data-wow-delay="1.7s">h</span>
				  	<span class="echo wow fadeIn" data-wow-delay="1.8s">o</span>
				  	<span class="wow fadeIn" data-wow-delay="1.9s">&nbsp;</span>
				  	<span class="wow fadeIn" data-wow-delay="2.0s">"</span>
				  	<span class="wow fadeIn" data-wow-delay="2.1s">H</span>
				  	<span class="wow fadeIn" data-wow-delay="2.2s">e</span>
				  	<span class="wow fadeIn" data-wow-delay="2.3s">l</span>
				  	<span class="wow fadeIn" data-wow-delay="2.4s">l</span>
				  	<span class="wow fadeIn" data-wow-delay="2.5s">o</span>
				  	<span class="wow fadeIn" data-wow-delay="2.6s">&nbsp;</span>
				  	<span class="wow fadeIn" data-wow-delay="2.7s">:</span>
				    <span class="wow fadeIn" data-wow-delay="2.8s">)</span>
				    
				   </div>
					   
				   <div class="mainContentThird">   
					<span class="wow fadeIn" data-wow-delay="2.9s">T</span>
				    <span class="wow fadeIn" data-wow-delay="3.0s">h</span>
				    <span class="wow fadeIn" data-wow-delay="3.1s">i</span>
				    <span class="wow fadeIn" data-wow-delay="3.2s">s</span>
				    <span class="wow fadeIn" data-wow-delay="3.3s">&nbsp;</span>
				    <span class="wow fadeIn" data-wow-delay="3.4s">i</span>
				    <span class="wow fadeIn" data-wow-delay="3.5s">s</span>
				    <span class="wow fadeIn" data-wow-delay="3.6s">&nbsp;</span>
				    <span class="wow fadeIn" data-wow-delay="3.7s">Z</span>
				    <span class="wow fadeIn" data-wow-delay="3.8s">ü</span>
				    <span class="wow fadeIn" data-wow-delay="3.9s">b</span>
				    <span class="wow fadeIn" data-wow-delay="4.0s">e</span>
				    <span class="wow fadeIn" data-wow-delay="4.1s">y</span>
					<span class="wow fadeIn" data-wow-delay="4.2s">i</span>
				  <span class="wow fadeIn" data-wow-delay="4.25s">r</span>
				    </div>
				  
				  <div class="mainContentFourth">
				  <span class="wow fadeIn" data-wow-delay="4.3s">M</span>
				  <span class="wow fadeIn" data-wow-delay="4.35s">a</span>
				  <span class="wow fadeIn" data-wow-delay="4.4s">k</span>
				  <span class="wow fadeIn" data-wow-delay="4.45s">e</span>
				  <span class="wow fadeIn" data-wow-delay="4.5s">&nbsp;</span>
				  <span class="wow fadeIn" data-wow-delay="4.55s">a</span>
				  <span class="wow fadeIn" data-wow-delay="4.6s">&nbsp;</span>
				  <span class="wow fadeIn" data-wow-delay="4.65s">p</span>
				  <span class="wow fadeIn" data-wow-delay="4.7s">r</span>
				  <span class="wow fadeIn" data-wow-delay="4.75s">o</span>
				  <span class="wow fadeIn" data-wow-delay="4.8s">f</span>
				  <span class="wow fadeIn" data-wow-delay="4.85s">e</span>
				  <span class="wow fadeIn" data-wow-delay="4.9s">s</span>
				  <span class="wow fadeIn" data-wow-delay="4.95s">s</span>
				  <span class="wow fadeIn" data-wow-delay="5.0s">i</span>
				  <span class="wow fadeIn" data-wow-delay="5.05s">o</span>
				  <span class="wow fadeIn" data-wow-delay="5.1s">n</span>
				  <span class="wow fadeIn" data-wow-delay="5.15s">a</span>
				  <span class="wow fadeIn" data-wow-delay="5.2s">l</span>
				  <span class="wow fadeIn" data-wow-delay="5.25s">&nbsp;</span>
				  <span class="wow fadeIn" data-wow-delay="5.3s">i</span>
				  <span class="wow fadeIn" data-wow-delay="5.35s">m</span>
				  <span class="wow fadeIn" data-wow-delay="5.4s">p</span>
				  <span class="wow fadeIn" data-wow-delay="5.45s">r</span>
				  <span class="wow fadeIn" data-wow-delay="5.5s">e</span>
				  <span class="wow fadeIn" data-wow-delay="5.55s">s</span>
				  <span class="wow fadeIn" data-wow-delay="5.6s">s</span>
				  <span class="wow fadeIn" data-wow-delay="5.65s">i</span>
				  <span class="wow fadeIn" data-wow-delay="5.7s">o</span>
				  <span class="wow fadeIn" data-wow-delay="5.75s">n</span>
				  <span class="wow fadeIn" data-wow-delay="5.8s">&nbsp;</span>
				  <span class="wow fadeIn" data-wow-delay="5.85s">u</span>
				  <span class="wow fadeIn" data-wow-delay="5.9s">s</span>
				  <span class="wow fadeIn" data-wow-delay="5.95s">i</span>
				  <span class="wow fadeIn" data-wow-delay="6.0s">n</span>
				  <span class="wow fadeIn" data-wow-delay="6.05s">g</span>
				  <span class="wow fadeIn" data-wow-delay="6.1s">&nbsp;</span>
				  <span class="wow fadeIn" data-wow-delay="6.15s">m</span>
				  <span class="wow fadeIn" data-wow-delay="6.2s">y</span>
				  <span class="wow fadeIn" data-wow-delay="6.25s">&nbsp;</span>
				  <span class="wow fadeIn" data-wow-delay="6.3s">d</span>
				  <span class="wow fadeIn" data-wow-delay="6.35s">e</span>
				  <span class="wow fadeIn" data-wow-delay="6.4s">s</span>
				  <span class="wow fadeIn" data-wow-delay="6.45s">i</span>
				  <span class="wow fadeIn" data-wow-delay="6.5s">g</span>
				  <span class="wow fadeIn" data-wow-delay="6.55s">n</span>
				  <span class="wow fadeIn" data-wow-delay="6.6s">s</span>
				  <span class="wow fadeIn" data-wow-delay="6.65s">.</span>
				  <span class="wow fadeIn" data-wow-delay="6.7s">"</span>
				  <span class="wow fadeIn" data-wow-delay="6.75s">;</span>
				  
				  </div>
					  
				  <div class="mainContentFifth">
				  <span class="wow fadeIn" data-wow-delay="6.85s">?</span>
				  <span class="wow fadeIn" data-wow-delay="6.95s">&gt;</span>
				  </div>
				  
				 
			  </div>
			  
			  <a href="#home"><div class="scrollDown"><i class="fas fa-chevron-up"></i></div></a>
		  </div>
	  </section> 
	  
	  <!-- KULLANDIĞIM TEKNOLOJİLER BÖLÜMÜ -->
	  
	  <section id="technologies" class="text-center">
		  <div class="container">
			  <h1>The Technologies That I Use</h1>
			  <div class="row">
				  <div class="col-md-4  wow fadeInLeft" data-wow-delay="0.2s">
				  	<i class="fab fa-html5"></i>
					  <h1>HTML5</h1>
				  </div>
				  
				  <div class="col-md-4  wow fadeInLeft" data-wow-delay="0.4s">
				  	<i class="fab fa-css3-alt"></i>
					  <h1>CSS3</h1>
				  </div>
				  <div class="col-md-4  wow fadeInLeft" data-wow-delay="0.6s">
				  	<i class="fab fa-js-square"></i>
					  <h1>Javascript</h1>
				  </div>
				  
			  </div>
			  <h2></h2>
		  </div>
	  </section>
	  
	  <!-- HAKKIMDA BÖLÜMÜ -->
	  
	  <section id="about" class="text-center">
	  	  <div class="container">
			  <div class="aboutTop">
				  
				  <h1>About</h1>
				  <p>I was born in 1999 in İstanbul. I am a student of Yeditepe University Department of E-Commerce.
					  I create freelance website designs in the front-end field. </p>
				  <p>
					  <span>My Social Media Addresses</span><br><br>
				  (Click on the images to visit my social media addresses.)
				  
				  </p>
			  </div>
			  <div class="aboutContent">
				  <div class="row">
					  <div class="col-md-4 wow fadeInUp" data-wow-delay="0.2s">
					  	    <a href="https://www.instagram.com/zubeyirkidil/" target="_blank">
							<i class="fab fa-instagram"></i>
						    <h2>Instagram</h2>
							</a>
						  <p>You can choose from my existing website templates</p>
					  </div>
					  
					  <div class="col-md-4 wow fadeInUp" data-wow-delay="0.4s">
					  	    <a href="https://www.youtube.com/channel/UC7S0wuQykYbb7sOS_bpoYvQ/videos?disable_polymer=1" target="_blank">
						    <i class="fab fa-youtube"></i>
						    <h2>Youtube</h2>
							</a>
						  <p>You can request a website according to your wishes</p>
					  </div>
					  
					  <div class="col-md-4 wow fadeInUp" data-wow-delay="0.6s">
					  	    <a href="https://twitter.com/zubeyirkidil" target="_blank">
						    <i class="fab fa-twitter-square"></i>
						    <h2>Twitter</h2>
							</a>
						  <p>Or you can contact me to just say "hello" :) </p>
					  </div>
				  </div>
			  </div>
		  </div>
	  </section>
	  
	  <!-- WEBSİTE YAYINLAMA SÜRECİ BÖLÜMÜ -->
	  
	  <section id="publishing" class="text-center">
		  <div class="container">
			  <h1>The Process of Publishing The Website</h1>
			  <div class="row">
				  <div class="col-md-3 wow fadeInLeft" data-wow-delay="0.2s">
				  	<i class="fas fa-laptop-code"></i>
					  <h1>Design/Coding</h1>
				  </div>
				  
				  <div class="col-md-3 wow fadeInLeft" data-wow-delay="0.4s">
				  	<i class="fas fa-server"></i>
					  <h1>Hosting</h1>
				  </div>
				  <div class="col-md-3 wow fadeInLeft" data-wow-delay="0.6s">
				  	<p>www.sitename.com</p>
					  <h1>Domain</h1>
				  </div>
				   <div class="col-md-3 wow fadeInLeft" data-wow-delay="0.8s">
				  	<i class="fas fa-upload"></i>
					  <h1>Publishing</h1>
				  </div>
				  
			  </div>
			  <h2>We perform all website publishing operations.</h2>
		  </div>
	  </section>
	  
	  <!-- TASARIMLARIM BÖLÜMÜ -->
	  
	  <section id="designs" class="text-center">
	  	  <div class="container">
			  <div class="designsTop">
				  
				  <h1>Designs</h1>
				  <p><br>
				  	1-) Landing Page(Single Page) website template:
				  
				  </p>
				  <p></p>
			  </div>
			  <div class="designsContent">
				 <div class="row">
					 <div class="col-md-12 designs wow fadeInDown">
					 	<a href="img/img1.jpg" data-lightbox="image-1" data-title="Görsel1">
							<img src="img/img1.jpg">
						 </a>
					 </div>
					 <div class="col-md-6 designs wow fadeInLeft">
					 	<a href="img/img2.jpg" data-lightbox="image-1" data-title="Görsel2">
							<img src="img/img2.jpg">
						 </a>
					 </div>
					 <div class="col-md-6 designs wow fadeInLeft">
					 	<a href="img/img3.jpg" data-lightbox="image-1" data-title="Görsel3">
							<img src="img/img3.jpg">
						 </a>
					 </div>
					 <div class="col-md-6 designs wow fadeInLeft">
					 	<a href="img/img4.jpg" data-lightbox="image-1" data-title="Görsel4">
							<img src="img/img4.jpg">
						 </a>
					 </div>
					 <div class="col-md-6 designs wow fadeInLeft">
					 	<a href="img/img5.jpg" data-lightbox="image-1" data-title="Görsel4">
							<img src="img/img5.jpg">
						 </a>
					 </div>
					 <div class="col-md-12 designs wow fadeInUp">
					 	
						 <iframe id="landingPageVideo" src="https://www.youtube.com/embed/ew4MK0Mu9tI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						
					 </div>
					 
					 
				  </div>
			  </div>
			  
			  <div class="designsTop">
				  
				  <br>
				  <p>More templates are coming very soon...</p>
			  </div>
			  
			  
		  </div>
	  </section>
	  
	  <!-- RESPONSIVE/UYUMLULUK ÖZELLİĞİ BÖLÜMÜ -->
	  
	  <section id="counter" class="text-center">
		  <div class="container">
			  <h1>Responsive/Suitability Feature</h1>
			  	  <div class="col-md-12 wow fadeInDown" data-wow-delay="0.2s">
				  	<img src="img/responsive.png">
				  </div>
			  <h2>Our designs are compatible with all devices.</h2>
		  </div>
	  </section>
	  
	  <!-- İLETİŞİM BÖLÜMÜ -->
	  
	  <section id="contact" class="text-center">
	  	  <div class="container">
			  <div class="contactTop">
				  
				  <h1>Contact</h1>
				  <p>You can directly send me your comments or requests with the form below.</p>
			  </div>
			  <div class="contactContent">
				  <div class="row">
					  <div class="col-md-12">
						  <form action="mail.php" method="POST">
							  <fieldset>
								  <input type="text" name="name" id="name" placeholder="Name">
							  </fieldset>
							  <fieldset>
								  <input type="email" name="email" id="email" placeholder="E-mail">
							  </fieldset>
							  <fieldset>
								  <textarea rows="5" name="message" cols="25" id="message" placeholder="Message"></textarea>
							  </fieldset>
							  <fieldset>
								  <input type="submit" name="submit" id="submit" value="Send">
							  </fieldset>
							  <p class="text-center" name="inform" id="inform"></p>
						  </form>
						  <h2>Not</h2>
						<p>The contact form does not work for technical reasons.<br> It will be solved as soon as possible.<br> In the meantime, you can contact me on social media. <br><a href="#about">Click here</a> to go to my social media.</p>

					  </div>
					  
				  </div>
			  </div>
		  </div>
	  </section>
	  
	  <!-- FOOTER BÖLÜMÜ -->
	  
	  <section id="footer" class="text-center">
		  
			  
			  		<p>Copyright © 2019 - Created by <span>zubeyirkidil</span></p>
			 
	  </section>
	  
	  
	  <script src="js/lightbox.js"></script>
	  
		  </div>
  </body>
</html>






