<?php $this->load->view('templates/header');?>

<div class="container">
   <div class="col-lg-6 col-lg-offset-3 centered">
       <h2>Selamat datang <?php echo $user->nama ?> <span class="badge badge-secondary"><?php echo $user->nama_level ?></span></h2>
       <br>
       <br>
       <br>

   </div>
</div>

 <?php $this->load->view('templates/footer');?>