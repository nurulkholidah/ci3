<?php $this->load->view('templates/header');?>

<div class="container pt">
		<div class="row mt">
			<div class="col-lg-6 col-lg-offset-3 centered">
				<h3>Registrasi</h3>
				<hr>
			
			</div>
		</div>
		<div class="row mt">	
			<div class="col-lg-8 col-lg-offset-2">
       <?php
						$this->form_validation->set_error_delimiters('<div class="alert alert-warning" role="alert">', '</div>');
					?>
					<?php echo validation_errors(); ?>
					<?php echo form_open('user/register', array('class' => 'needs-validation', 'novalidate' => '')); ?>
				<form role="form">
				  <div class="form-group">
				    <input type="text" name="nama" class="form-control"  placeholder="Nama Lengkap">
				    <br>
				  </div>
				   <div class="form-group">
				    <input type="text" name="alamat" class="form-control"  placeholder="Alamat">
				    <br>
				  </div>
				   <div class="form-group">
				    <input type="email" name="email" class="form-control"  placeholder="Email">
				    <br>
				  </div>
				   <div class="form-group">
				    <input type="text" name="telp" class="form-control"  placeholder="Telp">
				    <br>
				  </div>
				  <div class="form-group">
				    <input type="text" name="username" class="form-control"  placeholder="Username">
				    <br>
				  </div>
				   <div class="form-group">
				    <input type="password" name="password" class="form-control"  placeholder="Password">
				    <br>
				  </div>
				  <div class="form-group">
				    <input type="password" name="password2" class="form-control"  placeholder="Konfirmasi Password">
				    <br>
				  </div>
				  <div class="form-group">
					    <label for="">Pilih Paket Membership</label>
					    <div class="form-check">
					        <input class="form-check-input" type="radio" name="membership" id="goldmember" value="2" checked>
					        <label class="form-check-label" for="goldmember">Gold Member</label>
					    </div>
					    <div class="form-check">
					        <input class="form-check-input" type="radio" name="membership" id="silvermember" value="3">
					        <label class="form-check-label" for="silvermember">Silver Member</label>
					    </div>
					</div>

				  <button type="submit" name="simpan" value="simpan" class="btn btn-success">SUBMIT</button>
				</form>    			
			</div>
			<?php echo form_close(); ?>
		</div><!-- /row -->
	</div><!-- /container -->


 <?php $this->load->view('templates/footer');?>