<div class="panel panel-headline">
	<div class="panel-heading">
		<h3 class="panel-title">Edit Data Balita/Bayi</h3>
	</div>
	<div class="panel-body">
		<hr>
		<?php echo form_open_multipart('Bayi/edit_data_bayi/'.$bayi->id_bayi); ?>
			<div class="form-group">
				<label for="nama">Nama Bayi</label>
				<input type="text" name="nama" class="form-control" value="<?php echo $bayi->nama_bayi; ?>">
				<div style="color: red"><?php echo form_error('nama'); ?></div>
			</div>
			<div class="form-group">
				<label for="tanggal">Tanggal Lahir</label>
				<input type="text" name="tanggal" class="form-control" id="flatpickr" value="<?php echo $bayi->tanggal_lahir; ?>">
				<div style="color: red"><?php echo form_error('tanggal'); ?></div>	
			</div>
			<div class="form-group">
				<label for="jkelamin">Jenis Kelamin</label><br>
				<label class="radio-inline"><input type="radio" name="jkelamin" value="Laki-Laki"<?php if($bayi->jenis_kelamin == "Laki-Laki"){echo "checked";} ?>/> Laki-Laki</label>&nbsp;&nbsp;
				<label class="radio-inline"><input type="radio" name="jkelamin" value="Perempuan"<?php if($bayi->jenis_kelamin == "Perempuan"){echo "checked";} ?>/>	Perempuan</label>
			</div>
			<div class="form-group">
				<label for="ayah">Nama Ayah</label>
				<input type="text" name="ayah" class="form-control" value="<?php echo $bayi->nama_ayah; ?>">
				<div style="color: red"><?php echo form_error('ayah'); ?></div>
			</div>
			<div class="form-group">
				<label for="ibu">Nama Ibu</label>
				<input type="text" name="ibu" class="form-control" value="<?php echo $bayi->nama_ibu; ?>">
				<div style="color: red"><?php echo form_error('ibu'); ?></div>
			</div>
			<div class="form-group">
				<label for="ibu">NIK Ibu</label>
				<input type="text" name="nik" class="form-control" value="<?php echo $bayi->NIK_ibu; ?>">
				<div style="color: red"><?php echo form_error('nik'); ?></div>
			</div>
			<div class="form-group">
				<label for="foto">Foto Bayi</label><br>
				<img src="<?php echo base_url('assets/foto/').$bayi->foto_bayi; ?>" alt="" class="img-thumbnail" width="100" height="160"><br>
				<input type="file" name="foto" class="form-control">
				<div style="color: red"><?php echo form_error('foto'); ?></div>
			</div>
			<input type="submit" name="simpan" class="btn btn-md btn-info" value="Simpan">
		<?php echo form_close(); ?>
	</div>
</div>