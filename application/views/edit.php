<?php $this->load->view('templates/header');?>
	
	<!-- +++++ Contact Section +++++ -->
	
	<div class="container pt">
		<div class="row mt">
			<div class="col-lg-6 col-lg-offset-3 centered">
				<h3>Edit</h3>
				<hr>
			
			</div>
		</div>
            <?php echo validation_errors(); ?>
            <?php echo (isset( $upload_error)) ? '<div class="alert alert-warning" role="alert">' .$upload_error. '</div>' : ''; ?>

            <?php echo form_open_multipart(current_url(), array('class' => 'needs-validation', 'novalidate' => '')); ?>
		<div class="row mt">	

			<div class="col-lg-8 col-lg-offset-2">
				

				<form role="form">
					<form method="POST">

				  <div class="form-group">
				    <input type="text" name="input_judul" value="<?php echo set_value('input_judul', $artikel->judul) ?>" class="form-control"  placeholder="Judul">
				    <br>
				  </div>

				  <textarea  type="text" name="input_content"  class="form-control" rows="6" placeholder="Content"> <?php echo set_value('input_content', $artikel->content) ?></textarea>
				  <br>
				                      <div class="form-group">
                        <label>Kategori</label>
                        <?php echo form_dropdown('cat_id', $categories, set_value( 'cat_id', $artikel->jenis_cat ), 'class="form-control"' ); ?>
                    </div>

                    <div class="form-group">
                        <?php if( $artikel->image ) : ?>
				    <div class="form-group">
				    <input type="file" name="image" src="<?php echo base_url() .'img/'. $artikel->image ?>"  class="form-control"rows="6" placeholder="">
				    <?php endif; ?>
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