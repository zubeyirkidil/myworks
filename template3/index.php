<!DOCTYPE html>
<html>
<head>
  <title>Template #3</title>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSS FILES -->
  
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/responsive.css">

  <link rel="stylesheet" type="text/css" href="css/animate.min.css">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">


  <!-- Smooth Scroll Scripti--> 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <script src="js/smoothScroll.js"></script>

  <script src="js/wow.min.js"></script>


</head>
<body>

  <div class="animation-box-top"></div>
  <div class="animation-box-bottom"></div>

  <script>
    
    new WOW().init();
              
  </script>

  <div class="header">
      <div class="hamburger-button">
        <div></div>
        <div></div>
        <div></div>
      </div>

      <div class="logo">YOUR<span>LOGO</span>HERE</div>

      <div class="menu">
        <ul>
          <li><a href="#home">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </div>
   
  </div>
   
  <div class="main-image" id="home">
    <img id="main-image" src="img/wallpaper.png">
  </div>

  <div class="slogan">
    <h1>SHARE YOUR<br>EMPTY SEAT</h1>
    <button>FREE REGISTER</button>
  </div>

  <section id="about">
    <div class="main-section wow fadeInDown">
      <h1 >MAIN SECTION</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>

    </div>
  </section>


   <section>
    <div class="stick1 wow fadeInLeft">
        <div class="round1"><p>REGISTER</p></div>
    </div>
    <div class="stick2 wow fadeInRight">
        <div class="round2"><p>SEARCH</p></div>
    </div>
    <div class="stick3 wow fadeInLeft">
        <div class="round3 "><p>TRAVEL</p></div>
    </div>
  </section>


  <section>
    <div class="section-3">
      <div class="rounded-frame">
        <div class="row">
          <div class="col-12 col-md-4 wow fadeInDown information py-5">
            <h1>REGISTER</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>
          </div>
          <div class="col-12 col-md-4 wow fadeInDown py-5">
            <h1>SEARCH</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>
          </div>
          <div class="col-12 col-md-4 wow fadeInDown py-5">
            <h1>TRAVEL</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="contact"> 
      <div class="communication wow fadeInDown" id="iletisim">
    

        <form action="iletisim.php?islem" method="POST">

          <input id="name" type="text" placeholder="Name" name="name" required />
          <input id="surname" type="text" placeholder="Surname" name="surname" required />
          <input id="email" type="email" placeholder="E-mail" name="email" required />
          <textarea id="message" type="text" placeholder="Message" name="message" required></textarea>
          <button id="submit" type="submit" name="submit">FREE REGISTER</button>

          <p id="positiveFeedback" style="color: green; text-align: center; font-size: 20px;"></p>
          <p id="negativeFeedback" style="color: red; text-align: center; font-size: 20px;"></p>

        </form>

      </div>
  </section> 

  <footer>
    
    <div class="container-fluid">
      <div class="footer row text-center">
        <div class="col">
          <h4>MENU</h4>
          <ul>
            <li><a href="">Home</a></li>
            <li><a href="">About</a></li>
            <li><a href="">Contact</a></li>
          </ul>
        </div>
        <div class="col">
          <h4>SOCIAL</h4>
          <ul>
            <li><a href="">Instagram</a></li>
            <li><a href="">Facebook</a></li>
            <li><a href="">LinkedIn</a></li>
          </ul>
        </div>
        <div class="col">
          <h4>MORE</h4>
          <ul>
            <li><a href="">Link1</a></li>
            <li><a href="">Link2</a></li>
            <li><a href="">Link3</a></li>
          </ul>
        </div>
        <div class="col-12">
          <div class="createdby">Created by <a href="">zubeyirkidil.com</a></div>
        </div>
      </div>
    </div>
  </footer>


  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js" integrity="sha512-IQLehpLoVS4fNzl7IfH8Iowfm5+RiMGtHykgZJl9AWMgqx0AmJ6cRWcB+GaGVtIsnC4voMfm8f2vwtY+6oPjpQ==" crossorigin="anonymous"></script>
  <script type="text/javascript" src="js/gsap.js"></script>

  <script src="js/displayMenu.js"></script>

</body>
</html>