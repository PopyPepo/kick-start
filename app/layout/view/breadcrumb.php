<div class="row">
	<div class="col-lg-12 col-md-12 col-12">
		<!-- Page Header -->
		<div class="border-bottom pb-4 mb-4 d-md-flex align-items-center justify-content-between">
			<div class="mb-3 mb-md-0">
				<h1 class="mb-1 h2 fw-bold">
					<?php 
						if ($DOMAIN && $DOMAIN!='layout'){
							echo "{{ massages['".$DOMAIN."']['domain'] }}";
						}else{
							echo "{{ massages['default']['domain'] }}";
						}
					?>
				</h1>
				<!-- Breadcrumb -->
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb">
						<?php if ($DOMAIN && $DOMAIN!='layout'){ ?>
						<li class="breadcrumb-item">
							<a href="./">
								{{ massages['default']['domain'] }}
							</a>
						</li>
						<li class="breadcrumb-item">
							<a href="<?php echo $LINK_URL.$DOMAIN; ?>">
								<?php echo "{{ massages['".$DOMAIN."']['domain'] }}"; ?>
							</a>
						</li>
						<li class="breadcrumb-item active" aria-current="page">
							<?php echo "{{ massages['".$DOMAIN."']['".$ACTION."'] }}"; ?>
						</li>
						<?php } ?>
					</ol>
				</nav>
			</div>
		</div>
	</div>
</div>