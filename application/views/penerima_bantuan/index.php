<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Penerima Bantuan Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('penerima_bantuan/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ID</th>
						<th>Kecamatan Id</th>
						<th>Jenis Bantuan Id</th>
						<th>Alamat</th>
						<th>Desa Id</th>
						<th>Nama Penerima</th>
						<th>Nomor Ktp</th>
						<th>Nomor Kk</th>
						<th>Lintang</th>
						<th>Bujur</th>
						<th>Keterangan</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($penerima_bantuan as $p){ ?>
                    <tr>
						<td><?php echo $p['id']; ?></td>
						<td><?php echo $p['kecamatan_id']; ?></td>
						<td><?php echo $p['jenis_bantuan_id']; ?></td>
						<td><?php echo $p['alamat']; ?></td>
						<td><?php echo $p['desa_id']; ?></td>
						<td><?php echo $p['nama_penerima']; ?></td>
						<td><?php echo $p['nomor_ktp']; ?></td>
						<td><?php echo $p['nomor_kk']; ?></td>
						<td><?php echo $p['lintang']; ?></td>
						<td><?php echo $p['bujur']; ?></td>
						<td><?php echo $p['keterangan']; ?></td>
						<td>
                            <a href="<?php echo site_url('penerima_bantuan/edit/'.$p['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('penerima_bantuan/remove/'.$p['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
