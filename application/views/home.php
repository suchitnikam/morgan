
	<!--Banner Slider-->
	<div class="clv_banner_slider">
		<!-- Swiper -->
		<div class="swiper-container swiper-container-coverflow swiper-container-3d swiper-container-initialized swiper-container-horizontal">
			<div class="swiper-wrapper" style="transform: translate3d(-4047px, 0px, 0px); perspective-origin: 4721.5px 50%; transition-duration: 0ms;">
				<?php 
				// print_r($files); exit;
				if(!empty($files))
						{ 
							foreach($files as $file)
							{ ?> 
				<div class="swiper-slide swiper-slide-duplicate-active" data-swiper-slide-index="0" style="width: 1349px; transform: translate3d(0px, 0px, 0px) rotateX(0deg) rotateY(60deg); z-index: -1; transition-duration: 0ms;">
					<div class="clv_slide " style="background: url('<?php echo base_url('uploads/files/'.$file['file_name']); ?>') no-repeat center;">
						
					</div>
				</div>
				
						<?php
						}
						}
						else{?>
				<div class="swiper-slide swiper-slide-duplicate-active" data-swiper-slide-index="0" style="width: 1349px; transform: translate3d(0px, 0px, 0px) rotateX(0deg) rotateY(60deg); z-index: -1; transition-duration: 0ms;">
					<div class="clv_slide " style="background: url('<?php echo base_url(); ?>images/morgan gate.jpg') no-repeat center;">
						
					</div>
				</div>
				<div class="swiper-slide swiper-slide-prev swiper-slide-duplicate-next" data-swiper-slide-index="1" style="width: 1349px; transform: translate3d(0px, 0px, 0px) rotateX(0deg) rotateY(30deg); z-index: 0; transition-duration: 0ms;">
					<div class="clv_slide slide2" style="background: url('<?php echo base_url(); ?>images/index3_slider_bg2.jpg') no-repeat center;">
						
					</div>
				</div>
				
						<?php
						}
						?>
				
				
			</div>
			<!-- Add Arrows -->
			<span class="slider_arrow banner_left left_arrow" tabindex="0" role="button" aria-label="Previous slide">
				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="10px" height="20px">
				<path fill-rule="evenodd" fill="rgb(255, 255, 255)" d="M0.272,10.703 L8.434,19.703 C8.792,20.095 9.372,20.095 9.731,19.703 C10.089,19.308 10.089,18.668 9.731,18.274 L2.217,9.990 L9.730,1.706 C10.089,1.310 10.089,0.672 9.730,0.277 C9.372,-0.118 8.791,-0.118 8.433,0.277 L0.271,9.274 C-0.082,9.666 -0.082,10.315 0.272,10.703 Z"></path>
				</svg>
			</span>
			<span class="slider_arrow banner_right right_arrow" tabindex="0" role="button" aria-label="Next slide">
				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="10px" height="20px">
				<path fill-rule="evenodd" fill="rgb(255, 255, 255)" d="M9.728,10.703 L1.566,19.703 C1.208,20.095 0.627,20.095 0.268,19.703 C-0.090,19.308 -0.090,18.668 0.268,18.274 L7.783,9.990 L0.269,1.706 C-0.089,1.310 -0.089,0.672 0.269,0.277 C0.627,-0.118 1.209,-0.118 1.567,0.277 L9.729,9.274 C10.081,9.666 10.081,10.315 9.728,10.703 Z"></path>
				</svg>
			</span>
		<span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
	</div>
	<!--About-->
	<div class="dairy_about_wrapper clv_section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-6 col-md-6">
					<div class="clv_heading">
						<h3>welcome to our farm!</h3>
						<div class="clv_underline"><img src="<?php echo base_url(); ?>images/dairy_underline3.png" alt="dairy-farming-about-underline"></div>
						<p>Consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dole magna aliqua. Ut enim ad minim veniam quis nostrud exercitation.</p>
					</div>
				</div>
			</div>
			<div class="dairy_about_inner">
				<div class="row">
					<div class="col-md-6">
						<div class="about_img">
							<img src="<?php echo base_url(); ?>images/dairy_about.jpg" alt="dairy-farming-about">
						</div>
					</div>
					<div class="col-md-6">
						<div class="about_content">
							<div class="about_heading">
								<h2>About Our <span>Morgan Dairy Farm</span></h2>
								<div class="clv_underline">
									<img src="<?php echo base_url(); ?>images/dairy_underline2.png" alt="dairy-farming-under-line"></div>
							</div>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporcididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitatiamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in repreheenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecaeeiat cupidatat non proidentsunt in culpa qui officia</p>
							<p>voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae.</p>
							<a href="javascript:;" class="clv_btn2">read more</a>
							<div class="dairy_counter_wrapper">
								<div class="dairy_counter_block">
									<div class="counter_text">
										<h4><span class="count_no" data-to="26" data-speed="3000">26</span><span>k+</span></h4>
										<h5>happy customers</h5>
									</div>
									<img src="<?php echo base_url(); ?>images/dairy_counter_Icon1.png" alt="dairy-farming-counter-1">
								</div>
								<div class="dairy_counter_block">
									<div class="counter_text">
										<h4><span class="count_no" data-to="700" data-speed="3000">700</span><span>+</span></h4>
										<h5>project complete</h5>
									</div>
									<img src="<?php echo base_url(); ?>images/dairy_counter_Icon2.png" alt="dairy-farming-counter-2">
								</div>
								<div class="dairy_counter_block">
									<div class="counter_text">
										<h4><span class="count_no" data-to="200" data-speed="3000">200</span><span>+</span></h4>
										<h5>world wide branch</h5>
									</div>
									<img src="<?php echo base_url(); ?>images/dairy_counter_Icon3.png" alt="dairy-farming-counter-3">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--Dairy Products-->
	<div class="dairy_products_wrapper clv_section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-6 col-md-6">
					<div class="clv_heading">
						<h3>our products</h3>
						<div class="clv_underline"><img src="<?php echo base_url(); ?>images/dairy_underline3.png" alt="dairy-farming-product-1"></div>
						<p>Consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dole magna aliqua. Ut enim ad minim veniam quis nostrud exercitation.</p>
					</div>
				</div>
			</div>
			<div class="dairy_product_inner">
				<div class="row">
					<div class="col-md-3 col-lg-3">
						<div class="dairy_product_block">
							<div class="product_image">
								<img src="<?php echo base_url(); ?>images/dairy_milk.png" alt="dairy-farming-product-2">
							</div>
							<div class="product_content">
								<h4>milk</h4>
								<p>Dolor sit amet consectetur and the adipiscing elitd do eiusmod.</p>
								<a href="javascript:;">read more</a>
							</div>
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="150px" height="140px">
							<path fill-rule="evenodd" fill="rgb(247, 249, 255)" d="M149.852,80.319 L142.761,127.660 C141.691,134.809 135.741,139.998 128.617,139.998 L96.821,139.998 C91.689,139.998 87.168,137.307 84.640,133.129 C81.894,137.270 77.237,139.998 71.961,139.998 L15.271,139.998 C6.850,139.998 -0.000,133.044 -0.000,124.496 L-0.000,87.006 C-0.000,78.989 2.722,71.133 7.666,64.881 L15.716,54.706 C18.180,51.592 19.538,47.676 19.538,43.681 L19.538,27.093 C14.004,25.321 9.980,20.062 9.980,13.866 C9.980,6.220 16.109,-0.001 23.641,-0.001 L63.591,-0.001 C71.125,-0.001 77.252,6.220 77.252,13.866 C77.252,20.062 73.228,25.321 67.695,27.093 L67.695,43.681 C67.695,47.676 69.051,51.592 71.516,54.706 C71.516,54.706 80.717,66.405 81.244,67.198 C83.405,65.708 85.949,64.907 88.631,64.907 L124.251,64.907 C125.464,64.907 126.448,65.905 126.448,67.138 C126.448,68.371 125.464,69.369 124.251,69.369 L88.630,69.369 C86.747,69.369 84.965,69.962 83.478,71.058 C85.224,74.570 86.387,78.365 86.911,82.268 C94.316,80.591 104.397,80.045 113.781,85.308 C126.574,92.484 136.756,92.668 143.678,91.873 L145.509,79.649 C145.894,77.070 145.156,74.457 143.481,72.481 C141.807,70.502 139.374,69.369 136.807,69.369 L133.461,69.369 C132.246,69.369 131.264,68.370 131.264,67.138 C131.264,65.905 132.246,64.907 133.461,64.907 L136.807,64.907 C140.657,64.907 144.305,66.608 146.814,69.573 C149.325,72.538 150.432,76.454 149.852,80.319 ZM72.857,13.866 C72.857,8.680 68.701,4.461 63.591,4.461 L23.641,4.461 C18.531,4.461 14.374,8.680 14.374,13.866 C14.374,19.052 18.531,23.272 23.641,23.272 L50.816,23.272 C52.030,23.272 53.014,24.271 53.014,25.503 C53.014,26.736 52.030,27.733 50.816,27.733 L23.932,27.733 L23.932,43.681 C23.932,47.959 22.685,52.164 20.397,55.732 C23.734,58.368 32.550,64.110 43.015,61.086 C48.284,59.565 51.863,58.356 54.740,57.386 C58.874,55.988 61.698,55.036 66.014,54.349 C64.248,51.100 63.300,47.419 63.300,43.681 L63.300,27.733 L60.262,27.733 C59.048,27.733 58.065,26.736 58.065,25.503 C58.065,24.271 59.048,23.272 60.262,23.272 L63.591,23.272 C68.701,23.272 72.857,19.052 72.857,13.866 ZM76.139,67.676 L68.847,58.457 C63.576,59.104 60.836,60.028 56.125,61.618 C53.208,62.603 44.980,66.428 36.867,66.428 C27.899,66.428 20.893,61.820 17.725,59.292 L11.093,67.676 C7.181,72.621 4.867,78.719 4.464,85.030 L82.768,85.030 C82.365,78.719 80.051,72.621 76.139,67.676 ZM82.838,89.491 L4.395,89.491 L4.395,118.499 L75.434,118.499 C76.647,118.499 77.632,119.498 77.632,120.731 C77.632,121.962 76.647,122.961 75.434,122.961 L4.395,122.961 C4.395,122.961 3.983,135.538 15.271,135.538 L71.961,135.538 C77.959,135.538 82.838,130.584 82.838,124.496 L82.838,89.491 ZM111.655,89.214 C103.188,84.464 93.910,85.159 87.228,86.772 C87.229,86.850 87.026,127.025 87.026,127.025 C87.784,131.960 91.896,135.538 96.821,135.538 L128.617,135.538 C133.552,135.538 137.675,131.942 138.417,126.988 L142.995,96.423 C131.789,98.604 120.577,94.218 111.655,89.214 ZM131.789,115.804 C130.574,115.804 129.592,114.806 129.592,113.574 L129.592,109.871 C129.592,108.638 130.574,107.641 131.789,107.641 C133.002,107.641 133.986,108.638 133.986,109.871 L133.986,113.574 C133.986,114.806 133.002,115.804 131.789,115.804 ZM117.899,116.627 C115.806,116.627 113.873,115.569 112.725,113.794 C112.059,112.765 112.340,111.381 113.356,110.705 C114.370,110.030 115.732,110.316 116.397,111.345 C116.879,112.087 117.607,112.167 117.899,112.167 C118.189,112.167 118.907,112.078 119.399,111.345 C120.426,109.815 122.071,110.458 122.442,110.705 C123.457,111.381 123.739,112.765 123.073,113.794 C121.924,115.569 119.991,116.627 117.899,116.627 ZM104.010,115.804 C102.796,115.804 101.812,114.806 101.812,113.574 L101.812,109.871 C101.812,108.638 102.796,107.641 104.010,107.641 C105.222,107.641 106.208,108.638 106.208,109.871 L106.208,113.574 C106.208,114.806 105.222,115.804 104.010,115.804 ZM71.298,101.672 L76.389,112.243 C76.922,113.349 76.480,114.707 75.380,115.226 C73.975,115.889 72.823,114.994 72.441,114.201 L68.013,105.005 L65.052,108.010 L65.052,113.221 C65.052,114.454 64.069,115.452 62.855,115.452 C61.641,115.452 60.657,114.454 60.657,113.221 L60.657,94.769 C60.657,93.536 61.641,92.538 62.855,92.538 C64.069,92.538 65.052,93.536 65.052,94.769 L65.052,101.702 L72.862,93.773 C73.719,92.902 75.111,92.902 75.968,93.773 C76.827,94.645 76.827,96.057 75.968,96.929 L71.298,101.672 ZM54.334,115.452 L44.563,115.452 C43.349,115.452 42.366,114.454 42.366,113.221 L42.366,94.769 C42.366,93.536 43.349,92.538 44.563,92.538 C45.776,92.538 46.760,93.536 46.760,94.769 L46.760,110.991 L54.334,110.991 C55.547,110.991 56.532,111.990 56.532,113.221 C56.532,114.454 55.547,115.452 54.334,115.452 ZM35.215,115.452 C34.001,115.452 33.018,114.454 33.018,113.221 L33.018,94.769 C33.018,93.536 34.001,92.538 35.215,92.538 C36.429,92.538 37.412,93.536 37.412,94.769 L37.412,113.221 C37.412,114.454 36.429,115.452 35.215,115.452 ZM25.899,115.452 C24.687,115.452 23.703,114.454 23.703,113.221 L23.703,100.030 L20.885,102.795 C20.034,103.629 18.683,103.629 17.832,102.795 L15.014,100.030 L15.014,113.221 C15.014,114.454 14.032,115.452 12.817,115.452 C11.604,115.452 10.620,114.454 10.620,113.221 L10.620,94.769 C10.620,93.873 11.148,93.065 11.961,92.715 C12.771,92.366 13.712,92.543 14.346,93.166 L19.359,98.088 L24.371,93.166 C25.005,92.543 25.946,92.365 26.757,92.715 C27.570,93.065 28.097,93.873 28.097,94.769 L28.097,113.221 C28.097,114.454 27.114,115.452 25.899,115.452 Z"></path>
							</svg>
							<span class="product_devider top_devider"></span>
							<span class="product_devider"></span>
						</div>
					</div>
					<div class="col-md-3 col-lg-3">
						<div class="dairy_product_block">
							<div class="product_image">
								<img src="<?php echo base_url(); ?>images/dairy_butter.png" alt="dairy-farming-product-3">
							</div>
							<div class="product_content">
								<h4>butter</h4>
								<p>Dolor sit amet consectetur and the adipiscing elitd do eiusmod.</p>
								<a href="javascript:;">read more</a>
							</div>
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="172px" height="140px">
							<path fill-rule="evenodd" fill="rgb(247, 249, 255)" d="M168.420,132.842 L150.500,132.842 L150.500,107.346 C152.531,107.650 154.343,107.792 155.959,107.792 C170.368,107.792 168.997,96.668 168.997,96.668 L150.500,85.067 L150.500,64.881 C150.500,62.905 148.894,61.305 146.920,61.305 L112.623,61.305 L92.299,48.759 C79.040,37.889 46.897,11.845 31.798,2.372 C29.384,0.856 26.555,-0.002 23.660,-0.002 C18.849,-0.002 13.857,2.369 10.298,8.021 C4.595,17.075 8.089,25.776 14.519,29.809 C27.888,38.201 58.755,53.005 76.447,61.305 L25.083,61.305 C23.104,61.305 21.500,62.905 21.500,64.881 L21.500,132.842 L3.582,132.842 C1.603,132.842 -0.000,134.445 -0.000,136.421 C-0.000,138.396 1.603,139.999 3.582,139.999 L111.080,139.999 L168.420,139.999 C170.394,139.999 172.000,138.396 172.000,136.421 C172.000,134.445 170.394,132.842 168.420,132.842 ZM150.500,93.513 L160.552,99.822 C159.560,100.340 157.932,100.639 155.959,100.639 C154.594,100.639 152.799,100.503 150.500,100.084 L150.500,93.513 ZM18.332,23.754 C15.198,21.787 12.802,17.483 16.367,11.827 C18.293,8.769 20.815,7.154 23.660,7.154 C25.159,7.154 26.654,7.593 27.985,8.426 C42.937,17.811 75.749,44.441 88.451,54.866 L86.436,58.067 C71.523,51.143 33.289,33.139 18.332,23.754 ZM107.500,132.842 L28.667,132.842 L28.667,68.458 L35.832,68.458 L35.832,75.615 C35.832,77.585 37.438,79.188 39.418,79.188 C41.397,79.188 43.000,77.585 43.000,75.615 L43.000,68.458 L57.332,68.458 L57.332,86.345 C57.332,88.316 58.939,89.920 60.918,89.920 C62.897,89.920 64.500,88.316 64.500,86.345 L64.500,68.458 L83.021,68.458 L84.016,76.160 C92.698,81.609 100.498,86.188 107.500,90.024 L107.500,132.842 ZM107.500,81.835 C102.199,78.853 96.592,75.542 90.690,71.881 L89.926,65.965 L94.640,58.476 L107.500,66.542 L107.500,81.835 ZM143.329,132.842 L139.750,132.842 L139.750,122.111 C139.750,120.135 138.144,118.537 136.170,118.537 C134.186,118.537 132.580,120.135 132.580,122.111 L132.580,132.842 L114.670,132.842 L114.670,68.458 L121.830,68.458 L121.830,75.615 C121.830,77.585 123.436,79.188 125.420,79.188 C127.394,79.188 129.000,77.585 129.000,75.615 L129.000,68.458 L143.329,68.458 L143.329,132.842 Z"></path>
							</svg>
							<span class="product_devider top_devider"></span>
							<span class="product_devider"></span>
						</div>
					</div>
					<div class="col-md-3 col-lg-3">
						<div class="dairy_product_block">
							<div class="product_image">
								<img src="<?php echo base_url(); ?>images/dairy_cream.png" alt="dairy-farming-product-4">
							</div>
							<div class="product_content">
								<h4>cream</h4>
								<p>Dolor sit amet consectetur and the adipiscing elitd do eiusmod.</p>
								<a href="javascript:;">read more</a>
							</div>
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="112px" height="140px">
							<path fill-rule="evenodd" fill="rgb(247, 249, 255)" d="M110.531,89.239 L96.501,38.731 C97.767,37.498 98.560,35.778 98.560,33.869 C98.560,30.748 96.443,28.136 93.587,27.358 C93.898,26.576 94.080,25.730 94.080,24.837 C94.080,21.827 92.109,19.298 89.410,18.420 C88.507,13.100 83.928,9.030 78.400,9.030 C74.894,9.030 71.543,7.342 69.440,4.512 L66.080,-0.001 L64.960,-0.001 C56.314,-0.001 49.280,7.091 49.280,15.805 L49.280,18.479 C46.679,19.414 44.800,21.898 44.800,24.837 C44.800,25.730 44.981,26.576 45.293,27.358 C42.436,28.136 40.320,30.748 40.320,33.869 C40.320,35.778 41.113,37.498 42.379,38.731 L40.594,45.160 L35.840,45.160 C16.079,45.160 -0.000,61.369 -0.000,81.289 C-0.000,99.340 13.115,114.455 30.693,117.009 C37.045,130.572 50.702,139.998 66.541,139.998 L72.340,139.998 C94.208,139.998 112.000,122.066 112.000,100.019 C112.000,96.375 111.504,92.747 110.531,89.239 L110.531,89.239 ZM47.040,31.612 L80.640,31.612 L80.640,27.095 L51.520,27.095 C50.286,27.095 49.280,26.083 49.280,24.837 C49.280,23.592 50.286,22.579 51.520,22.579 L58.240,22.579 L58.240,18.063 L53.760,18.063 L53.760,15.805 C53.760,9.945 58.208,5.118 63.881,4.566 L65.856,7.223 C68.801,11.183 73.492,13.547 78.400,13.547 C81.316,13.547 83.780,15.441 84.708,18.063 L62.720,18.063 L62.720,22.579 L87.360,22.579 C88.594,22.579 89.600,23.592 89.600,24.837 C89.600,26.083 88.594,27.095 87.360,27.095 L85.120,27.095 L85.120,31.612 L91.840,31.612 C93.074,31.612 94.080,32.623 94.080,33.869 C94.080,35.116 93.074,36.128 91.840,36.128 C88.136,36.128 85.120,39.168 85.120,42.901 L85.120,69.998 C85.120,71.245 84.114,72.257 82.880,72.257 C81.646,72.257 80.640,71.245 80.640,69.998 L80.640,42.901 C80.640,39.168 77.624,36.128 73.920,36.128 C70.216,36.128 67.200,39.168 67.200,42.901 L67.200,51.934 C67.200,53.180 66.194,54.192 64.960,54.192 C63.726,54.192 62.720,53.180 62.720,51.934 L62.720,42.901 C62.720,39.168 59.704,36.128 56.000,36.128 L47.040,36.128 C45.806,36.128 44.800,35.116 44.800,33.869 C44.800,32.623 45.806,31.612 47.040,31.612 L47.040,31.612 ZM47.040,40.644 L56.000,40.644 C57.234,40.644 58.240,41.657 58.240,42.901 L58.240,51.934 C58.240,55.668 61.256,58.709 64.960,58.709 C68.664,58.709 71.680,55.668 71.680,51.934 L71.680,42.901 C71.680,41.657 72.686,40.644 73.920,40.644 C75.154,40.644 76.160,41.657 76.160,42.901 L76.160,69.998 C76.160,73.733 79.176,76.773 82.880,76.773 C86.584,76.773 89.600,73.733 89.600,69.998 L89.600,42.901 C89.600,41.657 90.606,40.644 91.840,40.644 C92.019,40.644 92.189,40.603 92.366,40.590 L104.498,84.267 C102.547,82.662 100.047,81.289 96.314,81.289 C90.904,81.289 88.054,84.159 85.767,86.467 C83.628,88.621 81.941,90.321 78.387,90.321 C74.836,90.321 73.149,88.621 71.013,86.467 C68.728,84.159 65.881,81.289 60.473,81.289 C55.066,81.289 52.217,84.159 49.930,86.467 C47.793,88.621 46.106,90.321 42.554,90.321 C39.003,90.321 37.316,88.621 35.181,86.467 C34.820,86.102 34.435,85.762 34.066,85.409 L46.514,40.592 C46.691,40.603 46.861,40.644 47.040,40.644 L47.040,40.644 ZM17.920,81.289 C17.920,71.418 25.813,63.384 35.571,63.237 L28.349,89.237 C27.645,91.767 27.203,94.359 27.006,96.975 C21.477,93.800 17.920,87.846 17.920,81.289 L17.920,81.289 ZM4.480,81.289 C4.480,63.856 18.547,49.676 35.840,49.676 L39.339,49.676 L36.830,58.709 L35.840,58.709 C23.488,58.709 13.440,68.838 13.440,81.289 C13.440,90.324 18.824,98.468 26.980,102.018 C27.153,105.496 27.724,108.867 28.726,112.057 C14.676,108.785 4.480,96.173 4.480,81.289 L4.480,81.289 ZM72.339,135.483 L66.539,135.483 C47.140,135.483 31.360,119.575 31.360,100.019 C31.360,96.785 31.798,93.570 32.664,90.457 L32.696,90.339 C34.876,92.493 37.666,94.838 42.554,94.838 C47.961,94.838 50.810,91.967 53.097,89.659 C55.234,87.505 56.921,85.805 60.473,85.805 C64.024,85.805 65.710,87.505 67.847,89.659 C70.134,91.967 72.981,94.838 78.387,94.838 C83.796,94.838 86.646,91.967 88.933,89.659 C91.072,87.505 92.761,85.805 96.314,85.805 C99.866,85.805 101.555,87.507 103.692,89.659 C104.590,90.567 105.560,91.467 106.660,92.297 C107.220,94.831 107.518,97.419 107.518,100.019 C107.520,119.575 91.739,135.483 72.339,135.483 L72.339,135.483 Z"></path>
							</svg>
							<span class="product_devider top_devider"></span>
							<span class="product_devider"></span>
						</div>
					</div>
					<div class="col-md-3 col-lg-3">
						<div class="dairy_product_block">
							<div class="product_image">
								<img src="<?php echo base_url(); ?>images/dairy_cheese.png" alt="dairy-farming-product-5">
							</div>
							<div class="product_content">
								<h4>cheese</h4>
								<p>Dolor sit amet consectetur and the adipiscing elitd do eiusmod.</p>
								<a href="javascript:;">read more</a>
							</div>
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="141px" height="140px">
							<path fill-rule="evenodd" fill="rgb(247, 249, 255)" d="M50.032,119.518 L50.032,112.691 L29.564,112.691 L29.564,108.140 L50.032,108.140 L50.032,65.815 L60.227,60.353 L38.661,60.353 L38.661,92.210 C38.661,95.974 41.723,99.038 45.484,99.038 L45.484,103.589 C39.214,103.589 34.113,98.484 34.113,92.210 L34.113,51.250 C34.113,49.996 33.091,48.974 31.839,48.974 C30.586,48.974 29.564,49.996 29.564,51.250 L29.564,71.731 C29.564,75.493 26.503,78.557 22.742,78.557 C18.981,78.557 15.919,75.493 15.919,71.731 L15.919,60.353 L9.413,60.353 L15.642,108.140 L25.016,108.140 L25.016,112.691 L6.823,112.691 C5.570,112.691 4.548,113.714 4.548,114.967 C4.548,116.221 5.570,117.243 6.823,117.243 L38.661,117.243 C42.422,117.243 45.484,120.305 45.484,124.069 C45.484,127.833 42.422,130.897 38.661,130.897 L20.468,130.897 C19.215,130.897 18.194,131.918 18.194,133.171 C18.194,134.426 19.215,135.447 20.468,135.447 L50.032,135.447 L50.032,139.998 L20.468,139.998 C16.707,139.998 13.645,136.935 13.645,133.171 C13.645,129.409 16.707,126.346 20.468,126.346 L38.661,126.346 C39.914,126.346 40.935,125.324 40.935,124.069 C40.935,122.816 39.914,121.793 38.661,121.793 L6.823,121.793 C3.062,121.793 -0.000,118.730 -0.000,114.967 C-0.000,111.203 3.062,108.140 6.823,108.140 L11.054,108.140 L4.826,60.353 L-0.000,60.353 L-0.000,46.698 L5.813,46.698 C5.030,45.354 4.548,43.813 4.548,42.147 C4.548,37.127 8.628,33.045 13.645,33.045 L24.007,33.045 C23.224,31.701 22.742,30.159 22.742,28.494 C22.742,23.473 26.822,19.391 31.839,19.391 L36.480,19.391 C36.917,13.819 38.943,8.397 42.300,3.917 L45.239,-0.001 L49.275,4.040 C52.009,6.773 55.442,8.677 59.209,9.546 L64.655,10.805 C75.385,13.281 83.084,22.255 84.041,33.045 L86.419,33.045 C91.204,33.045 95.095,36.772 95.451,41.472 L115.949,30.482 L119.629,32.324 C132.810,38.921 141.000,52.179 141.000,66.927 L141.000,119.518 L50.032,119.518 ZM117.839,114.967 C116.898,112.325 114.396,110.416 111.435,110.416 C108.475,110.416 105.973,112.325 105.032,114.967 L117.839,114.967 ZM54.581,98.619 C57.221,97.677 59.129,95.174 59.129,92.210 C59.129,89.249 57.221,86.745 54.581,85.803 L54.581,98.619 ZM38.661,55.801 L68.717,55.801 L77.207,51.250 L38.661,51.250 L38.661,55.801 ZM20.468,71.731 C20.468,72.985 21.489,74.006 22.742,74.006 C23.994,74.006 25.016,72.985 25.016,71.731 L25.016,60.353 L20.468,60.353 L20.468,71.731 ZM4.548,51.250 L4.548,55.801 L25.016,55.801 L25.016,51.250 L4.548,51.250 ZM86.419,37.599 L61.403,37.599 L61.403,33.047 L79.462,33.047 C78.521,24.396 72.285,17.241 63.636,15.243 L58.187,13.984 C53.591,12.922 49.398,10.596 46.061,7.257 L45.731,6.928 C43.084,10.566 41.467,14.915 41.051,19.391 L52.306,19.391 L52.306,23.943 L31.839,23.943 C29.330,23.943 27.290,25.984 27.290,28.494 C27.290,31.004 29.330,33.045 31.839,33.045 L43.210,33.045 L43.210,37.596 L13.645,37.596 C11.137,37.596 9.097,39.637 9.097,42.147 C9.097,44.657 11.137,46.698 13.645,46.698 L26.789,46.698 C28.041,45.313 29.831,44.423 31.839,44.423 C33.846,44.423 35.636,45.313 36.888,46.698 L85.699,46.698 L90.458,44.147 C90.768,43.526 90.968,42.855 90.968,42.149 C90.968,39.639 88.928,37.599 86.419,37.599 ZM117.594,36.395 L116.020,35.607 L61.366,64.903 L136.382,64.903 C135.674,52.711 128.619,41.911 117.594,36.395 ZM136.452,69.455 L127.585,69.455 C128.492,73.906 132.003,77.419 136.452,78.327 L136.452,69.455 ZM136.452,82.926 C129.495,81.925 123.991,76.416 122.989,69.455 L54.581,69.455 L54.581,81.063 C59.763,82.120 63.677,86.715 63.677,92.210 C63.677,97.706 59.763,102.301 54.581,103.359 L54.581,114.967 L100.294,114.967 C101.351,109.781 105.943,105.865 111.435,105.865 C116.928,105.865 121.519,109.781 122.576,114.967 L136.452,114.967 L136.452,82.926 ZM88.693,96.762 C83.677,96.762 79.597,92.679 79.597,87.660 L84.145,87.660 C84.145,90.170 86.185,92.210 88.693,92.210 C91.202,92.210 93.242,90.170 93.242,87.660 C93.242,85.149 91.202,83.108 88.693,83.108 L88.693,78.557 C93.710,78.557 97.790,82.640 97.790,87.660 C97.790,92.679 93.710,96.762 88.693,96.762 ZM102.339,139.998 L54.581,139.998 L54.581,135.447 L102.339,135.447 L102.339,139.998 Z"></path>
							</svg>
							<span class="product_devider top_devider"></span>
							<span class="product_devider"></span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--Dairy Service-->
	<div class="dairy_service_wrapper clv_section">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6">
					<div class="service_content">
						<div class="service_heading">
							<h3>why choose us</h3>
							<div class="clv_underline"><img src="<?php echo base_url(); ?>images/dairy_underline2.png" alt="dairy-farming-choose-us"></div>
							<!-- Add Arrows -->
							<div class="service_arrow_block">
								<span class="dairy_service_arrow dairy_service_left" tabindex="0" role="button" aria-label="Previous slide">
									<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="10px" height="15px">
										<path fill-rule="evenodd" fill="rgb(226, 226, 226)" d="M0.324,8.222 L7.117,14.685 C7.549,15.097 8.249,15.097 8.681,14.685 C9.113,14.273 9.113,13.608 8.681,13.197 L2.670,7.478 L8.681,1.760 C9.113,1.348 9.113,0.682 8.681,0.270 C8.249,-0.139 7.548,-0.139 7.116,0.270 L0.323,6.735 C0.107,6.940 -0.000,7.209 -0.000,7.478 C-0.000,7.747 0.108,8.017 0.324,8.222 Z"></path>
									</svg>
								</span>
								<span class="dairy_service_arrow dairy_service_right" tabindex="0" role="button" aria-label="Next slide">
									<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="19px" height="25px">
									<path fill-rule="evenodd" fill="rgb(226, 226, 226)" d="M13.676,13.222 L6.883,19.685 C6.451,20.097 5.751,20.097 5.319,19.685 C4.887,19.273 4.887,18.608 5.319,18.197 L11.329,12.478 L5.319,6.760 C4.887,6.348 4.887,5.682 5.319,5.270 C5.751,4.861 6.451,4.861 6.884,5.270 L13.676,11.735 C13.892,11.940 14.000,12.209 14.000,12.478 C14.000,12.747 13.892,13.017 13.676,13.222 Z"></path>
									</svg>
								</span>
							</div>
						</div>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporcididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitatiamco laboris nisi ut aliquip ex ea commodo consequat. </p>
						<p>Duis aute irure dolor in repreheenderit in voluptate velit esse cillum dolore  fugiat nulla pariatur. Excepteur sint occaecaeeiat cupidatat</p>
						<ul>
							<li>
								<p><span><i class="fa fa-angle-right" aria-hidden="true"></i></span>Expert &amp; Professional Farm</p>
							</li>
							<li>
								<p><span><i class="fa fa-angle-right" aria-hidden="true"></i></span>We are Award Winning Firm</p>
							</li>
							<li>
								<p><span><i class="fa fa-angle-right" aria-hidden="true"></i></span>Fully Satisfaction Guarantee</p>
							</li>
							<li>
								<p><span><i class="fa fa-angle-right" aria-hidden="true"></i></span>80 + Successfull Projects done</p>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-6 col-md-6">
					<div class="dairy_service_slider">
						<div class="swiper-container swiper-container-initialized swiper-container-horizontal">
							<div class="swiper-wrapper" style="transform: translate3d(-1800px, 0px, 0px); transition-duration: 0ms;"><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="2" style="width: 570px; margin-right: 30px;">
									<div class="dairy_service_slide"><img src="<?php echo base_url(); ?>images/service_slide3.jpg" alt="dairy-farming-choose-slide-3"></div>
								</div>
								<div class="swiper-slide swiper-slide-duplicate-next" data-swiper-slide-index="0" style="width: 570px; margin-right: 30px;">
									<div class="dairy_service_slide"><img src="<?php echo base_url(); ?>images/service_slide1.jpg" alt="dairy-farming-choose-slide-1"></div>
								</div>
								<div class="swiper-slide swiper-slide-prev" data-swiper-slide-index="1" style="width: 570px; margin-right: 30px;">
									<div class="dairy_service_slide"><img src="<?php echo base_url(); ?>images/service_slide2.jpg" alt="dairy-farming-choose-slide-2"></div>
								</div>
								<div class="swiper-slide swiper-slide-active" data-swiper-slide-index="2" style="width: 570px; margin-right: 30px;">
									<div class="dairy_service_slide"><img src="<?php echo base_url(); ?>images/service_slide3.jpg" alt="dairy-farming-choose-slide-3"></div>
								</div>
							<div class="swiper-slide swiper-slide-duplicate swiper-slide-next" data-swiper-slide-index="0" style="width: 570px; margin-right: 30px;">
									<div class="dairy_service_slide"><img src="<?php echo base_url(); ?>images/service_slide1.jpg" alt="dairy-farming-choose-slide-1"></div>
								</div></div>
						<span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--Dairy Gallery-->
	<div class="dairy_gallery_wrapper clv_section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-6 col-md-6">
					<div class="clv_heading">
						<h3>our gallery</h3>
						<div class="clv_underline"><img src="<?php echo base_url(); ?>images/dairy_underline3.png" alt="dairy-farming-gallery-underline"></div>
						<p>Consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dole magna aliqua. Ut enim ad minim veniam quis nostrud exercitation.</p>
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
							<!-- Add Pagination -->
							
						
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--Shop-->
	<div class="clv_shop_wrapper clv_section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-6 col-md-6">
					<div class="clv_heading">
						<h3>Our Company</h3>
						<div class="clv_underline"><img src="<?php echo base_url(); ?>images/dairy_underline3.png" alt="dairy-farming-under-line"></div>
						<p>Consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dole magna aliqua. Ut enim ad minim veniam quis nostrud exercitation.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12 col-md-12">
					<div class="shop_slider">
						<div class="swiper-container swiper-container-initialized swiper-container-horizontal">
							<div class="swiper-wrapper" style="transform: translate3d(-2038.75px, 0px, 0px); transition-duration: 0ms;">
								<div class="swiper-slide" data-swiper-slide-index="0" style="width: 276.25px; margin-right: 15px;">
									<div class="shop_slide" style="height:255px;">
										<div class="item_image">
											<img src="<?php echo base_url(); ?>images/morgan_agro.jpg" alt="dairy-farming-shop-cart" class="img-fluid">
										</div>
																			
										<div class="item_overlay">											
											<a href="javascript:;" class="shop_btn">Read More</a>
										</div>
									</div>
								</div>
								<div class="swiper-slide" data-swiper-slide-index="1" style="width: 276.25px; margin-right: 15px;">
									<div class="shop_slide" style="height:255px;">
										<div class="item_image">
											<img src="<?php echo base_url(); ?>images/morgan_dairy_farm.jpg" alt="dairy-farming-shop" class="img-fluid">
										</div>
										
										<div class="item_overlay">
											<a href="javascript:;" class="shop_btn">Read More</a>
										</div>
									</div>
								</div>
								<div class="swiper-slide swiper-slide-prev" data-swiper-slide-index="2" style="width: 276.25px; margin-right: 15px;">
									<div class="shop_slide" style="height:255px;">
										<div class="item_image">
											<img src="<?php echo base_url(); ?>images/morgan_electrical.jpg" alt="dairy-farming-shop-butter" class="img-fluid">
										</div>
										
										<div class="item_overlay">											
											<a href="javascript:;" class="shop_btn">Read More</a>
										</div>
									</div>
								</div>
								<div class="swiper-slide swiper-slide-prev" data-swiper-slide-index="2" style="width: 276.25px; margin-right: 15px;">
									<div class="shop_slide" style="height:255px;">
										<div class="item_image">
											<img src="<?php echo base_url(); ?>images/morgan_milk.jpg" alt="dairy-farming-shop-butter" class="img-fluid">
										</div>
										
										<div class="item_overlay">											
											<a href="javascript:;" class="shop_btn">Read More</a>
										</div>
									</div>
								</div>
								<div class="swiper-slide swiper-slide-prev" data-swiper-slide-index="2" style="width: 276.25px; margin-right: 15px;">
									<div class="shop_slide" style="height:255px;">
										<div class="item_image">
											<img src="<?php echo base_url(); ?>images/morgan_textile.jpg" alt="dairy-farming-shop-butter" class="img-fluid">
										</div>
										
										<div class="item_overlay">											
											<a href="javascript:;" class="shop_btn">Read More</a>
										</div>
									</div>
								</div>
							</div>
						<span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
						<!-- Add Arrows -->
						<span class="slider_arrow shop_left left_arrow" tabindex="0" role="button" aria-label="Previous slide">
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="10px" height="20px">
							<path fill-rule="evenodd" fill="rgb(226, 226, 226)" d="M0.272,10.703 L8.434,19.703 C8.792,20.095 9.372,20.095 9.731,19.703 C10.089,19.308 10.089,18.668 9.731,18.274 L2.217,9.990 L9.730,1.706 C10.089,1.310 10.089,0.672 9.730,0.277 C9.372,-0.118 8.791,-0.118 8.433,0.277 L0.271,9.274 C-0.082,9.666 -0.082,10.315 0.272,10.703 Z"></path>
							</svg>
						</span>
						<span class="slider_arrow shop_right right_arrow" tabindex="0" role="button" aria-label="Next slide">
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="10px" height="20px">
							<path fill-rule="evenodd" fill="rgb(226, 226, 226)" d="M9.728,10.703 L1.566,19.703 C1.208,20.095 0.627,20.095 0.268,19.703 C-0.090,19.308 -0.090,18.668 0.268,18.274 L7.783,9.990 L0.269,1.706 C-0.089,1.310 -0.089,0.672 0.269,0.277 C0.627,-0.118 1.209,-0.118 1.567,0.277 L9.729,9.274 C10.081,9.666 10.081,10.315 9.728,10.703 Z"></path>
							</svg>
						</span>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--Testimonial-->
	<div class="dairy_testimonial_wrapper clv_section">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-4">
					<div class="testimonial_content">
						<h3>testimonial</h3>
						<img src="<?php echo base_url(); ?>images/dairy_underline4.png" alt="dairy-farming-testimonial-underline">
						<p>Consectetur adipisicing elit sed do eiusmod tempoere er incididunt ut labore et dole magna aliqua Ut enirereff im ad minim veniam nostrud exercitation.</p>
					</div>
				</div>
				<div class="col-lg-8 col-md-8">
					<div class="dairy_testimonial_slider">
						<!-- Arrows -->
						<span class="dairy_arrow dairy_left" tabindex="0" role="button" aria-label="Previous slide">
							<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 31.494 31.494" style="enable-background:new 0 0 31.494 31.494;" xml:space="preserve" width="20" height="20">
							<path d="M10.273,5.009c0.444-0.444,1.143-0.444,1.587,0c0.429,0.429,0.429,1.143,0,1.571l-8.047,8.047h26.554
								c0.619,0,1.127,0.492,1.127,1.111c0,0.619-0.508,1.127-1.127,1.127H3.813l8.047,8.032c0.429,0.444,0.429,1.159,0,1.587
								c-0.444,0.444-1.143,0.444-1.587,0l-9.952-9.952c-0.429-0.429-0.429-1.143,0-1.571L10.273,5.009z"></path>
							</svg>
						</span>
						<span class="dairy_arrow dairy_right" tabindex="0" role="button" aria-label="Next slide">
							<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 31.49 31.49" style="enable-background:new 0 0 31.49 31.49;" xml:space="preserve" width="20" height="20">
							<path d="M21.205,5.007c-0.429-0.444-1.143-0.444-1.587,0c-0.429,0.429-0.429,1.143,0,1.571l8.047,8.047H1.111
								C0.492,14.626,0,15.118,0,15.737c0,0.619,0.492,1.127,1.111,1.127h26.554l-8.047,8.032c-0.429,0.444-0.429,1.159,0,1.587
								c0.444,0.444,1.159,0.444,1.587,0l9.952-9.952c0.444-0.429,0.444-1.143,0-1.571L21.205,5.007z"></path>
							</svg>
						</span>
						<!-- Swiper -->
						<div class="swiper-container swiper-container-fade swiper-container-initialized swiper-container-horizontal">
							<div class="swiper-wrapper" style="transition-duration: 0ms;"><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="1" style="width: 770px; opacity: 1; transform: translate3d(0px, 0px, 0px); transition-duration: 0ms;">
									<div class="dairy_testimonial_slide">
										<div class="dairy_testimonial_image">
											<img src="<?php echo base_url(); ?>images/dairy_testimonial2.jpg" alt="dairy-farming-testimonial-2">
										</div>
										<div class="dairy_testimonial_message">
											<p>Nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis consequat.</p>
											<h4>Alex 2Mardio</h4>
										</div>
									</div>
								</div>
								<div class="swiper-slide swiper-slide-prev swiper-slide-duplicate-next" data-swiper-slide-index="0" style="width: 770px; opacity: 1; transform: translate3d(-770px, 0px, 0px); transition-duration: 0ms;">
									<div class="dairy_testimonial_slide">
										<div class="dairy_testimonial_image">
											<img src="<?php echo base_url(); ?>images/dairy_testimonial.jpg" alt="dairy-farming-testimonial-1">
										</div>
										<div class="dairy_testimonial_message">
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
											<h4>Alex Mardio</h4>
										</div>
									</div>
								</div>
								<div class="swiper-slide swiper-slide-active" data-swiper-slide-index="1" style="width: 770px; opacity: 1; transform: translate3d(-1540px, 0px, 0px); transition-duration: 0ms;">
									<div class="dairy_testimonial_slide">
										<div class="dairy_testimonial_image">
											<img src="<?php echo base_url(); ?>images/dairy_testimonial2.jpg" alt="dairy-farming-testimonial-2">
										</div>
										<div class="dairy_testimonial_message">
											<p>Nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis consequat.</p>
											<h4>Alex 2Mardio</h4>
										</div>
									</div>
								</div>
							<div class="swiper-slide swiper-slide-duplicate swiper-slide-next swiper-slide-duplicate-prev" data-swiper-slide-index="0" style="width: 770px; opacity: 0; transform: translate3d(-2310px, 0px, 0px); transition-duration: 0ms;">
									<div class="dairy_testimonial_slide">
										<div class="dairy_testimonial_image">
											<img src="<?php echo base_url(); ?>images/dairy_testimonial.jpg" alt="dairy-farming-testimonial-1">
										</div>
										<div class="dairy_testimonial_message">
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
											<h4>Alex Mardio</h4>
										</div>
									</div>
								</div></div>
						<span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<!--Team-->
	<div class="dairy_team_wrapper clv_section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-6 col-md-6">
					<div class="clv_heading">
						<h3>our team</h3>
						<div class="clv_underline"><img src="<?php echo base_url(); ?>images/dairy_underline3.png" alt="dairy-farming-team-underline"></div>
						<p>Consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dole magna aliqua. Ut enim ad minim veniam quis nostrud exercitation.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12 col-md-12">
					<div class="dairy_team_slider">
						<div class="swiper-container swiper-container-initialized swiper-container-horizontal">
							<div class="swiper-wrapper" style="transform: translate3d(-1200px, 0px, 0px); transition-duration: 0ms;"><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-next" data-swiper-slide-index="1" style="width: 270px; margin-right: 30px;">
									<div class="team_slide">
										<div class="team_image">
											<img src="<?php echo base_url(); ?>images/dairy_team2.jpg" alt="dairy-farming-team-2" class="img-fluid">
										</div>
										<div class="team_details">
											<div class="team_name_block">
												<div class="team_name">
													<h4>john fresiz</h4>
													<span>dairy farmer</span>
												</div>
												<div class="team_social">
													<ul>
														<li><a class="facebook" href="javascript:;"><span><i class="fa fa-facebook" aria-hidden="true"></i></span></a></li>
														<li><a class="twitter" href="javascript:;"><span><i class="fa fa-twitter" aria-hidden="true"></i></span></a></li>
													</ul>
												</div>
											</div>
											<div class="team_message">
												<p>Dolor sit amet consecticing elit sed do eiusmpor ididunt ut labore et dolor.</p>
											</div>
										</div>
									</div>
								</div><div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="2" style="width: 270px; margin-right: 30px;">
									<div class="team_slide">
										<div class="team_image">
											<img src="<?php echo base_url(); ?>images/dairy_team3.jpg" alt="dairy-farming-team-3" class="img-fluid">
										</div>
										<div class="team_details">
											<div class="team_name_block">
												<div class="team_name">
													<h4>john fresiz</h4>
													<span>dairy farmer</span>
												</div>
												<div class="team_social">
													<ul>
														<li><a class="facebook" href="javascript:;"><span><i class="fa fa-facebook" aria-hidden="true"></i></span></a></li>
														<li><a class="twitter" href="javascript:;"><span><i class="fa fa-twitter" aria-hidden="true"></i></span></a></li>
													</ul>
												</div>
											</div>
											<div class="team_message">
												<p>Dolor sit amet consecticing elit sed do eiusmpor ididunt ut labore et dolor.</p>
											</div>
										</div>
									</div>
								</div><div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="3" style="width: 270px; margin-right: 30px;">
									<div class="team_slide">
										<div class="team_image">
											<img src="<?php echo base_url(); ?>images/dairy_team4.jpg" alt="dairy-farming-team-4" class="img-fluid">
										</div>
										<div class="team_details">
											<div class="team_name_block">
												<div class="team_name">
													<h4>john fresiz</h4>
													<span>dairy farmer</span>
												</div>
												<div class="team_social">
													<ul>
														<li><a class="facebook" href="javascript:;"><span><i class="fa fa-facebook" aria-hidden="true"></i></span></a></li>
														<li><a class="twitter" href="javascript:;"><span><i class="fa fa-twitter" aria-hidden="true"></i></span></a></li>
													</ul>
												</div>
											</div>
											<div class="team_message">
												<p>Dolor sit amet consecticing elit sed do eiusmpor ididunt ut labore et dolor.</p>
											</div>
										</div>
									</div>
								</div><div class="swiper-slide swiper-slide-duplicate swiper-slide-prev" data-swiper-slide-index="4" style="width: 270px; margin-right: 30px;">
									<div class="team_slide">
										<div class="team_image">
											<img src="<?php echo base_url(); ?>images/dairy_team1.jpg" alt="dairy-farming-team-6" class="img-fluid">
										</div>
										<div class="team_details">
											<div class="team_name_block">
												<div class="team_name">
													<h4>john fresiz</h4>
													<span>dairy farmer</span>
												</div>
												<div class="team_social">
													<ul>
														<li><a class="facebook" href="javascript:;"><span><i class="fa fa-facebook" aria-hidden="true"></i></span></a></li>
														<li><a class="twitter" href="javascript:;"><span><i class="fa fa-twitter" aria-hidden="true"></i></span></a></li>
													</ul>
												</div>
											</div>
											<div class="team_message">
												<p>Dolor sit amet consecticing elit sed do eiusmpor ididunt ut labore et dolor.</p>
											</div>
										</div>
									</div>
								</div>
								<div class="swiper-slide swiper-slide-active" data-swiper-slide-index="0" style="width: 270px; margin-right: 30px;">
									<div class="team_slide">
										<div class="team_image">
											<img src="<?php echo base_url(); ?>images/dairy_team1.jpg" alt="dairy-farming-team-2" class="img-fluid">
										</div>
										<div class="team_details">
											<div class="team_name_block">
												<div class="team_name">
													<h4>john fresiz</h4>
													<span>dairy farmer</span>
												</div>
												<div class="team_social">
													<ul>
														<li><a class="facebook" href="javascript:;"><span><i class="fa fa-facebook" aria-hidden="true"></i></span></a></li>
														<li><a class="twitter" href="javascript:;"><span><i class="fa fa-twitter" aria-hidden="true"></i></span></a></li>
													</ul>
												</div>
											</div>
											<div class="team_message">
												<p>Dolor sit amet consecticing elit sed do eiusmpor ididunt ut labore et dolor.</p>
											</div>
										</div>
									</div>
								</div>
								<div class="swiper-slide swiper-slide-next" data-swiper-slide-index="1" style="width: 270px; margin-right: 30px;">
									<div class="team_slide">
										<div class="team_image">
											<img src="<?php echo base_url(); ?>images/dairy_team2.jpg" alt="dairy-farming-team-2" class="img-fluid">
										</div>
										<div class="team_details">
											<div class="team_name_block">
												<div class="team_name">
													<h4>john fresiz</h4>
													<span>dairy farmer</span>
												</div>
												<div class="team_social">
													<ul>
														<li><a class="facebook" href="javascript:;"><span><i class="fa fa-facebook" aria-hidden="true"></i></span></a></li>
														<li><a class="twitter" href="javascript:;"><span><i class="fa fa-twitter" aria-hidden="true"></i></span></a></li>
													</ul>
												</div>
											</div>
											<div class="team_message">
												<p>Dolor sit amet consecticing elit sed do eiusmpor ididunt ut labore et dolor.</p>
											</div>
										</div>
									</div>
								</div>
								<div class="swiper-slide" data-swiper-slide-index="2" style="width: 270px; margin-right: 30px;">
									<div class="team_slide">
										<div class="team_image">
											<img src="<?php echo base_url(); ?>images/dairy_team3.jpg" alt="dairy-farming-team-3" class="img-fluid">
										</div>
										<div class="team_details">
											<div class="team_name_block">
												<div class="team_name">
													<h4>john fresiz</h4>
													<span>dairy farmer</span>
												</div>
												<div class="team_social">
													<ul>
														<li><a class="facebook" href="javascript:;"><span><i class="fa fa-facebook" aria-hidden="true"></i></span></a></li>
														<li><a class="twitter" href="javascript:;"><span><i class="fa fa-twitter" aria-hidden="true"></i></span></a></li>
													</ul>
												</div>
											</div>
											<div class="team_message">
												<p>Dolor sit amet consecticing elit sed do eiusmpor ididunt ut labore et dolor.</p>
											</div>
										</div>
									</div>
								</div>
								<div class="swiper-slide" data-swiper-slide-index="3" style="width: 270px; margin-right: 30px;">
									<div class="team_slide">
										<div class="team_image">
											<img src="<?php echo base_url(); ?>images/dairy_team4.jpg" alt="dairy-farming-team-4" class="img-fluid">
										</div>
										<div class="team_details">
											<div class="team_name_block">
												<div class="team_name">
													<h4>john fresiz</h4>
													<span>dairy farmer</span>
												</div>
												<div class="team_social">
													<ul>
														<li><a class="facebook" href="javascript:;"><span><i class="fa fa-facebook" aria-hidden="true"></i></span></a></li>
														<li><a class="twitter" href="javascript:;"><span><i class="fa fa-twitter" aria-hidden="true"></i></span></a></li>
													</ul>
												</div>
											</div>
											<div class="team_message">
												<p>Dolor sit amet consecticing elit sed do eiusmpor ididunt ut labore et dolor.</p>
											</div>
										</div>
									</div>
								</div>
								<div class="swiper-slide swiper-slide-duplicate-prev" data-swiper-slide-index="4" style="width: 270px; margin-right: 30px;">
									<div class="team_slide">
										<div class="team_image">
											<img src="<?php echo base_url(); ?>images/dairy_team1.jpg" alt="dairy-farming-team-6" class="img-fluid">
										</div>
										<div class="team_details">
											<div class="team_name_block">
												<div class="team_name">
													<h4>john fresiz</h4>
													<span>dairy farmer</span>
												</div>
												<div class="team_social">
													<ul>
														<li><a class="facebook" href="javascript:;"><span><i class="fa fa-facebook" aria-hidden="true"></i></span></a></li>
														<li><a class="twitter" href="javascript:;"><span><i class="fa fa-twitter" aria-hidden="true"></i></span></a></li>
													</ul>
												</div>
											</div>
											<div class="team_message">
												<p>Dolor sit amet consecticing elit sed do eiusmpor ididunt ut labore et dolor.</p>
											</div>
										</div>
									</div>
								</div>
							<div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="0" style="width: 270px; margin-right: 30px;">
									<div class="team_slide">
										<div class="team_image">
											<img src="<?php echo base_url(); ?>images/dairy_team1.jpg" alt="dairy-farming-team-2" class="img-fluid">
										</div>
										<div class="team_details">
											<div class="team_name_block">
												<div class="team_name">
													<h4>john fresiz</h4>
													<span>dairy farmer</span>
												</div>
												<div class="team_social">
													<ul>
														<li><a class="facebook" href="javascript:;"><span><i class="fa fa-facebook" aria-hidden="true"></i></span></a></li>
														<li><a class="twitter" href="javascript:;"><span><i class="fa fa-twitter" aria-hidden="true"></i></span></a></li>
													</ul>
												</div>
											</div>
											<div class="team_message">
												<p>Dolor sit amet consecticing elit sed do eiusmpor ididunt ut labore et dolor.</p>
											</div>
										</div>
									</div>
								</div><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-next" data-swiper-slide-index="1" style="width: 270px; margin-right: 30px;">
									<div class="team_slide">
										<div class="team_image">
											<img src="<?php echo base_url(); ?>images/dairy_team2.jpg" alt="dairy-farming-team-2" class="img-fluid">
										</div>
										<div class="team_details">
											<div class="team_name_block">
												<div class="team_name">
													<h4>john fresiz</h4>
													<span>dairy farmer</span>
												</div>
												<div class="team_social">
													<ul>
														<li><a class="facebook" href="javascript:;"><span><i class="fa fa-facebook" aria-hidden="true"></i></span></a></li>
														<li><a class="twitter" href="javascript:;"><span><i class="fa fa-twitter" aria-hidden="true"></i></span></a></li>
													</ul>
												</div>
											</div>
											<div class="team_message">
												<p>Dolor sit amet consecticing elit sed do eiusmpor ididunt ut labore et dolor.</p>
											</div>
										</div>
									</div>
								</div><div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="2" style="width: 270px; margin-right: 30px;">
									<div class="team_slide">
										<div class="team_image">
											<img src="<?php echo base_url(); ?>images/dairy_team3.jpg" alt="dairy-farming-team-3" class="img-fluid">
										</div>
										<div class="team_details">
											<div class="team_name_block">
												<div class="team_name">
													<h4>john fresiz</h4>
													<span>dairy farmer</span>
												</div>
												<div class="team_social">
													<ul>
														<li><a class="facebook" href="javascript:;"><span><i class="fa fa-facebook" aria-hidden="true"></i></span></a></li>
														<li><a class="twitter" href="javascript:;"><span><i class="fa fa-twitter" aria-hidden="true"></i></span></a></li>
													</ul>
												</div>
											</div>
											<div class="team_message">
												<p>Dolor sit amet consecticing elit sed do eiusmpor ididunt ut labore et dolor.</p>
											</div>
										</div>
									</div>
								</div><div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="3" style="width: 270px; margin-right: 30px;">
									<div class="team_slide">
										<div class="team_image">
											<img src="<?php echo base_url(); ?>images/dairy_team4.jpg" alt="dairy-farming-team-4" class="img-fluid">
										</div>
										<div class="team_details">
											<div class="team_name_block">
												<div class="team_name">
													<h4>john fresiz</h4>
													<span>dairy farmer</span>
												</div>
												<div class="team_social">
													<ul>
														<li><a class="facebook" href="javascript:;"><span><i class="fa fa-facebook" aria-hidden="true"></i></span></a></li>
														<li><a class="twitter" href="javascript:;"><span><i class="fa fa-twitter" aria-hidden="true"></i></span></a></li>
													</ul>
												</div>
											</div>
											<div class="team_message">
												<p>Dolor sit amet consecticing elit sed do eiusmpor ididunt ut labore et dolor.</p>
											</div>
										</div>
									</div>
								</div></div>
						<span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
						<!-- Add Arrows -->
						<span class="slider_arrow team_left left_arrow" tabindex="0" role="button" aria-label="Previous slide">
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="10px" height="20px">
							<path fill-rule="evenodd" fill="rgb(226, 226, 226)" d="M0.272,10.703 L8.434,19.703 C8.792,20.095 9.372,20.095 9.731,19.703 C10.089,19.308 10.089,18.668 9.731,18.274 L2.217,9.990 L9.730,1.706 C10.089,1.310 10.089,0.672 9.730,0.277 C9.372,-0.118 8.791,-0.118 8.433,0.277 L0.271,9.274 C-0.082,9.666 -0.082,10.315 0.272,10.703 Z"></path>
							</svg>
						</span>
						<span class="slider_arrow team_right right_arrow" tabindex="0" role="button" aria-label="Next slide">
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="10px" height="20px">
							<path fill-rule="evenodd" fill="rgb(226, 226, 226)" d="M9.728,10.703 L1.566,19.703 C1.208,20.095 0.627,20.095 0.268,19.703 C-0.090,19.308 -0.090,18.668 0.268,18.274 L7.783,9.990 L0.269,1.706 C-0.089,1.310 -0.089,0.672 0.269,0.277 C0.627,-0.118 1.209,-0.118 1.567,0.277 L9.729,9.274 C10.081,9.666 10.081,10.315 9.728,10.703 Z"></path>
							</svg>
						</span>
					</div>
				</div>
			</div>
		</div>
	</div>	