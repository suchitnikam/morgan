    <!--Breadcrumb-->
    <div class="breadcrumb_wrapper">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="breadcrumb_inner">
                        <h3>contact us</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="breadcrumb_block">
            <ul>
                <li><a href="<?php echo base_url(); ?>home">home</a></li>
                <li>contact us</li>
            </ul>
        </div>
    </div>
	
    <!--Contact Block-->
    <div class="contact_blocks_wrapper clv_section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="contact_block" style="height: 100%;">
                        <span></span>
                        <div class="contact_icon">
							<img src="<?php echo base_url(); ?>images/contact_icon1.png" alt="image">
						</div>
                        <h4>contact us</h4>
                        <p>077740 19750</p>
                        
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="contact_block" style="height: 100%;">
                        <span></span>
                        <div class="contact_icon"><img src="<?php echo base_url(); ?>images/contact_icon2.png" alt="image"></div>
                        <h4>email</h4>
                        <p>dairyfarming@example.com</p>
                        <p>support@example.in</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="contact_block">
                        <span></span>
                        <div class="contact_icon"><img src="<?php echo base_url(); ?>images/contact_icon3.png" alt="image"></div>
                        <h4>address</h4>
                        <p>Gut No-297/2, Dhavleshwar, A/p Aghar Bk.Taluka Malegaon, Maharashtra 423201, India</p> 
						<p></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Contact Form-->
    <div class="contact_form_wrapper clv_section">
        <div class="container">
			<?php			
				if($this->session->flashdata('flagErrorContact'))
				{
				?>
					<div class="alert alert-danger msg-alert" id="successMessage">
						<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
						<strong><?php echo $this->session->flashdata('flagErrorContact');?></strong>
					</div>
				<?php
				}
			   if($this->session->flashdata('flagSuccessContact'))
				{
				?>
					<div class="alert alert-success msg-alert" id="successMessage">
						<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
						<strong><?php echo $this->session->flashdata('flagSuccessContact');?></strong>
					</div>
				<?php
				} ?>
            <div class="row">			
                <div class="col-lg-8 col-md-8">
                    <div class="contact_form_section">
                        <div class="row">
                            <div class="col-md-12 col-lg-12">
                                <h3>send message us</h3>
                            </div>
							<form action="<?php echo base_url(); ?>contact" method="post">
                            <div class="col-md-6 col-lg-6">
                                <div class="form_block">
                                    <input type="text" name="first_name" class="form_field require" placeholder="First Name" required>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6">
                                <div class="form_block">
                                    <input type="text" name="last_name" class="form_field require" placeholder="Last Name" required>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6">
                                <div class="form_block">
                                    <input type="text" name="email" class="form_field require" placeholder="Email" data-valid="email" data-error="Email should be valid." required>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6">
                                <div class="form_block">
                                    <input type="text" name="subject" class="form_field require" placeholder="Subject" required>
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-12">
                                <div class="form_block">
                                    <textarea placeholder="Message" name="message" class="form_field require" required></textarea>
									<div class="response"></div>
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-12">
                                <div class="form_block">
                                    <button type="submit" class="clv_btn submitForm" data-type="contact">send</button>									
                                </div>
                            </div>
							</form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="working_time_section">
                        <div class="timetable_block">
                            <h5>working hours</h5>
                            <ul>
                                <li>
                                    <p>monday</p>
                                    <p>Open 24 hours</p>
                                </li>
                                <li>
                                    <p>tuesday</p>
                                    <p>Open 24 hours</p>
                                </li>
                                <li>
                                    <p>wednesday</p>
                                    <p>Open 24 hours</p>
                                </li>
                                <li>
                                    <p>thursday</p>
                                    <p>Open 24 hours</p>
                                </li>
                                <li>
                                    <p>friday</p>
                                    <p>Open 24 hours</p>
                                </li>
                                <li>
                                    <p>saturday</p>
                                    <p>Open 24 hours</p>
                                </li>
                                <li>
                                    <p>sunday</p>
                                    <p>Open 24 hours</p>
                                </li>
                            </ul>
                        </div>
                        <div class="tollfree_block">
                            <h5>toll free number</h5>
                            <h3>+1-202-555-0101</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Contact Map-->
    <div class="contact_map_wrapper">
        <div id="map" style="position: relative; overflow: hidden;">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3735.9852113006827!2d74.38516261492457!3d20.547785986260898!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bde853a6b6e8473%3A0x2bd462cc5dec4f49!2sMorgan%20Milk%20%26%20Dairy%20Industries%20Pvt%20Ltd!5e0!3m2!1sen!2sin!4v1601297921440!5m2!1sen!2sin" frameborder="0" style="border:0; height:inherit; width:100%;" allowfullscreen="" aria-hidden="false" tabindex="0">
			</iframe>
		</div>
    </div>    