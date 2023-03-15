<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title><?= $title; ?></title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="/assets/img/icon.ico" type="image/x-icon" />

	<!-- Fonts and icons -->
	<script src="/assets/js/plugin/webfont/webfont.min.js"></script>
	<script>
		WebFont.load({
			google: {
				"families": ["Lato:300,400,700,900"]
			},
			custom: {
				"families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"],
				urls: ['/assets/css/fonts.min.css']
			},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<!-- CSS Files -->
	<link rel="stylesheet" href="/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="/assets/css/atlantis.css">
</head>

<body class="login">
	<div class="wrapper wrapper-login">
		<div class="container container-login animated fadeIn">
			<h3 class="text-center">Sign In To Admin</h3>
			<div class="login-form">
				<form action="/auth/logingin" method="post">
					<div class="form-group form-floating-label">
						<input id="nik" name="nik" type="text" class="form-control input-border-bottom" required>
						<label for="nik" class="placeholder">NIK</label>
					</div>
					<div class="form-group form-floating-label">
						<input id="password" name="password" type="password" class="form-control input-border-bottom" required>
						<label for="password" class="placeholder">Password</label>
						<div class="show-password">
							<i class="icon-eye"></i>
						</div>
					</div>
					<div class="row form-sub m-0">
						<div class="custom-control custom-checkbox">
							<input type="checkbox" class="custom-control-input" id="rememberme" name="rememberme">
							<label class="custom-control-label" for="rememberme">Remember Me</label>
						</div>
					</div>
					<div class="form-action mb-3">
						<button type="submit" class="btn btn-primary btn-rounded btn-login"> Sign In</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<script src="/assets/js/core/jquery.3.2.1.min.js"></script>
	<script src="/assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
	<script src="/assets/js/core/popper.min.js"></script>
	<script src="/assets/js/core/bootstrap.min.js"></script>
	<script src="/assets/js/atlantis.min.js"></script>

	<!-- Bootstrap Notify -->
	<script src="/assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>

	<script>
		function notify(message) {
			var placementFrom = 'top';
			var placementAlign = 'center';
			var state = 'danger';
			var style = 'withicon';
			var content = {};

			content.message = message;
			content.title = "Warning!";
			content.icon = "fas fa-info";
			content.url = "#";

			$.notify(content, {
				type: state,
				placement: {
					from: placementFrom,
					align: placementAlign,
				},
				time: 1000,
				delay: 0,
			});
		}

		<?php
		if (session()->getFlashdata('message')) {
			$message = session()->getFlashdata('message');
			echo "notify('$message');";
		}
		?>
	</script>
</body>

</html>