<div class="header">
	<!-- navbar -->
	<nav class="navbar-default navbar navbar-expand-lg">
		<a id="nav-toggle" href="#">
			<i class="fe fe-menu"></i>
		</a>
		<!-- <div class="ms-lg-3 d-none d-md-none d-lg-block">
			<form class="d-flex align-items-center">
				<span class="position-absolute ps-3 search-icon">
						<i class="fe fe-search"></i>
					</span>
				<input type="search" class="form-control form-control-sm ps-6" placeholder="Search Entire Dashboard" />
			</form>
		</div> -->
		<!--Navbar nav -->
		<a href="#" class="form-check form-switch theme-switch btn btn-light btn-icon rounded-circle " ng-show="false">
			<input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
			<label class="form-check-label" for="flexSwitchCheckDefault"></label>
		</a>
		<ul class="navbar-nav navbar-right-wrap ms-auto d-flex nav-top-wrap">
			<!-- List -->
			<li class="dropdown ms-2">
				<a class="rounded-circle" href="#" role="button" id="dropdownUser" data-bs-toggle="dropdown" aria-expanded="false">
					<div class="avatar avatar-md avatar-indicators avatar-online">
						<img alt="avatar" src="<?php echo $ASSETS_URL; ?>assets/img/user.png" class="rounded-circle" />

					</div>
				</a>
				<div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownUser">
					<div class="dropdown-item">
						<div class="d-flex">
							<div class="avatar avatar-md avatar-indicators avatar-online">
								<img alt="avatar" src="<?php echo $ASSETS_URL; ?>assets/img/user.png" class="rounded-circle" />
							</div>
							<div class="ms-3 lh-1">
								<h5 class="mb-1"><?php echo $_SESSION['adminauth']['name']; ?></h5>
								<p class="mb-0 text-muted"><?php echo $_SESSION['adminauth']['username']; ?></p>
							</div>
						</div>
					</div>
					<div class="dropdown-divider"></div>
					<!-- <ul class="list-unstyled">
						<li class="dropdown-submenu dropstart-lg">
							<a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">
								<i class="fe fe-circle me-2"></i> Status
							</a>
							<ul class="dropdown-menu">
								<li>
									<a class="dropdown-item" href="#">
										<span class="badge-dot bg-success me-2"></span> Online
									</a>
								</li>
								<li>
									<a class="dropdown-item" href="#">
										<span class="badge-dot bg-secondary me-2"></span> Offline
									</a>
								</li>
								<li>
									<a class="dropdown-item" href="#">
										<span class="badge-dot bg-warning me-2"></span> Away
									</a>
								</li>
								<li>
									<a class="dropdown-item" href="#">
										<span class="badge-dot bg-danger me-2"></span> Busy
									</a>
								</li>
							</ul>
						</li>
						<li>
							<a class="dropdown-item" href="../../../pages/profile-edit.html">
								<i class="fe fe-user me-2"></i> Profile
							</a>
						</li>
						<li>
							<a class="dropdown-item" href="../../../pages/student-subscriptions.html">
								<i class="fe fe-star me-2"></i> Subscription
							</a>
						</li>
						<li>
							<a class="dropdown-item" href="#">
								<i class="fe fe-settings me-2"></i> Settings
							</a>
						</li>
					</ul>
					<div class="dropdown-divider"></div> -->
					<ul class="list-unstyled">
						<li>
							<a class="dropdown-item" href="javascript:;" ng-click="delSession('adminauth');">
								<i class="fe fe-power me-2"></i> Sign Out
							</a>
						</li>
					</ul>
				</div>
			</li>
		</ul>
	</nav>
</div>