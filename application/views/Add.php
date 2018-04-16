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
	
	
	<!-- +++++ Contact Section +++++ -->
	
	<div class="container pt">
		<div class="row mt">
			<div class="col-lg-6 col-lg-offset-3 centered">
				<h3>Tambah</h3>
				<hr>
			
			</div>
		</div>
		<div class="row mt">	
			<div class="col-lg-8 col-lg-offset-2">
      <?php
        echo form_open('blog/tambah', array('enctype'=>'multipart/form-data')); 
       ?>

				<form role="form">
				  <div class="form-group">
				    <input type="text" name="input_judul" value="<?php echo set_value('input_judul'); ?>" class="form-control"  placeholder="Judul">
				    <br>
				  </div>
				  <textarea  type="text" name="input_content" class="form-control" rows="6" placeholder="Content"></textarea>
				  <br>
				    <div class="form-group">
				    <input type="file" name="input_gambar" class="form-control"rows="6" placeholder="">
				    <br>
				  </div>
				    <br>

				  <button type="submit" name="simpan" value="simpan" class="btn btn-success">SUBMIT</button>
				</form>    			
			</div>
		</div><!-- /row -->
	</div><!-- /container -->
	
	
	<!-- +++++ Footer Section +++++ -->
	
	<div id="footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-4">
					<h4>My Bunker</h4>
					<p>
						Some Address 987,<br/>
						+34 9054 5455, <br/>
						Madrid, Spain.
					</p>
				</div><!-- /col-lg-4 -->
				
				<div class="col-lg-4">
					<h4>My Links</h4>
					<p>
						<a href="#">Dribbble</a><br/>
						<a href="#">Twitter</a><br/>
						<a href="#">Facebook</a>
					</p>
				</div><!-- /col-lg-4 -->
				
				<div class="col-lg-4">
					<h4>About Stanley</h4>
					<p>This cute theme was created to showcase your work in a simple way. Use it wisely.</p>
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
