<?php
error_reporting(E_ALL);
ob_start();
ini_set('display_errors', 1);
date_default_timezone_set("Asia/Bangkok");
$actual_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://".$_SERVER['HTTP_HOST'];
$actual_page = $_SERVER['REQUEST_URI'];
$actual_link = urlencode($actual_url.$actual_page);
?>
<!DOCTYPE html>
<html lang="en" ng-app="myApp">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" type="image/x-icon" href="./assets/img/favicon.jpg">
	
	<meta property="og:url" content="<?php echo $actual_link; ?>" />
	<meta property="og:image" content="<?php echo $actual_url.$FORDER; ?>/assets/img/header.jpg" />
	<meta property="og:type" content="article" />
	<meta property="og:title" content="FMS LifeLong Learning" />
	<!-- <meta property="og:description" content="DESCRIPTION OF PAGE" /> -->

	<!-- Libs CSS -->
	<link href="./assets/fonts/feather/feather.css" rel="stylesheet">
	<link href="./assets/libs/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet" />
	<link href="./assets/libs/dragula/dist/dragula.min.css" rel="stylesheet" />
	<link href="./assets/libs/@mdi/font/css/materialdesignicons.min.css" rel="stylesheet" />
	<link href="./assets/libs/dropzone/dist/dropzone.css" rel="stylesheet" />
	<link href="./assets/libs/magnific-popup/dist/magnific-popup.css" rel="stylesheet" />
	<link href="./assets/libs/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
	<link href="./assets/libs/@yaireo/tagify/dist/tagify.css" rel="stylesheet">
	<link href="./assets/libs/tiny-slider/dist/tiny-slider.css" rel="stylesheet">
	<link href="./assets/libs/tippy.js/dist/tippy.css" rel="stylesheet">
	<link href="./assets/libs/datatables.net-bs5/css/dataTables.bootstrap5.min.css" rel="stylesheet">
	<link href="./assets/libs/prismjs/themes/prism-okaidia.min.css" rel="stylesheet">
	<link href="./assets/libs/simplebar/dist/simplebar.min.css" rel="stylesheet">
	<link href="./assets/libs/nouislider/dist/nouislider.min.css" rel="stylesheet">
	<link href="./assets/libs/glightbox/dist/css/glightbox.min.css" rel="stylesheet">


	<script type="text/javascript">
		var PATH = '<?php echo $ASSETS_URL; ?>';
		// var USERID = '<?php //echo $userID; ?>';
		var LANG = '<?php echo $LANG; ?>';
		var LINK = '<?php echo $LINK_URL; ?>';
	</script>
	<script src="./assets/libs/jquery/dist/jquery.min.js"></script>
	<script src="./node_modules/angular/angular.min.js"></script>
	<script src="./node_modules/angular-file-upload/dist/angular-file-upload.min.js"></script>
	<script src="./node_modules/angular-utils-pagination/dirPagination.js"></script>

	<script src="./node_modules/angular-sanitize/angular-sanitize.min.js"></script>
	<script src="./node_modules/ng-notify/dist/ng-notify.min.js"></script>
	<script src="./plugin/quill/quill.js"></script>
	<script src="./node_modules/ng-quill/src/ng-quill.js"></script>
	<script src="./conf/myApp//myApp.js"></script>
	<script src="./conf/myApp/myAppController.js"></script>

	<link rel="stylesheet" href="./plugin/quill/quill.snow.css">
	<link rel="stylesheet" href="./plugin/quill/quill.bubble.css">
	<link rel="stylesheet" href="./node_modules/ng-notify/dist/ng-notify.min.css" type="text/css">
	<!-- Theme CSS -->
	<link rel="stylesheet" href="./node_modules/@fortawesome/fontawesome-free/css/all.min.css">
	<link rel="stylesheet" href="./assets/css/theme.min.css">
	<link rel="stylesheet" href="./assets/css/custom.css">

	<title> KICK-Start </title>
</head>

<body ng-controller="myAppController">
<div id="loading" data-loading>
	<div class="load">
	  <hr/><hr/><hr/><hr/>
	</div>
</div>
	<!-- Navbar -->
	<!-- navbar login -->
	<?php include('app/layout/component/navbar.php'); ?>

	<div style="margin-top: 53px;">
	<!-- <div class="py-8 py-lg-16 bg-light-gradient-top "> -->
		<!-- <div class="container"> -->
			<?php 
				include_once("./_connect.php");
				$conn->PATH = "./";
				$str_pathFile = "app/".$DOMAIN."/view/".$ACTION.".php";
				if (file_exists($str_pathFile)){
					include_once($str_pathFile);
				}else{
					include_once("app/error/view/404.php");
				}
				$conn = null;
			?>
		<!-- </div> -->
	<!-- </div> -->
	</div>

	<!-- <div class="py-lg-16 py-10 bg-dark" style="background: url(./assets/images/background/course-graphics.svg)no-repeat; background-size: cover; background-position: top center">
		<div class="container">
			<div class="row justify-content-center text-center">
				<div class="col-md-9 col-12">
					<h2 class="display-4 text-white">Join more than 1 million learners worldwide</h2>
					<p class="lead text-white px-lg-12 mb-6">Effective learning starts with assessment. Learning a new skill is hard work—Signal makes it easier.</p>
						<div class="d-grid d-md-block">
					<a href="../sign-up.html" class="btn btn-primary mb-2 mb-md-0">Start Learning for Free</a>
					<a href="../sign-up.html" class="btn btn-info">Geeks for Business</a>
				</div>
				</div>
			</div>
		</div>
	</div> -->


	<?php include('app/layout/component/footer.php'); ?>


	<!-- Scripts -->
	<!-- Libs JS -->

<script src="./assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="./assets/libs/odometer/odometer.min.js"></script>
<script src="./assets/libs/magnific-popup/dist/jquery.magnific-popup.min.js"></script>
<script src="./assets/libs/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
<script src="./assets/libs/flatpickr/dist/flatpickr.min.js"></script>
<script src="./assets/libs/inputmask/dist/jquery.inputmask.min.js"></script>
<script src="./assets/libs/apexcharts/dist/apexcharts.min.js"></script>
<script src="./assets/libs/quill/dist/quill.min.js"></script>
<script src="./assets/libs/file-upload-with-preview/dist/file-upload-with-preview.iife.js"></script>
<script src="./assets/libs/dragula/dist/dragula.min.js"></script>
<script src="./assets/libs/bs-stepper/dist/js/bs-stepper.min.js"></script>
<script src="./assets/libs/dropzone/dist/min/dropzone.min.js"></script>
<script src="./assets/libs/jQuery.print/jQuery.print.js"></script>
<script src="./assets/libs/prismjs/prism.js"></script>
<script src="./assets/libs/prismjs/components/prism-scss.min.js"></script>
<script src="./assets/libs/@yaireo/tagify/dist/tagify.min.js"></script>
<script src="./assets/libs/tiny-slider/dist/min/tiny-slider.js"></script>
<script src="./assets/libs/@popperjs/core/dist/umd/popper.min.js"></script>
<script src="./assets/libs/tippy.js/dist/tippy-bundle.umd.min.js"></script>
<script src="./assets/libs/typed.js/lib/typed.min.js"></script>
<script src="./assets/libs/jsvectormap/dist/js/jsvectormap.min.js"></script>
<script src="./assets/libs/jsvectormap/dist/maps/world.js"></script>
<script src="./assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="./assets/libs/datatables.net-bs5/js/dataTables.bootstrap5.min.js"></script>
<script src="./assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="./assets/libs/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js"></script>
<script src="./assets/libs/prismjs/plugins/toolbar/prism-toolbar.min.js"></script>
<script src="./assets/libs/prismjs/plugins/copy-to-clipboard/prism-copy-to-clipboard.min.js"></script>
<script src="./assets/libs/fullcalendar/main.min.js"></script>
<script src="./assets/libs/@lottiefiles/lottie-player/dist/lottie-player.js"></script>
<script src="./assets/libs/simplebar/dist/simplebar.min.js"></script>
<script src="./assets/libs/nouislider/dist/nouislider.min.js"></script>
<script src="./assets/libs/wnumb/wNumb.min.js"></script>
<script src="./assets/libs/glightbox/dist/js/glightbox.min.js"></script>

<!-- CDN File for moment -->
<script src='https://cdn.jsdelivr.net/npm/moment@2.29.1/min/moment.min.js'></script>

<!-- Theme JS -->
<script src="./assets/js/theme.min.js"></script>
<script src="./assets/js/vendors/tnsSlider.js"></script>
<script src="./assets/js/vendors/tooltip.js"></script>


<script type="text/javascript">

// const fb = document.getElementById('fb');
// fb.addEventListener('click', shareonFacebook);

function shareonFacebook(url){
	const navUrl = 'https://www.facebook.com/sharer/sharer.php?u=' + url;
	window.open(navUrl , '_blank');
}

// const tweet = document.getElementById('twitter');
// tweet.addEventListener('click', shareOnTwitter);
function shareOnTwitter(url) {
	const navUrl ='https://twitter.com/intent/tweet?text=' +url;
	window.open(navUrl, '_blank');
}

function openModal(idModal){
	$('#'+idModal).modal('show');
}
function closeModal(idModal){
	$('#'+idModal).modal('hide');
}

function openOffcanvas(idModal){
	$('#'+idModal).offcanvas('show');
}
function closeOffcanvas(idModal){
	$('#'+idModal).offcanvas('hide');
}
</script>

</body>

</html>