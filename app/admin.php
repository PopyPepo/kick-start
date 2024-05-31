<?php
error_reporting(E_ALL);
ob_start();
ini_set('display_errors', 1);
date_default_timezone_set("Asia/Bangkok");

$userID = isset($_SESSION['adminauth']['id']) ? $_SESSION['adminauth']['id'] : null;
$ACTION = isset($rount[1]) ? $rount[1] : ($rount[0]=='layout' ? 'main' : 'list');
?>
<!DOCTYPE html>
<html lang="en" ng-app="myApp">

<head>
	<!-- Required meta tags -->
	<!-- <base href="/"> -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- <meta name="description" content="Geeks is a fully responsive and yet modern premium bootstrap 5 template & snippets. Geek is feature-rich components and beautifully designed pages that help you create the best possible website and web application projects. Bootstrap Snippet " />
	<meta name="keywords" content="Geeks UI, bootstrap, bootstrap 5, Course, Sass, landing, Marketing, admin themes, bootstrap admin, bootstrap dashboard, ui kit, web app, dash ui, admin dashboard, HTML5, multipurpose" /> -->

	<!-- Favicon icon-->
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo $ASSETS_URL; ?>assets/img/favicon.jpg">


	<!-- Libs CSS -->
	<link href="<?php echo $ASSETS_URL; ?>assets/fonts/feather/feather.css" rel="stylesheet">
	<link href="<?php echo $ASSETS_URL; ?>assets/libs/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet" />
	<link href="<?php echo $ASSETS_URL; ?>assets/libs/dragula/dist/dragula.min.css" rel="stylesheet" />
	<link href="<?php echo $ASSETS_URL; ?>assets/libs/@mdi/font/css/materialdesignicons.min.css" rel="stylesheet" />
	<link href="<?php echo $ASSETS_URL; ?>assets/libs/dropzone/dist/dropzone.css" rel="stylesheet" />
	<link href="<?php echo $ASSETS_URL; ?>assets/libs/magnific-popup/dist/magnific-popup.css" rel="stylesheet" />
	<link href="<?php echo $ASSETS_URL; ?>assets/libs/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
	<link href="<?php echo $ASSETS_URL; ?>assets/libs/@yaireo/tagify/dist/tagify.css" rel="stylesheet">
	<link href="<?php echo $ASSETS_URL; ?>assets/libs/tiny-slider/dist/tiny-slider.css" rel="stylesheet">
	<link href="<?php echo $ASSETS_URL; ?>assets/libs/tippy.js/dist/tippy.css" rel="stylesheet">
	<link href="<?php echo $ASSETS_URL; ?>assets/libs/datatables.net-bs5/css/dataTables.bootstrap5.min.css" rel="stylesheet">
	<link href="<?php echo $ASSETS_URL; ?>assets/libs/prismjs/themes/prism-okaidia.min.css" rel="stylesheet">
	<link href="<?php echo $ASSETS_URL; ?>assets/libs/simplebar/dist/simplebar.min.css" rel="stylesheet">
	<link href="<?php echo $ASSETS_URL; ?>assets/libs/nouislider/dist/nouislider.min.css" rel="stylesheet">
	<link href="<?php echo $ASSETS_URL; ?>assets/libs/glightbox/dist/css/glightbox.min.css" rel="stylesheet">
	<link href="<?php echo $ASSETS_URL; ?>assets/libs/file-upload-with-preview/dist/file-upload-with-preview.min.css" rel="stylesheet">


	<script type="text/javascript">
		var PATH = '<?php echo $ASSETS_URL; ?>';
		var USERID = '<?php echo $userID; ?>';
		var LANG = '<?php echo $LANG; ?>';
		var LINK = '<?php echo $LINK_URL; ?>';
	</script>
	<script src="<?php echo $ASSETS_URL; ?>assets/libs/jquery/dist/jquery.min.js"></script>
	<script src="<?php echo $ASSETS_URL; ?>node_modules/angular/angular.min.js"></script>
	<script src="<?php echo $ASSETS_URL; ?>node_modules/angular-sanitize/angular-sanitize.min.js"></script>
	<script src="<?php echo $ASSETS_URL; ?>node_modules/angular-file-upload/dist/angular-file-upload.min.js"></script>
	<script src="<?php echo $ASSETS_URL; ?>node_modules/angular-utils-pagination/dirPagination.js"></script>
	<script src="<?php echo $ASSETS_URL; ?>node_modules/ng-notify/dist/ng-notify.min.js"></script>
	<script src="<?php echo $ASSETS_URL; ?>plugin/quill/quill.js"></script>
	<script src="<?php echo $ASSETS_URL; ?>node_modules/ng-quill/src/ng-quill.js"></script>
	<script src="<?php echo $ASSETS_URL; ?>conf/myApp//myApp.js"></script>
	<script src="<?php echo $ASSETS_URL; ?>conf/myApp/myAppController.js"></script>

	<link rel="stylesheet" href="<?php echo $ASSETS_URL; ?>plugin/quill/quill.snow.css">
	<link rel="stylesheet" href="<?php echo $ASSETS_URL; ?>plugin/quill/quill.bubble.css">
	<link rel="stylesheet" href="<?php echo $ASSETS_URL; ?>node_modules/ng-notify/dist/ng-notify.min.css" type="text/css">
	<!-- Theme CSS -->
	<link rel="stylesheet" href="./node_modules/@fortawesome/fontawesome-free/css/all.min.css">
	<link rel="stylesheet" href="<?php echo $ASSETS_URL; ?>assets/css/theme.min.css">
	<link rel="stylesheet" href="<?php echo $ASSETS_URL; ?>assets/css/custom.css">

	<title> ADMINISTRATOR </title>
</head>

<body ng-controller="myAppController">
<div id="loading" data-loading>
	<div class="load">
	  <hr/><hr/><hr/><hr/>
	</div>
</div>
<div id="db-wrapper">
	<!-- navbar vertical -->
    <!-- Sidebar -->
	<?php include($ASSETS_URL.'app/layout/admin/sidebar.php'); ?>

	<div id="page-content">
		<?php include($ASSETS_URL.'app/layout/admin/header.php'); ?>

		<!-- Container fluid -->
        <div class="container-fluid p-4">
        	<!-- <a href="#" class="btn btn-primary me-2"  data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight">Create a Project</a> -->
        	<?php 
        		include($ASSETS_URL.'app/layout/view/breadcrumb.php');
        		$str_pathFile = $ASSETS_URL."app/".$DOMAIN."/view/".$ACTION.".php";
        		if ($DOMAIN=='layout' && $ACTION=='main'){
        			$str_pathFile = $ASSETS_URL."app/".$DOMAIN."/admin/".$ACTION.".php";
        		}
				if (file_exists($str_pathFile)){
					include_once($str_pathFile);
				}else{
					include_once($ASSETS_URL."app/error/view/404.php");
				}
			?>
        </div>
	</div>


</div>



	<!-- Scripts -->
	<!-- Libs JS -->
<script src="<?php echo $ASSETS_URL; ?>assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo $ASSETS_URL; ?>assets/libs/odometer/odometer.min.js"></script>
<script src="<?php echo $ASSETS_URL; ?>assets/libs/magnific-popup/dist/jquery.magnific-popup.min.js"></script>
<script src="<?php echo $ASSETS_URL; ?>assets/libs/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
<script src="<?php echo $ASSETS_URL; ?>assets/libs/flatpickr/dist/flatpickr.min.js"></script>
<script src="<?php echo $ASSETS_URL; ?>assets/libs/inputmask/dist/jquery.inputmask.min.js"></script>
<script src="<?php echo $ASSETS_URL; ?>assets/libs/apexcharts/dist/apexcharts.min.js"></script>
<script src="<?php echo $ASSETS_URL; ?>assets/libs/quill/dist/quill.min.js"></script>
<!-- <script src="<?php // echo $ASSETS_URL; ?>assets/libs/file-upload-with-preview/dist/file-upload-with-preview.iife.js"></script> -->
<script src="<?php echo $ASSETS_URL; ?>assets/libs/dragula/dist/dragula.min.js"></script>
<!-- <script src="<?php // echo $ASSETS_URL; ?>assets/libs/bs-stepper/dist/js/bs-stepper.min.js"></script> -->
<script src="<?php echo $ASSETS_URL; ?>assets/libs/dropzone/dist/min/dropzone.min.js"></script>
<script src="<?php echo $ASSETS_URL; ?>assets/libs/jQuery.print/jQuery.print.js"></script>
<script src="<?php echo $ASSETS_URL; ?>assets/libs/prismjs/prism.js"></script>
<script src="<?php echo $ASSETS_URL; ?>assets/libs/prismjs/components/prism-scss.min.js"></script>
<script src="<?php echo $ASSETS_URL; ?>assets/libs/@yaireo/tagify/dist/tagify.min.js"></script>
<script src="<?php echo $ASSETS_URL; ?>assets/libs/tiny-slider/dist/min/tiny-slider.js"></script>
<script src="<?php echo $ASSETS_URL; ?>assets/libs/@popperjs/core/dist/umd/popper.min.js"></script>
<script src="<?php echo $ASSETS_URL; ?>assets/libs/tippy.js/dist/tippy-bundle.umd.min.js"></script>
<script src="<?php echo $ASSETS_URL; ?>assets/libs/typed.js/lib/typed.min.js"></script>
<script src="<?php echo $ASSETS_URL; ?>assets/libs/jsvectormap/dist/js/jsvectormap.min.js"></script>
<script src="<?php echo $ASSETS_URL; ?>assets/libs/jsvectormap/dist/maps/world.js"></script>
<script src="<?php echo $ASSETS_URL; ?>assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo $ASSETS_URL; ?>assets/libs/datatables.net-bs5/js/dataTables.bootstrap5.min.js"></script>
<script src="<?php echo $ASSETS_URL; ?>assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?php echo $ASSETS_URL; ?>assets/libs/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js"></script>
<script src="<?php echo $ASSETS_URL; ?>assets/libs/prismjs/plugins/toolbar/prism-toolbar.min.js"></script>
<script src="<?php echo $ASSETS_URL; ?>assets/libs/prismjs/plugins/copy-to-clipboard/prism-copy-to-clipboard.min.js"></script>
<script src="<?php echo $ASSETS_URL; ?>assets/libs/fullcalendar/main.min.js"></script>
<script src="<?php echo $ASSETS_URL; ?>assets/libs/@lottiefiles/lottie-player/dist/lottie-player.js"></script>
<script src="<?php echo $ASSETS_URL; ?>assets/libs/simplebar/dist/simplebar.min.js"></script>
<script src="<?php echo $ASSETS_URL; ?>assets/libs/nouislider/dist/nouislider.min.js"></script>
<script src="<?php echo $ASSETS_URL; ?>assets/libs/wnumb/wNumb.min.js"></script>
<script src="<?php echo $ASSETS_URL; ?>assets/libs/glightbox/dist/js/glightbox.min.js"></script>


<!-- CDN File for moment -->
<script src='https://cdn.jsdelivr.net/npm/moment@2.29.1/min/moment.min.js'></script>
<!-- Theme JS -->
<script src="<?php echo $ASSETS_URL; ?>assets/js/theme.min.js"></script>

<script>
$(document).ready(function() {
	if ($('#editTeacherModal').length && $('#app_teacherController').length) {
		const myModalEl = document.getElementById('editTeacherModal')
		myModalEl.addEventListener('hidden.bs.modal', event => {
			angular.element(document.getElementById('app_teacherController')).scope().initFrom();
		});
	}
});

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