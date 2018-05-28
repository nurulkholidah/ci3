<?php $this->load->view('templates/header');?>

<div class="container pt">
		<div class="row mt">
			<div class="col-lg-6 col-lg-offset-3 centered">
				<h3>Login</h3>
				<hr>
			</div>
		</div>
		<div class="row mt">	
			<div class="col-lg-8 col-lg-offset-2">
       <?php echo form_open('user/login'); ?>
				<form role="form">
				  
				  <div class="form-group">
				    <input type="text" name="username" class="form-control"  placeholder="Username">
				    <br>
				  </div>
				   <div class="form-group">
				    <input type="password" name="password" class="form-control"  placeholder="Password">
				    <br>
				  </div>

				  <button type="submit" name="simpan" value="simpan" class="btn btn-success">SUBMIT</button>
				</form>  
				<?php echo form_close(); ?>  			
			</div>
		</div><!-- /row -->
	</div><!-- /container -->

 <?php $this->load->view('templates/footer');?> 