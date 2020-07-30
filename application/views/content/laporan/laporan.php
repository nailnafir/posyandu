<div class="panel panel-headline">
	<div class="panel-heading">
		<h3 class="panel-title">Laporan Posyandu Perbulan</h3>
	</div>
	<div class="panel-body" style="height: 370px">
		<?php echo form_open('Laporan/laporan_Bulanann'); ?>
		<div class="form-group">
			<label for="tanggal" class="label-control col-md-2">Tanggal</label>
			<div class="col-md-5">
				<input type="text" name="tanggal" class="form-control" id="flatpickr" required="">
			</div>
			<div class="col-md-3">
				<input type="submit" name="cari" class="btn btn-sm btn-primary" value="Cari">
			</div>
		</div>
		<?php echo form_close(); ?>
	</div>
</div>