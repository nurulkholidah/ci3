<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="<?php echo site_url('../../docs-assets/ico/favicon.png'); ?>">

    <!-- <title>Nurul kholidah</title> -->

    <!-- Bootstrap core CSS -->

    <!-- Custom styles for this template -->
<!--link rel="stylesheet" href="<?php echo site_url('a/assets/css/main.css'); ?>"> -->
    <!-- <link rel="stylesheet" href="<?php echo site_url('a/assets/css/bootstrap.css'); ?>">  -->

   <!-- <link rel="stylesheet" href="<?php echo base_url() ?>a/assets/css/bootstrap.min.css">  -->

   <link rel="stylesheet" href="<?php echo site_url('a/assets/css/bootstrap.css'); ?>">
   <link rel="stylesheet" href="<?php echo site_url('a/assets/css/main.css'); ?>">

    <link rel="stylesheet" href="<?php echo base_url() ?>a/assets/css/custom.css">

        <script src="<?php echo base_url() ?>a/assets/js/jquery-1.9.1.min.js"></script>



  <!--   <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="assets/js/hover.zoom.js"></script>
    <script src="assets/js/hover.zoom.conf.js"></script> -->

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
          <a class="navbar-brand" href="home.php"></a>
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
            <!-- <li>
              <a href="<?php echo site_url('blog/'); ?>">Artikel</a>
            </li>
            <li>
              <a href="<?php echo site_url('kategori/'); ?>">Kategori</a>
            </li> -->
            <!-- <li>
              <a href="<?php echo site_url('datatables/'); ?>">Data Tables</a>
            </li> -->
          </ul>


          <?php if(!$this->session->userdata('logged_in') || $this->session->userdata('level') != 1) : ?>
      <div class="navbar-collapse collapse">
                      <ul class="nav navbar-nav navbar-right">
                      <li>
                        <?php echo anchor('blog/', 'Artikel', array('class' => '')); ?>
                      </li>
                      <li>
                        <?php echo anchor('kategori/', 'Kategori', array('class' => '')); ?>
                      </li>
                    </ul>

                    </div>
      <?php endif; ?>


      <?php if($this->session->userdata('logged_in') && $this->session->userdata('level') == 1) : ?>
      <div class="navbar-collapse collapse">
                      <ul class="nav navbar-nav navbar-right">
                      <li>
                        <?php echo anchor('datatables/view_json', 'Datatables', array('class' => '')); ?>
                      </li>
                    </ul>

                    </div>
      <?php endif; ?>


          <?php if(!$this->session->userdata('logged_in')) : ?>

                    <div class="navbar-collapse collapse">
                      <ul class="nav navbar-nav navbar-right">
                      <li>
                        <?php echo anchor('user/register', 'Register', array('class' => '')); ?>
                      </li>
                      <li>
                        <?php echo anchor('user/login', 'Login', array('class' => '')); ?>
                      </li>
                    </ul>

                    </div>

                <?php endif; ?>

                <?php if($this->session->userdata('logged_in')) : ?>
                    <div class="navbar-collapse collapse">
                      <ul class="nav navbar-nav navbar-right">
                        <!-- <li>
                        <?php echo anchor('blog/create', 'Artikel Baru', array('class' => '')); ?>
                      </li>
                      <li>
                        <?php echo anchor('category/create', 'Kategori Baru', array('class' => '')); ?>
                      </li> -->
                      <li>
                        <?php echo anchor('user/logout', 'Logout', array('class' => '')); ?>
                      </li>
                    </div>
                  </ul>
                <?php endif; ?>
        </div><!--/.nav-collapse -->

      </div>
    </div>
    <?php if($this->session->flashdata('user_registered')): ?>
          <?php echo '<div class="alert alert-success" role="alert">'.$this->session->flashdata('user_registered').'</div>'; ?>
        <?php endif; ?>
        <?php if($this->session->flashdata('login_failed')): ?>
          <?php echo '<div class="alert alert-danger">'.$this->session->flashdata('login_failed').'</div>'; ?>
        <?php endif; ?>

        <?php if($this->session->flashdata('user_loggedin')): ?>
          <?php echo '<div class="alert alert-success">'.$this->session->flashdata('user_loggedin').'</div>'; ?>
        <?php endif; ?>

         <?php if($this->session->flashdata('user_loggedout')): ?>
          <?php echo '<div class="alert alert-success">'.$this->session->flashdata('user_loggedout').'</div>'; ?>
        <?php endif; ?>
