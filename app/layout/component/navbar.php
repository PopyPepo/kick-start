<nav class="navbar navbar-expand-lg navbar-default fixed-top">
	<div class="container px-0">
		<div class="d-flex">
			<a class="navbar-brand" href="./">
				<img src="./assets/img/header.jpg" width="140" alt=""/>
			</a>
		</div>

		<!-- Button -->
		<button
			class="navbar-toggler collapsed"
			type="button"
			data-bs-toggle="collapse"
			data-bs-target="#navbar-default"
			aria-controls="navbar-default"
			aria-expanded="false"
			aria-label="Toggle navigation"
		>
			<span class="icon-bar top-bar mt-0"></span>
			<span class="icon-bar middle-bar"></span>
			<span class="icon-bar bottom-bar"></span>
		</button>
		<!-- Collapse -->
		<div class="collapse navbar-collapse" id="navbar-default">
			<?php include('app/layout/component/_top-menu.php'); ?>
			<div class="ms-auto mt-3 mt-lg-0">
				<!-- <a href="#" >
					<i class="fe fe-user fs-3 align-middle"></i>
					My Accout
				</a> -->

				<a href="#" class="form-check form-switch theme-switch btn btn-light btn-icon rounded-circle" ng-show="false">
					<input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
					<label class="form-check-label" for="flexSwitchCheckDefault"></label>

				</a>

				<ul class="navbar-nav">	
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarLanding"
							data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<i class="fe fe-user fs-3 align-middle"></i> การลงทะเบียน
						</a>
						<ul class="dropdown-menu" aria-labelledby="navbarLanding">
							<li>
								<h4 class="dropdown-header">การลงทะเบียน</h4>
							</li>
							<!-- <li>
								<a href="<?php // echo $LINK_URL.'register/search'; ?>" class="dropdown-item d-flex justify-content-between">
									แจ้งชำระเงิน/ตรวจสอบการลงทะเบียน
								</a>
							 </li> -->
							<li>
								<a href="<?php echo $LINK_URL.'register/history'; ?>" class="dropdown-item">
									ค้นหาการลงทะเบียน
								</a>
							</li>
							<li>
								<a href="" class="dropdown-item" target="fmslifelonglearning">
									เข้าสู่ระบบ
								</a>
							</li>

						</ul>
					</li>
				</ul>
				<!-- <a href="./pages/sign-in.html" class="btn btn-outline-dark btn-sm ms-3">Sign in</a>
				<a href="./pages/sign-up.html" class="btn btn-dark btn-sm ms-1">Sign up</a> -->
			</div>
		</div>
	</div>
</nav>