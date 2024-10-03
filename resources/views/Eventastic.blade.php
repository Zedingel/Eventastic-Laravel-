<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eventastic</title>
    <link rel="stylesheet" href="{{ asset('css/Eventastic.css') }}">
    <link rel="icon" type="image/jpg" href="images/logo.jpg">
    <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vanilla-tilt/1.8.0/vanilla-tilt.min.js"
    integrity="sha512-RX/OFugt/bkgwRQg4B22KYE79dQhwaPp2IZaA/YyU3GMo/qY7GrXkiG6Dvvwnds6/DefCfwPTgCXnaC6nAgVYw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body>
<header id="navbar">
    <div class="logo">
        <h2></h2>
    </div>
    <div class="hamburger-menu">
        <button id="hamburger-button">&#9776;</button>
    </div>

    <nav>
        <ul>
            <li><a href="{{ url('/') }}" class="active">Home</a></li>
            <li><a href="{{ url('/about') }}">About Us</a></li>
            <li>
                <a href="#services">Services</a>
                <ul class="dropdown">
                    <li><a href="{{ url('/Eventplanning') }}"><p class="serviceslist">Event Planning</p></a></li>
                    <li><a href="{{ url('/VendorCoordination') }}"><p class="serviceslist">Vendor Coordination</p></a></li>
                    <li><a href="{{ url('/OnsiteManagement') }}"><p class="serviceslist">On-Site Management</p></a></li>
                    <li><a href="{{ url('/Marketing&Promotion') }}"><p class="serviceslist">Marketing and Promotion</p></a></li>
                    <li><a href="{{ url('/technicalsupport') }}"><p class="serviceslist">Technical Support</p></a></li>
                </ul>
            </li>
            <li><a href="{{ route('feedback.create') }}">Feedback</a></li>

            <li><a href="{{ url('/gallery') }}">Gallery</a></li>

            <!-- Login and Signup links -->
            @if (Auth::check())
                <li>
                    <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                        @csrf
                        <button type="submit" style="background: none; border: none; color: inherit; cursor: pointer;">Logout</button>
                    </form>
                </li>
            @else
                <li><a href="{{ route('login') }}">Login</a></li>
                <li><a href="{{ route('register') }}">Sign Up</a></li>
            @endif
        </ul>
    </nav>
</header>

    <!-- carousel -->
     <div class="carousel">
        <!-- list item -->
            <div class="list">
                <div class="item">
                    <img src="{{ asset('images/1Concerts and Music Festivals.jpg') }}" alt="">
                    <div class="content">
                        <div class="organizer">EVENTASTIC</div>
                        <div class="title">Concerts and Music Festivals</div>
                        <!-- <div class="topic">Event</div> -->
                        <div class="des">
                            Embark on a musical journey filled with electrifying beats, soul-stirring vocals, and unforgettable performances. Whether it's a concert under the stars or a festival brimming with energy, let the music guide you to moments of pure euphoria.
                        </div>
                        <div class="buttons">
                            <form action="{{ url('/RbookEvent') }}" method="GET">
    <button type="submit">BOOK EVENT</button>
</form>


                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="{{ asset('images/2Weddings.jpg')}}" alt="">
                    <div class="content">
                        <div class="organizer">EVENTASTIC</div>
                        <div class="title">Weddings</div>
                        <!-- <div class="topic">Event</div> -->
                        <div class="des">
                            Celebrate love, laughter, and happily ever afters in a setting that exudes charm and sophistication. With every detail meticulously crafted, your wedding day unfolds like a fairytale, creating memories that will last a lifetime.
                        </div>
                        <div class="buttons">
                            <form action="{{ url('/RbookEvent') }}" method="GET">
    <button type="submit">BOOK EVENT</button>
</form>


                        </div>

                    </div>
                </div>
                <div class="item">
                    <img src="{{ asset('images/3Birthday Parties and Celebrations.jpg')}}" alt="">
                    <div class="content">
                        <div class="organizer">EVENTASTIC</div>
                        <div class="title">Birthday Parties and Celebrations</div>
                        <!-- <div class="topic">Event</div> -->
                        <div class="des">
                            Step into a world where every moment is a celebration! Whether it's a milestone birthday or a casual get-together, immerse yourself in a whirlwind of fun, laughter, and memories that will leave you smiling for days.
                        </div>
                        <div class="buttons">
                            <form action="{{ url('/RbookEvent') }}" method="GET">
    <button type="submit">BOOK EVENT</button>
</form>


                        </div>

                    </div>
                </div>
                <div class="item">
                    <img src="{{ asset('images/4Sporting Events.jpg') }}" alt="">
                    <div class="content">
                        <div class="organizer">EVENTASTIC</div>
                        <div class="title">Sporting Events</div>
                        <!-- <div class="topic">Event</div> -->
                        <div class="des">
                            Gear up for a thrilling showdown where passion meets prowess. From heart-pounding matches to adrenaline-fueled competitions, dive into a world where every kick, swing, and sprint brings fans to their feet. Let the games begin!
                        </div>
                        <div class="buttons">
                            <form action="{{ url('/RbookEvent') }}" method="GET">
    <button type="submit">BOOK EVENT</button>
</form>


                        </div>

                    </div>
                </div>

            </div>
            <!-- thumbnail -->
            <div class="thumbnail">
                <div class="item">
                    <img src="{{ asset('images/1Concerts and Music Festivals.jpg')}}">
                    <div class="content">
                        <div class="title">
                            Concerts and Music Festivals
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="{{ asset('images/2Weddings.jpg')}}" >
                    <div class="content">
                        <div class="title">
                            Weddings
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="{{ asset('images/3Birthday Parties and Celebrations.jpg')}}" >
                    <div class="content">
                        <div class="title">
                            Birthday Parties and Celebrations
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="{{ asset('images/4Sporting Events.jpg')}}" >
                    <div class="content">
                        <div class="title">
                            Sporting Events
                        </div>
                    </div>
                </div>
            </div>

            <!-- arrows -->
             <div class="arrows">
                <button id="prev"><</button>
                <button id="next">></button>
        </div>
        <div class="time"></div>
     </div>
    <div class="message">
        <div class="firstMessage">
            <p>YOUR PREMIUM EVENT ORGANIZATION <br> PARTNER</p>
            <p> <strong class="quotation">"</strong> We design events to elevate your senses, spark connections, and create lasting memories. <br> Experience innovation, inspiration, and joy like never before with us. <strong class="quotation">"</strong></p>
        </div>
    </div>

    <div class="ServicesHomeTitle">
        <p>Our Services</p>
    </div>
<div class="servicesHOme" id="services">
    <div class="serivesContainer1">
        <div class="servicesCard">
            <div class="lines"></div>
            <div class="Simg">
                <img src="{{ asset('images/Event.png')}}" >
            </div>
            <div class="Scontent">
                <div class="Sdetails">
                    <h2>Event Planning</h2>
                    <p>Our meticulous event planning service transforms your vision into reality with tailored concepts,
                         exquisite details, and seamless execution. From inception to the final toast,
                          we craft unforgettable experiences that leave lasting impressions. </p>
                          <a href="{{ url('/Eventplanning') }}">Read more</a>

                </div>
            </div>
        </div>
        <div class="servicesCard">
            <div class="lines"></div>
            <div class="Simg">
                <img src="{{ asset('images/vendor.png')}}" >
            </div>
            <div class="Scontent">
                <div class="Sdetails">
                    <h2>Vendor Coordination</h2>
                    <p>We curate a network of top-tier vendors, ensuring each element harmonizes flawlessly.
                         With our vendor coordination service, your event benefits from professional partnerships, reliability,
                         and a commitment to excellence. </p>
                         <a href="{{ url('/VendorCoordination') }}">Read more</a>

                </div>
            </div>
        </div>
    <div class="serivesContainer2">
        <div class="servicesCard">
            <div class="lines"></div>
            <div class="Simg">
                <img src="{{ asset('images/onsite.png')}}" >
            </div>
            <div class="Scontent">
                <div class="Sdetails">
                    <h2>Onsite Management</h2>
                    <p>Our onsite management service guarantees your event runs smoothly,
                        with our experienced team handling every detail. From setup to teardown,
                        we oversee logistics, troubleshoot issues, and ensure a stress-free experience for you and your guests. </p>
                        <a href="{{ url('/OnsiteManagement') }}">Read more</a>

                </div>
            </div>
        </div>
        <div class="servicesCard">
            <div class="lines"></div>
            <div class="Simg">
                <img src="{{ asset('images/marketing and promotion.png')}}" >
            </div>
            <div class="Scontent">
                <div class="Sdetails">
                    <h2>Marketing and Promotion</h2>
                    <p>Elevate your event with our strategic marketing and promotion service.
                         We craft innovative campaigns that engage audiences, maximize visibility, and create buzz.
                          Let us amplify your event's reach and impact, turning moments into memories to cherish. </p>
                          <a href="{{ url('/Marketing&Promotion') }}">Read more</a>

                </div>
            </div>
        </div>
    </div>
</div>
</div>
        <!-- Login -->
        <div id='login-form'class='login-page'>
            <div class="form-box">
                <div class='button-box'>
                    <div id='btn'></div>
                    <button type='button'onclick='login()'class='toggle-btn'>Log In</button>
                    <button type='button'onclick='register()'class='toggle-btn'>Register</button>
                </div>
                <form id='login' class='input-group-login'>
                    <input type='text'class='input-field'placeholder='Email' required >
		    <input type='password'class='input-field'placeholder='Enter Password' required>
		    <input type='checkbox'class='check-box'><span style="margin-bottom: 5em;">Remember Password</span>
		    <button type='submit'class='submit-btn'>Log in</button>
		    <button type='submit'class='submit-btn' id="fp" >Forgot Password</button>
		 </form>
		 <form id='register' class='input-group-register'>
		     <input type='text'class='input-field'placeholder='First Name' required>
		     <input type='text'class='input-field'placeholder='Last Name ' required>
		     <input type='email'class='input-field'placeholder='Email' required>
		     <input type='password'class='input-field'placeholder='Enter Password' required>
		     <input type='password'class='input-field'placeholder='Confirm Password'  required>
		     <input type='checkbox'class='check-box' required><span>I agree to the terms and conditions</span>
                    <button type='submit'class='submit-btn'>Register</button>
	         </form>
            </div>
        </div>


    <div class="parallax"></div>

<div class="parallax-meassage" >
         <h1>"Your Unforgettable Prelude Begins Here" </h1>
</div>

<div class="parallax"></div>

    <div class="UpcomingEventsIsle">

    <div class="TimeLineVillage">
        <div class="TimeLineHome">
            <div class="timeLine-title">
                <!-- <h1>Upcoming Events</h1> -->
                <p>Dive into the enchantment of our expertly tailored public events
                     (on Us), <br> BEFORE YOUR OWN EVENT STEALS THE SHOW!</p>
            </div>
            <div class="timeLine">
                <div class="checkpoint">
                    <div>
                        <div class="eventSoon">
                            <section class="UPComEV">
                                <div class="upeveHome">
                            <div class="container">
                                <div class="item-container">
                                    <div class="img-container">
                                        <img src="./images/Jazz-Festival-concert.jpg" alt="Event image">
                                    </div>

                                    <div class="body-container">
                                        <div class="overlay"></div>

                                        <div class="event-info">
                                            <p class="EventPopTitle">Sunset Soirée Jazz Festival</p>
                                            <div class="separator"></div>
                                            <p class="info">Bole, AA</p>

                                            <div class="additional-info">
                                                <p class="info">
                                                    <i class="fas fa-map-marker-alt"></i>
                                                    Grand Central Terminal
                                                </p>
                                                <p class="info">
                                                    <i class="far fa-calendar-alt"></i>
                                                    Sat, Sep 19, 10:00 AM EDT
                                                </p>

                                                <p class="info description">
                                                    Indulge in a harmonious blend of music and magic at our Sunset Soirée Jazz Festival.
                                                     Delight in soulful tunes, delectable cuisine, and a breathtaking sunset backdrop
                                                     for a night to remember.
                                                </p>
                                            </div>
                                        </div>
                                        <button class="action">Book it</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </section>
                        </div>
                    </div>
                </div>
                <div class="checkpoint">
                    <div>
                        <div class="eventSoon">
                            <section class="UPComEV">
                                <div class="upeveHome">
                            <div class="container">
                                <div class="item-container">
                                    <div class="img-container">
                                        <img src="./images/Allstar.jpg" alt="Event image">
                                    </div>

                                    <div class="body-container">
                                        <div class="overlay"></div>

                                        <div class="event-info">
                                            <p class="EventPopTitle">All-Star Football Showdown</p>
                                            <div class="separator"></div>
                                            <p class="info">Gotera, AA</p>

                                            <div class="additional-info">
                                                <p class="info">
                                                    <i class="fas fa-map-marker-alt"></i>
                                                    Grand Central Terminal
                                                </p>
                                                <p class="info">
                                                    <i class="far fa-calendar-alt"></i>
                                                    Sat, Sep 19, 10:00 AM EDT
                                                </p>

                                                <p class="info description">
                                                    Brace yourself for the ultimate clash of titans at Legends of the Gridiron.
                                                     Watch football legends go head-to-head in a high-octane showdown that promises
                                                      heart-stopping action and unforgettable moments.
                                                </p>
                                            </div>
                                        </div>
                                        <button class="action">Book it</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </section>
                        </div>

                    </div>
                </div>
                <div class="checkpoint">
                    <div>
                        <div class="eventSoon">
                            <section class="UPComEV">
                                <div class="upeveHome">
                            <div class="container">
                                <div class="item-container">
                                    <div class="img-container">
                                        <img src="./images/Charity-Ball.jpg" alt="Event image">
                                    </div>

                                    <div class="body-container">
                                        <div class="overlay"></div>

                                        <div class="event-info">
                                            <p class="EventPopTitle">City Lights Charity Ball</p>
                                            <div class="separator"></div>
                                            <p class="info">Piassa, AA</p>

                                            <div class="additional-info">
                                                <p class="info">
                                                    <i class="fas fa-map-marker-alt"></i>
                                                    Grand Central Terminal
                                                </p>
                                                <p class="info">
                                                    <i class="far fa-calendar-alt"></i>
                                                    Sat, Sep 19, 10:00 AM EDT
                                                </p>

                                                <p class="info description">
                                                    Join us for an unforgettable evening at the City Lights Charity Ball,
                                                     where sophistication meets philanthropy. Enjoy a glamorous night of
                                                      giving back in style amidst the glittering cityscape.
                                                </p>
                                            </div>
                                        </div>
                                        <button class="action">Book it</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </section>
                        </div>

                    </div>
                </div>
                <div class="checkpoint">
                    <div>
                        <div class="eventSoon">
                            <section class="UPComEV">
                                <div class="upeveHome">
                            <div class="container">
                                <div class="item-container">
                                    <div class="img-container">
                                        <img src="./images/figureskating.jpg" alt="Event image">
                                    </div>

                                    <div class="body-container">
                                        <div class="overlay"></div>

                                        <div class="event-info">
                                            <p class="EventPopTitle">Figure Skating Extravaganza</p>
                                            <div class="separator"></div>
                                            <p class="info">4 Kilo, AA</p>

                                            <div class="additional-info">
                                                <p class="info">
                                                    <i class="fas fa-map-marker-alt"></i>
                                                    Grand Central Terminal
                                                </p>
                                                <p class="info">
                                                    <i class="far fa-calendar-alt"></i>
                                                    Sat, Sep 19, 10:00 AM EDT
                                                </p>

                                                <p class="info description">
                                                    Glide into a world of elegance and grace at Thunder on Ice.
                                                    Marvel at the artistry and athleticism of top figure skaters
                                                    as they dazzle you with their breathtaking performances on the glistening ice.
                                                </p>
                                            </div>
                                        </div>
                                        <button class="action">Book it</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </section>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>

    <div class="reveal">
        <div class="revealcontainer"> <h2 data-text="From Venue Selection to Event Execution, We’re With">From Venue Selection to Event Execution, We’re With</h2>
         <h2 id="revealtextline2" data-text="You Every Step of the Way!"> You Every Step  of the Way!</h2>
        </div>
     </div>



    <section id="TestimonialTitle"> <h1>Testimonials</h1> </section>
    <section class="testimonialVillage">
        <section class="testimonialhome" id="firstTestimonial">
            <div class="box">
                 <div class="elements bg"></div>
                 <div class="elements imgBx">
                     <img src="{{ asset('images/Testimonial/Stuart.jpg')}}">
                 </div>
                 <div class="elements name">
                     <h2>Stuart "One Eye"</h2>
                 </div>
                 <div class="elements content">
                     <p>
                        I was blown away by the event organized by this team. From the moment I stepped in, I was immersed in a world of creativity and excitement. The attention to detail, the seamless coordination, and the unforgettable moments created an experience that will stay with me for a long time. Thank you for a truly remarkable event!
                     </p>
                 </div>
                     <div class="card">
             </div>
            </div>
       </section>
        <section class="testimonialhome">
            <div class="box">
                 <div class="elements bg"></div>
                 <div class="elements imgBx">
                     <img src="{{ asset('images/Testimonial/Kevin.jpg')}}">
                 </div>
                 <div class="elements name">
                     <h2>Kevin the Minion</h2>
                 </div>
                 <div class="elements content">
                     <p>
                        The event orchestrated by this team was nothing short of spectacular. The carefully curated program, the seamless flow of activities, and the impeccable hospitality made it a night to remember. Every detail was thoughtfully planned, creating an atmosphere of joy and celebration that was infectious. I can't wait for the next event!
                    </p>
                </div>
                     <div class="card">
             </div>
            </div>
       </section>
        <section class="testimonialhome">
            <div class="box">
                 <div class="elements bg"></div>
                 <div class="elements imgBx">
                     <img src="{{ asset('images/Testimonial/scarlet overkill.jpg')}}">
                 </div>
                 <div class="elements name">
                     <h2>Scarlet Overkill</h2>
                 </div>
                 <div class="elements content">
                     <p>
                        Attending the event organized by this team was a transformative experience. From the breathtaking decorations to the engaging entertainment, every aspect was meticulously planned to perfection. The event exuded elegance and charm, leaving a lasting impression on all attendees. It was a night filled with laughter, joy, and unforgettable memories that I will cherish for a lifetime.
                     </p>
                 </div>
                     <div class="card">
             </div>
            </div>
       </section>
    </section>
   <div class="TC-Section">
    <section class="TC_Isle">
        <div class="TCimg">
            <p>Technical Support</p>
            <img src="{{ asset('images/technicalSupport.jpg')}}" alt="">
        </div>
        <div class="TCMMM">
            <p>Whether you have questions, encounter technical hurdles,
                or seek clarifications, our dedicated support team is
                here to help. Contact us for any support you need,
                and let us ensure that your experience with our
                    products and services remains smooth and satisfying.
                    let's navigate through any technical challenges together</p>
            <a href="{{ url('/technicalsupport') }}">Explore</a>

        </div>
    </section>
   </div>

    <div class="parallax4" ></div>
<div id="parallax-4-message"
style="height:80px;
font-family:Georgia, 'Times New Roman', Times, serif;
font-size: 60px;
background: transparent;
position: absolute;
padding: 50px;
color: rgb(0, 0, 0);
display: flex;
justify-content: center;
flex-direction: column;
margin-left: 7%;
margin-top: -50px;
font-weight: bolder;
letter-spacing: 2px;" > <p
>
    Craft timeless memories with our &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; remarkable team.

</p>
</div>

    <div class="parallax4"></div>


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

<script>
    var eventasticUrl = "{{ url('/Eventastic') }}"; // Pass the URL to a global variable
</script>



<script src="{{ asset('js/Eventastic.js') }}"></script>
</body>
</html>
