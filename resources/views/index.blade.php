@extends('layouts.master')

@section('page-css')
<link href="{{ asset('css/index.css') }}" rel="stylesheet" type="text/css" >
@endsection

@section('content')

@include('layouts.navbar-index')

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

  <div id="logo-column">
    <img src={{asset('images/shine_logo.png')}}>

    <h3>Daily work and life advice sent to you in a text message every morning. We got you.</h3>

    <form action="https://secure.mcommons.com/profiles/join" method="post">
      <input type="hidden" name="opt_in_path[]" value="OP4B1A27AC508266A1F4373419CE1BE391" />
      <input type="hidden" name="redirect_to" value={{ URL::route('confirmation') }} />

      <input required="required" placeholder="First Name" type="text" name="person[first_name]" id="person_first_name" /></br>

      <input placeholder="Last Name (optional)" type="text" name="person[last_name]" id="person_last_name" /></br>

      <input required="required" placeholder="Phone Number" type="tel" name="person[phone]" id="person_phone" /></br>

      <input placeholder="Email (optional)" type="email" name="person[email]" /></br>

      <input type="submit" value="SIGNUP" class="signup_button"/>
    </form>

  </div>
</div>

<a name="about" class="anchor"></a>
<div class="about">
  <div class="col-md-4">
    <img src={{asset('images/coffee_icon.png')}}>
    <h3>A.M. MOTIVATION</h3>
    <p>We curate and create content to send you every morning around how to live with more intentionality to reach your work and life goals. With positive affirmations, tactical tips and the occasional gif, our daily Shine Text will give you all the feels.</p>
  </div>

  <div class="col-md-4">
    <img src={{asset('images/lightning2_icon.png')}}>
    <h3>SAY BYE TO ANXIETY </h3>
    <p>You are not alone. We want to help you realize how amazing you are and how we all deal with a little stress. Daily affirmations are proven to reprogram negative thought patterns. Shine Texts help target dysfunctional beliefs through short positive statements (a common practice in Cognitive Behavioral Therapy and modern meditation).</p>
  </div>

  <div class="col-md-4">
    <img src={{asset('images/mail_icon.png')}} id="mail">
    <h3>SHARE WITH FRIENDS</h3>
    <p>The best part? You can share all of this motiv-affirmation (motivation + affirmation. Yeah, we made up a word) with your friends to give them the boost they need. After you join the movement of living with intentionality, invite your friends to be their best selves too!</p>
  </div>
  <div style="clear: both;"></div>
</div>

<div class="refer">
  <a name="refer" class="anchor"></a>
  <h2>Share Shine texts with your friends!</h2>
  <form action="https://secure.mcommons.com/profiles/join" method="post">
    <div class="refer-form">
      <input type="hidden" name="opt_in_path[]" value="OP4B1A27AC508266A1F4373419CE1BE391" />
      <input type="hidden" name="redirect_to" value={{ URL::route('refer-confirmation') }} />

      <div class="col-md-4" id="referral">
        <input required="required" placeholder="Your Name" type="text" name="person[first_name]" id="person_first_name" /></br></br>
        <input required="required" placeholder="Your Phone Number" type="text" name="person[phone]" id="person_phone" /></br>
      </div>

      <div class="col-md-4" id="referral">
        <input required="required" placeholder="Your Friend's Number" type="text" name="friends[]"/><br /> <input type="hidden" name="friends_opt_in_path" value="OPE8B3F738CF07CE0C3AFA3F45A5E155ED" /><br>
        <input placeholder="Your Friend's Number (optional)" type="text" name="friends[]"/><br /> <input type="hidden" name="friends_opt_in_path" value="OPE8B3F738CF07CE0C3AFA3F45A5E155ED" /><br>
      </div>

      <div class="col-md-4" id="referral">
        <input placeholder="Your Friend's Number (optional)" type="text" name="friends[]"/><br /> <input type="hidden" name="friends_opt_in_path" value="OPE8B3F738CF07CE0C3AFA3F45A5E155ED" /><br>
        <input placeholder="Your Friend's Number (optional)" type="text" name="friends[]"/><br /> <input type="hidden" name="friends_opt_in_path" value="OPE8B3F738CF07CE0C3AFA3F45A5E155ED" /><br>
      </div>
    </div>

    <input type="submit" value="SUBMIT" class="signup_button" id="center"/>
    <br><br><br>
  </form>
</div>

<div class="press">
  <a name="press" class="anchor"></a>
  <h2>In the news</h2>
    <li id="cnn"><a href="http://money.cnn.com/2016/01/29/technology/startup-shine-text/index.html" target="_blank"><img src={{asset('images/CNNMoney_logo.png')}}></a></li>
    <div class="hidden-sm hidden-md hidden-lg"><br></div>
    <li id="glamour"><a href="http://www.glamour.com/inspired/blogs/the-conversation/2015/12/vacation-career-tips" target="_blank"><img src={{asset('images/glamour_logo.png')}}></a></li>
    <li id="fortune"><a href="http://fortune.com/2016/01/02/entrepreneur-work-two-jobs/" target="_blank"><img src={{asset('images/fortune_logo.png')}}></a></li>
    <div class="hidden-xs"<br></div>
    <li id="of_a_kind"><a href="http://r.ofakind.com/nl/mhp1/xsnq.html?a=1xoEQduvEP&b=f65a23c9&c=mhp1&d=76c3dca4&e=715a8cdb&email=naomi.hirabayashi@gmail.com" target="_blank"><img src={{asset('images/of_a_kind_logo.png')}}></a></li>
    <li id="observer"><a href="http://observer.com/2016/01/shine-a-daily-text-to-help-you-slay-the-day/" target="_blank"><img src={{asset('images/observer_logo.png')}}></a></li>
    <li id="psyched"><a href="http://www.psychedmedia.com/blog/2016/1/4/shine-at-work-even-when-you-want-to-crawl-back-into-bed" target="_blank"><img src={{asset('images/psyched_logo1.png')}}></a></li>
    <li id="big_think"><a href="http://bigthink.com/robert-montenegro/closing-the-confidence-gap-one-text-at-a-time" target="_blank"><img src={{asset('images/big_think_logo.png')}}></a></li>
  </div>
</div>

<div style="clear: both;"></div>
<br><br><br><br><br><br><br>
<div class="testimonials">
  <a name="testimonials" class="anchor"></a>
  <!-- Used this tutorial to create carousel: https://bootstrapbay.com/blog/bootstrap-3-carousel-tutorial/ -->
  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="5000">
    <h2>WORD ON THE STREET</h2>
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
      <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    </ol>

    <!-- Wrapper for slides - dimensions are screenshots of 1440 x 610 -->
    <div class="carousel-inner">
      <div class="item active">
        <img src={{asset('images/testimonials_1.png')}}>
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
  </div>
</div>

<div class="partners">
  <a name="partners" class="anchor"></a>
  <h4>Partners We Love</h4>
  <li id="dreamers"><a href="http://www.dreamersdoers.me/" target="_blank"><img src={{asset('images/dreamers_and_doers.png')}}></a></li>
  <li id="first"><a href="https://www.shesthefirst.org/" target="_blank"><img src={{asset('images/shes_the_first.png')}}></a></li>
  <li id="create"><a href="http://www.createcultivate.com/blog/side-hustle-queens-part-ii" target="_blank"><img src={{asset('images/create_and_cultivate.png')}}></a></li>
  <li id="lorem"><a href="http://www.loremipsum.wtf/" target="_blank"><img src={{asset('images/lorem_ipsum.jpg')}}></a></li>
</div>
@endsection
<!-- End content section-->