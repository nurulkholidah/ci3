<?php $this->load->view('templates/header');?>
	
	
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
        echo form_open_multipart('blog/tambah', array('class' => 'needs-validation', 'novalidate' => ''));
       ?>

				<form role="form">
					<?php echo validation_errors(); ?>
                    <?php echo (isset( $upload_error)) ? '<div class="alert alert-warning" role="alert">' .$upload_error. '</div>' : ''; ?>
				  <div class="form-group">
				    <input type="text" name="input_judul" value="<?php echo set_value('input_judul'); ?>" class="form-control"  placeholder="Judul">
				    <br>
				  </div>
				  <textarea  type="text" name="input_content" value="<?php echo set_value('input_content'); ?>" class="form-control" rows="6" placeholder="Content"></textarea>
				  <br>

				                      <div class="form-group">
                        <label>Kategori</label>
                        <?php echo form_dropdown('cat_id', $categories, set_value('cat_id'), 'class="form-control" required' ); ?>
                    </div>

				    <div class="form-group">
				    <input type="file" name="image" value="<?php echo set_value('image'); ?>" class="form-control"rows="6" placeholder="">
				    <br>
				  </div>
				    <br>

				  <button type="submit" name="simpan" value="simpan" class="btn btn-success">SUBMIT</button>
				</form>    			
			</div>
		</div><!-- /row -->
	</div><!-- /container -->
	
	
	<!-- +++++ Footer Section +++++ -->
	
<?php $this->load->view('templates/footer');?>
