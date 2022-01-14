@extends('layout.app')
@section('content')
<body style="background:#585656">
          <div  class="content">          
        <div class="row mt-10 mb-10">
          <div class="col-4 mr-20">
            <img src="assets/img/murai.svg" alt="">
            <a data-aos="fade-up" style="text-align:center;width:10%;color:black;background:#C4C4C4;opacity:0.8;filter:alpha(opacity=30);font-size:20px;display:block;left:9%;top:52%; position:absolute;" href="{{ route('muraibatu')}}">MORE</a>
          </div>
          <div class="col-4 mr-20">
          <img src="assets/img/kacer.svg" alt="">
          <a data-aos="fade-up" style="text-align:center;width:10%;color:black;background:#C4C4C4;opacity:0.8;filter:alpha(opacity=30);font-size:20px;display:block;left:45%;top:52%; position:absolute;" href="{{ route('kacer')}}">MORE</a>
          </div>
          <div class="col-4 mr-20">
          <img src="assets/img/cucakijo.svg" alt="">
          <a data-aos="fade-up" style="text-align:center;width:10%;color:black;background:#C4C4C4;opacity:0.8;filter:alpha(opacity=30);font-size:20px;display:block;right:13%;top:52%; position:absolute;" href="{{ route('cucakhijau')}}">MORE</a>
          </div>
        </div>
        <div class="row mt-4">
          <div class="col-4 mr-20">
            <img src="assets/img/cucakrowo.svg" alt="">
            <a data-aos="fade-up" style="text-align:center;width:10%;color:black;background:#C4C4C4;opacity:0.8;filter:alpha(opacity=30);font-size:20px;display:block;left:9%;bottom:-15%; position:absolute;" href="{{ route('cucakrowo')}}">MORE</a>
          </div>
          <div class="col-4 mr-20">
            <img src="assets/img/cendet.svg" alt="">
            <a data-aos="fade-up"  style="text-align:center;width:10%;color:black;background:#C4C4C4;opacity:0.8;filter:alpha(opacity=30);font-size:20px;display:block;left:45%;bottom:-15%; position:absolute;" href="{{ route('cendet')}}">MORE</a>
          </div>
          <div class="col-4 mr-20">
            <img src="assets/img/kolibri.svg" alt="">
            <a data-aos="fade-up" style="text-align:center;width:10%;color:black;background:#C4C4C4;opacity:0.8;filter:alpha(opacity=30);font-size:20px;display:block;right:13%;bottom:-15%; position:absolute;" href="{{ route('kolibri')}}">MORE</a>
          </div>
          </div>
</body>

@endsection