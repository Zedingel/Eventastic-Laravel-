<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Event</title>
    <link rel="stylesheet" href="{{ asset('css/RbookEvent.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!--<script src="https://cdn.jsdelivr.net/npm/ethiopian-calendar@latest/dist/ethiopian-calendar.min.js"></script>-->

</head>
<body>
    <!-- Form Begins -->
    <form action="{{ route('form.store') }}" method="post" class="form" id="form">
        <h2 class="text-center">Book Event</h2>

        <!-- Progress Bar  -->
        <div class="progressbar">
            <div class="progress" id="progress"></div>
            <div class="progress-step progress-step-active" data-title="Event Details"></div>
            <div class="progress-step" data-title="Date and Time"></div>
            <div class="progress-step" data-title="Theme and Decor"></div>
            <div class="progress-step" data-title="Catering and Dining"></div>
            <div class="progress-step" data-title="Entertainment"></div>
            <div class="progress-step" data-title="Contact"></div>
            <div class="progress-step" data-title="Special Requests"></div>
        </div>


        <div class="form-step form-step-active">
            <div class="input-group">
                <label for="occasion">Occasion Selection</label>
                <select name="occasion" class="options" >
                    <option value="" disabled selected>Select an occasion</option>
                    <option value="wedding">Wedding</option>
                    <option value="traditional">Traditional</option>
                    <option value="destination">Destination</option>
                    <option value="themed">Themed</option>
                    <option value="birthday">Birthday Party</option>
                    <option value="children">Children's Party</option>
                    <option value="milestone">Milestone Celebration</option>
                    <option value="surprise">Surprise Party</option>
                    <option value="corporate">Corporate Event</option>
                    <option value="seminar">Seminar/Conference</option>
                    <option value="team_building">Team Building</option>
                    <option value="product_launch">Product Launch</option>
                    <option value="conference">Conference</option>
                </select>
            </div>
            <div class="input-group">
                <label for="guests">Number of Guests</label>
                <select name="guests" class="options">
                    <option value="" disabled selected>Select no of guests</option>
                    <option value="small">Small (1-50 guests)</option>
                    <option value="medium">Medium (51-150 guests)</option>
                    <option value="large">Large (151-300 guests)</option>
                    <option value="extra_large">Extra Large (300+ guests)</option>
                </select>
            </div>
            <div class="input-group">
                <label for="guests">Event Repititon</label>
                <select name="event_repeat" class="options">
                    <option value="" disabled selected>select how many times you want to handle the event</option>
                    <option value="small">One time</option>
                    <option value="medium">Weekly</option>
                    <option value="large">Annual</option>
                    <option value="extra_large">Quarterly</option>
                </select>
            </div>
            <div class="input-group">
                <label for="venue">Venue Type Preference</label>
                <select name="venue" class="options">
                    <option value="" disabled selected>Select Venue type</option>
                    <option value="indoor_banquet">Indoor Banquet Hall</option>
                    <option value="outdoor_garden">Outdoor Garden</option>
                    <option value="hotel_ballroom">Hotel Ballroom</option>
                    <option value="restaurant">Restaurant</option>
                    <option value="historic">Historic Venue</option>
                    <option value="beach_resort">Beach Resort</option>
                    <option value="country_club">Country Club</option>
                </select>
            </div>
            <div class="">
                <a href="#" class="btn btn-next width-50 ml-auto">Next</a>
            </div>
        </div>


        <div class="form-step">
            <div class="input-group">
                <label for="event_date">Event Date</label>
                <input type="date" id="event_date" name="event_date" class="options">
            </div>
            <div class="input-group">
                <label for="time_of_day">Preferred Event Time</label>
                <select name="time_of_day" class="options">
                    <option value="" disabled selected>Select preferred time</option>
                    <option value="morning">Morning (8 am - 12 pm)</option>
                    <option value="afternoon">Afternoon (12 pm - 4 pm)</option>
                    <option value="evening">Evening (4 pm - 10 pm)</option>
                    <option value="late_night">Late Night (after 10 pm)</option>
                </select>
            </div>
            <div class="input-group">
                <label for="event_duration">Duration of Event</label>
                <select name="event_duration" class="options">
                    <option value="" disabled selected>Select duration</option>
                    <option value="1_hour">1 Hour</option>
                    <option value="2_hours">2 Hours</option>
                    <option value="3_hours">3 Hours</option>
                    <option value="4_hours">4 Hours</option>
                    <option value="5_hours">5 Hours</option>
                    <option value="full_day">Full Day</option>
                </select>
            </div>
            <div class="btns-group">
                <a href="#" class="btn btn-prev">Back</a>
                <a href="#" class="btn btn-next">Next</a>
            </div>
        </div>
        <div class="form-step">
            <div class="input-group">
                <label for="theme">Theme Selection</label>
                <select name="theme" id="themeSelect" class="options options-with-suboptions">
                    <option value="">Select Theme</option>
                    <option value="vintage">Vintage</option>
                    <option value="modern">Modern</option>
                    <option value="rustic">Rustic</option>
                    <option value="tropical">Tropical</option>
                    <option value="hollywood_glam">Hollywood Glam</option>
                    <option value="masquerade">Masquerade</option>
                    <option value="bohemian">Bohemian</option>
                </select>

                <div id="themeSubOptions" class="sub-options">
                    <label for="themeSub">Sub-Options:</label>
                    <select name="themeSub" id="themeSub">
                        <!-- Sub-options for Theme Selection will be displayed here -->
                    </select>
                </div>
            </div>
            <div class="input-group">
                <label for="decor">Decoration Preferences</label>
                <select name="decor" id="decorSelect" class="options options-with-suboptions">
                    <option value="">Select Decoration</option>
                    <option value="floral_arrangements">Floral Arrangements</option>
                    <option value="fresh_flowers">Fresh Flowers</option>
                    <option value="silk_flowers">Silk Flowers</option>
                    <option value="lighting_effects">Lighting Effects</option>
                    <option value="string_lights">String Lights</option>
                    <option value="chandeliers">Chandeliers</option>
                    <option value="themed_props">Themed Props</option>
                    <option value="vintage_furniture">Vintage Furniture</option>
                    <option value="custom_backdrops">Custom Backdrops</option>
                </select>

                <div id="decorSubOptions" class="sub-options">
                    <label for="decorSub">Sub-Options:</label>
                    <select name="decorSub" id="decorSub">
                        <!-- Sub-options for Decoration Preferences will be displayed here -->
                    </select>
                </div>
            </div>
            <div class="btns-group">
                <a href="#" class="btn btn-prev">Back</a>
                <a href="#" class="btn btn-next">Next</a>
            </div>
        </div>
        <div class="form-step ">

            <div class="input-group " >
                <label for="catering" >Catering Preferences  <br>Select as Many Buffet as You Want</label>

                    <input type="checkbox" name="catering" value="Select as Many Buffet as You Want">
                </label>
                <label>
                    International Cuisine
                    <input type="checkbox" name="catering" value="international_cuisine">
                </label>
                <label>
                    Local Delicacies
                    <input type="checkbox" name="catering" value="local_delicacies">
                </label>
                <label>
                    Plated Meal
                    <input type="checkbox" name="catering" value="plated_meal">
                </label>
                <label>
                    Three-Course Dinner
                    <input type="checkbox" name="catering" value="three_course_dinner">
                </label>
                <label>
                    Fine Dining Experience
                    <input type="checkbox" name="catering" value="fine_dining_experience">
                </label>
                <label>
                    Cocktail Reception
                    <input type="checkbox" name="catering" value="cocktail_reception">
                </label>
                <label>
                    Signature Cocktails
                    <input type="checkbox" name="catering" value="signature_cocktails">
                </label>
                <label>
                    Mocktail Bar
                    <input type="checkbox" name="catering" value="mocktail_bar">

            </div>
            <div class="input-group">
                <label for="budget">Budget Range</label>
                <label>
                    Economy (<10,000)
                    <input type="radio" name="budget" value="economy">
                </label>
                <label>
                    Standard (<100,000)
                    <input type="radio" name="budget" value="standard">
                </label>
                <label>
                    Premium (<1,000,000)
                    <input type="radio" name="budget" value="premium">
                </label>
            </div>
            <div class="btns-group">
                <a href="#" class="btn btn-prev">Back</a>
                <a href="#" class="btn btn-next">Next</a>
            </div>
        </div>
        <div class="form-step">
            <div class="input-group">
                <label for="music">Music</label>
                <select name="music" class="options">
                    <option value="">Select</option>
                    <option value="live_band">Live Band</option>
                    <option value="jazz_band">Jazz Band</option>
                    <option value="pop_rock_band">Pop/Rock Band</option>
                    <option value="dj">DJ</option>
                    <option value="playlist_customization">Playlist Customization</option>
                    <option value="interactive_dj">Interactive DJ</option>
                </select>
            </div>
            <div class="input-group">
                <label for="photo_entertainment">Photo & Entertainment</label>
                <select name="photo_entertainment" class="options">
                    <option value="">Select</option>
                    <option value="photo_booth">Photo Booth</option>
                    <option value="themed_props">Themed Props</option>
                    <option value="instant_prints">Instant Prints</option>
                </select>
            </div>

            <div class="btns-group">
                <a href="#" class="btn btn-prev">Back</a>
                <a href="#" class="btn btn-next">Next</a>
            </div>
        </div>


        <div class="form-step">
            <div class="input-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name">
            </div>
            <div class="input-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="example@example.com">
            </div>
            <div class="input-group">
                <label for="tel">Phone Number</label>
                <input type="tel" id="phone" name="phone" placeholder="+251xxxxxxxxx">
            </div>
            <div class="input-group">
                <label for="company">Company/Organization (for corporate events)</label>
                <input type="text" id="company" name="company">
            </div>
            <div class="btns-group">
                <a href="#" class="btn btn-prev">Back</a>
                <a href="#" class="btn btn-next">Next</a>
            </div>
        </div>


        <div class="form-step">
            <div class="input-group">
                <label for="special_requests">Special Requests/Comments</label>
                <textarea id="special_requests" name="special_requests" rows="4"></textarea>
            </div>

            <div class="input-group">
                <label for="access_requirements">Access Requirements</label>
                <input type="text" id="access_requirements" name="access_requirements">
            </div>
            <div class="input-group">
                <label for="dietary_restrictions">Dietary Restrictions:</label>
                <input type="text" id="dietary_restrictions" name="dietary_restrictions">
            </div>

            <div class="btns-group">
                <a href="#" class="btn btn-prev">Back</a>
                <button type="submit" id="confirm">Confirm</button>
            </div>
        </div>
    </form>


    <script src="{{ asset('js/RbookEvent.js') }}"></script>
</body>
</html>
