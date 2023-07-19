<?= $this->extend('admin/template/layout'); ?>

<?= $this->section('admin'); ?>

<div class="container">
	<div class="panel-header bg-primary-gradient">
		<div class="page-inner py-5">
			<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
				<div>
					<h2 class="text-white pb-2 fw-bold">Dashboard Admin</h2>
					<h5 class="text-white op-7 mb-2">Sistem informasi kependudukan RT XX RW XX Kelurahan XXX</h5>
				</div>
			</div>
		</div>
	</div>
	<div class="page-inner mt--5">
		<div class="row mt--2">
			<div class="col-md-1"></div>
			<div class="col-md-10">
				<div class="card full-height">
					<div class="card-body">
						<div class="card-title text-center">Statistik Kependudukan</div>
						<div class="d-flex flex-wrap justify-content-around pb-2 pt-4">
							<div class="px-2 pb-2 pb-md-0 text-center">
								<div id="circles-1"></div>
								<h6 class="fw-bold mt-3 mb-0">Jumlah KK</h6>
							</div>
							<div class="px-2 pb-2 pb-md-0 text-center">
								<div id="circles-2"></div>
								<h6 class="fw-bold mt-3 mb-0">Jumlah Penduduk</h6>
							</div>
							<div class="px-2 pb-2 pb-md-0 text-center">
								<div id="circles-3"></div>
								<h6 class="fw-bold mt-3 mb-0">Administrasi</h6>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">

			<div class="col-md-6">
				<div class="card">
					<div class="card-header">
						<div class="card-title">Persebaran Jenis Kelamin</div>
					</div>
					<div class="card-body">
						<div class="chart-container">
							<canvas id="Gender" style="width: 50%; height: 50%"></canvas>
						</div>
					</div>
				</div>
			</div>


			<div class="col-md-6">
				<div class="card">
					<div class="card-header">
						<div class="card-title">Persebaran Usia</div>
					</div>
					<div class="card-body">
						<div class="chart-container">
							<canvas id="Usia" style="width: 50%; height: 50%"></canvas>
						</div>
					</div>
				</div>
			</div>

			<div class="col-md-6">
				<div class="card">
					<div class="card-header">
						<div class="card-title">Status Perkawinan</div>
					</div>
					<div class="card-body">
						<div class="chart-container">
							<canvas id="status_perkawinan" style="width: 50%; height: 50%"></canvas>
						</div>
					</div>
				</div>
			</div>

			<div class="col-md-6">
				<div class="card">
					<div class="card-header">
						<div class="card-title">Pendidikan</div>
					</div>
					<div class="card-body">
						<div class="chart-container">
							<canvas id="pendidikan" style="width: 50%; height: 50%"></canvas>
						</div>
					</div>
				</div>
			</div>

			<div class="col-md-3">
			</div>

			<div class="col-md-6">
				<div class="card">
					<div class="card-header">
						<div class="card-title">Status Kependudukan</div>
					</div>
					<div class="card-body">
						<div class="chart-container">
							<canvas id="status_kependudukan" style="width: 50%; height: 50%"></canvas>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?= $this->endSection(); ?>

<?= $this->section('script'); ?>

<script>
	Circles.create({
		id: 'circles-1',
		radius: 45,
		value: 60,
		maxValue: 100,
		width: 7,
		text: 5,
		colors: ['#f1f1f1', '#FF9E27'],
		duration: 400,
		wrpClass: 'circles-wrp',
		textClass: 'circles-text',
		styleWrapper: true,
		styleText: true
	})

	Circles.create({
		id: 'circles-2',
		radius: 45,
		value: 70,
		maxValue: 100,
		width: 7,
		text: 36,
		colors: ['#f1f1f1', '#2BB930'],
		duration: 400,
		wrpClass: 'circles-wrp',
		textClass: 'circles-text',
		styleWrapper: true,
		styleText: true
	})

	Circles.create({
		id: 'circles-3',
		radius: 45,
		value: 40,
		maxValue: 100,
		width: 7,
		text: 12,
		colors: ['#f1f1f1', '#F25961'],
		duration: 400,
		wrpClass: 'circles-wrp',
		textClass: 'circles-text',
		styleWrapper: true,
		styleText: true
	})
</script>

<script>
	//Notify
	$.notify({
		icon: 'flaticon-alarm-1',
		title: 'Welcome Back!',
		message: 'Selamat datang di dashboard admin',
	}, {
		type: 'secondary',
		placement: {
			from: "bottom",
			align: "right"
		},
		time: 1000,
	});

	//Chart
	var Gender = document.getElementById('Gender').getContext('2d');

	var Gender = new Chart(Gender, {
		type: 'pie',
		data: {
			datasets: [{
				data: [50, 35],
				backgroundColor: ["#1d7af3", "#f3545d", "#fdaf4b"],
				borderWidth: 0
			}],
			labels: ['Laki - Laki', 'Perempuan']
		},
		options: {
			responsive: true,
			maintainAspectRatio: false,
			legend: {
				position: 'bottom',
				labels: {
					fontColor: 'rgb(154, 154, 154)',
					fontSize: 11,
					usePointStyle: true,
					padding: 20
				}
			},
			pieceLabel: {
				render: 'percentage',
				fontColor: 'white',
				fontSize: 14,
			},
			tooltips: {
				bodySpacing: 4,
				mode: "nearest",
				intersect: 0,
				position: "nearest",
				xPadding: 10,
				yPadding: 10,
				caretPadding: 10
			},
			layout: {
				padding: {
					left: 20,
					right: 20,
					top: 20,
					bottom: 20
				}
			}
		}
	})

	var Usia = document.getElementById('Usia').getContext('2d');

	var Usia = new Chart(Usia, {
		type: 'pie',
		data: {
			datasets: [{
				data: [100, 35, 15, 33, 100],
				backgroundColor: ["#1d7af3", "#f3545d", "#fdaf4b", "#3CC47C", "#FF00FF"],
				borderWidth: 0
			}],
			labels: ['<17', '17-25', '25-35', '35-50', '>50']
		},
		options: {
			responsive: true,
			maintainAspectRatio: false,
			legend: {
				position: 'bottom',
				labels: {
					fontColor: 'rgb(154, 154, 154)',
					fontSize: 11,
					usePointStyle: true,
					padding: 20
				}
			},
			pieceLabel: {
				render: 'percentage',
				fontColor: 'white',
				fontSize: 14,
			},
			tooltips: {
				bodySpacing: 4,
				mode: "nearest",
				intersect: 0,
				position: "nearest",
				xPadding: 10,
				yPadding: 10,
				caretPadding: 10
			},
			layout: {
				padding: {
					left: 20,
					right: 20,
					top: 20,
					bottom: 20
				}
			}
		}
	})

	var status_perkawinan = document.getElementById('status_perkawinan').getContext('2d');

	var status_perkawinan = new Chart(status_perkawinan, {
		type: 'pie',
		data: {
			datasets: [{
				data: [100, 35, 15, 33],
				backgroundColor: ["#1d7af3", "#f3545d", "#fdaf4b", "#3CC47C"],
				borderWidth: 0
			}],
			labels: ['Belum Kawin', 'Kawin', 'Cerai Hidup', 'Cerai Mati']
		},
		options: {
			responsive: true,
			maintainAspectRatio: false,
			legend: {
				position: 'bottom',
				labels: {
					fontColor: 'rgb(154, 154, 154)',
					fontSize: 11,
					usePointStyle: true,
					padding: 20
				}
			},
			pieceLabel: {
				render: 'percentage',
				fontColor: 'white',
				fontSize: 14,
			},
			tooltips: {
				bodySpacing: 4,
				mode: "nearest",
				intersect: 0,
				position: "nearest",
				xPadding: 10,
				yPadding: 10,
				caretPadding: 10
			},
			layout: {
				padding: {
					left: 20,
					right: 20,
					top: 20,
					bottom: 20
				}
			}
		}
	})

	var pendidikan = document.getElementById('pendidikan').getContext('2d');

	var pendidikan = new Chart(pendidikan, {
		type: 'pie',
		data: {
			datasets: [{
				data: [20, 20, 20, 20, 20, 20, 20, 20, 20, 20, 20],
				backgroundColor: [
					"#1d7af3", "#f3545d", "#fdaf4b", "#3CC47C", "#FFA500", "#800080", "#FFC0CB", "#A52A2A", "#808080", "#000000", "#FF00FF", "#9C27B0", "#4CAF50", "#FF5722"
				],
				borderWidth: 0
			}],
			labels: ['Tidak Sekolah', 'SD', 'SMP', 'SMA', 'D1', 'D2', 'D3', 'D4', 'S1', 'S2', 'S3']
		},
		options: {
			responsive: true,
			maintainAspectRatio: false,
			legend: {
				position: 'bottom',
				labels: {
					fontColor: 'rgb(154, 154, 154)',
					fontSize: 11,
					usePointStyle: true,
					padding: 20
				}
			},
			pieceLabel: {
				render: 'percentage',
				fontColor: 'white',
				fontSize: 14,
			},
			tooltips: {
				bodySpacing: 4,
				mode: "nearest",
				intersect: 0,
				position: "nearest",
				xPadding: 10,
				yPadding: 10,
				caretPadding: 10
			},
			layout: {
				padding: {
					left: 20,
					right: 20,
					top: 20,
					bottom: 20
				}
			}
		}
	})

	var status_kependudukan = document.getElementById('status_kependudukan').getContext('2d');

	var status_kependudukan = new Chart(status_kependudukan, {
		type: 'pie',
		data: {
			datasets: [{
				data: [100, 35, 15, 33],
				backgroundColor: ["#1d7af3", "#f3545d", "#fdaf4b", "#3CC47C"],
				borderWidth: 0
			}],
			labels: ['Penduduk Tetap', 'Penduduk Sementara', 'Penduduk Pendatang', 'Penduduk Pindahan']
		},
		options: {
			responsive: true,
			maintainAspectRatio: false,
			legend: {
				position: 'bottom',
				labels: {
					fontColor: 'rgb(154, 154, 154)',
					fontSize: 11,
					usePointStyle: true,
					padding: 20
				}
			},
			pieceLabel: {
				render: 'percentage',
				fontColor: 'white',
				fontSize: 14,
			},
			tooltips: {
				bodySpacing: 4,
				mode: "nearest",
				intersect: 0,
				position: "nearest",
				xPadding: 10,
				yPadding: 10,
				caretPadding: 10
			},
			layout: {
				padding: {
					left: 20,
					right: 20,
					top: 20,
					bottom: 20
				}
			}
		}
	})
</script>

<?= $this->endSection(); ?>