<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Jenis Bantuan Edit</h3>
            </div>
			<?php echo form_open('jenis_bantuan/edit/'.$jenis_bantuan['id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="nama" class="control-label">Nama</label>
						<div class="form-group">
							<input type="text" name="nama" value="<?php echo ($this->input->post('nama') ? $this->input->post('nama') : $jenis_bantuan['nama']); ?>" class="form-control" id="nama" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="tabel_kode" class="control-label">Tabel Kode</label>
						<div class="form-group">
							<input type="text" name="tabel_kode" value="<?php echo ($this->input->post('tabel_kode') ? $this->input->post('tabel_kode') : $jenis_bantuan['tabel_kode']); ?>" class="form-control" id="tabel_kode" />
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