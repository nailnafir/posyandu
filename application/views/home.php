<?php date_default_timezone_set('Asia/Kuala_Lumpur'); ?>
<!doctype html>
<html lang="en">

<head>
	<title><?php echo $title; ?></title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/linearicons/style.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/chartist/css/chartist-custom.css">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/main.css">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/demo.css">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
	<!-- PLUGIN -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/plugin/flatpickr/dist/flatpickr.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/plugin/datatables/datatables.min.css">
	<!-- GOOGLE CHARTS -->
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<!-- NAVBAR -->
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="brand">
				<a href="index.html"><img src="<?php echo base_url(); ?>assets/posyandu.png" width="120" alt="Posyandu" class="img-responsive logo"></a>
			</div>
			<div class="container-fluid">
				<div class="navbar-btn">
					<button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
				</div>
				<div id="navbar-menu">
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="assets/img/user.png" class="img-circle" alt="Avatar"> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
							<ul class="dropdown-menu">
								<li><a href="#"><i class="lnr lnr-cog"></i> <span>Settings</span></a></li>
								<li><a href="<?php echo base_url('Login/logout') ?>"><i class="lnr lnr-exit"></i> <span>Logout</span></a></li>
							</ul>
						</li>
						<!-- <li>
							<a class="update-pro" href="https://www.themeineed.com/downloads/klorofil-pro-bootstrap-admin-dashboard-template/?utm_source=klorofil&utm_medium=template&utm_campaign=KlorofilPro" title="Upgrade to Pro" target="_blank"><i class="fa fa-rocket"></i> <span>UPGRADE TO PRO</span></a>
						</li> -->
					</ul>
				</div>
			</div>
		</nav>
		<!-- END NAVBAR -->
		<!-- LEFT SIDEBAR -->
		<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav">
						<li><a href="<?php echo site_url('Dashboard') ?>" class="<?php if($this->uri->segment('1') == "Dashboard"){echo "active";} ?>"> <span>Beranda</span></a></li>
						<li><a href="<?php echo site_url('Bayi') ?>" class="<?php if($this->uri->segment('1') == "Bayi"){echo "active";} ?>"> <span>Data Balita/Bayi</span></a></li>
						<li><a href="<?php echo site_url('Penimbangan') ?>" class="<?php if($this->uri->segment('1') == "Penimbangan"){echo "active";} ?>"><span>Penimbangan dan Imunisasi</span></a></li>
						<li><a href="<?php echo site_url('Laporan/Laporanbulanan') ?>" class="<?php if($this->uri->segment('1') == "Laporan"){echo "active";} ?>"><span>Laporan Bulanan</span></a></li>
					</ul>
				</nav>
			</div>
		</div>
		<!-- END LEFT SIDEBAR -->
		<!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<!-- OVERVIEW -->
					<?php $this->load->view($content); ?>
					<!-- END OVERVIEW -->

				</div>
				<!-- END TODO LIST -->
			</div>
		</div>
	</div>
	<!-- END MAIN -->
	<div class="clearfix"></div>
	<footer>
		<div class="container-fluid">
			<p class="copyright">&copy; 2017 <a href="https://www.themeineed.com" target="_blank">Theme I Need</a>. All Rights Reserved. | Pendidikan Ilmu Komputer, Universitas Lambung Mangkurat</p>
		</div>
	</footer>
	<!-- END WRAPPER -->
	<!-- Javascript -->
	<script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/vendor/chartist/js/chartist.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/scripts/klorofil-common.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/plugin/flatpickr/dist/flatpickr.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/plugin/datatables/datatables.min.js"></script>
	<script type="text/javascript">
		flatpickr("#flatpickr", {
			dateFormat: "Y-m-d",
		});

		$(document).ready(function(){
			$('#mytable').DataTable();
		});
	</script>
</body>

</html>
