@extends('layout.app')
@section('content')

<style>
  
      body{
        background:#585656
      }
      .kartu {
        width: 800px;
        margin: 0 auto;
        margin-top: 70px;
    transition: all .3s;
    background-color:#585656;
    color:white;
    border:none;
      } 
      .foto {
        padding: 20px;
      }
      tbody {
    font-size: 20px;
    font-weight: 300;
}
.biodata {
    margin-top: 30px;
}
    </style>
<body>
<section id="about" class="about">
      <div class="container">

        <div style="padding-bottom:0" class="section-title" data-aos="fade-up">
          <h2 style="color:white;">BIODATA</h2>
        </div>
        <div class="container"data-aos="fade-right" style="margin-bottom:10%;">
  <div class="card kartu">
    <div class="row">
      <div class="col-md-4">
      <div class="foto">
        <img src="assets/img/fotoku.jpg" class="img-thumbnail" alt="" width="300" height="auto">
      </div>
      </div>
      <div class="col-md-8 kertas-biodata">
        <div class="biodata">
        <table width="100%" border="0">
    <tbody><tr>
        <td valign="top">
        <table border="0" width="100%" style="padding-left: 2px; padding-right: 13px;">
          <tbody>
            <tr>
              <td width="25%" valign="top" class="textt">NAMA</td>
                <td width="2%">:</td>
                <td>KHALIQ PRADANA</td>
            </tr>
          <tr>
              <td class="textt">STATUS</td>
                <td>:</td>
                <td>MAHASISWA</td>
            </tr>
          <tr>
              <td class="textt">ALAMAT</td>
                <td>:</td>
                <td>Purwodadi, Grobogan, Jawa Tengah, Indonesia</td>
            </tr>
          <tr>
              <td class="textt">AGAMA</td>
                <td>:</td>
                <td>ISLAM</td>
          </tr>
        </tbody></table>
        </td>
    </tr>
    </tbody></table>
  </div>
      </div>
    </div>
  </div>
</div>


<div style="padding-bottom:0" class="section-title" data-aos="fade-up">
          <h2 style="color:white;">RIWAYAT PENDIDIKAN</h2>
        </div>
  <div class="container"data-aos="fade-right">
    <div class="card kartu">
      <div class="row">
      <div class="col-md-2">
    </div>
    <div class="col-md-8 kertas-biodata">
      <div class="biodata">
        <table width="100%" border="0">
          <tbody><tr>
            <td valign="top">
              <table border="0" width="100%" style="padding-left: 2px; padding-right: 13px;">
                <tbody>
                  <tr>
                    <td width="10%" valign="top" class="textt">No</td>
                    <td width="50%">Nama Sekolah</td>
                    <td>Tahun Pendidikan</td>
                  </tr>
                  <tr>
                    <td class="textt">1</td>
                    <td>SDN 4 Purwodadi</td>
                    <td>Th 2007-2013</td>
                  </tr>
                  <tr>
                    <td class="textt">2</td>
                    <td>SMPN 1 Purwodadi</td>
                    <td>Th 2013-2016</td>
                  </tr>
                  <tr>
                    <td class="textt">3</td>
                    <td>SMAN 1 Toroh</td>
                    <td>Th 2017-2020</td>
                  </tr>
            </tbody></table>
          </td>
    </tr>
    </tbody></table>
  </div>
</div>
</div>
</div>
</div>
</div>

<div style="padding-bottom:0" class="section-title" data-aos="fade-up">
          <h2 style="color:white;padding-top:10%; padding-bottom:auto;">SUARA MASTERAN BURUNG</h2>
        </div>
  <div class="container"data-aos="fade-right">
    <div class="card kartu">
      <div class="row">
      <div class="col-md-2">
    </div>
    <div class="col-md-8 kertas-biodata">
      <div class="biodata">
        <table width="100%" border="0">
          <tbody><tr>
            <td valign="top">
              <table border="0" width="100%" style="padding-left: 2px; padding-right: 13px;">
                <tbody>
                  <tr>
                    <td width="10%" valign="top" class="textt">No</td>
                    <td width="50%">Musik</td>
                  </tr>
                  <tr>
                    <td class="textt">1</td>
                    <td><i class="bi bi-music-note"></i>Suara Cucak Cungkok </td>
                  </tr>
                  <tr>
                    <td class="textt">2</td>
                    <td><i class="bi bi-music-note">Suara Cililin</td>
                  </tr>
            </tbody></table>
          </td>
    </tr>
    </tbody></table>
  </div>
</div>
</div>
</div>
</div>
</div>

<div style="padding-bottom:0" class="section-title" data-aos="fade-up">
          <h2 style="padding-top:10%; color:white; padding-bottom:auto;">PENGALAMAN</h2>
        </div>
  <div class="container"data-aos="fade-right">
    <div class="card kartu">
      <div class="row">
      <div class="col-md-2">
    </div>
    <div class="col-md-8 kertas-biodata">
      <div class="biodata">
        <table width="100%" border="0">
          <tbody><tr>
            <td valign="top">
              <table border="0" width="100%" style="padding-left: 2px; padding-right: 13px;">
                <tbody>
                  <tr>
                    <td width="10%" valign="top" class="textt">No.</td>
                    <td width="50%">Skill</td>
                    <td>Tingkat</td>
                  </tr>
                  <tr>
                    <td class="textt">1</td>
                    <td>BulutangKISS </td>
                    <td>Kabupaten </td>
                  </tr>
                  <tr>
                    <td class="textt">2</td>
                    <td>Lari 100 Meter</td>
                    <td>Kabupaten</td>
                  </tr>
            </tbody></table>
          </td>
    </tr>
    </tbody></table>
  </div>
</div>
</div>
</div>
</div>
</div>

</body>

@endsection