<!DOCTYPE html>
<html>
    <head>
        <title>Shine</title>
        <link rel="shortcut icon" href="//shinetext.herokuapp.com/images/favicon.ico" type="image/vnd.microsoft.icon" />
        <link rel="manifest" href="/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <link href='https://fonts.googleapis.com/css?family=Fira+Sans' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="fonts/BebasNeueBold.otf" type="text/css" charset="utf-8" /> 
        <link rel="stylesheet" href="fonts/BebasNeueRegular.otf" type="text/css" charset="utf-8" /> 
        <link href="{{ asset('css/index.css') }}" rel="stylesheet" type="text/css" >

        <style>
          @font-face {
              font-family: 'Bebas Neue Bold';
              src: url('fonts/BebasNeueBold.eot');
              src: url('fonts/BebasNeueBold.eot?#iefix') format('embedded-opentype'),
                  url('fonts/BebasNeueBold.woff') format('woff'),
                  url('fonts/BebasNeueBold.ttf') format('truetype'),
                  url('fonts/BebasNeueBold.svg#FontName') format('svg');
              font-weight: normal;
              font-style: normal;
          }

          @font-face {
              font-family: 'Bebas Neue Regular';
              src: url('fonts/BebasNeueRegular.eot');
              src: url('fonts/BebasNeueRegular.eot?#iefix') format('embedded-opentype'),
                  url('fonts/BebasNeueRegular.woff') format('woff'),
                  url('fonts/BebasNeueRegular.ttf') format('truetype'),
                  url('fonts/BebasNeueRegular.svg#FontName') format('svg');
              font-weight: normal;
              font-style: normal;
          }
        </style>

        <script>
          function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-68971267-1', 'auto');
          ga('send', 'pageview');
        </script>    
    </head>

    <body>
      <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only"></span><img src={{asset('images/hamburger.png')}}>
            </button>
            <a class="navbar-brand hidden-sm hidden-md hidden-lg" href="#"><img src={{asset('images/shine2_logo.png')}}></a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
              <li class="dropdown">
                <a href="#" class="dropdown-toggle hidden-xs" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img src={{asset('images/hamburger.png')}}></a>
                <a href="#about" class="dropdown-toggle hidden-sm hidden-md hidden-lg">ABOUT</a>
                <a href="#testimonials" class="dropdown-toggle hidden-sm hidden-md hidden-lg">TESTIMONIALS</a>
                <a href="#partners" class="dropdown-toggle hidden-sm hidden-md hidden-lg">PARTNERS</a>
                <a href="#refer" class="dropdown-toggle hidden-sm hidden-md hidden-lg">REFER-A-FRIEND</a>
                <a href="https://blog.shinetext.com/latest" class="dropdown-toggle hidden-sm hidden-md hidden-lg">BLOG</a>
                <a href="#contact" class="dropdown-toggle hidden-sm hidden-md hidden-lg">CONTACT</a>

                <ul class="dropdown-menu dropdown-toggle hidden-xs">
                  <li><a href="#about">ABOUT</a></li>
                  <li><a href="#testimonials">TESTIMONIALS</a></li>
                  <li><a href="#partners">PARTNERS</a></li>
                  <li><a href="#refer">REFER-A-FRIEND</a></li>
                  <li><a href="https://blog.shinetext.com/latest">BLOG</a></li>
                  <li><a href="#contact">CONTACT</a></li>
                </ul>
              </li>

              <li class="hidden-xs"><a href="#"><img src={{asset('images/shine2_logo.png')}}></a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li class="hidden-xs" id="social-icons"><a href="https://twitter.com/ShineText" target="_blank"><img src={{asset('images/twitter_Icon.png')}}></a></li>
              <li class="hidden-xs" id="social-icons"><a href="https://instagram.com/ShineText" target="_blank"><img src={{asset('images/instagram_Icon.png')}}></a></li>
              <li class="hidden-xs" id="social-icons"><a href="https://www.facebook.com/Shine-Text" target="_blank"><img src={{asset('images/facebook_Icon.png')}}></a></li>
              <li class="hidden-xs" id="nav-refer"><a href="#refer">SIGNUP FOR SHINE</a></li>
            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>

      <div class="header">    
        <div class="text_bubble_column">
          <div id="shine_text_bubble">
              <p>Welcome to Shine! We all need a little help to get through the day & feel our best self. We'll text you daily work hacks & reminders of why you're a badass.</p>
          </div>

          <div id="user_text_bubble">
              <p>So pumped!</p>
          </div>

          <div id="shine_text_bubble_2">
              <p>Glad to hear it. You're going to crush it today. #ShineOn.</p>
          </div>
        </div>

        <div id="logo_column">
          <img src={{asset('images/shine_logo.png')}}>

          <h3>A daily text to help you slay the day.</h3>

          <form action="https://secure.mcommons.com/profiles/join" method="post">                    
              <input type="hidden" name="opt_in_path[]" value="OP4B1A27AC508266A1F4373419CE1BE391" />
              <input type="hidden" name="redirect_to" value={{ URL::route('confirmation') }} />

              <input required="required" placeholder="FIRST NAME" type="text" name="person[first_name]" id="person_first_name" /></br>
              
              <input placeholder="LAST NAME (OPTIONAL)" type="text" name="person[last_name]" id="person_last_name" /></br>

              <input required="required" placeholder="PHONE NUMBER" type="text" name="person[phone]" id="person_phone" /></br>
    
              <!-- <input required="required" placeholder="BIRTHDAY" onfocus="(this.type='date')" id="person_birthday" name="person[birthday]" size="30" type="text" /></br>    -->

              <!-- <input placeholder="EMAIL ADDRESS (OPTIONAL)" id="person_email" name="person[email]" size="30" type="email" /></br> -->
    
              <input type="submit" value="SIGNUP" class="signup_button"/>
          </form>
            
            <!-- <span style="font-size:80%"><a href="https://www.mobilecommons.com/about/terms-and-conditions/">Msg &amp; Data Rates May Apply.</a><br />Text <b>STOP</b> to opt out. No purchase necessary.<br />Expect 4 msgs/mo. <a href="https://www.mobilecommons.com/about/terms-and-conditions/privacy-policy/">Terms and Conditions</a></span> -->
        </div>
      </div>

      <a name="about"></a>
      <div class="col-md-4">
        <img src={{asset('images/coffee_icon.png')}}>
        <h3>A.M. MOTIVATION</h3>
        <p>We curate and create content to send you every morning around your lifestyle. Learn how positive affirmations, the perfect playlist, and a work bestie can boost confidence and reduce stress at the office.</p>
      </div>

      <div class="col-md-4">
        <img src={{asset('images/lightning2_icon.png')}}>
        <h3>SAY BYE TO ANXIETY </h3>
        <p>Daily affirmations are proven to reprogram negative thought patterns. Shine texts help target dysfunctional beliefs through short positive statements (a common practice in Cognitive Behavioral Therapy and modern meditation).</p>
      </div>

      <div class="col-md-4">
        <img src={{asset('images/mail_icon.png')}} id="mail">
        <h3>SHARE WITH FRIENDS</h3>
        <a name="testimonials"></a>
        <p>The best part? You can share all of this motiv-affirmation (motivation + affirmation. Yeah, we made up a word) with your friends to give them the boost they need. A few Channing Tatum GIFs never hurt anyone, right?</p>
      </div>

      <div style="clear: both;"></div>
      <br><br><br><br><br><br><br>
      <div class="testimonials">
        <!-- Used this tutorial to create carousel: https://bootstrapbay.com/blog/bootstrap-3-carousel-tutorial/ -->
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="5000">
        <h2>WORD ON THE STREET</h2>
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <!-- <li data-target="#carousel-example-generic" data-slide-to="2"></li> -->
          </ol>
         
          <!-- Wrapper for slides - dimensions are screenshots of 1440 x 610 -->
          <div class="carousel-inner">
            <div class="item active">
              <img src={{asset('images/testimonials_1.png')}}>
<!--               <div class="carousel-caption">
                  <h3>Caption</h3>
              </div> -->
            </div>
            <div class="item">
              <img src={{asset('images/testimonials_2.png')}}>
            </div>
          </div>
         
          <!-- Controls -->
          <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
          </a>
          <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
          </a>
        </div> <!-- Carousel -->
     <!--    <div class="col-md-4" id="testimonials">
          <div class="rays">
            <img src={{asset('images/sun_rays.png')}}>
          </div>
          <div id="user_pic">
            <img src={{asset('images/brenna.png')}}>
          </div>
          <p>"EVERYTHING I ever needed to make it through another awkward week of my version of adulting. I'm always twiddling my thumbs waiting for Shine to kick my ass back into gear. #dependency"</p> 
          <p id="name">Brenna, Graduate Student</p>
        </div> -->
      <a name="partners"></a>
      </div>

      <div class="partners">
        <h2>Partners we love</h2>
        <li id="dreamers"><a href="http://www.dreamersdoers.me/" target="_blank"><img src={{asset('images/dreamers_and_doers.png')}}></a></li>
        <li id="first"><a href="https://www.shesthefirst.org/" target="_blank"><img src={{asset('images/shes_the_first.png')}}></a></li>
        <li id="create"><a href="http://www.createcultivate.com/blog/side-hustle-queens-part-ii" target="_blank"><img src={{asset('images/create_and_cultivate.png')}}></a></li>
        <li id="lorem"><a href="http://www.loremipsum.wtf/" target="_blank"><img src={{asset('images/lorem_ipsum.png')}}></a></li>
      </div>

      <a name="refer"></a>
      <div style="clear: both;">
      <div class="refer-a-friend">
        <h2>Share Shine texts with your friends!</h2>
        <form action="https://secure.mcommons.com/profiles/join" method="post">   
            <div class="refer_form">                 
              <input type="hidden" name="opt_in_path[]" value="OP4B1A27AC508266A1F4373419CE1BE391" />
                  <input type="hidden" name="redirect_to" value={{ URL::route('refer_confirmation') }} />
              
              <div class="col-md-4" id="referral">
                  <input required="required" placeholder="YOUR NAME" type="text" name="person[first_name]" id="person_first_name" /></br></br>
                  <input required="required" placeholder="YOUR PHONE NUMBER" type="text" name="person[phone]" id="person_phone" /></br>
              </div>

              <div class="col-md-4" id="referral">
                  <input required="required" placeholder="YOUR FRIEND'S NUMBER" type="text" name="friends[]"/><br /> <input type="hidden" name="friends_opt_in_path" value="OPE8B3F738CF07CE0C3AFA3F45A5E155ED" /><br>
                  <input placeholder="YOUR FRIEND'S NUMBER (OPTIONAL)" type="text" name="friends[]"/><br /> <input type="hidden" name="friends_opt_in_path" value="OPE8B3F738CF07CE0C3AFA3F45A5E155ED" /><br>               
              </div>

              <div class="col-md-4" id="referral">            
                  <input placeholder="YOUR FRIEND'S NUMBER (OPTIONAL)" type="text" name="friends[]"/><br /> <input type="hidden" name="friends_opt_in_path" value="OPE8B3F738CF07CE0C3AFA3F45A5E155ED" /><br>
                  <input placeholder="YOUR FRIEND'S NUMBER (OPTIONAL)" type="text" name="friends[]"/><br /> <input type="hidden" name="friends_opt_in_path" value="OPE8B3F738CF07CE0C3AFA3F45A5E155ED" /><br>
              </div>
            </div>

            <div style="clear: both;">
            <input type="submit" value="SUBMIT" class="signup_button" id="center"/>
            </div>  
        </form>
      <a name="contact"></a>
      </div>


      <div style="clear: both;"></div>
      <div class="contact">
          <h2>WE'RE FIGURING IT OUT WITH YOU</h2>
          <p>
              50% of women report that they experience feelings of self-doubt about their performance and careers - compared to just 31% of men. We want to change that.<br><br> 
              As three close friends who met at work, we regularly leaned on each other for support, advice, and confidence tips and recognized a gap in the market. 
              How could we scale the support we gave each other for women across the country? That's how Shine came to be. We are three women of color with separate backgrounds in product, marketing and engineering, 
              curating content we need and want in our day to day.
              <br><br>Have suggestions, thoughts, or just want to get in touch? We'd love to hear from you! 
              <br><a href="mailto:theshinetext@gmail.com" target="_top">Contact us.</a><br><br>
              Design by <a href="http://www.kimberlyli.com/" target="_blank">Kim Li</a> and words by <a href="http://www.benkassoy.com/" target="_blank">Ben Kassoy.</a>
          </p>
          <img src={{asset('images/Shine.jpg')}}>
      </div>

      <ul class="footer">
        <h1>SHINE</h1>
        <div id="footer-social">
            <li><a href="https://twitter.com/ShineText" target="_blank"><img src={{asset('images/twitter_yellow.png')}}></a></li>
            <li><a href="https://instagram.com/ShineText" target="_blank"><img src={{asset('images/instagram_yellow.png')}}></a></li>
            <li><a href="https://www.facebook.com/Shine-Text" target="_blank"><img src={{asset('images/facebook_yellow.png')}}></a></li>
            <div id="privacy-policy-link"><li><a href="{{ URL::route('privacy-policy') }}">PRIVACY POLICY</a></li></div>
        </div>
      </ul>
    </body>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script>
      $('.carousel').carousel({
          interval: 3000
      })
  </script>
</html>


