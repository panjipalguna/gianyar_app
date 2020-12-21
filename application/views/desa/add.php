<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Desa Add</h3>
            </div>
            <?php echo form_open('desa/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="desa_kecamatan_id" class="control-label">Desa Kecamatan Id</label>
						<div class="form-group">
							<input type="text" name="desa_kecamatan_id" value="<?php echo $this->input->post('desa_kecamatan_id'); ?>" class="form-control" id="desa_kecamatan_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="desa_nama" class="control-label">Desa Nama</label>
						<div class="form-group">
							<input type="text" name="desa_nama" value="<?php echo $this->input->post('desa_nama'); ?>" class="form-control" id="desa_nama" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="desa_kode" class="control-label">Desa Kode</label>
						<div class="form-group">
							<input type="text" name="desa_kode" value="<?php echo $this->input->post('desa_kode'); ?>" class="form-control" id="desa_kode" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="desa_datasosial" class="control-label">Desa Datasosial</label>
						<div class="form-group">
							<input type="text" name="desa_datasosial" value="<?php echo $this->input->post('desa_datasosial'); ?>" class="form-control" id="desa_datasosial" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="desa_bltdd" class="control-label">Desa Bltdd</label>
						<div class="form-group">
							<input type="text" name="desa_bltdd" value="<?php echo $this->input->post('desa_bltdd'); ?>" class="form-control" id="desa_bltdd" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="desa_kemenpar" class="control-label">Desa Kemenpar</label>
						<div class="form-group">
							<input type="text" name="desa_kemenpar" value="<?php echo $this->input->post('desa_kemenpar'); ?>" class="form-control" id="desa_kemenpar" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="desa_semb_bup" class="control-label">Desa Semb Bup</label>
						<div class="form-group">
							<input type="text" name="desa_semb_bup" value="<?php echo $this->input->post('desa_semb_bup'); ?>" class="form-control" id="desa_semb_bup" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="desa_semb_prov" class="control-label">Desa Semb Prov</label>
						<div class="form-group">
							<input type="text" name="desa_semb_prov" value="<?php echo $this->input->post('desa_semb_prov'); ?>" class="form-control" id="desa_semb_prov" />
						</div>
					</div>
				</div>
			</div>
          	<div class="box-footer">
            	<button type="submit" class="btn btn-success">
            		<i class="fa fa-check"></i> Save
            	</button>
          	</div>
            <?php echo form_close(); ?>
      	</div>
    </div>
</div>