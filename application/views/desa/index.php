<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Desa Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('desa/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Desa Id</th>
						<th>Desa Kecamatan Id</th>
						<th>Desa Nama</th>
						<th>Desa Kode</th>
						<th>Desa Datasosial</th>
						<th>Desa Bltdd</th>
						<th>Desa Kemenpar</th>
						<th>Desa Semb Bup</th>
						<th>Desa Semb Prov</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($desa as $d){ ?>
                    <tr>
						<td><?php echo $d['desa_id']; ?></td>
						<td><?php echo $d['desa_kecamatan_id']; ?></td>
						<td><?php echo $d['desa_nama']; ?></td>
						<td><?php echo $d['desa_kode']; ?></td>
						<td><?php echo $d['desa_datasosial']; ?></td>
						<td><?php echo $d['desa_bltdd']; ?></td>
						<td><?php echo $d['desa_kemenpar']; ?></td>
						<td><?php echo $d['desa_semb_bup']; ?></td>
						<td><?php echo $d['desa_semb_prov']; ?></td>
						<td>
                            <a href="<?php echo site_url('desa/edit/'.$d['desa_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('desa/remove/'.$d['desa_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
