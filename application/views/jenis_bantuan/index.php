<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Jenis Bantuan Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('jenis_bantuan/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ID</th>
						<th>Nama</th>
						<th>Tabel Kode</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($jenis_bantuan as $j){ ?>
                    <tr>
						<td><?php echo $j['id']; ?></td>
						<td><?php echo $j['nama']; ?></td>
						<td><?php echo $j['tabel_kode']; ?></td>
						<td>
                            <a href="<?php echo site_url('jenis_bantuan/edit/'.$j['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('jenis_bantuan/remove/'.$j['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
