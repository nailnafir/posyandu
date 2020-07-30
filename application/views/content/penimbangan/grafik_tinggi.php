<div class="panel panel-headline">
	<div class="panel-heading">
		<h3 class="panel-title">Grafik Tinggi Badan <?php echo $bayi->nama_bayi ?></h3>
	</div>
	<div class="panel-body">
		<div id="chart" style="width: 100%;height: 365px"></div>
	</div>
</div>
<script>
	google.charts.load('current', {packages: ['corechart', 'line']});
	google.charts.setOnLoadCallback(drawBasic);

	function drawBasic() {

		var data = new google.visualization.DataTable();
		data.addColumn('number', 'X');
		data.addColumn('number', <?php echo "'".$bayi->nama_bayi."'"; ?>);

		data.addRows([
				<?php 
				$no=0;
				foreach($penimbangan as $p) {
					echo
					"[".$no.", ".$p->tinggi_bayi."],";
					$no++;
				}
				?>
			]);

		var options = {
			hAxis: {
				title: 'Bulan'
			},
			vAxis: {
				title: 'Tinggi Badan (CM)'
			}
		};

		var chart = new google.visualization.LineChart(document.getElementById('chart'));
		chart.draw(data, options);
	}
</script>