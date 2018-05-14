<?php $this->load->view('templates/header');?>
  <!-- +++++ Second Post +++++ -->
  <div id="white">
    <?php if( !empty($artikel) ) : ?> 
      <div class="container">
      <a href="<?php echo site_url('blog/tambah/'); ?>" class="btn btn-success">Tambah</a>
      <div class="row">
        <?php foreach ($artikel as $key): ?>
        <div class="col-lg-8 col-lg-offset-2">
        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
          <table style="margin-bottom: 30px;">
            <tr>
              <td>
                

                   <?php if( $key->image ) : ?>
                  <img src="<?php echo base_url(). 'img/'. $key->image ?>" alt="Image" width="500" height="400">
                  <?php ; else : ?>
                            <img class="card-img-top" data-src="holder.js/100px190?theme=thumb&bg=eaeaea&fg=aaa&text=Thumbnail" alt="Card image cap">
                            <?php endif; ?>
                                   

                                        <br>
                            <small class="text-success text-uppercase"><?php echo $key->cat_name ?></small>
                            <br>


                  <br>
                  <center><h1><?php echo ($key->judul) ?></h1></center>
                </a>
                <a href="<?php echo site_url('blog/edit/'. $key->id); ?>" class="btn btn-sm btn-danger">edit</a>
                <a href='blog/delete/<?php echo $key->id ?>' class='btn btn-sm btn-danger'>Hapus</a>
              </td>
            </tr>
          </table>
        </div>
        </div>
        <?php endforeach; ?> 
      </div><!-- /row -->
      </div> <!-- /container -->
      <?php else : ?>
        <p>Belum ada data bosque.</p>
        <?php endif; ?>
        <?php 
    // $links ini berasal dari fungsi pagination 
    // Jika $links ada (data melebihi jumlah max per page), maka tampilkan
    if (isset($links)) {
      echo $links;
    } 
    ?>
  </div><!-- /white -->
          
            


  
  
  <!-- +++++ Footer Section +++++ -->
  
 <?php $this->load->view('templates/footer');?>