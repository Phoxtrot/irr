@extends('layouts.frontend')
@section('title')
E-Academy
@endsection
@section('navbar')
<div class="nav-item">
    <div class="nav-btn >
        <a href="{{route('form')}}" class="register-btn" >Apply</a>
    </div>
</div>
@endsection
@section('content')
<section id="home" class="header-section section">
    <div class="left-header">
        <h1 >quality islamic education from the comfort of your home</h1>
        <p>Bringing Islamic knowledge close to interested individuals</p>
    </div>
    <div class="header-image">
        <img src="{{ asset('frontend/img/quran-greens.png') }}" alt="Al qur'an" class="quran-img">
    </div>

</section>

<section  id="about">
    <div class="about-section section">
      <div class="about-img">
        <img src="{{ asset('frontend/img/mosque.jpg') }}" alt="mosque">
      </div>
      <div class="about-details">
          <h2 > About Ibadur-Rahman E-Academy (IR E-Academy)</h2>
          <p>IR E-Academy is an Islamic educational program that aims to bring Islamic knowledge close to interested individuals. This is a major step towards helping Muslims across the globe fulfill the prophet's command to seek knowledge of the religion and understand its text
             </p>
      </div>
    </div>

</section>
<section class="enroll section">
    <h2>Why you should enrol</h2>
    <div class="enroll-container">
        <div class="enroll-card">
            <span class="icon-wrapper">
              <i class="fas fa-globe fa-2x"></i>
                <h3>100% online</h3>
            </span>
            <p>All lectures are held virtually during weekends i.e. Saturdays and Sundays</p>
        </div>
        <div class="enroll-card">
            <span class="icon-wrapper">
              <i class="fas fa-chalkboard-teacher fa-2x"></i>
                <h3>Flexible classes to suit your schedule</h3>
            </span>
            <p>Scheduled time 12 months – 3 Semesters<br>Maximum allowable time 30 months – 7 Semesters</p>
        </div>
        <div class="enroll-card">
            <span class="icon-wrapper">
              <i class="fas fa-video fa-2x"></i>
                <h3>All lectures are recorded</h3>
            </span>
            <p>All lectures are recorded and thereby accessible after each lecture</p>
        </div>
        <div class="enroll-card">
            <span class="icon-wrapper">
              <i class="fas fa-comments-dollar fa-2x"></i>
                <h3>Affordable fees</h3>
            </span>
            <p>We are an institute that seeks its reward from Allah SWT</p>
        </div>
    </div>
</section>
<section class="pricing section" id="courses">
    <h2>Available Courses</h2>
    <div class="pricing-center">
        <div class="pricing-card">
            <h3 >Quran Course</h3>
            <p>Islamic Creed <span>(العقيدة)</span></p>
            <P> Tajweed <span>(التجويد)</span> </P>
            <p>Quran Recitation and Memorization <span>(القراءة والحفظ)</span></p>
            <p>Arabic Grammar <span>(النحو)</span></p>
            <p>Arabic Morphology <span>(الصرف)</span></p>
            <h6>Application fees: #3,500 (USD 10)</h6>
            <h4 class="price">Semester Fee: <span> #32,500 ($75)</span></h4>

        </div>

        <div class="pricing-card">
            <h3>Shariah Course</h3>
            <p>Islamic Creed <span>(العقيدة)</span></p>
            <P> Islamic Jurisprudence <span>(الفقه)</span></P>
            <p>Prophetic Traditions <span>(الحديث)</span></p>
            <p>Arabic Grammar <span>(النحو)</span></p>
            <p>Arabic Morphology <span>(الصرف)</span></p>
            <h6>Application fees:#3,500 (USD 10)</h6>
            <h4 class="price">Semester Fee: <span> #32,500 ($75)</span></h4>

        </div>

        <div class="pricing-card">
            <h3>Arabic Course</h3>
            <p>Islamic Creed <span>(العقيدة)</span></p>
            <p>Arabic Grammar <span>(النحو)</span></p>
            <p>Arabic Morphology <span>(الصرف)</span></p>
            <p>Writing Techniques <span>(الإملاء)</span></p>
            <p>Quranic rendition <span>(الترجمة)</span></p>
            <h6>Application fees: #3,500 (USD 10)</h6>
            <h4 class="price">Semester Fee: <span> #32,500 ($75)</span></h4>

        </div>

        <div class="pricing-card">
            <h3 >Combined Course</h3>
            <p>Islamic Creed <span>(العقيدة)</span></p>
            <P> Tajweed <span>(التجويد)</span> </P>
            <p>Quran Recitation and Memorization <span>(القراءة والحفظ)</span></p>
            <p>Arabic Grammar <span>(النحو)</span></p>
            <p>Arabic Morphology <span>(الصرف)</span></p>
            <P> Islamic Jurisprudence <span>(الفقه)</span></P>
            <p>Prophetic Traditions <span>(الحديث)</span></p>
            <p>Writing Techniques <span>(الإملاء)</span></p>
            <p>Quranic rendition <span>(الترجمة)</span></p>
            <h6>Application fees: #3,500 (USD 10)</h6>
            <h4 class="price">Semester Fee: <span> 50,000 ($110)</span></h4>

        </div>
    </div>
    <div class="discount">
        <p>Special semester fee for students with valid proof of identification: #20000</p>
        <p>20% fee reduction on group/family of three or more applicants</p>
    </div>
</section>

<section class="eligibility section" id="register">
    <h2> Eligibility Criteria</h2>
    <div class="eligibility-info">
        <h3>All applicants are expected to fulfill the following requirements as at the time of the application.</h3>

        <p>Ability to recognize and recite the Quran and Arabic text.
            Inability to fulfill this requirement will attract an extended study duration of a year. </p>
        <p> Applicant must be a Muslim</p>
        <p>Applicant should be 15 years of age or above (Applicants under the age of 15 will be required to attend the interview with their parents or guardian)</p>
        <h5>N.B: All applicants must attend the interview</h5>
        <h4>What are you waiting for? Click the link below to apply</h4>
        <a href="{{route('form')}}" class="register-btn">Apply now</a>
    </div>
</section>
@endsection
@section('js')
<script src="{{asset('frontend/js/index.js')}}"></script>
@endsection
