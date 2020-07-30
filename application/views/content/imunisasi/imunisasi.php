<div class="panel panel-headline">
	<div class="panel-heading">
		<h3 class="panel-title">Data Imunisasi <?php echo $bayi->nama_bayi; ?></h3>
		<div class="right">
			<button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
		</div>
	</div>
	<div class="panel-body">
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
		<h3 class="panel-title">Imunisasi</h3>
	</div>
	<div class="panel-body">
		<button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myAdd">Tambah Data Imunisasi</button>
		<br>
		<br>
		<table class="table table-bordered table-responsive">
			<thead>
				<tr>
					<th>Bulan/Umur</th>
					<th>Nama Imunisasi</th>
					<th>Tanggal Imunisasi</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php 
				$no = 0;
				foreach($imunisasi as $i) {
					?>
					<tr>
						<td><?php echo "Bulan Ke-".$no ?></td>
						<td><?php echo $i->nama_imunisasi; ?></td>
						<td><?php echo $i->tanggal; ?></td>
						<td>
							<button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myEdit-<?php echo $i->id_imunisasi ?>">Edit</button>
							<div id="myEdit-<?php echo $i->id_imunisasi; ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="editLabel-<?php echo $i->id_imunisasi; ?>" aria-hidden="true">
								<div class="modal-dialog">

									<!-- Modal content-->
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal">&times;</button>
											<h4 class="modal-title" id="editLabel-<?php echo $i->id_imunisasi ?>">EDIT</h4>
										</div>
										<div class="modal-body">
											<?php echo form_open('Penimbangan/edit_imunisasi/'.$i->id_imunisasi); ?>
											<div class="modal-body">
												<input type="hidden" name="id" value="<?php echo $i->id_bayi ?>">
												<div class="form-group">
													<label for="jimunisasi">Nama Imunisasi</label>
													<select name="jimunisasi" class="form-control">
														<option value="<?php echo $i->nama_imunisasi ?>">
															<?php echo $i->nama_imunisasi ?>
														</option>
														<option value="HB0, Polio 0">HB0, Polio 0</option>
														<option value="BCG, Polio 1">BCG, Polio 1</option>
														<option value="DPT, Polio 2">DPT, Polio 2</option>
														<option value="HB1, Polio 2">HB1, Polio 2</option>
														<option value="DPT, Polio 3">DPT, Polio 3</option>
														<option value="HB2, Polio 3">HB2, Polio 3</option>
														<option value="DPT, Polio 4">DPT, Polio 4</option>
														<option value="HB3, Polio 4">HB3, Polio 4</option>
														<option value="CAMPAK">CAMPAK</option>
													</select>
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
				</tr>
				<?php
				$no++; 
			} ?>
		</tbody>
	</table>
</div>
</div>

<div id="myAdd" class="modal fade" role="dialog">
	<div class="modal-dialog">

		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Tambah Data Penimbangan <?php echo $bayi->nama_bayi ?></h4>
			</div>
			<?php echo form_open('penimbangan/imunisasi_bayi/'.$bayi->id_bayi) ?>
			<div class="modal-body">
				<div class="form-group">
					<label for="imunisasi">Nama Imunisasi</label>
					<select name="imunisasi" class="form-control">
						<option value="HB0, Polio 0">HB0, Polio 0</option>
						<option value="BCG, Polio 1">BCG, Polio 1</option>
						<option value="DPT, Polio 2">DPT, Polio 2</option>
						<option value="HB1, Polio 2">HB1, Polio 2</option>
						<option value="DPT, Polio 3">DPT, Polio 3</option>
						<option value="HB2, Polio 3">HB2, Polio 3</option>
						<option value="DPT, Polio 4">DPT, Polio 4</option>
						<option value="HB3, Polio 4">HB3, Polio 4</option>
						<option value="CAMPAK">CAMPAK</option>
					</select>
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