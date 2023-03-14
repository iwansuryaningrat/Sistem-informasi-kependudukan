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
								<h6 class="fw-bold mt-3 mb-0">Subscribers</h6>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						<div class="card-head-row">
							<div class="card-title text-center">Persebaran Penduduk</div>
						</div>
					</div>
					<div class="card-body">
						<div class="chart-container" style="min-height: 375px">
							<canvas id="statisticsChart"></canvas>
						</div>
						<div id="myChartLegend"></div>
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

	var totalIncomeChart = document.getElementById('totalIncomeChart').getContext('2d');

	var mytotalIncomeChart = new Chart(totalIncomeChart, {
		type: 'bar',
		data: {
			labels: ["S", "M", "T", "W", "T", "F", "S", "S", "M", "T"],
			datasets: [{
				label: "Total Income",
				backgroundColor: '#ff9e27',
				borderColor: 'rgb(23, 125, 255)',
				data: [6, 4, 9, 5, 4, 6, 4, 3, 8, 10],
			}],
		},
		options: {
			responsive: true,
			maintainAspectRatio: false,
			legend: {
				display: false,
			},
			scales: {
				yAxes: [{
					ticks: {
						display: false //this will remove only the label
					},
					gridLines: {
						drawBorder: false,
						display: false
					}
				}],
				xAxes: [{
					gridLines: {
						drawBorder: false,
						display: false
					}
				}]
			},
		}
	});

	$('#lineChart').sparkline([105, 103, 123, 100, 95, 105, 115], {
		type: 'line',
		height: '70',
		width: '100%',
		lineWidth: '2',
		lineColor: '#ffa534',
		fillColor: 'rgba(255, 165, 52, .14)'
	});
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

	var ctx = document.getElementById("statisticsChart").getContext("2d");

	var statisticsChart = new Chart(ctx, {
		type: "line",
		data: {
			labels: [
				"Jan",
				"Feb",
				"Mar",
				"Apr",
				"May",
				"Jun",
				"Jul",
				"Aug",
				"Sep",
				"Oct",
				"Nov",
				"Dec",
			],
			datasets: [{
					label: "Subscribers",
					borderColor: "#f3545d",
					pointBackgroundColor: "rgba(243, 84, 93, 0.6)",
					pointRadius: 0,
					backgroundColor: "rgba(243, 84, 93, 0.4)",
					legendColor: "#f3545d",
					fill: true,
					borderWidth: 2,
					data: [154, 184, 175, 203, 210, 231, 240, 278, 252, 312, 320, 374],
				},
				{
					label: "New Visitors",
					borderColor: "#fdaf4b",
					pointBackgroundColor: "rgba(253, 175, 75, 0.6)",
					pointRadius: 0,
					backgroundColor: "rgba(253, 175, 75, 0.4)",
					legendColor: "#fdaf4b",
					fill: true,
					borderWidth: 2,
					data: [256, 230, 245, 287, 240, 250, 230, 295, 331, 431, 456, 521],
				},
				{
					label: "Active Users",
					borderColor: "#177dff",
					pointBackgroundColor: "rgba(23, 125, 255, 0.6)",
					pointRadius: 0,
					backgroundColor: "rgba(23, 125, 255, 0.4)",
					legendColor: "#177dff",
					fill: true,
					borderWidth: 2,
					data: [542, 480, 430, 550, 530, 453, 380, 434, 568, 610, 700, 900],
				},
			],
		},
		options: {
			responsive: true,
			maintainAspectRatio: false,
			legend: {
				display: false,
			},
			tooltips: {
				bodySpacing: 4,
				mode: "nearest",
				intersect: 0,
				position: "nearest",
				xPadding: 10,
				yPadding: 10,
				caretPadding: 10,
			},
			layout: {
				padding: {
					left: 5,
					right: 5,
					top: 15,
					bottom: 15
				},
			},
			scales: {
				yAxes: [{
					ticks: {
						fontStyle: "500",
						beginAtZero: false,
						maxTicksLimit: 5,
						padding: 10,
					},
					gridLines: {
						drawTicks: false,
						display: false,
					},
				}, ],
				xAxes: [{
					gridLines: {
						zeroLineColor: "transparent",
					},
					ticks: {
						padding: 10,
						fontStyle: "500",
					},
				}, ],
			},
			legendCallback: function(chart) {
				var text = [];
				text.push('<ul class="' + chart.id + '-legend html-legend">');
				for (var i = 0; i < chart.data.datasets.length; i++) {
					text.push(
						'<li><span style="background-color:' +
						chart.data.datasets[i].legendColor +
						'"></span>'
					);
					if (chart.data.datasets[i].label) {
						text.push(chart.data.datasets[i].label);
					}
					text.push("</li>");
				}
				text.push("</ul>");
				return text.join("");
			},
		},
	});

	var myLegendContainer = document.getElementById("myChartLegend");

	// generate HTML legend
	myLegendContainer.innerHTML = statisticsChart.generateLegend();

	// bind onClick event to all LI-tags of the legend
	var legendItems = myLegendContainer.getElementsByTagName("li");
	for (var i = 0; i < legendItems.length; i += 1) {
		legendItems[i].addEventListener("click", legendClickCallback, false);
	}
</script>

<?= $this->endSection(); ?>