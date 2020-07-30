<div class="panel panel-headline">
	<div class="panel-heading">
		<h3 class="panel-title">Data Penimbangan <?php echo $bayi->nama_bayi; ?></h3>
		<div class="right">
			<button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
		</div>
	</div>
	<div class="panel-body">
		<img src="<?php echo base_url('assets/foto/').$bayi->foto_bayi; ?>" alt="" width="300" height="450" class="img-thumbnail">
		<br><br>
		<table class="table table-bordered">
			<tr>
				<td><label>Nama Bayi</label></td>
				<td><?php echo $bayi->nama_bayi; ?></td>
			</tr>
			<tr>
				<td><label>Tanggal Lahir</label></td>
				<td><?php echo $bayi->tanggal_lahir; ?></td>
			</tr>
			<tr>
				<td><label>Jenis Kelamin</label></td>
				<td><?php echo $bayi->jenis_kelamin; ?></td>
			</tr>
			<tr>
				<td><label>Nama Ayah</label></td>
				<td><?php echo $bayi->nama_ayah; ?></td>
			</tr>
			<tr>
				<td><label>Nama Ibu</label></td>
				<td><?php echo $bayi->nama_ibu; ?></td>
			</tr>
		</table>
	</div>
</div>
<div class="panel panel-headline">
	<div class="panel-heading">
		<div class="right">
			<button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
		</div>
		<h3 class="panel-title">Penimbangan</h3>
	</div>
	<div class="panel-body">
		<button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myAdd">Tambah Data Penimbangan</button>
		<a href="<?php echo base_url('penimbangan/penimbangan_grafik/'.$bayi->id_bayi) ?>" class="btn btn-sm btn-warning">Grafik Berat Badan</a>
		<a href="<?php echo base_url('penimbangan/grafik_tinggibadan/'.$bayi->id_bayi) ?>" class="btn btn-sm btn-success">Grafik Tinggi Badan</a>
		<a href="<?php echo base_url('Laporan/laporan_bayi/'.$bayi->id_bayi) ?>" target="_blank" class="btn btn-sm btn-danger">Laporan</a>
		<br>
		<br>
		<table class="table table-bordered table-responsive" id="mytable">
			<thead>
				<tr>
					<th>Bulan Ke</th>
					<th>Tanggal</th>
					<th>Berat Bayi</th>
					<th>Tinggi Bayi</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php 
				$no = 0;
				foreach($penimbangan as $p): ?>
					<tr>
						<td><?php echo "Bulan Ke-".$no; ?></td>
						<td><?php echo $p->tanggal; ?></td>
						<td><?php echo $p->berat_bayi." kg"; ?></td>
						<td><?php echo $p->tinggi_bayi." cm" ?></td>
						<td>
							<button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myEdit-<?php echo $p->id_penimbangan ?>">Edit</button>
							<div id="myEdit-<?php echo $p->id_penimbangan; ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="editLabel-<?php echo $p->id_penimbangan; ?>" aria-hidden="true">
								<div class="modal-dialog">

									<!-- Modal content-->
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal">&times;</button>
											<h4 class="modal-title" id="editLabel-<?php echo $p->id_penimbangan ?>">EDIT</h4>
										</div>
										<div class="modal-body">
											<?php echo form_open('Penimbangan/edit_penimbangan/'.$p->id_penimbangan); ?>
											<div class="modal-body">
												<input type="hidden" name="id" value="<?php echo $p->id_bayi ?>">
												<div class="form-group">
													<label for="berat">Berat Badan</label>
													<div class="input-group">
														<input type="text" name="berat" class="form-control" value="<?php echo $p->berat_bayi ?>">
														<span class="input-group-addon">Kg</span>
													</div>
												</div>        	
												<div class="form-group">
													<label for="tinggi">Tinggi Badan</label>
													<div class="input-group">
														<input type="text" name="tinggi" class="form-control" value="<?php echo $p->tinggi_bayi ?>">
														<span class="input-group-addon">CM</span>
													</div>
												</div>  

											</div>
										</div>
										<div class="modal-footer">
											<input type="submit" name="edit" class="btn btn-primary" value="Edit">
											<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
											<?php echo form_close(); ?>
										</div>
									</div>

								</div>
							</div>
						</td>
					</tr>
				<?php 
				$no++;
				endforeach;
				?>
			</tbody>
		</table>
	</div>
</div>

<!-- Modal -->
<div id="myAdd" class="modal fade" role="dialog">
	<div class="modal-dialog">

		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Tambah Data Penimbangan <?php echo $bayi->nama_bayi ?></h4>
			</div>
			<?php echo form_open('penimbangan/penimbangan_bayi/'.$bayi->id_bayi) ?>
			<div class="modal-body">
				<div class="form-group">
					<label for="berat">Berat Badan</label>
					<div class="input-group">
						<input type="text" name="berat" class="form-control">
						<span class="input-group-addon">Kg</span>
					</div>
				</div> 
				<br>      	
				<div class="form-group">
					<label for="tinggi">Tinggi Badan</label>
					<div class="input-group">
						<input type="text" name="tinggi" class="form-control">
						<span class="input-group-addon">CM</span>
					</div>
				</div>  

			</div>
			<div class="modal-footer">
				<input type="submit" name="simpan" class="btn btn-primary" value="Simpan">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<?php echo form_close() ?>
			</div>
		</div>

	</div>
</div>