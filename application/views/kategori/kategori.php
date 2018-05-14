<?php $this->load->view('templates/header');?>
  <!-- +++++ Second Post +++++ -->
  <div id="white">  
    <?php if( !empty($categories) ) : ?>
      <div class="container">
      <a href="<?php echo site_url('kategori/create/'); ?>" class="btn btn-success">Tambah Kategori</a>
      <div class="row">
         <?php
            foreach ($categories as $key) :
          ?>
        <div class="col-lg-8 col-lg-offset-2">
        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
          <table style="margin-bottom: 30px;">
            <tr>
              <td>
                 
                  <br>
                  <center><h1><?php echo $key->cat_name ?></h1></center>
                  <a href="<?php echo base_url('kategori/artikel/'.$key->cat_id) ?>" class="btn btn-success">Lihat Artikel</a>  
                  <br>
                  <br>
                </a>
                <a href="<?php echo base_url(). 'kategori/edit/' . $key->cat_id ?>" class="btn btn-sm btn-danger">edit</a>
                <a href='blog/delete/<?php echo $key->id ?>' class='btn btn-sm btn-danger'>Hapus</a>
              </td>
            </tr>
          </table>
        </div>
        </div>
      <?php endforeach ?>





        <!--  <p><img src="<?php echo site_url('a/assets/img/user.jpg');?>" width="50px" height="50px"> <ba>Nurul kholidah</ba></p>
          <p><bd>April 8, 2018</bd></p>
          <h4>Artikel saya</h4>
          <p><img class="img-responsive" src="<?php echo site_url('a/assets/img/portfolio/c.png');?>" alt=""></p>
          <p>Politeknik Negeri Malang awalnya bernama Politeknik Universitas Brawijaya, berdiri pada tahun 1982 berdasarkan Surat Keputusan Presiden No. 59/Tahun 1982. Politeknik Universitas Brawijaya berkedudukan di Kota Malang, Provinsi Jawa Timur dan merupakan salah satu dari 6 Politeknik perintis berdasarkan Surat Keputusan Direktur Jenderal Pendidikan Tinggi No.115/DIKTI/KEP/1984. Perubahan nama Politeknik Universitas Brawijaya menjadi Politeknik Negeri Malang (POLINEMA) didasarkan pada Surat Keputusan Menteri Pendidikan Nasional Nomor 147/O/2004 tanggal 22 November 2004</p>
          <p><a href="<?php echo site_url('blog1/'); ?>">Continue Reading...</a></p> -->
        

      </div><!-- /row -->
      </div> <!-- /container -->
                  </div>
                    <?php else : ?>
        <p>Belum ada data bosque.</p>
        <?php endif; ?>
  </div><!-- /white -->
  
  
  <!-- +++++ Footer Section +++++ -->
  
  <?php $this->load->view('templates/footer');?>