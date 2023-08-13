@extends('yield.master')
@section('title','home')
@section('content')
<link rel="stylesheet" href="{{asset('assets/css/about.css')}}" />

<div class="container con">
    <div class="hero-pic">
      <img src="img/customer/custsomer10.jpg" alt="" />
    </div>
    <div class="hero-text">
      <h5>Hi I'm <span class="input">PHP Developer</span></h5>
      <h1>Shin Min Thant</h1>
      <p>
        Firstly,I want to introduce myself.I am Shin Min Thant and was born in
        2003.I am learning programming and German language. I like programming
        very much and I am really happy when I am coding.So, I have other
        hobbys.I like watching movies,listening music and learning
        programming.
      </p>
      <div class="btn-group">
        <a href="{{asset('assets/img/customer/CV.jpg')}}" downloaded class="btn">Download CV</a>
        <a href="" class="btn">Contact</a>
      </div>

      <div class="social">
        <a href=""><i class="fa-brands fa-facebook"></i></a>
        <a href=""><i class="fa-brands fa-linkedin"></i></a>
        <a href=""><i class="fa-brands fa-instagram"></i></a>
        <a href=""><i class="fa-brands fa-pintrest"></i></a>
      </div>
    </div>
  </div>
  <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
      crossorigin="anonymous"
    ></script>

  <script>
    var typed = new Typed(".input", {
      strings: ["PHP Developer", "Backend-Developer", "Web Designer"],
      typedSpeed: 70,
      backSpeed: 55,
      loop: true,
    });
  </script>
  @endsection
