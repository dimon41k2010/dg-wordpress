<?php
/*
Template Name: Page for Resume 
*/
?>

<?php
get_header();
?>
 <!--================Home Banner Area =================-->



        <section class="home_banner_area">
           	
			   <div class="header-intro header-intro-resume theme-bg-primary text-white py-1">
					<div class="container position-relative">
						<h2 class="page-heading mb-1">Resume</h2>
						<a class="btn theme-btn-on-bg download-resume position-absolute font-weight-bold mx-auto" href="https://themes.3rdwavemedia.com/resources/sketch-template/pillar-sketch-sketch-resume-template-for-developers/" target="_blank"><i class="fas fa-download mr-3"></i>Download PDF Version</a>
	        		</div><!--//container-->
        		</div><!--//header-intro-->
			   
			   <div class="container box_1620">
           		<div class="banner_inner d-flex align-items-center">
					<div class="banner_content">
						<div class="media"> 
                            <!-- Resume section -->


						<article class="resume-wrapper text-center position-relative">

							<div class="resume-wrapper-inner mx-auto text-left bg-white shadow-lg">
								<div class="my-cv">
									<div class="my-cv__header">
										<div class="photo">
											<img src="<?=get_site_url()?>/wp-content/themes/dgtheme/img/IMG_2369.jpg" alt="">
										</div>
										
										<div class="info-cv"> 
											<div class="position">
												<h1>Dmytro Gordiienko</h1>
												<h2>Full Stack Developer</h2>
												<a href="mailto:dmytro.gordiienko@gmail.com">dmytro.gordiienko@gmail.com</a>
												<a href="tel:0123 456 78900">0123 456 78900</a>
											</div>
											<div class="social">
												<a class="a123" href ="#">
													<img src="" alt="">
													<p>Facebook</p>
												</a>
												<a class="a123"  href ="#">
													<img class="linkedin_img" src="https://img.icons8.com/all/500/linkedin.png" alt="">
													<!-- <a class="btn btn-block btn-social btn-linkedin" > -->
													
													<span class="fa fa-linkedin"></span>
													<p>LinkedIn</p>
												</a>
												<a class="a123"  href ="#">
													<img src="data:image/png;base64,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" alt="">
													<p>Github</p>
													
        										  </a>
												</a>
												
											</div>
										</div>
									</div>
								</div>
								
								
		    <div class="resume-body p-5">
			    <section class="resume-section summary-section mb-5">
				    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Career Summary</h2>
				    <div class="resume-section-content">
					    <p class="mb-0">Summarise your career here. <a class="text-reset" href="https://themes.3rdwavemedia.com/resources/sketch-template/pillar-sketch-sketch-resume-template-for-developers/" target="_blank">You can make a PDF version of your resume using our free Sketch template here</a>. Aenean commodo ligula eget dolor aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
				    </div>
			    </section><!--//summary-section-->
			    <div class="row">
				    <div class="col-lg-9">
					    <section class="resume-section experience-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Work Experience</h2>
						    <div class="resume-section-content">
							    <div class="resume-timeline position-relative">
								    <article class="resume-timeline-item position-relative pb-5">
									    
									    <div class="resume-timeline-item-header mb-2">
										    <div class="d-flex  flex-md-row">
										        <h3 class="resume-position-title font-weight-bold mb-1">Lead Developer</h3>
										        <div class="resume-company-name ml-auto">Startup Hub</div>
										    </div><!--//row-->
										    <div class="resume-position-time">2018 - Present</div>
									    </div><!--//resume-timeline-item-header-->
									    <div class="resume-timeline-item-desc">
										    <p>Role description goes here ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Donec pede justo, fringilla vel.</p>
										    <h4 class="resume-timeline-item-desc-heading font-weight-bold">Achievements:</h4>
										    <p>Praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident.</p>
										    <ul>
											    <li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>
											    <li>At vero eos et accusamus et iusto odio dignissimos.</li>
											    <li>Blanditiis praesentium voluptatum deleniti atque corrupti.</li>
											    <li>Maecenas tempus tellus eget.</li>
										    </ul>
										    <h4 class="resume-timeline-item-desc-heading font-weight-bold">Technologies used:</h4>
										    <ul class="list-inline">
											    <li class="list-inline-item"><span class="badge badge-secondary badge-pill">Angular</span></li>
											    <li class="list-inline-item"><span class="badge badge-secondary badge-pill">Python</span></li>
											    <li class="list-inline-item"><span class="badge badge-secondary badge-pill">jQuery</span></li>
											    <li class="list-inline-item"><span class="badge badge-secondary badge-pill">Webpack</span></li>
											    <li class="list-inline-item"><span class="badge badge-secondary badge-pill">HTML/SASS</span></li>
											    <li class="list-inline-item"><span class="badge badge-secondary badge-pill">PostgresSQL</span></li>
										    </ul>
									    </div><!--//resume-timeline-item-desc-->

								    </article><!--//resume-timeline-item-->
								    
								    <article class="resume-timeline-item position-relative pb-5">
									    
									    <div class="resume-timeline-item-header mb-2">
										    <div class="d-flex flex-column flex-md-row">
										        <h3 class="resume-position-title font-weight-bold mb-1">Senior Software Developer</h3>
										        <div class="resume-company-name ml-auto">Google</div>
										    </div><!--//row-->
										    <div class="resume-position-time">2014 - 2018</div>
									    </div><!--//resume-timeline-item-header-->
									    <div class="resume-timeline-item-desc">
										    <p>Role description goes here ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Donec pede justo, fringilla vel.</p>
										    <h4 class="resume-timeline-item-desc-heading font-weight-bold">Achievements</h4>
										    <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</p>
										    <h4 class="resume-timeline-item-desc-heading font-weight-bold">Technologies used:</h4>
										    <ul class="list-inline">
											    <li class="list-inline-item"><span class="badge badge-secondary badge-pill">React</span></li>
											    <li class="list-inline-item"><span class="badge badge-secondary badge-pill">Redux</span></li>
											    <li class="list-inline-item"><span class="badge badge-secondary badge-pill">Django</span></li>
											    <li class="list-inline-item"><span class="badge badge-secondary badge-pill">Webpack</span></li>
											    <li class="list-inline-item"><span class="badge badge-secondary badge-pill">HTML/SASS</span></li>
											    <li class="list-inline-item"><span class="badge badge-secondary badge-pill">MySQL</span></li>
										    </ul>
									    </div><!--//resume-timeline-item-desc-->

								    </article><!--//resume-timeline-item-->
								    
								    <article class="resume-timeline-item position-relative pb-5">
									    
									    <div class="resume-timeline-item-header mb-2">
										    <div class="d-flex flex-column flex-md-row">
										        <h3 class="resume-position-title font-weight-bold mb-1">Co-Founder & Lead Developer</h3>
										        <div class="resume-company-name ml-auto">To-do Lists</div>
										    </div><!--//row-->
										    <div class="resume-position-time">2012 - 2014</div>
									    </div><!--//resume-timeline-item-header-->
									    <div class="resume-timeline-item-desc">
										    <p>Role description goes here ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec.</p>
										    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes.</p>
										    <h4 class="resume-timeline-item-desc-heading font-weight-bold">Technologies used:</h4>
										    <ul class="list-inline">
											    <li class="list-inline-item"><span class="badge badge-secondary badge-pill">Django</span></li>
											    <li class="list-inline-item"><span class="badge badge-secondary badge-pill">JavaScript</span></li>
											    <li class="list-inline-item"><span class="badge badge-secondary badge-pill">Node.js</span></li>
											    <li class="list-inline-item"><span class="badge badge-secondary badge-pill">Require.js</span></li>
											    <li class="list-inline-item"><span class="badge badge-secondary badge-pill">HTML/SASS</span></li>
										    </ul>
									    </div><!--//resume-timeline-item-desc-->

								    </article><!--//resume-timeline-item-->
								    
								    <article class="resume-timeline-item position-relative">
									    
									    <div class="resume-timeline-item-header mb-2">
										    <div class="d-flex flex-column flex-md-row">
										        <h3 class="resume-position-title font-weight-bold mb-1">Web Developer <small class="text-muted">(Intern)</small></h3>
										        <div class="resume-company-name ml-auto">Amazon</div>
										    </div><!--//row-->
										    <div class="resume-position-time">2011 - 2012</div>
									    </div><!--//resume-timeline-item-header-->
									    <div class="resume-timeline-item-desc">
										    <p>Role description goes here ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec. Fusce vulputate eleifend sapien. Vestibulum purus quam, scelerisque ut, mollis sed, nonummy id, metus. Nullam accumsan lorem in dui. Cras ultricies mi eu turpis hendrerit fringilla. Vestibulum.</p>
										    <h4 class="resume-timeline-item-desc-heading font-weight-bold">Technologies used:</h4>
										    <ul class="list-inline">
											    <li class="list-inline-item"><span class="badge badge-secondary badge-pill">Ruby on Rails</span></li>
											    <li class="list-inline-item"><span class="badge badge-secondary badge-pill">jQuery</span></li>
											    <li class="list-inline-item"><span class="badge badge-secondary badge-pill">HTML/LESS</span></li>
											    <li class="list-inline-item"><span class="badge badge-secondary badge-pill">MongoDB</span></li>
										    </ul>
									    </div><!--//resume-timeline-item-desc-->

								    </article><!--//resume-timeline-item-->
								    
								    
							    </div><!--//resume-timeline-->
							    
							 
						    </div>
					    </section><!--//experience-section-->
				    </div>
				    <div class="col-lg-3">
					    <section class="resume-section skills-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Skills &amp; Tools</h2>
						    <div class="resume-section-content">
						        <div class="resume-skill-item">
							        <h4 class="resume-skills-cat font-weight-bold">Frontend</h4>
							        <ul class="list-unstyled mb-4">
								        <li class="mb-2">
								            <div class="resume-skill-name">Angular</div>
									        <div class="progress resume-progress">
											    <div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: 98%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
								        </li>
								        <li class="mb-2">
								            <div class="resume-skill-name">React</div>
									        <div class="progress resume-progress">
											    <div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: 94%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
								        </li>
								        <li class="mb-2">
								            <div class="resume-skill-name">JavaScript</div>
									        <div class="progress resume-progress">
											    <div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: 96%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
								        </li>
								        
								        <li class="mb-2">
								            <div class="resume-skill-name">Node.js</div>
									        <div class="progress resume-progress">
											    <div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: 92%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
								        </li>
								        <li class="mb-2">
								            <div class="resume-skill-name">HTML/CSS/SASS/LESS</div>
									        <div class="progress resume-progress">
											    <div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: 96%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
								        </li>
							        </ul>
						        </div><!--//resume-skill-item-->
						        
						        <div class="resume-skill-item">
						            <h4 class="resume-skills-cat font-weight-bold">Backend</h4>
							        <ul class="list-unstyled">
								        <li class="mb-2">
								            <div class="resume-skill-name">Python/Django</div>
									        <div class="progress resume-progress">
											    <div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: 95%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
								        </li>
								        <li class="mb-2">
								            <div class="resume-skill-name">Ruby/Rails</div>
									        <div class="progress resume-progress">
											    <div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: 92%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
								        </li>
								        <li class="mb-2">
								            <div class="resume-skill-name">PHP</div>
									        <div class="progress resume-progress">
											    <div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: 86%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
								        </li>
								        <li class="mb-2">
								            <div class="resume-skill-name">WordPress/Shopify</div>
									        <div class="progress resume-progress">
											    <div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: 82%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
								        </li>
							        </ul>
						        </div><!--//resume-skill-item-->
						        
						        <div class="resume-skill-item">
						            <h4 class="resume-skills-cat font-weight-bold">Others</h4>
						            <ul class="list-inline">
							            <li class="list-inline-item"><span class="badge badge-light">DevOps</span></li>
							            <li class="list-inline-item"><span class="badge badge-light">Code Review</span></li>
							            <li class="list-inline-item"><span class="badge badge-light">Git</span></li>
							            <li class="list-inline-item"><span class="badge badge-light">Unit Testing</span></li>
							            <li class="list-inline-item"><span class="badge badge-light">Wireframing</span></li>
							            <li class="list-inline-item"><span class="badge badge-light">Sketch</span></li>
							            <li class="list-inline-item"><span class="badge badge-light">Balsamiq</span></li>
							            <li class="list-inline-item"><span class="badge badge-light">WordPress</span></li>
							            <li class="list-inline-item"><span class="badge badge-light">Shopify</span></li>
						            </ul>
						        </div><!--//resume-skill-item-->
						    </div><!--resume-section-content-->
					    </section><!--//skills-section-->
					    <section class="resume-section education-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Education</h2>
						    <div class="resume-section-content">
							    <ul class="list-unstyled">
								    <li class="mb-2">
								        <div class="resume-degree font-weight-bold">MSc in Computer Science</div>
								        <div class="resume-degree-org">University College London</div>
								        <div class="resume-degree-time">2010 - 2011</div>
								    </li>
								    <li>
								        <div class="resume-degree font-weight-bold">BSc Maths and Physics</div>
								        <div class="resume-degree-org">Imperial College London</div>
								        <div class="resume-degree-time">2007 - 2010</div>
								    </li>
							    </ul>
						    </div>
					    </section><!--//education-section-->
					    <section class="resume-section reference-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Awards</h2>
						    <div class="resume-section-content">
							    <ul class="list-unstyled resume-awards-list">
								    <li class="mb-2 pl-4 position-relative">
								        <i class="resume-award-icon fas fa-trophy position-absolute" data-fa-transform="shrink-2"></i>
								        <div class="resume-award-name">Award Name Lorem</div>
								        <div class="resume-award-desc">Award desc goes here, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo.</div>
								    </li>
								    <li class="mb-0 pl-4 position-relative">
								        <i class="resume-award-icon fas fa-trophy position-absolute" data-fa-transform="shrink-2"></i>
								        <div class="resume-award-name">Award Name Ipsum</div>
								        <div class="resume-award-desc">Award desc goes here, ultricies nec, pellentesque.</div>
								    </li>
							    </ul>
						    </div>
					    </section><!--//interests-section-->
					    <section class="resume-section language-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Language</h2>
						    <div class="resume-section-content">
							    <ul class="list-unstyled resume-lang-list">
								    <li class="mb-2"><span class="resume-lang-name font-weight-bold">English</span> <small class="text-muted font-weight-normal">(Native)</small></li>
								    <li class="mb-2 align-middle"><span class="resume-lang-name font-weight-bold">French</span> <small class="text-muted font-weight-normal">(Professional)</small></li>
								    <li><span class="resume-lang-name font-weight-bold">Spanish</span> <small class="text-muted font-weight-normal">(Professional)</small></li>
							    </ul>
						    </div>
					    </section><!--//language-section-->
					    <section class="resume-section interests-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Interests</h2>
						    <div class="resume-section-content">
							    <ul class="list-unstyled">
								    <li class="mb-1">Climbing</li>
								    <li class="mb-1">Snowboarding</li>
								    <li class="mb-1">Cooking</li>
							    </ul>
						    </div>
					    </section><!--//interests-section-->
					    
				    </div>
			    </div><!--//row-->
		    </div><!--//resume-body-->
		    
		    
	    </div>
    </article>  

						</div>
					</div>
				</div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->
<?php
get_footer();
?>