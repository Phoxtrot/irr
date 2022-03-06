@extends('layouts.frontend')
@section('title')
Homepage
@endsection
@section('content')
<section id="home" class="header-section section">
    <div class="left-header">
        <h1 >Ibadur-Rahman Institute</h1>
        <p>A dynamic organization devoted to developing an Islamic way of life</p>
    </div>
    <div class="header-image">
        <img src="{{ asset('frontend/img/quran-greens.png') }}" alt="Al qur'an" class="quran-img">
    </div>

</section>

<section  id="about">
  <div class="about-section section">

    <div class="about-details">
        <h2 class='text-center' > Welcome to IR Institute</h2>
        <p>‘Ibadur-Rahman Institute (IR Institute) aspires to be a center of excellence in learning, rendering religious services and propagating the Islamic faith. Our main interest is to advance the Islamic way of life in Societies and the dissemination of the prophetic messages through teaching, rendering services, counseling, mentoring, production of Islamic media contents, publication and policy recommendations.</p>


    </div>
  </div>
@endsection
@section('js')
<script src="{{asset('frontend/js/index.js')}}"></script>
@endsection
