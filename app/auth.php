<?php
error_reporting(E_ALL);
ob_start();
ini_set('display_errors', 1);
date_default_timezone_set("Asia/Bangkok");

$userID = isset($_SESSION['admin']['id']) ? $_SESSION['admin']['id'] : null;
$LANG = isset($_SESSION['LANG']) ? $_SESSION['LANG'] : "Th";
?>
<!DOCTYPE html>
<html lang="en" ng-app="myApp">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Favicon icon-->
	<link rel="shortcut icon" type="image/x-icon" href="../assets/img/favicon.jpg">

	<!-- Libs CSS -->
	<link href="../assets/fonts/feather/feather.css" rel="stylesheet">
	<link href="../assets/libs/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet" />
	<link href="../assets/libs/dragula/dist/dragula.min.css" rel="stylesheet" />
	<link href="../assets/libs/@mdi/font/css/materialdesignicons.min.css" rel="stylesheet" />
	<link href="../assets/libs/dropzone/dist/dropzone.css" rel="stylesheet" />
	<link href="../assets/libs/magnific-popup/dist/magnific-popup.css" rel="stylesheet" />
	<link href="../assets/libs/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
	<link href="../assets/libs/@yaireo/tagify/dist/tagify.css" rel="stylesheet">
	<link href="../assets/libs/tiny-slider/dist/tiny-slider.css" rel="stylesheet">
	<link href="../assets/libs/tippy.js/dist/tippy.css" rel="stylesheet">
	<link href="../assets/libs/datatables.net-bs5/css/dataTables.bootstrap5.min.css" rel="stylesheet">
	<link href="../assets/libs/prismjs/themes/prism-okaidia.min.css" rel="stylesheet">
	<link href="../assets/libs/simplebar/dist/simplebar.min.css" rel="stylesheet">
	<link href="../assets/libs/nouislider/dist/nouislider.min.css" rel="stylesheet">
	<link href="../assets/libs/glightbox/dist/css/glightbox.min.css" rel="stylesheet">

	<script type="text/javascript">
		var PATH = '<?php echo $ASSETS_URL; ?>';
		// var USERID = '<?php //echo $userID; ?>';
		var LANG = '<?php echo $LANG; ?>';
		var LINK = '<?php echo $LINK_URL; ?>';
	</script>
	<script src="../assets/libs/jquery/dist/jquery.min.js"></script>
	<script src="../node_modules/angular/angular.min.js"></script>
	<script src="../node_modules/angular-sanitize/angular-sanitize.min.js"></script>
	<script src="<?php echo $ASSETS_URL; ?>node_modules/angular-file-upload/dist/angular-file-upload.min.js"></script>
	<script src="<?php echo $ASSETS_URL; ?>node_modules/angular-utils-pagination/dirPagination.js"></script>
	<script src="../node_modules/ng-notify/dist/ng-notify.min.js"></script>
	<script src="../plugin/quill/quill.js"></script>
	<script src="../node_modules/ng-quill/src/ng-quill.js"></script>
	<script src="../conf/myApp//myApp.js"></script>
	<script src="../conf/myApp/myAppController.js"></script>
	<script src="../app/app_admin/controller/app_adminController.js"></script>

	<link rel="stylesheet" href="../plugin/quill/quill.snow.css">
	<link rel="stylesheet" href="../plugin/quill/quill.bubble.css">
	<link rel="stylesheet" href="../node_modules/ng-notify/dist/ng-notify.min.css" type="text/css">
	<!-- Theme CSS -->
	<link rel="stylesheet" href="../assets/css/theme.min.css">
	<link rel="stylesheet" href="../assets/css/custom.css">
	<title> ADMINISTRATOR LOGIN </title>

</head>

<body ng-controller="myAppController">
	<!-- Page content -->

	<div class="container d-flex flex-column" ng-controller="app_adminController">
		<div class="row align-items-center justify-content-center g-0 min-vh-100">

			<div class="col-lg-5 col-md-8 py-8 py-xl-0">
				<!-- Card -->
				<div class="card shadow ">
					<!-- Card body -->
					<div class="card-body p-6">
						<div class="mb-4">
							<a href="<?php echo $ASSETS_URL; ?>"><img src="../assets/img/header.jpg" class="mb-4 w-100" alt=""></a>
							<h1 class="mb-1 fw-bold">เข้าสู่ระบบ</h1>
							<!-- <span>Don’t have an account? <a href="sign-up.html" class="ms-1">Sign up</a></span> -->
						</div>
						<!-- Form -->
						<form name="authAdminForm" autocomplete="off" method="POST" ng-submit="adminAuth(user);">
								<!-- Username -->

							<div class="mb-3">
								<label for="email" class="form-label">ชื่อผู้ใช้ หรือ อีเมล</label>
								<input type="text" id="email" class="form-control" name="email" placeholder="ชื่อผู้ใช้ หรือ อีเมล" required ng-model="user.xusername">
							</div>
								<!-- Password -->
							<div class="mb-3">
								<label for="password" class="form-label">รหัสผ่าน</label>
								<input type="password" id="password" class="form-control" name="password" placeholder="**************"
									required ng-model="user.xpassword">
							</div>

								<!-- Checkbox -->
							 
							<!-- <div class="d-lg-flex justify-content-between align-items-center mb-4">
								<div class="form-check">
									<input type="checkbox" class="form-check-input" id="rememberme">
									<label class="form-check-label " for="rememberme">Remember me</label>
								</div>
								<div>
									<a href="forget-password.html">Forgot your password?</a>
								</div>
							</div> -->
							<div>
								<!-- Button -->
								<div class="d-grid">
								<button type="submit" class="btn btn-primary ">เข้าสู่ระบบ</button>
							</div>
							</div>
							<hr class="my-4">
							<?php include('../app/layout/component/toast.php'); ?>
							
							<?php /* ?><div class="mt-4 text-center">
								<!--Facebook-->
								<a href="#" class="btn-social btn-social-outline btn-facebook">
									<i class="mdi mdi-facebook fs-4"></i>
								</a>
								<!--Twitter-->
								<a href="#" class="btn-social btn-social-outline btn-twitter">
									<i class="mdi mdi-twitter fs-4"></i>
								</a>
								<!--LinkedIn-->
								<a href="#" class="btn-social btn-social-outline btn-linkedin">
									<i class="mdi mdi-linkedin"></i>
								</a>
								<!--GitHub-->
								<a href="#" class="btn-social btn-social-outline btn-github">
									<i class="mdi mdi-github"></i>
								</a>
							</div><?php */ ?>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- <div class="toast">
			<div class="toast-header">
				Toast Header
			</div>
			<div class="toast-body">
				Some text inside the toast body
			</div>
		</div> -->
	</div>
<!-- custom content -->
	<!-- Scripts -->
	<!-- Libs JS -->
<script src="../assets/libs/jquery/dist/jquery.min.js"></script>
<script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="../assets/libs/odometer/odometer.min.js"></script>
<script src="../assets/libs/magnific-popup/dist/jquery.magnific-popup.min.js"></script>
<script src="../assets/libs/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
<script src="../assets/libs/flatpickr/dist/flatpickr.min.js"></script>
<script src="../assets/libs/inputmask/dist/jquery.inputmask.min.js"></script>
<script src="../assets/libs/apexcharts/dist/apexcharts.min.js"></script>
<script src="../assets/libs/quill/dist/quill.min.js"></script>
<script src="../assets/libs/file-upload-with-preview/dist/file-upload-with-preview.iife.js"></script>
<script src="../assets/libs/dragula/dist/dragula.min.js"></script>
<script src="../assets/libs/bs-stepper/dist/js/bs-stepper.min.js"></script>
<script src="../assets/libs/dropzone/dist/min/dropzone.min.js"></script>
<script src="../assets/libs/jQuery.print/jQuery.print.js"></script>
<script src="../assets/libs/prismjs/prism.js"></script>
<script src="../assets/libs/prismjs/components/prism-scss.min.js"></script>
<script src="../assets/libs/@yaireo/tagify/dist/tagify.min.js"></script>
<script src="../assets/libs/tiny-slider/dist/min/tiny-slider.js"></script>
<script src="../assets/libs/@popperjs/core/dist/umd/popper.min.js"></script>
<script src="../assets/libs/tippy.js/dist/tippy-bundle.umd.min.js"></script>
<script src="../assets/libs/typed.js/lib/typed.min.js"></script>
<script src="../assets/libs/jsvectormap/dist/js/jsvectormap.min.js"></script>
<script src="../assets/libs/jsvectormap/dist/maps/world.js"></script>
<script src="../assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../assets/libs/datatables.net-bs5/js/dataTables.bootstrap5.min.js"></script>
<script src="../assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="../assets/libs/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js"></script>
<script src="../assets/libs/prismjs/plugins/toolbar/prism-toolbar.min.js"></script>
<script src="../assets/libs/prismjs/plugins/copy-to-clipboard/prism-copy-to-clipboard.min.js"></script>
<script src="../assets/libs/fullcalendar/main.min.js"></script>
<script src="../assets/libs/@lottiefiles/lottie-player/dist/lottie-player.js"></script>
<script src="../assets/libs/simplebar/dist/simplebar.min.js"></script>
<script src="../assets/libs/nouislider/dist/nouislider.min.js"></script>
<script src="../assets/libs/wnumb/wNumb.min.js"></script>
<script src="../assets/libs/glightbox/dist/js/glightbox.min.js"></script>


<!-- CDN File for moment -->
<script src='https://cdn.jsdelivr.net/npm/moment@2.29.1/min/moment.min.js'></script>




<!-- Theme JS -->
<script src="../assets/js/theme.min.js"></script>
</body>

</html>