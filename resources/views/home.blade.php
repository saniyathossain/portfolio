@php
	$public				= '';
	$theme_jackhon_path	= $public.'assets/themes/jackson/';
	$shortname			= 'Saniyat';
	$fullname			= $shortname.' Hossain';
	$designation		= 'PHP Web Developer';
	$country			= 'Bangladesh';
@endphp

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		 <!-- Facebook and Twitter integration -->
		<meta property="og:title" content=""/>
		<meta property="og:image" content=""/>
		<meta property="og:url" content=""/>
		<meta property="og:site_name" content=""/>
		<meta property="og:description" content=""/>
		<meta name="twitter:title" content="" />
		<meta name="twitter:image" content="" />
		<meta name="twitter:url" content="" />
		<meta name="twitter:card" content="" />

		<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
		<link rel="shortcut icon" href="favicon.ico">

		<link rel="preload" as="style" onload="this.rel='stylesheet'" href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700">
		<link rel="preload" as="style" onload="this.rel='stylesheet'" href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700">

		<!-- Animate.css -->
		<link rel="preload" as="style" onload="this.rel='stylesheet'" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
		<!-- Icomoon Icon Fonts-->
		<link rel="preload" as="style" onload="this.rel='stylesheet'" href="{!! asset($theme_jackhon_path.'css/icomoon.css') !!}">
		<!-- Bootstrap  -->
		<link rel="preload" as="style" onload="this.rel='stylesheet'" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<!-- Flexslider  -->
		<link rel="preload" as="style" onload="this.rel='stylesheet'" href="https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.7.1/flexslider.min.css">
		<!-- Flaticons  -->
		{{-- <link rel="preload" as="style" onload="this.rel='stylesheet'" href="{!! asset($theme_jackhon_path.'fonts/flaticon/font/flaticon.css') !!}"> --}}
		<!-- Owl Carousel -->
		<link rel="preload" as="style" onload="this.rel='stylesheet'" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
		{{-- <link rel="preload" as="style" onload="this.rel='stylesheet'" href="{!! asset($theme_jackhon_path.'css/owl.theme.default.min.css') !!}"> --}}

		<link rel="preload" as="style" onload="this.rel='stylesheet'" href="https://unpkg.com/progressively/dist/progressively.min.css">

		<!-- Theme style  -->
		<link rel="preload" as="style" onload="this.rel='stylesheet'" href="{!! asset($theme_jackhon_path.'css/style.css') !!}">

		<style>
			.progressive {
				background: transparent;
			}
			#colorlib-aside .colorlib-footer ul {
				background: #444 !important;
			}
		</style>

		<!-- Modernizr JS -->
		<script defer src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
		<!-- FOR IE9 below -->
		<!--[if lt IE 9]>
		<script defer src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->

		<title>{!! $fullname ?? '' !!}</title>
	</head>
	<body>
		<div id="colorlib-page">
			<div class="container-wrap">
			<a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"><i></i></a>
			<aside id="colorlib-aside" role="complementary" class="border js-fullheight">
				<div class="text-center">
					{{-- <div class="author-img" style="background-image: url({!! $theme_jackhon_path !!}images/about.jpg);"></div> --}}
					{{-- <div class="progressive__bg progressive--not-loaded author-img" data-progressive="{!! $theme_jackhon_path !!}images/about.jpg" data-progressive-sm="{!! $theme_jackhon_path !!}images/about.jpg" style="background-image: url('{!! $theme_jackhon_path !!}images/about.jpg');"></div> --}}
					<figure class="progressive">
						<img class="author-img img-responsive progressive__img progressive--not-loaded"
							src="{!! asset($theme_jackhon_path.'images/about.jpg') !!}"
							data-progressive="{!! asset($theme_jackhon_path.'images/about.jpg') !!}"
							alt="Image Alternative text"
							title="Image Title"
						/>
					</figure>
					<h1 id="colorlib-logo"><a href="index.html">{!! $fullname ?? '' !!}</a></h1>
					<span class="position"><a href="#">{!! $designation ?? '' !!}</a> in {!! $country ?? '' !!}</span>
				</div>
				<nav id="colorlib-main-menu" role="navigation" class="navbar">
					<div id="navbar" class="collapse">
						<ul>
							<li class="active"><a href="#" data-nav-section="home">Home</a></li>
							<li><a href="#" data-nav-section="about">About</a></li>
							<li><a href="#" data-nav-section="services">Services</a></li>
							<li><a href="#" data-nav-section="skills">Skills</a></li>
							<li><a href="#" data-nav-section="education">Education</a></li>
							<li><a href="#" data-nav-section="experience">Experience</a></li>
							<li><a href="#" data-nav-section="work">Work</a></li>
							<li><a href="#" data-nav-section="blog">Blog</a></li>
							<li><a href="#" data-nav-section="contact">Contact</a></li>
						</ul>
					</div>
				</nav>

				<div class="colorlib-footer">
					<p>
						<small>&copy; Copyright {!! date('Y') !!} All rights reserved
					<ul>
						<li><a href="#"><i class="icon-facebook2"></i></a></li>
						<li><a href="#"><i class="icon-twitter2"></i></a></li>
						<li><a href="#"><i class="icon-instagram"></i></a></li>
						<li><a href="#"><i class="icon-linkedin2"></i></a></li>
					</ul>
				</div>

			</aside>

			<div id="colorlib-main">
				<section id="colorlib-hero" class="js-fullheight" data-section="home">
					<div class="flexslider js-fullheight">
						<ul class="slides">
						<li style="background-image: url({!! $theme_jackhon_path !!}images/img_bg_1.jpg);">
							<div class="overlay"></div>
							<div class="container-fluid">
								<div class="row">
									<div class="col-md-6 col-md-offset-3 col-md-pull-3 col-sm-12 col-xs-12 js-fullheight slider-text">
										<div class="slider-text-inner js-fullheight">
											<div class="desc">
												<h1>Hi! <br>I'm {!! $shortname ?? '' !!}</h1>
												<h2>100% html5 bootstrap templates Made by <a href="https://colorlib.com/" target="_blank">colorlib.com</a></h2>
												<p><a class="btn btn-primary btn-learn">Download CV <i class="icon-download4"></i></a></p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</li>
						<li style="background-image: url({!! $theme_jackhon_path !!}images/img_bg_2.jpg);">
							<div class="overlay"></div>
							<div class="container-fluid">
								<div class="row">
									<div class="col-md-6 col-md-offset-3 col-md-pull-3 col-sm-12 col-xs-12 js-fullheight slider-text">
										<div class="slider-text-inner">
											<div class="desc">
												<h1>I am <br>a Web Developer</h1>
												<h2>100% html5 bootstrap templates Made by <a href="https://colorlib.com/" target="_blank">colorlib.com</a></h2>
												<p><a class="btn btn-primary btn-learn">View Portfolio <i class="icon-briefcase3"></i></a></p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</li>
						</ul>
					</div>
				</section>

				<section class="colorlib-about" data-section="about">
					<div class="colorlib-narrow-content">
						<div class="row">
							<div class="col-md-12">
								<div class="row row-bottom-padded-sm animate-box" data-animate-effect="fadeInLeft">
									<div class="col-md-12">
										<div class="about-desc">
											<span class="heading-meta">About</span>
											<h2 class="colorlib-heading">Who Am I?</h2>
											<p><strong>Hi I'm {!! $fullname ?? '' !!}</strong>. I am a solutions-focused Web Developer with experience in designing, developing rich web applications, websites and databases. Consistent and reliable with strong technical knowledge and enthusiasm for learning and adapting new technology to expand my expertise and work with creativity, honesty, sincerity and to understand my true potential.</p>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-3 animate-box" data-animate-effect="fadeInLeft">
										<div class="services color-1">
											<span class="icon2"><i class="icon-bulb"></i></span>
											<h3>Responsive Design</h3>
										</div>
									</div>
									<div class="col-md-3 animate-box" data-animate-effect="fadeInRight">
										<div class="services color-2">
											<span class="icon2"><i class="icon-globe-outline"></i></span>
											<h3>Web Development</h3>
										</div>
									</div>
									<div class="col-md-3 animate-box" data-animate-effect="fadeInTop">
										<div class="services color-3">
											<span class="icon2"><i class="icon-data"></i></span>
											<h3>Software</h3>
										</div>
									</div>
									<div class="col-md-3 animate-box" data-animate-effect="fadeInBottom">
										<div class="services color-4">
											<span class="icon2"><i class="icon-phone3"></i></span>
											<h3>Application</h3>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
										<div class="hire">
											<h2>I am happy to know you <br>that 15+ projects done sucessfully!</h2>
											{{-- <a href="#" class="btn-hire">Hire me</a> --}}
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>


				<section class="colorlib-services" data-section="services">
					<div class="colorlib-narrow-content">
						<div class="row">
							<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
								<span class="heading-meta">What I do?</span>
								<h2 class="colorlib-heading">Here are some of my expertise</h2>
							</div>
						</div>
						<div class="row row-pt-md">
							<div class="col-md-4 text-center animate-box">
								<div class="services color-1">
									<span class="icon">
										<i class="icon-bulb"></i>
									</span>
									<div class="desc">
										<h3>Innovative Ideas</h3>
										<p>Separated they live in Bookmarksgrove right at the coast of the Semantics</p>
									</div>
								</div>
							</div>
							<div class="col-md-4 text-center animate-box">
								<div class="services color-2">
									<span class="icon">
										<i class="icon-data"></i>
									</span>
									<div class="desc">
										<h3>Software</h3>
										<p>Separated they live in Bookmarksgrove right at the coast of the Semantics</p>
									</div>
								</div>
							</div>
							<div class="col-md-4 text-center animate-box">
								<div class="services color-3">
									<span class="icon">
										<i class="icon-phone3"></i>
									</span>
									<div class="desc">
										<h3>Application</h3>
										<p>Separated they live in Bookmarksgrove right at the coast of the Semantics</p>
									</div>
								</div>
							</div>
							<div class="col-md-4 text-center animate-box">
								<div class="services color-4">
									<span class="icon">
										<i class="icon-layers2"></i>
									</span>
									<div class="desc">
										<h3>Graphic Design</h3>
										<p>Separated they live in Bookmarksgrove right at the coast of the Semantics</p>
									</div>
								</div>
							</div>
							<div class="col-md-4 text-center animate-box">
								<div class="services color-5">
									<span class="icon">
										<i class="icon-data"></i>
									</span>
									<div class="desc">
										<h3>Software</h3>
										<p>Separated they live in Bookmarksgrove right at the coast of the Semantics</p>
									</div>
								</div>
							</div>
							<div class="col-md-4 text-center animate-box">
								<div class="services color-6">
									<span class="icon">
										<i class="icon-phone3"></i>
									</span>
									<div class="desc">
										<h3>Application</h3>
										<p>Separated they live in Bookmarksgrove right at the coast of the Semantics</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>

				<div id="colorlib-counter" class="colorlib-counters" style="background-image: url({!! $theme_jackhon_path !!}images/cover_bg_1.jpg);" data-stellar-background-ratio="0.5">
					<div class="overlay"></div>
					<div class="colorlib-narrow-content">
						<div class="row">
						</div>
						<div class="row">
							<div class="col-md-3 text-center animate-box">
								<span class="colorlib-counter js-counter" data-from="0" data-to="309" data-speed="5000" data-refresh-interval="50"></span>
								<span class="colorlib-counter-label">Cups of coffee</span>
							</div>
							<div class="col-md-3 text-center animate-box">
								<span class="colorlib-counter js-counter" data-from="0" data-to="356" data-speed="5000" data-refresh-interval="50"></span>
								<span class="colorlib-counter-label">Projects</span>
							</div>
							<div class="col-md-3 text-center animate-box">
								<span class="colorlib-counter js-counter" data-from="0" data-to="30" data-speed="5000" data-refresh-interval="50"></span>
								<span class="colorlib-counter-label">Clients</span>
							</div>
							<div class="col-md-3 text-center animate-box">
								<span class="colorlib-counter js-counter" data-from="0" data-to="10" data-speed="5000" data-refresh-interval="50"></span>
								<span class="colorlib-counter-label">Partners</span>
							</div>
						</div>
					</div>
				</div>

				<section class="colorlib-skills" data-section="skills">
					<div class="colorlib-narrow-content">
						<div class="row">
							<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
								<span class="heading-meta">My Specialty</span>
								<h2 class="colorlib-heading animate-box">My Skills</h2>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
								<p>
									<ol>
										<li><strong>OS</strong>: Microsoft Windows, Linux (Ubuntu, CentOS), Virtual OS (VMware, VirtualBox).</li>
										<li><strong>Programming Languages</strong>: PHP, JavaScript, Python, C++.</li>
										<li><strong>Back-end</strong>: OOP, MVC (Laravel, CodeIgniter), CMS (WordPress, Joomla), Composer, API (SMS gateway integration), Cronjob.</li>
										<li><strong>Front-end</strong>: Library (jQuery), Plugins, Framework (Vue JS), Node JS (Gulp, Webpack, Parcel, Laravel Mix), HTML5, CSS3, Twitter Bootstrap, Responsive Design, Telerik Kendo UI, Website speed optimization (avoid render blocking, leverage browser caching, GZIP Compression, Google Page Speed Module).</li>
										<li><strong>Database</strong>: Databases (MySQL, MSSQL), Database Design, Maintenance, Query Optimizations, Views, Stored Procedures, Functions, Triggers, Events.</li>
										<li><strong>IDEs (Coding)</strong>: Sublime Text, Atom, JetBrains PhpStorm, Cloud9 (online).</li>
										<li><strong>IDEs (Database)</strong>: Premiumsoft Navicat, JetBrains Datagrip, Microsoft SQL Server Management Studio, Apex SQL.</li>
										<li><strong>File Transfer</strong>: WinSCP, FileZilla.</li>
										<li><strong>Sub Versioning</strong>: TortoiseSVN.</li>
										<li><strong>Other</strong>: Web Hosting (cPanel, WHM, FTP, SFTP).</li>
										<li><strong>Experiences and Responsibilities</strong>: PHP Web Developer, Team Leader.</li>
									</ol>
								</p>
							</div>
							<div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
								<div class="progress-wrap">
									<h3>PHP</h3>
									<div class="progress">
										<div class="progress-bar color-1" role="progressbar" aria-valuenow="75"
										aria-valuemin="0" aria-valuemax="100" style="width:75%">
										<span>75%</span>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6 animate-box" data-animate-effect="fadeInRight">
								<div class="progress-wrap">
									<h3>jQuery</h3>
									<div class="progress">
										<div class="progress-bar color-2" role="progressbar" aria-valuenow="60"
										aria-valuemin="0" aria-valuemax="100" style="width:60%">
										<span>60%</span>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
								<div class="progress-wrap">
									<h3>HTML5</h3>
									<div class="progress">
										<div class="progress-bar color-3" role="progressbar" aria-valuenow="80"
										aria-valuemin="0" aria-valuemax="100" style="width:80%">
										<span>80%</span>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6 animate-box" data-animate-effect="fadeInRight">
								<div class="progress-wrap">
									<h3>CSS3</h3>
									<div class="progress">
										<div class="progress-bar color-4" role="progressbar" aria-valuenow="90"
										aria-valuemin="0" aria-valuemax="100" style="width:90%">
										<span>90%</span>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
								<div class="progress-wrap">
									<h3>Laravel</h3>
									<div class="progress">
										<div class="progress-bar color-5" role="progressbar" aria-valuenow="70"
										aria-valuemin="0" aria-valuemax="100" style="width:70%">
										<span>70%</span>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6 animate-box" data-animate-effect="fadeInRight">
								<div class="progress-wrap">
									<h3>MySQL</h3>
									<div class="progress">
										<div class="progress-bar color-6" role="progressbar" aria-valuenow="80"
										aria-valuemin="0" aria-valuemax="100" style="width:80%">
										<span>70%</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>

				<section class="colorlib-education" data-section="education">
					<div class="colorlib-narrow-content">
						<div class="row">
							<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
								<span class="heading-meta">Education</span>
								<h2 class="colorlib-heading animate-box">Education</h2>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
								<div class="fancy-collapse-panel">
									<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
										<div class="panel panel-default">
											<div class="panel-heading" role="tab" id="headingOne">
												<h4 class="panel-title">
													<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Master Degree Graphic Design
													</a>
												</h4>
											</div>
											<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
												 <div class="panel-body">
													<div class="row">
														<div class="col-md-6">
															<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
														</div>
														<div class="col-md-6">
															<p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
														</div>
													</div>
												 </div>
											</div>
										</div>
										<div class="panel panel-default">
											<div class="panel-heading" role="tab" id="headingTwo">
												<h4 class="panel-title">
													<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Bachelor Degree of Computer Science
													</a>
												</h4>
											</div>
											<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
												<div class="panel-body">
													<p>Far far away, behind the word <strong>mountains</strong>, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
														<ul>
															<li>Separated they live in Bookmarksgrove right</li>
															<li>Separated they live in Bookmarksgrove right</li>
														</ul>
												</div>
											</div>
										</div>
										<div class="panel panel-default">
											<div class="panel-heading" role="tab" id="headingThree">
												<h4 class="panel-title">
													<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Diploma in Information Technology
													</a>
												</h4>
											</div>
											<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
												<div class="panel-body">
													<p>Far far away, behind the word <strong>mountains</strong>, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
												</div>
											</div>
										</div>

										<div class="panel panel-default">
											<div class="panel-heading" role="tab" id="headingFour">
												<h4 class="panel-title">
													<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">Diploma in Information Technology
													</a>
												</h4>
											</div>
											<div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
												<div class="panel-body">
													<p>Far far away, behind the word <strong>mountains</strong>, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
												</div>
											</div>
										</div>

										<div class="panel panel-default">
											<div class="panel-heading" role="tab" id="headingFive">
												<h4 class="panel-title">
													<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">High School Secondary Education
													</a>
												</h4>
											</div>
											<div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
												<div class="panel-body">
													<p>Far far away, behind the word <strong>mountains</strong>, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>

				<section class="colorlib-experience" data-section="experience">
					<div class="colorlib-narrow-content">
						<div class="row">
							<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
								<span class="heading-meta">Experience</span>
								<h2 class="colorlib-heading animate-box">Work Experience</h2>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="timeline-centered">
									<article class="timeline-entry animate-box" data-animate-effect="fadeInLeft">
										<div class="timeline-entry-inner">

											<div class="timeline-icon color-1">
												<i class="icon-pen2"></i>
											</div>

											<div class="timeline-label">
												<h2 class="pull-left"><a href="#">PHP Programmer</a> <span>2012-2014</span></h2>
												<h2 class="pull-right"><a href="#">Runner Cyberlink (Birds Group)</a> <span>Mohammadpur, Dhaka</span></h2>
												<div class="clearfix"></div>
												<p>
													<ol>
														<li>Experience of designing and developing responsive websites using HTML5, CSS3, PHP, jQuery, MySQL, CodeIgniter, Joomla.</li>
														<li>Experience of working in social networking web application using elgg PHP framework.</li>
														<li>Experience of developing responsive garments portal, company websites, e-commerce websites developed using CodeIgniter in back-end and bootstrap, ui-kit, jQuery, font-awesome, select2, chosen dropdown, ckeditor editor etc. in front-end.</li>
														<li>Experience of developing Joomla websites, including version upgrade, website redesign using new template, plugin update etc.</li>
													</ol>
												</p>
											</div>
										</div>
									</article>

									<article class="timeline-entry animate-box" data-animate-effect="fadeInRight">
										<div class="timeline-entry-inner">
											<div class="timeline-icon color-2">
												<i class="icon-pen2"></i>
											</div>
											<div class="timeline-label">
												<h2><a href="#">Front End Developer at Google Company</a> <span>2017-2018</span></h2>
												<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
											</div>
										</div>
									</article>

									<article class="timeline-entry animate-box" data-animate-effect="fadeInLeft">
										<div class="timeline-entry-inner">
											<div class="timeline-icon color-3">
												<i class="icon-pen2"></i>
											</div>
											<div class="timeline-label">
												<h2><a href="#">System Analyst</a> <span>2017-2018</span></h2>
												<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
											</div>
										</div>
									</article>

									<article class="timeline-entry animate-box" data-animate-effect="fadeInTop">
										<div class="timeline-entry-inner">
											<div class="timeline-icon color-4">
												<i class="icon-pen2"></i>
											</div>
											<div class="timeline-label">
												<h2><a href="#">Creative Designer</a> <span>2017-2018</span></h2>
												<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
											</div>
										</div>
									</article>

									<article class="timeline-entry animate-box" data-animate-effect="fadeInLeft">
										<div class="timeline-entry-inner">
											<div class="timeline-icon color-5">
												<i class="icon-pen2"></i>
											</div>
											<div class="timeline-label">
												<h2><a href="#">UI/UX Designer at Envato</a> <span>2017-2018</span></h2>
												<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
											</div>
										</div>
									</article>

									<article class="timeline-entry begin animate-box" data-animate-effect="fadeInBottom">
										<div class="timeline-entry-inner">
											<div class="timeline-icon color-none">
											</div>
										</div>
									</article>
								</div>
							</div>
						</div>
					</div>
				</section>

				<section class="colorlib-work" data-section="work">
					<div class="colorlib-narrow-content">
						<div class="row">
							<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
								<span class="heading-meta">My Work</span>
								<h2 class="colorlib-heading animate-box">Recent Work</h2>
							</div>
						</div>
						<div class="row row-bottom-padded-sm animate-box" data-animate-effect="fadeInLeft">
							<div class="col-md-12">
								<p class="work-menu"><span><a href="#" class="active">Graphic Design</a></span> <span><a href="#">Web Design</a></span> <span><a href="#">Software</a></span> <span><a href="#">Apps</a></span></p>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
								<div class="project" style="background-image: url({!! $theme_jackhon_path !!}images/img-1.jpg);">
									<div class="desc">
										<div class="con">
											<h3><a href="work.html">Work 01</a></h3>
											<span>Website</span>
											<p class="icon">
												<span><a href="#"><i class="icon-share3"></i></a></span>
												<span><a href="#"><i class="icon-eye"></i> 100</a></span>
												<span><a href="#"><i class="icon-heart"></i> 49</a></span>
											</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6 animate-box" data-animate-effect="fadeInRight">
								<div class="project" style="background-image: url({!! $theme_jackhon_path !!}images/img-2.jpg);">
									<div class="desc">
										<div class="con">
											<h3><a href="work.html">Work 02</a></h3>
											<span>Animation</span>
											<p class="icon">
												<span><a href="#"><i class="icon-share3"></i></a></span>
												<span><a href="#"><i class="icon-eye"></i> 100</a></span>
												<span><a href="#"><i class="icon-heart"></i> 49</a></span>
											</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6 animate-box" data-animate-effect="fadeInTop">
								<div class="project" style="background-image: url({!! $theme_jackhon_path !!}images/img-3.jpg);">
									<div class="desc">
										<div class="con">
											<h3><a href="work.html">Work 03</a></h3>
											<span>Illustration</span>
											<p class="icon">
												<span><a href="#"><i class="icon-share3"></i></a></span>
												<span><a href="#"><i class="icon-eye"></i> 100</a></span>
												<span><a href="#"><i class="icon-heart"></i> 49</a></span>
											</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6 animate-box" data-animate-effect="fadeInBottom">
								<div class="project" style="background-image: url({!! $theme_jackhon_path !!}images/img-4.jpg);">
									<div class="desc">
										<div class="con">
											<h3><a href="work.html">Work 04</a></h3>
											<span>Application</span>
											<p class="icon">
												<span><a href="#"><i class="icon-share3"></i></a></span>
												<span><a href="#"><i class="icon-eye"></i> 100</a></span>
												<span><a href="#"><i class="icon-heart"></i> 49</a></span>
											</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
								<div class="project" style="background-image: url({!! $theme_jackhon_path !!}images/img-5.jpg);">
									<div class="desc">
										<div class="con">
											<h3><a href="work.html">Work 05</a></h3>
											<span>Graphic, Logo</span>
											<p class="icon">
												<span><a href="#"><i class="icon-share3"></i></a></span>
												<span><a href="#"><i class="icon-eye"></i> 100</a></span>
												<span><a href="#"><i class="icon-heart"></i> 49</a></span>
											</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6 animate-box" data-animate-effect="fadeInRight">
								<div class="project" style="background-image: url({!! $theme_jackhon_path !!}images/img-6.jpg);">
									<div class="desc">
										<div class="con">
											<h3><a href="work.html">Work 06</a></h3>
											<span>Web Design</span>
											<p class="icon">
												<span><a href="#"><i class="icon-share3"></i></a></span>
												<span><a href="#"><i class="icon-eye"></i> 100</a></span>
												<span><a href="#"><i class="icon-heart"></i> 49</a></span>
											</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12 animate-box">
								<p><a href="#" class="btn btn-primary btn-lg btn-load-more">Load more <i class="icon-reload"></i></a></p>
							</div>
						</div>
					</div>
				</section>

				<section class="colorlib-blog" data-section="blog">
					<div class="colorlib-narrow-content">
						<div class="row">
							<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
								<span class="heading-meta">Read</span>
								<h2 class="colorlib-heading">Recent Blog</h2>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4 col-sm-6 animate-box" data-animate-effect="fadeInLeft">
								<div class="blog-entry">
									<a href="blog.html" class="blog-img"><img src="{!! asset($theme_jackhon_path.'images/blog-1.jpg') !!}" class="img-responsive" alt="HTML5 Bootstrap Template by colorlib.com"></a>
									<div class="desc">
										<span><small>April 14, 2018 </small> | <small> Web Design </small> | <small> <i class="icon-bubble3"></i> 4</small></span>
										<h3><a href="blog.html">Renovating National Gallery</a></h3>
										<p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
									</div>
								</div>
							</div>
							<div class="col-md-4 col-sm-6 animate-box" data-animate-effect="fadeInRight">
								<div class="blog-entry">
									<a href="blog.html" class="blog-img"><img src="{!! asset($theme_jackhon_path.'images/blog-2.jpg') !!}" class="img-responsive" alt="HTML5 Bootstrap Template by colorlib.com"></a>
									<div class="desc">
										<span><small>April 14, 2018 </small> | <small> Web Design </small> | <small> <i class="icon-bubble3"></i> 4</small></span>
										<h3><a href="blog.html">Wordpress for a Beginner</a></h3>
										<p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
									</div>
								</div>
							</div>
							<div class="col-md-4 col-sm-6 animate-box" data-animate-effect="fadeInLeft">
								<div class="blog-entry">
									<a href="blog.html" class="blog-img"><img src="{!! asset($theme_jackhon_path.'images/blog-3.jpg') !!}" class="img-responsive" alt="HTML5 Bootstrap Template by colorlib.com"></a>
									<div class="desc">
										<span><small>April 14, 2018 </small> | <small> Inspiration </small> | <small> <i class="icon-bubble3"></i> 4</small></span>
										<h3><a href="blog.html">Make website from scratch</a></h3>
										<p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12 animate-box">
								<p><a href="#" class="btn btn-primary btn-lg btn-load-more">Load more <i class="icon-reload"></i></a></p>
							</div>
						</div>
					</div>
				</section>

				<section class="colorlib-contact" data-section="contact">
					<div class="colorlib-narrow-content">
						<div class="row">
							<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
								<span class="heading-meta">Get in Touch</span>
								<h2 class="colorlib-heading">Contact</h2>
							</div>
						</div>
						<div class="row">
							<div class="col-md-5">
								<div class="colorlib-feature colorlib-feature-sm animate-box" data-animate-effect="fadeInLeft">
									<div class="colorlib-icon">
										<i class="icon-globe-outline"></i>
									</div>
									<div class="colorlib-text">
										<p><a href="#">saniyat1000@gmail.com</a></p>
									</div>
								</div>

								<div class="colorlib-feature colorlib-feature-sm animate-box" data-animate-effect="fadeInLeft">
									<div class="colorlib-icon">
										<i class="icon-map"></i>
									</div>
									<div class="colorlib-text">
										<p>Ba - 83,84/A, South Badda, Dhaka, Bangladesh</p>
									</div>
								</div>

								<div class="colorlib-feature colorlib-feature-sm animate-box" data-animate-effect="fadeInLeft">
									<div class="colorlib-icon">
										<i class="icon-phone"></i>
									</div>
									<div class="colorlib-text">
										<p><a href="tel://">+880 1676 098 013</a></p>
									</div>
								</div>
							</div>
							<div class="col-md-7 col-md-push-1">
								<div class="row">
									<div class="col-md-10 col-md-offset-1 col-md-pull-1 animate-box" data-animate-effect="fadeInRight">
										<form action="">
											<div class="form-group">
												<input type="text" class="form-control" placeholder="Name">
											</div>
											<div class="form-group">
												<input type="text" class="form-control" placeholder="Email">
											</div>
											<div class="form-group">
												<input type="text" class="form-control" placeholder="Subject">
											</div>
											<div class="form-group">
												<textarea name="" id="message" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
											</div>
											<div class="form-group">
												<input type="submit" class="btn btn-primary btn-send-message" value="Send Message">
											</div>
										</form>
									</div>

								</div>
							</div>
						</div>
					</div>
				</section>

			</div><!-- end:colorlib-main -->
		</div><!-- end:container-wrap -->
		</div><!-- end:colorlib-page -->

		<!-- jQuery -->
		<script defer src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
		<!-- jQuery Easing -->
		<script defer src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
		<!-- Bootstrap -->
		<script defer src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<!-- Waypoints -->
		<script defer src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
		<!-- Flexslider -->
		<script defer src="https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.7.1/jquery.flexslider.min.js"></script>
		<!-- Owl carousel -->
		<script defer src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
		<!-- Counters -->
		<script defer src="https://cdnjs.cloudflare.com/ajax/libs/jquery-countto/1.2.0/jquery.countTo.min.js"></script>

		<script defer src="https://cdnjs.cloudflare.com/ajax/libs/jquery.sticky/1.0.4/jquery.sticky.js"></script>

		<script src="https://unpkg.com/progressively/dist/progressively.min.js"></script>

		<!-- MAIN JS -->
		<script defer src="{!! asset($theme_jackhon_path.'js/main.js') !!}"></script>

		<script>
			var progressivelyInit = function() {
				if (typeof progressively != 'undefined') {
					progressively.init({
						delay: 50,
						throttle: 300,
						smBreakpoint: 600,
						onLoad: function (element) {

						},
						onLoadComplete: function() {

						}
					});
				}
			}

			progressivelyInit();
		</script>

	</body>
</html>
