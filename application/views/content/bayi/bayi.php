<div class="panel panel-headline">
	<div class="panel-heading">
		<h3 class="panel-title">Data Anak</h3>
	</div>
	<div class="panel-body">
		<a href="<?php echo site_url('bayi/tambah_data_bayi') ?>" title="" class="btn btn-primary">Tambah Data Balita/Bayi</a>
		<hr>
		<?php if($this->session->flashdata('alert')) { ?>
			<div class="alert alert-success alert-dismissable">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
				<?php echo $this->session->flashdata('alert'); ?>
			</div>
		<?php } ?>
		<table class="table table-responsive table-striped table-hover table-bordered" id="mytable">
			<thead>
				<tr>
					<th>NIK Ibu</th>
					<th>Nama Balita/Bayi</th>
					<th>Nama Ibu</th>
					<th width="25%">Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($bayi as $b): ?>
					<tr>
						<td><?php echo $b->NIK_ibu ?></td>
						<td><?php echo $b->nama_bayi ?></td>
						<td><?php echo $b->nama_ibu ?></td>
						<td>
							<div class="btn-group">
								<a href="<?php echo base_url('bayi/detail_bayi/').$b->id_bayi ?>" class="btn btn-sm btn-info">Detail</a>
								<a href="<?php echo base_url('bayi/edit_data_bayi/').$b->id_bayi ?>" title="" class="btn btn-sm btn-warning">Edit</a>
								<a href="<?php echo base_url('bayi/hapus_data_bayi/').$b->id_bayi ?>" title="" class="btn btn-sm btn-danger">Hapus</a>
							</div>
						</td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>
</div>

