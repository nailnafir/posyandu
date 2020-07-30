<div class="panel panel-headline">
	<div class="panel-heading">
		<h3 class="panel-title">Tambah Data Balita/Bayi</h3>
	</div>
	<div class="panel-body">
		<hr>
		<?php echo form_open_multipart('bayi/tambah_data_bayi'); ?>
			<div class="form-group">
				<label for="nama">Nama Bayi</label>
				<input type="text" name="nama" class="form-control" value="<?php echo set_value('nama'); ?>">
				<div style="color: red"><?php echo form_error('nama'); ?></div>
			</div>
			<div class="form-group">
				<label for="tanggal">Tanggal Lahir</label>
				<input type="text" name="tanggal" class="form-control" id="flatpickr" value="<?php echo set_value('tanggal'); ?>">
				<div style="color: red"><?php echo form_error('tanggal'); ?></div>	
			</div>
			<div class="form-group">
				<label for="jkelamin">Jenis Kelamin</label><br>
				<label class="radio-inline"><input type="radio" name="jkelamin" value="Laki-Laki"/> Laki-Laki</label>&nbsp;&nbsp;
				<label class="radio-inline"><input type="radio" name="jkelamin" value="Perempuan"/>	Perempuan</label>
			</div>
			<div class="form-group">
				<label for="ayah">Nama Ayah</label>
				<input type="text" name="ayah" class="form-control" value="<?php echo set_value('ayah'); ?>">
				<div style="color: red"><?php echo form_error('ayah'); ?></div>
			</div>
			<div class="form-group">
				<label for="ibu">Nama Ibu</label>
				<input type="text" name="ibu" class="form-control" value="<?php echo set_value('ibu'); ?>">
				<div style="color: red"><?php echo form_error('ibu'); ?></div>
			</div>
			<div class="form-group">
				<label for="ibu">NIK Ibu</label>
				<input type="text" name="nik" class="form-control" value="<?php echo set_value('nik'); ?>">
				<div style="color: red"><?php echo form_error('nik'); ?></div>
			</div>
			<div class="form-group">
				<label for="foto">Foto Bayi</label>
				<img src="#" alt="" id="gambar_ngodin" width="100" height="160" class="img-thumbnail">
				<input type="file" name="foto" id="preview_foto">
				<div style="color: red"><?php echo form_error('foto'); ?></div>
			</div>
			<input type="submit" name="simpan" class="btn btn-md btn-info" value="Simpan">
		<?php echo form_close(); ?>
	</div>
</div>
<script>
function bacaGambar(input) {
	if(input.files && input.files[0]) {
		var reader = new FileReader();

		reader.onload = function(e) {
			('#gambar_ngodin').attr('src', e.target.result);
		}

		reader.readAsDataURL(input.files[0]);
	}
}

$("#preview_foto").change(function(){
	bacaGambar(this);
});
</script>