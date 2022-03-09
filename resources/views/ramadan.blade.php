@extends('layouts.frontend')
@section('title')
Start Your Journey with the Glorious Quran this Ramadan
@endsection
@section('content')
<section id="home" class="header-section section">
    <div class="left-header">
        <h1 >The Noble Journey with the glorious Qur'an</h1>
        <p>Bringing Islamic knowledge closer to you</p>
    </div>
    <div class="header-image">
        <img src="{{ asset('frontend/img/quran-greens.png') }}" alt="Al qur'an" class="quran-img">
    </div>

</section>

<section  id="about">
  <div class="about-section section">
    <div class="about-details">
        <h2 class='text-center' > Start Your Noble Journey with the Glorious Quran this Ramadan</h2>
        <p>The blessed month of Ramadan is upon us, in which the Qur'an was revealed as guidance
             to mankind. Here is an opportunity for you and your family to <b> Start Your Journey With the
              Glorious Quran </b> to accrue great reward in this blessed month, break off from the shackles
               of “I want to learn how to recite” and be a proud Muslim who can - at the minimum
                - recite the Book of his or her Lord. All these from the comfort of your home.</p>
        <div class=" container d-flex justify-content-between">
            <div class="float-right">
                <a href="{{route('student')}}"><button class="btn btn-primary  btn-lg ">I want to learn the Qur'an</button> </a>
            </div>
            <div class="float-left">
                <a href="{{route('tutor')}}"><button class="btn btn-danger btn-lg ">I can teach the Qur'an</button></a>
            </div>

        </div>
    </div>
  </div>

@endsection
@section('js')
<script src="{{asset('frontend/js/index.js')}}"></script>
@endsection
