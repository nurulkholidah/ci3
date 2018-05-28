<?php $this->load->view('templates/header');?>
  
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
  <?php $this->load->view('templates/footer');?>