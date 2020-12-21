<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Penerima Bantuan Add</h3>
            </div>
            <?php echo form_open('penerima_bantuan/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="kecamatan_id" class="control-label">Kecamatan</label>
						<div class="form-group">
							<select name="kecamatan_id" class="form-control">
								<option value="">select kecamatan</option>
								<?php 
								foreach($all_kecamatan as $kecamatan)
								{
									$selected = ($kecamatan['id'] == $this->input->post('kecamatan_id')) ? ' selected="selected"' : "";

									echo '<option value="'.$kecamatan['nama'].'" '.$selected.'>'.$kecamatan['nama'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="jenis_bantuan_id" class="control-label">Jenis Bantuan</label>
						<div class="form-group">
							<select name="jenis_bantuan_id" class="form-control">
								<option value="">select jenis_bantuan</option>
								<?php 
								foreach($all_jenis_bantuan as $jenis_bantuan)
								{
									$selected = ($jenis_bantuan['id'] == $this->input->post('jenis_bantuan_id')) ? ' selected="selected"' : "";

									echo '<option value="'.$jenis_bantuan['nama'].'" '.$selected.'>'.$jenis_bantuan['nama'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="alamat" class="control-label">Alamat</label>
						<div class="form-group">
							<input type="text" name="alamat" value="<?php echo $this->input->post('alamat'); ?>" class="form-control" id="alamat" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="desa_id" class="control-label">Desa Id</label>
						<div class="form-group">
							<input type="text" name="desa_id" value="<?php echo $this->input->post('desa_id'); ?>" class="form-control" id="desa_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="nama_penerima" class="control-label">Nama Penerima</label>
						<div class="form-group">
							<input type="text" name="nama_penerima" value="<?php echo $this->input->post('nama_penerima'); ?>" class="form-control" id="nama_penerima" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="nomor_ktp" class="control-label">Nomor Ktp</label>
						<div class="form-group">
							<input type="text" name="nomor_ktp" value="<?php echo $this->input->post('nomor_ktp'); ?>" class="form-control" id="nomor_ktp" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="nomor_kk" class="control-label">Nomor Kk</label>
						<div class="form-group">
							<input type="text" name="nomor_kk" value="<?php echo $this->input->post('nomor_kk'); ?>" class="form-control" id="nomor_kk" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="lintang" class="control-label">Lintang</label>
						<div class="form-group">
							<input type="text" name="lintang" value="<?php echo $this->input->post('lintang'); ?>" class="form-control" id="lintang" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="bujur" class="control-label">Bujur</label>
						<div class="form-group">
							<input type="text" name="bujur" value="<?php echo $this->input->post('bujur'); ?>" class="form-control" id="bujur" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="keterangan" class="control-label">Keterangan</label>
						<div class="form-group">
							<input type="text" name="keterangan" value="<?php echo $this->input->post('keterangan'); ?>" class="form-control" id="keterangan" />
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