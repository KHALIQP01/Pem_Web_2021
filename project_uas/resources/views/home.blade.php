@extends('layout.app1')
@section('content')
<style>
  #hero{
    background:#585656
  }
</style>
<body>

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <h1 data-aos="zoom-in" style="height:380px; border">SELAMAT DATANG KICAU MANIA</h1>
      <a style="" href="{{ route('cobaah') }}" class="hero-logo" data-aos="zoom-in"><img src="assets/img/fotoku.jpg" style="width:340px; height: 340px; border-radius:160%; margin-bottom:90%" ></a>
    </div>
    
  <div data-aos="zoom-in" style="  padding-bottom: 80px; padding-left: 5%; padding-right: 5%;text-align: center;">
    <div class="container" style=" padding: 0 15px; margin-top:34%;">    
      <div class="lesson" style="float: left; width: 25%;">
        <div class="lesson-icon" style="position: relative;">
          <a  style="width:30%;color:black;background:#C4C4C4;opacity:0.8;filter:alpha(opacity=30);font-size:20px;" href="{{ route('home')}}"><img style="width:210px; height: 210px; border-radius:200%;padding-bottom:5%" src="assets/img/fotoku.jpg"></a>
        </div>     
      </div>
      <div class="lesson" style="float: left; width: 25%;">
        <div class="lesson-icon" style="position: relative;">
        <a  style="width:30%;color:black;background:#C4C4C4;opacity:0.8;filter:alpha(opacity=30);font-size:20px;" href="{{ route('aboutme') }}"><img style="width:210px; height: 210px; border-radius:200%;padding-bottom:5%" src="assets/img/aboutme.png"></a>
          
        </div>
        
      </div>
      <div class="lesson" style="float: left; width: 25%;">
        <div class="lesson-icon" style="position: relative;">
        <a  style="width:30%;color:black;background:#C4C4C4;opacity:0.8;filter:alpha(opacity=30);font-size:20px;" href="{{ route('information') }}"><img style="width:210px; height: 210px; border-radius:200%; padding-bottom:5%" src="assets/img/information.png"></a>
          
        </div>
        
      </div>
      <div class="lesson" style="float: left; width: 25%;">
        <div class="lesson-icon" style="position: relative;">
        <a  style="width:30%;color:black;background:#C4C4C4;opacity:0.8;filter:alpha(opacity=30);font-size:20px;" href="{{ route('last') }}"><img style="width:210px; height: 210px; border-radius:200%;padding-bottom:5%" src="assets/img/burung.png"></a>
        </div>
      </div>
    </div>  
  </div>
    
</body>

@endsection