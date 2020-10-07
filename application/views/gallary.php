<!--Breadcrumb-->
		<div class="breadcrumb_wrapper">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-4">
						<div class="breadcrumb_inner">
							<h3>our gallery</h3>
						</div>
					</div>
				</div>
			</div>
			<div class="breadcrumb_block">
				<ul>
					<li><a href="<?php echo base_url(); ?>home">home</a></li>
					<li>gallery</li>
				</ul>
			</div>
		</div>
		<!--Dairy Gallery-->
		<div class="dairy_gallery_wrapper clv_section">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-6 col-md-6">
						<div class="clv_heading">
							<h3>our gallery</h3>
							<div class="clv_underline"><img src="<?php echo base_url(); ?>images/dairy_underline3.png" alt="image"></div>
							<p></p>
						</div>
					</div>
				</div>
			</div>
			<div class="dairy_gallery_inner">
			<div class="row">
				<div class="col-md-12">
					<div class="gallery_slider">
						<div class="swiper-container swiper-container-initialized swiper-container-horizontal">
							<div class="swiper-wrapper" style="transform: translate3d(-1349px, 0px, 0px); transition-duration: 0ms;">
								<div class="" data-swiper-slide-index="0" style="width: 1349px;">
									<div class="gallery_slide">
										<div class="gallery_grid" style="position: relative; height: 719.078px;">
								<?php 
								// print_r($files); exit;
								if(!empty($gallary))
										{ 
											foreach($gallary as $gal)
											{ ?> 
								
									
											<div class="gallery_grid_item" style="position: absolute; left: 0%; top: 0px;">
												<div class="gallery_image">
													<img src="<?php echo base_url(); ?>uploads/files/gallary/<?php echo $gal['file_name'];?>" alt="dairy-farming-gallery-1">
													<div class="gallery_overlay">
														<a href="<?php echo base_url(); ?>uploads/files/gallary/<?php echo $gal['file_name'];?>" class="view_image">
														<span><img src="<?php echo base_url(); ?>images/gallery_plus.png" alt="dairy-farming-gallery-2"></span></a>
													</div>
												</div>
											</div>
										
								
								<?php 
											}
										}
										else
										{
								?>
								
								<div class="swiper-slide swiper-slide-active" data-swiper-slide-index="0" style="width: 1349px;">
									<div class="gallery_slide">
										<div class="gallery_grid" style="position: relative; height: 719.078px;">
											<div class="gallery_grid_item" style="position: absolute; left: 0%; top: 0px;">
												<div class="gallery_image">
													<img src="<?php echo base_url(); ?>images/dairy_gallery1.jpg" alt="dairy-farming-gallery-1">
													<div class="gallery_overlay">
														<a href="<?php echo base_url(); ?>images/dairy_gallery1.jpg" class="view_image">
														<span><img src="<?php echo base_url(); ?>images/gallery_plus.png" alt="dairy-farming-gallery-2"></span></a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<?php
										}
								?>
									</div>
									</div>
								</div>	
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		</div>