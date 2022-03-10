@extends('layouts.frontend')
@section('title')
Registration
@endsection
@section('css')
<!-- bootstrap -->
{{-- <link href="{{asset('frontend/css/plugins/bootstrap/bootstrap.min.css')}}" rel="stylesheet" /> --}}
<!-- Slick Carousel -->
<link href="{{asset('frontend/css/plugins/slick/slick.css')}}" rel="stylesheet" />
<link href="{{asset('frontend/css/plugins/slick/slick-theme.css')}}" rel="stylesheet" />
<!-- FancyBox -->
<link href="{{asset('frontend/css/plugins/fancybox/jquery.fancybox.min.css')}}" rel="stylesheet" />
{{-- <!-- fontawesome -->
<link rel="stylesheet" href="plugins/fontawesome/css/all.min.css"> --}}
<!-- animate.css -->
<link href="{{asset('frontend/css/plugins/animation/animate.min.css')}}" rel="stylesheet" />
<!-- jquery-ui -->
<link href="{{asset('frontend/css/plugins/jquery-ui/jquery-ui.css')}}" rel="stylesheet" />
<!-- timePicker -->
<link href="{{asset('frontend/css/plugins/timePicker/timePicker.css')}}" rel="stylesheet" />
<!-- Stylesheets -->
<link href="{{asset('frontend/css/style.css')}}" rel="stylesheet" />
@endsection
@section('content')
<div class="page-wrapper sect">
    <div class="container col-lg-6 d-flex align-items-center">
        <div class="contact-area pl-0 pl-lg-5">
  <div class="section-title text-center">
    <h3>Registration
      <span>Page</span>
    </h3>
  </div>

  <form name="contact_form" class="default-form contact-form" action="{{ route('pay') }}" method="post">
    @csrf
    <h6>SECTION 1: REGISTRANT'S DETAILS </h6>
    <div class="row">
      <div class="col-md-6">
        <div class="form-group">
            <label for="first_name">First Name</label>
            <input class="form-control" type="text" name="firstname" placeholder="First Name" value="{{old('firstname')}}" >
            @error('firstname')
                    	<div class="error" style="color: #ed3c0d;text-align: left;">
                   		This field is required
                    	</div>
          @enderror
          </div>
        <div class="form-group">
          <label for="last_name">Gender</label>
          <select class="form-select" name="gender" value="{{old('gender')}}">
            <option value="male">Male</option>
            <option value="female">Female</option>
          </select>
          @error('gender')
                    	<div class="error" style="color: #ed3c0d;text-align: left;">
                            This field is required
                    	</div>
          @enderror
        </div>
        <div class="form-group">
          <label for="last_name">Phone Number (preferably WhatsApp)</label>
          <input class="form-control" type="text" name="number" placeholder="Phone Number" value="{{old('number')}}" >
          @error('number')
                    	<div class="error" style="color: #ed3c0d;text-align: left;">
                            This field is required
                    	</div>
          @enderror
        </div>
        <div class="form-group">
          <label for="last_name">Date of Birth</label>
          <input class="form-control" type="date" name="dob" placeholder="Date" value="{{old('dob')}}"   autocomplete="off">
          @error('dob')
          <div class="error" style="color: #ed3c0d;text-align: left;">
              This field is required
          </div>
          @enderror
        </div>
        <div class="form-group">
          <label for="last_name">Level of Quran recitation</label>
          <select class="form-control" name="quran_level" value="{{old('quran_level')}}">
            <option value="beginner" >I’m a beginner</option>
            <option value="Improve Tajweed" >I want to improve on my Tajweed</option>
            <option value="continue memoriazation">I want to continue my memorization</option>
            <option value="others">Others</option>
          </select>
          @error('quran_level')
            <div class="error" style="color: #ed3c0d;text-align: left;">
                This field is required
            </div>
          @enderror
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
            <label for="lastname" >Last Name</label>
           <input class="form-control" type="text" name="lastname" placeholder="Last Name" value="{{old('lastname')}}" >
           @error('lastname')
           <div class="error" style="color: #ed3c0d;text-align: left;">
               This field is required
           </div>
         @enderror
         </div>
        <div class="form-group">
          <label for="last_name">Native Language</label>
          <select class="form-control" name="language" value="{{old('language')}}">
            <option value="yoruba">Yoruba</option>
            <option value="igbo">Igbo</option>
            <option value="hausa">Hausa</option>
            <option value="others">Others</option>
          </select>
          @error('language')
          <div class="error" style="color: #ed3c0d;text-align: left;">
              This field is required
          </div>
        @enderror
        </div>
        <div class="form-group">
          <label for="last_name">Email</label>
          <input class="form-control" type="email" name="email" placeholder="Email"  value="{{old('email')}}" >
          @error('email')
                    	<div class="error" style="color: #ed3c0d;text-align: left;">
                   		{{$message}}
                    	</div>
          @enderror
        </div>
        <div class="form-group">
          <label for="last_name">Country</label>
          <select class="form-control" id="countries" name="country"  value="{{old('country')}}">
            <option value="others">Select Country</option>
          </select>
          @error('country')
          <div class="error" style="color: #ed3c0d;text-align: left;">
              This field is required
          </div>
        @enderror
        </div>
        <div class="form-group">
          <label for="last_name">Prefferd days of Classes</label>
          <select class="form-control" name="class_days"  value="{{old('class_days')}}">
            <option value="Mondays, Wednesdays, Fridays">Mondays, Wednesdays, Fridays</option>
            <option value="Tuesdays, Thursdays, Saturdays">Tuesdays, Thursdays, Saturdays</option>
          </select>
          @error('class_days')
          <div class="error" style="color: #ed3c0d;text-align: left;">
              This field is required
          </div>
        @enderror
        </div>
      </div>
      <h6 style="padding-top: 20px;padding-bottom: 15px;">SECTION 2: Details of Next of Kin (NOK) </h6>
    <div class="row">
      <div class="col-md-6">
        <div class="form-group">
           <label for="name" >Name of Next of Kin</label>
          <input class="form-control" type="text" name="nok_name" placeholder="Full Name"  value="{{old('nok_name')}}" >
          @error('nok_name')
          <div class="error" style="color: #ed3c0d;text-align: left;">
              This field is required
          </div>
        @enderror
        </div>
        <div class="form-group">
            <label for="last_name">Email</label>
            <input class="form-control" type="email" name="nok_email" placeholder="Email"  value="{{old('nok_email')}}" >
            @error('nok_email')
            <div class="error" style="color: #ed3c0d;text-align: left;">
                This field is required
            </div>
          @enderror
        </div>
    </div>
      <div class="col-md-6">
        <div class="form-group">
          <label for="number">Phone Number</label>
          <input class="form-control" type="text" name="nok_number" placeholder="Phone Number"  value="{{old('nok_number')}}" >
          @error('nok_number')
          <div class="error" style="color: #ed3c0d;text-align: left;">
              This field is required
          </div>
        @enderror
        </div>
        <div class="form-group">
            <label for="relationship">Your relationship with your NOK</label>
           <input class="form-control" type="text" name="nok_relationship" placeholder="Relationship with Next of Kin"  value="{{old('nok_relationship')}}" >
           @error('nok_relationship')
           <div class="error" style="color: #ed3c0d;text-align: left;">
               This field is required
           </div>
         @enderror
         </div>

        </div>
        <div class="col-md-12">
        <p><b>Disclaimer</b></p>
        <p>“Start Your Journey with the Glorious Quran this Ramadan” is intended to propagate the art of Quran recitation and see to its real-time practice. While every effort has been made to scrutinize the tutors and endorse their good personality, consequences that may emanate from private/personal discussions; visitation and any other activities between the students and the tutors outside the purpose of this program are at the risk of the parties involved.</p>

       </div>
       <div >
          <input type="checkbox"name="disclaimer" required>
          <label>I have read and agreed to the policies, terms and conditions of the program.</label>
       </div>


        <div class="form-group text-center">
          <button type="submit" class="btn-style-one">Proceed to commitment fee payment</button>
        </div>
      </div>
    </div>
  </form>
</div>
      </div>
    </div>
  </div>
</section>
<!-- End Contact Section -->
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
<script src="{{asset('frontend/js/app.js')}}"></script>
<script src="{{asset('frontend/js/script.js')}}"></script>
<script src="{{asset('frontend/js/index.js')}}"></script>
@endsection
