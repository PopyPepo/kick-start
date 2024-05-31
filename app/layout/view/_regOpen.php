<?php 

include('./app/layout/model/regOpen.php');
$instance = regOpen($conn);

?>
<section class="pt-lg-10 pb-lg-3 pt-5 pb-6">
	<div class="container">
		<div class="row mb-4">
			<div class="col">
				<h2 class="mb-0">เปิดรับลงทะเบียน</h2>
			</div>
		</div>
		<?php if (count($instance['instance'])<=0){ ?>
			<!-- Warning alert -->
			<div class="alert alert-warning" role="alert">
				ไม่พบรายวิชาที่เปิดลงทะเบียน
			</div>
		<?php }else{ $registerOpenInstanceList = $instance['instance']; ?>
			<div class="position-relative">
				<ul class="controls " id="sliderFirstControls">
					<li class="prev">
						<i class="fe fe-chevron-left"></i>
					</li>
					<li class="next">
						<i class="fe fe-chevron-right"></i>
					</li>
				</ul>
				<div class="sliderFirst">
					<div class="item"></div>
					<?php foreach($registerOpenInstanceList AS $registerInstance){ 
						$href = $LINK_URL.'course/overview/'.$registerInstance['course_id'];
					?>
					<div class="item">
						<!-- Card -->
						<div class="card  mb-4 card-hover">
							<a href="<?php echo $href; ?>" class="card-img-top">
								<img src="<?php echo $ASSETS_URL.'src/app_course/picture/'.$registerInstance['picture']; ?>" alt=""
									class="rounded-top-md card-img-top">
							</a>
							<!-- Card Body -->
							<div class="card-body">
								<h4 class="mb-2 text-truncate-line-2 ">
									<a href="<?php echo $href; ?>" class="text-inherit">
										<?php echo $registerInstance['course_nameTh'] ?>
									</a>
								</h4>
								<!-- List -->
								<ul class="mb-3 list-inline">
									<li class="list-inline-item">
										<!-- <i class="mdi mdi-clock-time-four-outline text-muted me-1"></i>3h 56m -->
										<span class="text-muted me-1">
											เปิดรับสมัคร 
										</span>
										<?php echo $registerInstance['date_open'] ?> 
										- 
										<?php echo $registerInstance['date_code'] ?>
									</li>
									<!-- <li class="list-inline-item">
										<svg class="me-1 mt-n1" width="16" height="16" viewBox="0 0 16 16" fill="none"
											xmlns="http://www.w3.org/2000/svg">
											<rect x="3" y="8" width="2" height="6" rx="1" fill="#754FFE" />
											<rect x="7" y="5" width="2" height="9" rx="1" fill="#DBD8E9" />
											<rect x="11" y="2" width="2" height="12" rx="1" fill="#DBD8E9" />
										</svg> Beginner
									</li> -->
								</ul>
								<!-- <div class="lh-1">
									<span>
										<i class="mdi mdi-star text-warning me-n1"></i>
										<i class="mdi mdi-star text-warning me-n1"></i>
										<i class="mdi mdi-star text-warning me-n1"></i>
										<i class="mdi mdi-star text-warning me-n1"></i>
										<i class="mdi mdi-star text-warning"></i>
									</span>
									<span class="text-warning">4.5</span>
									<span class="fs-6 text-muted">(7,700)</span>
								</div> -->
								<!-- Price -->
								<div class="lh-1 mt-3 text-warning">
									<span>ค่าลงทะเบียน</span>
									<?php if ($registerInstance['price']<=0){ ?>
										<span class="float-end text-success fw-bold">
											ฟรี
										</span>
									<?php }else{ ?>
										<span class="float-end text-dark fw-bold">
											<?php echo $registerInstance['price']; ?> บาท
										</span>
									<?php } ?>
								</div>
							</div>
							<!-- Card Footer -->
							<!-- <div class="card-footer">
								<div class="row align-items-center g-0">
									<div class="col-auto">
										<img src="assets/images/avatar/avatar-1.jpg" class="rounded-circle avatar-xs"
											alt="">
									</div>
									<div class="col ms-2">
										<span>Morris Mccoy</span>
									</div>
									<div class="col-auto">
										<a href="#" class="text-muted bookmark">
											<i class="fe fe-bookmark  "></i>
										</a>
									</div>
								</div>
							</div> -->
						</div>
					</div>
					<?php } ?>
				</div>
			</div>
		<?php } ?>
	</div>

	
</section>
