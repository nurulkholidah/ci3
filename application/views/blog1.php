<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../docs-assets/ico/favicon.png">

    <title>Nurul kholidah</title>

    <!-- Bootstrap core CSS -->
    
    <link rel="stylesheet" href="<?php echo site_url('a/assets/css/bootstrap.css'); ?>">


    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="<?php echo site_url('a/assets/css/main.css'); ?>">

    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <!-- Static navbar -->
    <div class="navbar navbar-inverse navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html"> </a>
          <p><img src="<?php echo site_url('a/assets/img/portfolio/c.png');?>" width="50px" height="50px"> <ba> </ba></p>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li>
            <a href="<?php echo site_url('home/'); ?>">Home</a>
            </li>
      <li>
      <a href="<?php echo site_url('about/'); ?>">About</a>
      </li>
      <li>
      <a href="<?php echo site_url('blog/'); ?>">Blog</a>
      </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

  
  <!-- +++++ Post +++++ -->
  <div id="white">
      <div class="container">
      <div class="row">
        




    <?php foreach ($detail as $key): ?>
      <div class="container">
        <table>
          <tr class="text-center">
            <td>
              <h1><b><?php echo $key->judul; ?></b><h1>
              </td>
          </tr>
          <tr>
            <td class="text-center">
              <center><img src="../../img/<?php echo $key->image;?>" alt="Image" width="500" height="400"></center>
            </td>
          </tr>
          <tr>
            <td class="text-justify">
              <h3><?php echo $key->content; ?></h3>
            </td>
          </tr>
        </table>
      </div>
      <?php endforeach ?>





          <!--<p><img src="<?php echo site_url('a/assets/img/user.jpg');?>" width="50px" height="50px"> <ba>Nurul kholidah</ba></p>
          <p><bd>April 8, 2018</bd></p>
          <h4>Artikel saya</h4>
          <p><img class="img-responsive" src="<?php echo site_url('a/assets/img/portfolio/c.png');?>" alt=""></p>
          <p>Politeknik Negeri Malang awalnya bernama Politeknik Universitas Brawijaya, berdiri pada tahun 1982 berdasarkan Surat Keputusan Presiden No. 59/Tahun 1982. Politeknik Universitas Brawijaya berkedudukan di Kota Malang, Provinsi Jawa Timur dan merupakan salah satu dari 6 Politeknik perintis berdasarkan Surat Keputusan Direktur Jenderal Pendidikan Tinggi No.115/DIKTI/KEP/1984. Perubahan nama Politeknik Universitas Brawijaya menjadi Politeknik Negeri Malang (POLINEMA) didasarkan pada Surat Keputusan Menteri Pendidikan Nasional Nomor 147/O/2004 tanggal 22 November 2004</p>
          <p>Pada awal berdiri Politeknik Universitas Brawijaya memiliki empat jurusan, yaitu Jurusan Teknik Elektronika, Jurusan Teknik Listrik, Jurusan Teknik Mesin, dan Jurusan Teknik Sipil. Seiring dengan perkembangan industri dan pembangunan nasional di Indonesia, pada tahun 1986 dibuka Jurusan Teknik Telekomunikasi, Jurusan Akuntansi, dan Jurusan Kesekretariatan. Setahun berikutnya, yakni tahun 1987 dibuka Jurusan Teknik Kimia. Politeknik Universitas Brawijaya merupakan lembaga pendidikan profesional, pada awalnya dibantu oleh  tenaga ahli dari Swiss yang tergabung dalam Swiss Contact dan bertindak sebagai Technical Assistant bersama dengan beberapa tenaga ahli dari Indonesia yang telah mendapat pendidikan khusus di Pusat Pengembangan Pendidikan Politeknik Bandung. Khusus untuk Jurusan Akuntansi dan Jurusan Administrasi Niaga mendapatkan bantuan dari The Australian Project</p>
          <br> -->
          <hr>
          <p><a href="<?php echo site_url('blog/'); ?>"># Back</a></p>
        

      </div><!-- /row -->
      </div> <!-- /container -->
  </div><!-- /white -->
  
  
  
  
  <!-- +++++ Footer Section +++++ -->
  
  <div id="footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <h4>Nurul Kholidah</h4>
          <p>
            20 Mei 1997,<br/>
            0341 456781 <br/>
            Blimbing malang.
          </p>
        </div><!-- /col-lg-4 -->
        
        <div class="col-lg-4">
          <h4>Temukan saya di</h4>
          <p
            <a href="#">Twitter</a><br/>
            <a href="#">Facebook</a>
          </p>
        </div><!-- /col-lg-4 -->
      
      </div>
    
    </div>
  </div>
  

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>
