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
                            <img src="assets/img/kolibri.svg" style="" class="img-fluid" alt="">
                            <a data-aos="fade-up" style="text-align:center;width:15%;color:black;background:#C4C4C4;opacity:0.8;filter:alpha(opacity=30);font-size:20px;display:block;left:37%;top:80%; position:absolute;" href="{{ route('information')}}">BACK</a>
                        </div>
                    </div>
                    <div class="col-lg-6" data-aos="fade-left">
                        <div class="content pt-4 pt-lg-0 pl-0 pl-lg-3 ">
                            <h3>Kolibri </h3>
                            <p>
                            adalah burung kecil dengan panjang 6,4 cm dan berwarna cerah yang sebagian besar hidup di Amerika Utara dan Amerika Selatan. Seekor kolibri mempunyai sekitar seribu bulu yang bergemerlapan sehingga dapat memantulkan dan memancarkan sinar warna-warni 
                            yang dapat berubah ketika burung bergerak seperti minyak pada air.

                            </p>
                            <p>
                            Ada lebih dari 300 spesies burung kolibri hidup di dalam wilayah hutan Amazon, Amerika Selatan. Sedangkan kolibri jenis Sword Billed, 
                            ensifera ensifera hidup di bagian barat hutan pegunungan Andes.
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
                            <iframe width="440px" height="400px" src="https://www.youtube.com/embed/NFfIEXOHf2E" title="YouTube video player" frameborder="0" allowfullscreen></iframe>
                            <a data-aos="fade-up" style="text-align:center;width:15%;color:black;font-size:50px;display:block;left:50%;top:45%; position:absolute;" href=""></a>
                        </div>
                    </div>
                    <div class="col-lg-6" data-aos="fade-left">
                        <div class="content pt-4 pt-lg-0 pl-0 pl-lg-3 ">
                            <h3 style="padding-top:15px">Saran</h3>
                            <div id="comment_form">        
                                <form action="{{ route('simpan-kolibri')}}" method="post">
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