<?php if (isset($includePage)){ 
	$strFile = $ASSETS_URL."app/".$includePage['domain']."/view/".$includePage['active'].".php";
?>	
	<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" style="width: 600px;">

		<div class="offcanvas-body" data-simplebar >
			<div class="offcanvas-header px-2 pt-0">
				<h3 class="offcanvas-title" id="offcanvasExampleLabel">
					<?php echo "{{ massages['".$includePage['domain']."']['domain'] }}"; ?> 
				</h3>
				<button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
			</div>

			<!-- card body -->
			<div class="container-fluid">
				<?php 
					if (file_exists($strFile)){
						include_once($strFile);
					}else{
						include_once("../app/error/view/404.php");
					}
				?>
			</div>
		</div>
	</div>
<?php } ?>