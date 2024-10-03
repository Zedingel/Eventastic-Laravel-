<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
    <link rel="stylesheet" href="{{ asset('css/gallery.css') }}">

    <link rel="icon" type="image/jpg" href="images/logo.jpg">
    <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vanilla-tilt/1.8.0/vanilla-tilt.min.js"
    integrity="sha512-RX/OFugt/bkgwRQg4B22KYE79dQhwaPp2IZaA/YyU3GMo/qY7GrXkiG6Dvvwnds6/DefCfwPTgCXnaC6nAgVYw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{ asset('js/gallery.js') }}" defer></script>

</head>
<body>
    <header id="navbar">
        <div class="logo">
        <a href="{{ url('/Eventastic') }}"> <h2>Eventastic</h2></a>

        </div>
        <div class="hamburger-menu">
            <button id="hamburger-button">&#9776;</button>
        </div>

        <nav>
            <ul> <li> <a href="Eventastic.html" id="homelogo" >Home</a></li>
                 <li><a href="about.html" >About us</a></li>
                 <li> <a href="Eventastic.html#servives" >Services</a></li>
                 <li> <a href="gallery.html" class="active">Gallery</a></li>
                 <li> <a href="contact.html" >Contact us</a> </li>
            </ul>
        </nav>
    </header>
    <div class="galleryTitle">
        <h1>Immerse in Artistry.</h1>
    </div>

    <div class="wrapper">
        <!-- filter Items -->
        <nav>
          <div class="items">
            <span class="item active" data-name="all">All</span>
            <span class="item" data-name="Wedding">Wedding</span>
            <span class="item" data-name="Concerts">Concerts</span>
            <span class="item" data-name="Sport">Sport</span>
            <span class="item" data-name="parties">parties</span>
            <span class="item" data-name="Coorporate">Coorporate</span>
          </div>
        </nav>
        <!-- filter Images -->
        <div class="gallery">
          <div class="image" data-name="Wedding"><span><img src="images/Gallery/wedding1.jpg" alt=""></span></div>
          <div class="image" data-name="Coorporate"><span><img src="images/Gallery/coorporate1.jpg" alt=""></span></div>
          <div class="image" data-name="parties"><span><img src="images/Gallery/parties1.jpg" alt=""></span></div>
          <div class="image" data-name="Concerts"><span><img src="images/Gallery/concert1.jpg" alt=""></span></div>
          <div class="image" data-name="Sport"><span><img src="images/Gallery/sport1.jpg" alt=""></span></div>

          <div class="image" data-name="Wedding"><span><img src="images/Gallery/wedding2.jpg" alt=""></span></div>
          <div class="image" data-name="Coorporate"><span><img src="images/Gallery/coorporate2.jpg" alt=""></span></div>
          <div class="image" data-name="parties"><span><img src="images/Gallery/parties2.jpg" alt=""></span></div>
          <div class="image" data-name="Concerts"><span><img src="images/Gallery/concert2.jpg" alt=""></span></div>
          <div class="image" data-name="Sport"><span><img src="images/Gallery/sport2.jpg" alt=""></span></div>

          <div class="image" data-name="Wedding"><span><img src="images/Gallery/wedding3.jpg" alt=""></span></div>
          <div class="image" data-name="Coorporate"><span><img src="images/Gallery/coorporate3.jpg" alt=""></span></div>
          <div class="image" data-name="parties"><span><img src="images/Gallery/parties3.jpg" alt=""></span></div>
          <div class="image" data-name="Concerts"><span><img src="images/Gallery/concert3.jpg" alt=""></span></div>
          <div class="image" data-name="Sport"><span><img src="images/Gallery/sport3.jpg" alt=""></span></div>

          <div class="image" data-name="Wedding"><span><img src="images/Gallery/wedding4.jpg" alt=""></span></div>
          <div class="image" data-name="Coorporate"><span><img src="images/Gallery/coorporate4.jpg" alt=""></span></div>
          <div class="image" data-name="parties"><span><img src="images/Gallery/parties4.jpg" alt=""></span></div>
          <div class="image" data-name="Concerts"><span><img src="images/Gallery/concert4.jpg" alt=""></span></div>
          <div class="image" data-name="Sport"><span><img src="images/Gallery/sport4.jpg" alt=""></span></div>

          <div class="image" data-name="Wedding"><span><img src="images/Gallery/wedding5.jpg" alt=""></span></div>
          <div class="image" data-name="Coorporate"><span><img src="images/Gallery/coorporate5.jpg" alt=""></span></div>
          <div class="image" data-name="parties"><span><img src="images/Gallery/parties5.jpg" alt=""></span></div>
          <div class="image" data-name="Concerts"><span><img src="images/Gallery/concert5.jpg" alt=""></span></div>
          <div class="image" data-name="Sport"><span><img src="images/Gallery/sport5.jpg" alt=""></span></div>

          <div class="image" data-name="Wedding"><span><img src="images/Gallery/wedding6.jpg" alt=""></span></div>
          <div class="image" data-name="Coorporate"><span><img src="images/Gallery/coorporate6.jpg" alt=""></span></div>
          <div class="image" data-name="parties"><span><img src="images/Gallery/parties6.jpg" alt=""></span></div>
          <div class="image" data-name="Concerts"><span><img src="images/Gallery/concert6.jpg" alt=""></span></div>
          <div class="image" data-name="Sport"><span><img src="images/Gallery/sport6.jpg" alt=""></span></div>

          <div class="image" data-name="Wedding"><span><img src="images/Gallery/wedding7.jpg" alt=""></span></div>
          <div class="image" data-name="Coorporate"><span><img src="images/Gallery/coorporate7.jpg" alt=""></span></div>
          <div class="image" data-name="parties"><span><img src="images/Gallery/parties7.jpg" alt=""></span></div>
          <div class="image" data-name="Concerts"><span><img src="images/Gallery/concert7.jpg" alt=""></span></div>
          <div class="image" data-name="Sport"><span><img src="images/Gallery/sport7.jpg" alt=""></span></div>

          <div class="image" data-name="Wedding"><span><img src="images/Gallery/wedding8.jpg" alt=""></span></div>
          <div class="image" data-name="Coorporate"><span><img src="images/Gallery/coorporate8.jpg" alt=""></span></div>
          <div class="image" data-name="parties"><span><img src="images/Gallery/parties8.jpg" alt=""></span></div>
          <div class="image" data-name="Concerts"><span><img src="images/Gallery/concert8.jpg" alt=""></span></div>
          <div class="image" data-name="Sport"><span><img src="images/Gallery/sport8.jpg" alt=""></span></div>



      </div>
      <!-- fullscreen img preview box -->
      <div class="preview-box">
        <div class="details">
          <span class="title">Image Category: <p></p></span>
          <span class="icon fas fa-times"></span>
        </div>
        <div class="image-box"><img src="" alt=""></div>
      </div>
      <div class="shadow"></div>

    <footer>
        <div class="footerContainer">
            <div class="socialIcons">
                <a href=""><i class="fa-brands fa-facebook"></i></a>
                <a href=""><i class="fa-brands fa-instagram"></i></a>
                <a href=""><i class="fa-brands fa-twitter"></i></a>
                <a href=""><i class="fa-brands fa-google-plus"></i></a>
                <a href=""><i class="fa-brands fa-youtube"></i></a>
            </div>
            <div class="footerNav">
                <ul><li><a href="Eventastic.html">Home</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="about.html">About Us</a></li>
                    <li><a href="contact.html">Contact Us</a></li>
                    <li><a href="gallery.html">Gallery</a></li>
                </ul>
            </div>
            <div class="foootercontact">
                <h2>Contact info: &nbsp;</h2>
                <a href="tel:+251912345678"> <i class="fas fa-phone"></i> (+251)9-0000-0000 </a>
                <a href="mailto:kehalievents@info.com"> <i class="fas fa-envelope"></i> Eventastic@info.com </a>
                <a href="https://goo.gl/maps/xUVe34zQZpKxp7uQ7"> <i class="fas fa-map-marker-alt"></i> Datsun, Piassa - 41 </a>
            </div>

        </div>
        <div class="footerBottom">
            <p>Copyright &copy;2023; Designed by: Us<span class="designer"></span></p>
        </div>
    </footer>
</body>
</html>
