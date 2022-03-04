@extends('layouts.frontend')
@section('title')
Student
@endsection
@section('css')
<!-- bootstrap -->
{{-- <link href="{{asset('frontend/css/plugins/bootstrap/bootstrap.min.css')}}" rel="stylesheet" /> --}}
<!-- Slick Carousel -->
<link href="{{asset('frontend/css/plugins/slick/slick.css')}}" rel="stylesheet" />
<link href="{{asset('frontend/css/plugins/slick/slick-theme.css')}}" rel="stylesheet" />
<!-- FancyBox -->
<link href="{{asset('frontend/css/plugins/fancybox/jquery.fancybox.min.css')}}" rel="stylesheet" />
<!-- fontawesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<!-- animate.css -->
<link href="{{asset('frontend/css/plugins/animation/animate.min.css')}}" rel="stylesheet" />
<!-- jquery-ui -->
<link href="{{asset('frontend/css/plugins/jquery-ui/jquery-ui.css')}}" rel="stylesheet" />
<!-- timePicker -->
<link href="{{asset('frontend/css/plugins/timePicker/timePicker.css')}}" rel="stylesheet" />
<!-- Stylesheets -->
{{-- <link href="{{asset('frontend/css/style.css')}}" rel="stylesheet" /> --}}
<!--Favicon-->
<link href="{{asset('frontend/img/favicon.png')}}" rel="icon" type="image/x-icon" />
@endsection
@section('content')
<div class="page-wrapper sect">
    <!--Page Title-->
<section class="page-title text-center" style="background-image:url(../../../public/asset/ images/background/3.jpg);">
    <div class="container">
        <div class="title-text">
            <h1>Registrant's Page</h1>
        </div>
    </div>
</section>
<!--End Page Title-->

<!-- Registrant Page -->
<section class="story">
  <div class="container">
    <div class="row">
      <div class="col-lg-8">
        <div class="story-content">
          <h2>Be one of the 1000  muslims to join</h2>
            <p><b> Start your Noble Journey with the Glorious Quran this Ramadan</b></p>
            <p>The month of Ramadan is that in which the Quran was revealed as guidance for the people. Here is an opportunity for you and  your family to start your journey with the glorious Quran from the comfort of your home  </p>
            <p>This program is a virtual one-on-one series of sessions with experienced tutors to teach and practice the art of reciting the Quran correctly. <b>The Messenger of Allah said, "The one who is proficient in the recitation of the Quran will be with the honourable and obedient scribes (angels) and he who recites the Quran and finds it difficult to recite, doing his best to recite it in the best way possible, will have a double reward." Al-Bukhari and Muslim </b></p>
            <h6>Why you should enroll</h6>
            <ul>
              <li><i class="fa-solid fa-check-double"></i> One-on-One session with your tutor </li>
              <li><i class="fa-solid fa-check-double"></i>100% online</li>
              <li><i class="fa-solid fa-check-double"></i>A good period to learn about Al-QUran to benefit you during the month of Ramadan and beyond</li>
              <li><i class="fa-solid fa-check-double"></i>Pre-recorded lectures on At-Tajweed and accessible at all times</li>
              <li><i class="fa-solid fa-check-double"></i>Lectures are in English to cover wide range of audience</li>
              <li><i class="fa-solid fa-check-double"></i>Gender Segregation: There are seperate teachers for male and females</li>
              <li><i class="fa-solid fa-check-double"></i>Utterly free with a token of commitment: We hope for Allah's reward by enlivening the month of ramdan through Al-Quran </li>
            </ul>
            <h6>What you stand to achieve</h6>
            <ul>
              <li><i class="fa-solid fa-check-double"></i>Understanding of the recitation rules</li>
              <li><i class="fa-solid fa-check-double"></i>2.5 months of one-on-one practice with your tutor</li>
              <li><i class="fa-solid fa-check-double"></i>Quran memorization</li>
              <li><i class="fa-solid fa-check-double"></i>Improved recitation during the month Ramadan and more rewards insha Allah</li>
            </ul>
            <h6>Timeline</h6>
            <ul>
              <li><i class="fa-solid fa-check-double"></i><b>Duration:</b> 2.5 months</li>
              <li><i class="fa-solid fa-check-double"></i><b>Class Starts:</b> March 6, 2022</li>
              <li><i class="fa-solid fa-check-double"></i><b>Registration deadline:</b>April 17, 2022</li>
              <li><i class="fa-solid fa-check-double"></i><b>Closure: </b> May 22, 2022</li>
            </ul>
            <h6>Eligibility Criteria</h6>
            <p>All registrants are required to fulfill the following requirements as at the time of their registration</p>
            <ul>
              <li><i class="fa-solid fa-check-double"></i>Muslim by faith</li>
              <li><i class="fa-solid fa-check-double"></i>Ability to recognize Arabic letters and recite the Quran.</li>
              <li><i class="fa-solid fa-check-double"></i>Comfortable in communicating in English language</li>
              <li><i class="fa-solid fa-check-double"></i>10 years old and above</li>
              <li><i class="fa-solid fa-check-double"></i>Good internet connection</li>
            </ul>
            <h6>Fees</h6>
            <ul>
              <li><i class="fa-solid fa-check-double"></i><b>Tuition Fee: Free </b></li>
              <li><i class="fa-solid fa-check-double"></i>Commitment token: #4,000</li>
            </ul>
            <h6>Procedure</h6>
            <ol>
              <li><i class="fa-solid fa-check-double"></i>Fill out the electronic registration form and agree to the policies, terms and conditions</li>
              <li><i class="fa-solid fa-check-double"></i>Pay the commitment fee</li>
              <li><i class="fa-solid fa-check-double"></i>Check your mail box for our confirmatory mail after a while</li>
              <li><i class="fa-solid fa-check-double"></i>Begin your classes as your tutor will contact you to arrange your one-on-one sessions</li>
              <li><i class="fa-solid fa-check-double"></i>Watch and learn from the pre-recorded Tajweed videos here <a style="text-decoration: underline" href='https://www.youtube.com/channel/UCAYITCyoYlXxyN8BGhpem6A'>Here</a></li>
            </ol>
            <h6>Policies</h6>
            <ul>
              <li><i class="fa-solid fa-check-double"></i>All participants are required to attend three (3) classes per week in alternating days</li>
              <li><i class="fa-solid fa-check-double"></i>Three (3) consecutive absences without prior notice will attract automatic disqualification</li>
              <li><i class="fa-solid fa-check-double"></i>All participants will be requested to set a milestone after the third class with the tutor.</li>
              <li><i class="fa-solid fa-check-double"></i>The commitment fee is nonrefundable and nontransferable.</li>
            </ul>
            <div class="text-center"><a href="{{route('registar')}}"><button name="submit" type="submit">Register Now</button></a> </div>
        </div>
      </div>
    </div>
  </div>
</section>
</div>
@endsection
@section('js')
<!-- jquery -->
<script src="{{asset('frontend/js/plugins/jquery.min.js')}}"></script>
<!-- bootstrap -->
<script src="{{asset('frontend/js/plugins/bootstrap/bootstrap.min.js')}}"></script>
<!-- Slick Slider -->
<script src="{{asset('frontend/js/plugins/slick/slick.min.js')}}"></script>
<script src="{{asset('frontend/js/plugins/slick/slick-animation.min.js')}}"></script>
<!-- FancyBox -->
<script src="{{asset('frontend/js/plugins/fancybox/jquery.fancybox.min.js')}}"></script>
<!-- Google Map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU" defer></script>
<script src="{{asset('frontend/js/plugins/google-map/gmap.js')}}"></script>


<!-- jquery-ui -->
<script src="{{asset('frontend/js/plugins/jquery-ui/jquery-ui.js')}}"></script>

<!-- script js -->
<script src="{{asset('frontend/js/script.js')}}"></script>
<script src="{{asset('frontend/js/index.js')}}"></script>
@endsection
