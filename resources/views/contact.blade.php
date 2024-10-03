<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title> contact us </title>
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet"/>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     <script src="https://cdnjs.cloudflare.com/ajax/libs/vanilla-tilt/1.8.0/vanilla-tilt.min.js"
     integrity="sha512-RX/OFugt/bkgwRQg4B22KYE79dQhwaPp2IZaA/YyU3GMo/qY7GrXkiG6Dvvwnds6/DefCfwPTgCXnaC6nAgVYw=="
     crossorigin="anonymous" referrerpolicy="no-referrer"></script>
     <script src="contact.js" defer></script>
   </head>
<body>
    <header id="navbar">
        <div class="logo">
           <a href="Eventastic.html"> <h2>Eventastic</h2></a>
        </div>
        <nav>
            <ul> <li> <a href="Eventastic.html" id="homelogo" >Home</a></li>
                 <li><a href="about.html" >About us</a></li>
                 <li> <a href="Eventastic.html#servives">Services</a></li>
                 <li> <a href="gallery.html">Gallery</a></li>
                 <li> <a href="contact.html" class="active">Contact us</a> </li>
            </ul>
        </nav>

    </header>
    <span id="contactUstitle">
        <h2>Contact US</h2>
    </span>
  <div class="container">
    <div class="content">
      <div class="left-side">
        <div class="address details">
          <i class="fas fa-map-marker-alt"></i>
          <div class="topic">Address</div>
          <div class="text-one">AA, Eth</div>
          <div class="text-two">Piassa Datsun</div>
        </div>
        <div class="phone details">
          <i class="fas fa-phone-alt"></i>
          <div class="topic">Phone</div>
          <div class="text-one">+0000 0000 0000</div>
          <div class="text-two">+0000 0000 0000</div>
        </div>
        <div class="email details">
          <i class="fas fa-envelope"></i>
          <div class="topic">Email</div>
          <div class="text-one">Eventastic@gmail.com</div>
          <div class="text-two">Eventastic@gmail.com</div>
        </div>
      </div>
      <div class="right-side">
        <div class="topic-text"> <p> We value your feedback and inquiries.
             Whether you're interested in booking an event or simply
             want to learn more about our services, don't hesitate to get in touch.
              Your event journey starts here!</p></div>

      <form action="#">
        <div class="input-box">
          <input type="text" placeholder="Enter your name">
        </div>
        <div class="input-box">
          <input type="text" placeholder="Enter your email">
        </div>
        <div class="input-box message-box">
            <input type="text" placeholder="Enter your Message">
        </div>
        <div class="button">
          <input type="button" id="messageSent" value="Send Message" >
        </div>
        <div class="batoho">
            <a href="Eventastic.html">Back to Home</a>
        </div>
      </form>
    </div>
    </div>
  </div>

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
