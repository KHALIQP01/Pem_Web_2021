@extends('layout.app')
@section('content')
       <!-- ======= About Us Section ======= -->
       <style>
    #comment_form input, #comment_form textarea {
        border: 2px solid rgba(0,0,0,0.1);
        padding: 8px 10px;
        outline: 0;
    }
    #comment_form input {
        width: 250px;
        padding-top:9px;
        padding-bottom:9px
    }
    #comment_form textarea {
        width: 690px;
    }
    
    #comment_form input[type="submit"] {
        cursor: pointer;
        background: -webkit-linear-gradient(top, #efefef, #ddd);
        background: -moz-linear-gradient(top, #efefef, #ddd);
        background: -ms-linear-gradient(top, #efefef, #ddd);
        background: -o-linear-gradient(top, #efefef, #ddd);
        background: linear-gradient(top, #efefef, #ddd);
        color: #333;
        text-shadow: 0px 1px 1px rgba(255,255,255,1);
        border: 1px solid #ccc;
    }
    
    #comment_form input[type="submit"]:hover {
        background: -webkit-linear-gradient(top, #eee, #ccc);
        background: -moz-linear-gradient(top, #eee, #ccc);
        background: -ms-linear-gradient(top, #eee, #ccc);
        background: -o-linear-gradient(top, #eee, #ccc);
        background: linear-gradient(top, #eee, #ccc);
        border: 1px solid #bbb;
    }
    
    #comment_form input[type="submit"]:active {
        background: -webkit-linear-gradient(top, #ddd, #aaa);
        background: -moz-linear-gradient(top, #ddd, #aaa);
        background: -ms-linear-gradient(top, #ddd, #aaa);
        background: -o-linear-gradient(top, #ddd, #aaa);
        background: linear-gradient(top, #ddd, #aaa);    
        border: 1px solid #999;
    }
    
    #comment_form div {
        margin-bottom: 7px;
    }
</style>

       <section id="about" class="about">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>DESKRIPSI</h2>
                </div>

                <div class="row">
                    <div class="col-lg-6" data-aos="fade-right">
                        <div style="box-shadow:none;" class="image">
                            <img src="assets/img/cendet.svg" style="" class="img-fluid" alt="">
                            <a data-aos="fade-up" style="text-align:center;width:15%;color:black;background:#C4C4C4;opacity:0.8;filter:alpha(opacity=30);font-size:20px;display:block;left:37%;top:80%; position:absolute;" href="{{ route('information')}}">BACK</a>
                        </div>
                    </div>
                    <div class="col-lg-6" data-aos="fade-left">
                        <div class="content pt-4 pt-lg-0 pl-0 pl-lg-3 ">
                            <h3>Bentet kelabu</h3>
                            <p>
                            kadang di sebut cendet, pentet atau toet bahasa inggris The Long-tailed Shrike atau Rufous-backed Shrike (bahasa Latin: Lanius schach) adalah spesies burung dari keluarga Laniidae, dari genus Lanius. Burung ini merupakan jenis burung pemakan belalang, kumbang, tonggeret, serangga besa dan memiliki habitat di daerah terbuka, padang rumput, perkebunan, tegalan. 
                            tersebar sampai ketinggian 1.600 m dpl.
                            </p>
                            <p>
                            bentet kelabu patut dijuluki sebagai jagal pengintai karena perilakunya. “Burung yang tersebar dari Iran hingga Papua ini gemar menyantap hewan lain. Sebut saja serangga seperti belalang, jangkrik, dan kumbang, hingga kadal, kodok dan burung lain. Jenis burung yang kerap menjadi mangsa burung ini antara lain bondol, perenjak.
Bentet kelabu atau masyarakat sekitar sering menyebutnya Cendet adalah jenis burung kicau dengan suara merdu. Mampu menirukan suara burung lain bahkan suara binatang lain atau suara – suara di dekatnya yang sering diperdengarkan.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
            <div class="section-title" data-aos="fade-up">
                    <h2 style="margin-right:43%;padding-top:10%;padding-bootom:auto;">VIDEO</h2>
                </div>

                <div class="row">
                    <div class="col-lg-6" data-aos="fade-right">
                        <div style="box-shadow:none; margin-left:25% " class="image">
                            <iframe width="440px" height="400px" src="https://www.youtube.com/embed/S4Fi2IhBlbA" title="YouTube video player" frameborder="0" allowfullscreen></iframe>
                            <a data-aos="fade-up" style="text-align:center;width:15%;color:black;font-size:50px;display:block;left:50%;top:45%; position:absolute;" href=""></a>
                        </div>
                    </div>
                    <div class="col-lg-6" data-aos="fade-left">
                        <div class="content pt-4 pt-lg-0 pl-0 pl-lg-3 ">
                            <h3 style="padding-top:15px">Saran</h3>
                            <div id="comment_form">        
                            <form action="{{ route('simpan-cendet')}}" method="post">
                                    {{ csrf_field()}}
                                <div>
                                    <input type="text" name="nama" id="name" value="" placeholder="Nama">
                                </div>
                                <div>
                                    <input type="email" name="email" id="email" value="" placeholder="Email">
                                </div>
                                <div>
                                    <textarea rows="9" name="comment" id="comment" placeholder="Masukkan Saran Anda"></textarea>
                                </div>
                                <div>
                                    <input type="submit" name="submit" value="Kirim Saran">
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
        <!-- End About Us Section --> 

@endsection