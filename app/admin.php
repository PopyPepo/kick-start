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

	<!-- Favicon icon-->
	<!-- <link rel="shortcut icon" type="image/x-icon" href="<?php // echo $ASSETS_URL; ?>assets/img/favicon.jpg"> -->


	<script type="text/javascript">
		var PATH = '<?php echo $ASSETS_URL; ?>';
		var USERID = '<?php echo $userID; ?>';
		var LANG = '<?php echo $LANG; ?>';
		var LINK = '<?php echo $LINK_URL; ?>';
	</script>

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



<!-- CDN File for moment -->
<script src='https://cdn.jsdelivr.net/npm/moment@2.29.1/min/moment.min.js'></script>


<script>
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