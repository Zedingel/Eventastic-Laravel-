<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About us</title>
    <link rel="stylesheet" href="{{ asset('css/about.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
<header id="navbar">
    <div class="logo">
       <a href="Eventastic.html"> <h2>Eventastic</h2></a>
    </div>
    <div class="hamburger-menu">
      <button id="hamburger-button">&#9776;</button>
  </div>

    <nav>
        <ul> <li> <a href="Eventastic.html" >Home</a></li>
             <li><a href="about.html" class="active">About us</a></li>
             <li> <a href="services.html">Services</a></li>
             <li> <a href="gallery.html">Gallery</a></li>
             <li> <a href="contact.html">Contact us</a> </li>
        </ul>
    </nav>

</header>

<div class="img-about">
    <img src="images/About.jpg" alt="Event Management">
</div>
<div class="overlaidAboutMessage">
    <span class="AboutSpan">
        <h1>About Us</h1>
        <h3>Eventastic is your one-stop magic shop for unforgettable moments, weaving dreams into reality with every event planned. Let us turn your visions into vibrant realities, making every occasion extraordinary, every experience exceptional.</h3>
    </span>
</div>

<div class="whoWeAre">
    <h1>WHO WE ARE</h1>
    <p>At Eventastic, we are more than just event organizers; we are creators of unforgettable experiences and architects of lasting memories. With a passion for excellence and a commitment to perfection, we specialize in curating events that transcend expectations and redefine the art of celebration.</p>
    <p>Our team of dedicated professionals brings a wealth of expertise and creativity to every project, ensuring that each event we touch is a masterpiece in its own right. From intimate gatherings to grand galas, we approach each occasion with precision and care, crafting bespoke experiences tailored to our clients' unique visions and desires.</p>
    <p>At Eventastic, we believe that every event is a canvas waiting to be painted with moments of joy, laughter, and togetherness. We pride ourselves on our attention to detail, our dedication to client satisfaction, and our unwavering pursuit of excellence in everything we do.</p>
    <p>Whether you are planning a wedding, a corporate gathering, or a special celebration, Eventastic is here to turn your dreams into reality and make your event a resounding success. Let us be your partner in creating moments that will be cherished for a lifetime.</p>
</div>
<h1 id="mtt">Meet The Team</h2>
<br>
<div class="row">
    <div class="column">
      <div class="card">
        <img src="images/meetTheTeam/mtt1-removebg-preview.png" style="width:100%">
        <div class="container">
          <h2>Vector</h2>
         Facilitating seamless coordination and harmony, every team member at Eventastic plays a crucial role in bringing events to life
          <p>vector@vector.com</p>
          <p><button class="button">Contact</button></p>
        </div>
      </div>
    </div>

    <div class="column">
      <div class="card">
        <img src="images/meetTheTeam/mtt2.jpg" style="width:100%">
        <div class="container">
          <h2>Dr. Nefario</h2>
         Facilitating seamless coordination and harmony, every team member at Eventastic plays a crucial role in bringing events to life
          <p>Nefario@Nefario.com</p>
          <p><button class="button">Contact</button></p>
        </div>
      </div>
    </div>

    <div class="column">
      <div class="card">
        <img src="images/meetTheTeam/mtt3.jpg" style="width:100%">
        <div class="container">
          <h2>margo</h2>
         Facilitating seamless coordination and harmony, every team member at Eventastic plays a crucial role in bringing events to life
          <p>margo@margo.com</p>
          <p><button class="button">Contact</button></p>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="column">
      <div class="card">
        <img src="images/meetTheTeam/mtt4-removebg-preview.png" style="width:100%">
        <div class="container">
          <h2>Ted</h2>
         Facilitating seamless coordination and harmony, every team member at Eventastic plays a crucial role in bringing events to life
          <p>Ted@Ted.com</p>
          <p><button class="button">Contact</button></p>
        </div>
      </div>
    </div>

    <div class="column">
      <div class="card">
        <img src="images/meetTheTeam/tim.jpg" style="width:100%">
        <div class="container">
          <h2>Tim</h2>
         Facilitating seamless coordination and harmony, every team member at Eventastic plays a crucial role in bringing events to life
          <p>Tim@Tim.com</p>
          <p><button class="button">Contact</button></p>
        </div>
      </div>
    </div>

    <div class="column">
      <div class="card">
        <img src="images/meetTheTeam/mtt6-removebg-preview.png" style="width:100%">
        <div class="container">
          <h2>old Ted</h2>
         Facilitating seamless coordination and harmony, every team member at Eventastic plays a crucial role in bringing events to life
          <p>oldTed@oldTed.com</p>
          <p><button class="button">Contact</button></p>
        </div>
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
            <ul><li><a href="">Home</a></li>
                <li><a href="">Services</a></li>
                <li><a href="">About</a></li>
                <li><a href="">Contact Us</a></li>
                <li><a href="">Gallery</a></li>
            </ul>
        </div>

    </div>
    <div class="footerBottom">
        <p>Copyright &copy;2023; Designed by: Us<span class="designer"></span></p>
    </div>
</footer>

<script src="{{ asset('js/about.js') }}"></script>
</body>
</html>
