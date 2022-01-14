@extends('layout.app')
@section('content')

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

       <!-- ======= About Us Section ======= -->
       <section id="about" class="about">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>DESKRIPSI</h2>
                </div>

                <div class="row">
                    <div class="col-lg-6" data-aos="fade-right">
                        <div style="box-shadow:none;" class="image">
                            <img src="assets/img/kacer.svg" style="" class="img-fluid" alt="">
                            <a data-aos="fade-up" style="text-align:center;width:15%;color:black;background:#C4C4C4;opacity:0.8;filter:alpha(opacity=30);font-size:20px;display:block;left:37%;top:80%; position:absolute;" href="{{ route('information')}}">BACK</a>
                        </div>
                    </div>
                    <div class="col-lg-6" data-aos="fade-left">
                        <div class="content pt-4 pt-lg-0 pl-0 pl-lg-3 ">
                            <h3>Kucica kampung (bahasa Latin: Copsychus saularis)</h3>
                            <p>
                            adalah burung pengicau kecil yang sebelumnya dikelompokkan sebagai anggota keluarga Turdidae (murai), tetapi kini dianggap sebaagi anggota Muscicapidae. Burung ini berwarna hitam dan putih dengan ekor yang panjang. Ekornya terangkat ke atas jika mereka sedang mencari makanan di tanah atau kadang ketika sedang bertengger. 
                            Burung ini banyak ditemukan di daerah Asia Selatan dan Asia tenggara.
                            </p>
                            <p>
                            Nama Lain dari Kucica Kampung adalah kacer, Burung ini suka menjelajah di berbagai lingkungan yang kecepatan terbangnya bisa mengungguli kerabatnya murai batu. bahkan dari burung berbulu hitam,berekor panjang seperti lidi. Burung kacer banyak mendiami dataran rendah sampai ketinggian 1000 meter di atas permukaan laut. 
                            Bahkan tidak jarang ada yang terlihat di perumahan penduduk.
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
                            <iframe width="440px" height="400px" src="https://www.youtube.com/embed/upskpVNNlD4" title="YouTube video player" frameborder="0" allowfullscreen></iframe>
                            <a data-aos="fade-up" style="text-align:center;width:15%;color:black;font-size:50px;display:block;left:50%;top:45%; position:absolute;" href=""></a>
                        </div>
                    </div>
                    <div class="col-lg-6" data-aos="fade-left">
                        <div class="content pt-4 pt-lg-0 pl-0 pl-lg-3 ">
                            <h3 style="padding-top:15px">Saran</h3>
                            <div id="comment_form">        
                                <form action="{{ route('simpan-kacer')}}" method="post">
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