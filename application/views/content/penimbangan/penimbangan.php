<div class="panel panel-headline">
	<div class="panel-heading">
		<h3 class="panel-title">Penimbangan</h3>
	</div>
	<div class="panel-body">
		<table class="table table-bordered table-responsive" id="mytable">
			<thead>
				<tr>
					<th>NIK Ibu</th>
					<th>Nama Ibu</th>
					<th>Nama Bayi</th>
					<th width="30%">Aksi</th>	
				</tr>
			</thead>
			<tbody>
				<?php foreach($bayi as $b): ?>
					<tr>
						<td><?php echo $b->NIK_ibu ?></td>
						<td><?php echo $b->nama_ibu ?></td>
						<td><?php echo $b->nama_bayi; ?></td>
						<td>
							<a href="<?php echo site_url('Penimbangan/penimbangan_bayi/'.$b->id_bayi) ?>" title="" class="btn btn-sm btn-info">Penimbangan</a>
							<a href="<?php echo site_url('Penimbangan/imunisasi_bayi/'.$b->id_bayi) ?>" title="" class="btn btn-sm btn-warning">Imunisasi</a>
						</td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>
</div>