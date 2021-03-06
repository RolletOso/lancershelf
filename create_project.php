<?php require_once 'modules/session.php';  ?>

<!DOCTYPE html>
<!-- Template Name: Clip-Two - Responsive Admin Template build with Twitter Bootstrap 3.x | Author: ClipTheme -->
<!--[if IE 8]><html class="ie8" lang="en"><![endif]-->
<!--[if IE 9]><html class="ie9" lang="en"><![endif]-->
<!--[if !IE]><!-->
<html lang="en">
	<!--<![endif]-->
	<!-- start: HEAD -->
	<head>
		<title>LancerShelf | Hire professional freelancers and artisans Online</title>
		<!-- start: META -->
		<!--[if IE]><meta http-equiv='X-UA-Compatible' content="IE=edge,IE=9,IE=8,chrome=1" /><![endif]-->
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<meta content="" name="description" />
		<meta content="" name="author" />
		<!-- end: META -->
		<!-- start: GOOGLE FONTS -->
		<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
		<!-- end: GOOGLE FONTS -->
		<!-- start: MAIN CSS -->
		<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="vendor/themify-icons/themify-icons.min.css">
		<link href="vendor/animate.css/animate.min.css" rel="stylesheet" media="screen">
		<link href="vendor/taggingJS-master/tagging.css" rel="stylesheet" media="screen">
		<link href="vendor/perfect-scrollbar/perfect-scrollbar.min.css" rel="stylesheet" media="screen">
		<link href="vendor/switchery/switchery.min.css" rel="stylesheet" media="screen">
		<!-- end: MAIN CSS -->
		<!-- start: CLIP-TWO CSS -->
		<link rel="stylesheet" href="assets/css/styles.css">
		<link rel="stylesheet" href="assets/css/plugins.css">
		<link rel="stylesheet" href="assets/css/themes/theme-1.css" id="skin_color" />
		<!-- end: CLIP-TWO CSS -->
		<!-- start: CSS REQUIRED FOR THIS PAGE ONLY -->
		<!-- end: CSS REQUIRED FOR THIS PAGE ONLY -->
	</head>
	<!-- end: HEAD -->
	<body>
	<style>
		@font-face {
font-family: "Emma bold";
src: url("assets/fonts/emma.ttf");
}
			  
body,h1,h2,h3,h4,h5 {
    font-family: "Emma bold", "Times New Roman", Times, serif;
}
	</style>
		<div id="app">
			<!-- sidebar -->
			<div class="sidebar app-aside" id="sidebar">
				<div class="sidebar-container perfect-scrollbar">
					<nav>
						<!-- start: SEARCH FORM -->
						<div class="search-form">
							<a class="s-open" href="#">
								<i class="ti-search"></i>
							</a>
							<form class="navbar-form" role="search">
								<a class="s-remove" href="#" target=".navbar-form">
									<i class="ti-close"></i>
								</a>
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Search...">
									<button class="btn search-button" type="submit">
										<i class="ti-search"></i>
									</button>
								</div>
							</form>
						</div>
						<!-- end: SEARCH FORM -->
						<!-- start: MAIN NAVIGATION MENU -->
						
						<!-- end: MAIN NAVIGATION MENU -->
						<!-- start: CORE FEATURES -->
						<?php require_once 'sidebar_nav.php'; ?>
						
						
						<!-- end: CORE FEATURES -->
						<!-- start: DOCUMENTATION BUTTON -->
						
						<!-- end: DOCUMENTATION BUTTON -->
					</nav>
				</div>
			</div>
			<!-- / sidebar -->
			<div class="app-content">
				<!-- start: TOP NAVBAR -->
				<header class="navbar navbar-default navbar-static-top">
					<!-- start: NAVBAR HEADER -->
					<div class="navbar-header">
						<a href="#" class="sidebar-mobile-toggler pull-left hidden-md hidden-lg" class="btn btn-navbar sidebar-toggle" data-toggle-class="app-slide-off" data-toggle-target="#app" data-toggle-click-outside="#sidebar">
							<i class="ti-align-justify"></i>
						</a>
						<a class="navbar-brand" href="#">
							<img src="assets/images/logo.png" alt="LancerShelf"/>
						</a>
						<a href="#" class="sidebar-toggler pull-right visible-md visible-lg" data-toggle-class="app-sidebar-closed" data-toggle-target="#app">
							<i class="ti-align-justify"></i>
						</a>
						<a class="pull-right menu-toggler visible-xs-block" id="menu-toggler" data-toggle="collapse" href=".navbar-collapse">
							<span class="sr-only">Toggle navigation</span>
							<i class="ti-view-grid"></i>
						</a>
					</div>
					<!-- end: NAVBAR HEADER -->
					<!-- start: NAVBAR COLLAPSE -->
					<div class="navbar-collapse collapse">
						<ul class="nav navbar-right">
							<!-- start: MESSAGES DROPDOWN -->
							<li class="dropdown">
								<a href class="dropdown-toggle" data-toggle="dropdown">
									<span class="dot-badge partition-red"></span> <i class="ti-comment"></i> <span>MESSAGES</span>
								</a>
								<ul class="dropdown-menu dropdown-light dropdown-messages dropdown-large">
									<li>
										<span class="dropdown-header"> Unread messages</span>
									</li>
									<li>
										<div class="drop-down-wrapper ps-container">
											<ul>
												<li class="unread">
													<a href="javascript:;" class="unread">
														<div class="clearfix">
															<div class="thread-image">
																<img src="./assets/images/avatar-2.jpg" alt="">
															</div>
															<div class="thread-content">
																<span class="author">Nicole Bell</span>
																<span class="preview">Duis mollis, est non commodo luctus, nisi erat porttitor ligula...</span>
																<span class="time"> Just Now</span>
															</div>
														</div>
													</a>
												</li>
												<li>
													<a href="javascript:;" class="unread">
														<div class="clearfix">
															<div class="thread-image">
																<img src="./assets/images/avatar-3.jpg" alt="">
															</div>
															<div class="thread-content">
																<span class="author">Steven Thompson</span>
																<span class="preview">Duis mollis, est non commodo luctus, nisi erat porttitor ligula...</span>
																<span class="time">8 hrs</span>
															</div>
														</div>
													</a>
												</li>
												<li>
													<a href="javascript:;">
														<div class="clearfix">
															<div class="thread-image">
																<img src="./assets/images/avatar-5.jpg" alt="">
															</div>
															<div class="thread-content">
																<span class="author">Kenneth Ross</span>
																<span class="preview">Duis mollis, est non commodo luctus, nisi erat porttitor ligula...</span>
																<span class="time">14 hrs</span>
															</div>
														</div>
													</a>
												</li>
											</ul>
										</div>
									</li>
									<li class="view-all">
										<a href="#">
											See All
										</a>
									</li>
								</ul>
							</li>
							<!-- end: MESSAGES DROPDOWN -->
							<!-- start: ACTIVITIES DROPDOWN -->
							<li class="dropdown">
								<a href class="dropdown-toggle" data-toggle="dropdown">
									<i class="ti-check-box"></i> <span>ACTIVITIES</span>
								</a>
								<ul class="dropdown-menu dropdown-light dropdown-messages dropdown-large">
									<li>
										<span class="dropdown-header"> You have new notifications</span>
									</li>
									<li>
										<div class="drop-down-wrapper ps-container">
											<div class="list-group no-margin">
												<a class="media list-group-item" href="">
													<img class="img-circle" alt="..." src="assets/images/avatar-1.jpg">
													<span class="media-body block no-margin"> Use awesome animate.css <small class="block text-grey">10 minutes ago</small> </span>
												</a>
												<a class="media list-group-item" href="">
													<span class="media-body block no-margin"> 1.0 initial released <small class="block text-grey">1 hour ago</small> </span>
												</a>
											</div>
										</div>
									</li>
									<li class="view-all">
										<a href="#">
											See All
										</a>
									</li>
								</ul>
							</li>
							<!-- end: ACTIVITIES DROPDOWN -->
							<!-- start: LANGUAGE SWITCHER -->
							<li class="dropdown">
								<a href class="dropdown-toggle" data-toggle="dropdown">
									<i class="ti-world"></i> English
								</a>
								<ul role="menu" class="dropdown-menu dropdown-light fadeInUpShort">
									<li>
										<a href="#" class="menu-toggler">
											Deutsch
										</a>
									</li>
									<li>
										<a href="#" class="menu-toggler">
											English
										</a>
									</li>
									<li>
										<a href="#" class="menu-toggler">
											Italiano
										</a>
									</li>
								</ul>
							</li>
							<!-- start: LANGUAGE SWITCHER -->
							<!-- start: USER OPTIONS DROPDOWN -->
							<?php require_once 'user_options_dropdown.php'; ?>
							<!-- end: USER OPTIONS DROPDOWN -->
						</ul>
						<!-- start: MENU TOGGLER FOR MOBILE DEVICES -->
						<div class="close-handle visible-xs-block menu-toggler" data-toggle="collapse" href=".navbar-collapse">
							<div class="arrow-left"></div>
							<div class="arrow-right"></div>
						</div>
						<!-- end: MENU TOGGLER FOR MOBILE DEVICES -->
					</div>
					<a class="dropdown-off-sidebar sidebar-mobile-toggler hidden-md hidden-lg" data-toggle-class="app-offsidebar-open" data-toggle-target="#app" data-toggle-click-outside="#off-sidebar">
						&nbsp;
					</a>
					<a class="dropdown-off-sidebar hidden-sm hidden-xs" data-toggle-class="app-offsidebar-open" data-toggle-target="#app" data-toggle-click-outside="#off-sidebar">
						&nbsp;
					</a>
					<!-- end: NAVBAR COLLAPSE -->
				</header>
				<!-- end: TOP NAVBAR -->
				<div class="main-content" >
					<div class="wrap-content container" id="container">
						<!-- start: PAGE TITLE -->
						<section id="page-title">
							<div class="row">
								<div class="col-sm-8">
									<h1 class="mainTitle"> <img style="margin-top:3px;" src="assets/images/lancershelf4.png" width="95px" height="95px" alt="LancerShelf"/> </h1>
									<span class="mainDescription">Let's guide you through the steps to create a new project</span>
								</div>
								<ol class="breadcrumb">
									<li>
										<span>Dashboard</span>
									</li>
									<li class="active">
										<span>Create Project</span>
									</li>
								</ol>
							</div>
						</section>
						<!-- end: PAGE TITLE -->
						<!-- start: WIZARD DEMO -->
						
				<div id="lock_loader" style="display:none" class="sk-fading-circle">
								  <div class="sk-circle1 sk-circle"></div>
								  <div class="sk-circle2 sk-circle"></div>
								  <div class="sk-circle3 sk-circle"></div>
								  <div class="sk-circle4 sk-circle"></div>
								  <div class="sk-circle5 sk-circle"></div>
								  <div class="sk-circle6 sk-circle"></div>
								  <div class="sk-circle7 sk-circle"></div>
								  <div class="sk-circle8 sk-circle"></div>
								  <div class="sk-circle9 sk-circle"></div>
								  <div class="sk-circle10 sk-circle"></div>
								  <div class="sk-circle11 sk-circle"></div>
								  <div class="sk-circle12 sk-circle"></div>
				</div>
						<div class="container-fluid container-fullw bg-white" id="lock_display">
							<div class="row">
								<div class="col-md-12">
									
									<p class="danger text-large" id="post-response"></p>
									<!-- start: WIZARD FORM -->
									<form action="#" method="post" ENCTYPE="multipart/form-data"  role="form" class="smart-wizard" id="form">
										<div id="wizard" class="swMain">
											<!-- start: WIZARD SEPS -->
											<ul>
												<li>
													<a href="#step-1">
														<div class="stepNumber">
															1
														</div>
														<span class="stepDesc"><small> General Information </small></span>
													</a>
												</li>
												<li>
													<a href="#step-2">
														<div class="stepNumber">
															2
														</div>
														<span class="stepDesc"> <small> Additional Details </small></span>
													</a>
												</li>
												<li>
													<a href="#step-3">
														<div class="stepNumber">
															3
														</div>
														<span class="stepDesc"> <small> Billing details </small> </span>
													</a>
												</li>
												<li>
													<a href="#step-4">
														<div class="stepNumber">
															4
														</div>
														<span class="stepDesc"> <small> Complete </small> </span>
													</a>
												</li>
											</ul>
											<!-- end: WIZARD SEPS -->
											<!-- start: WIZARD STEP 1 -->
											<div id="step-1">
												<div class="row">
													<div class="col-md-5">
														<div class="padding-30">
															<h2 class="StepTitle"><i class="ti-face-smile fa-2x text-primary block margin-bottom-10"></i> Describe Your Project</h2>
															<p>
																Pick a name for your project.
															</p>
															<p class="text-small">
																 Explain the job in details, be precise - great project description are 'bull-eye precise' and some may
																 have some information about your relationship with the project -
																 it helps!
															</p>
														</div>
													</div>
													<div class="col-md-7">
														<fieldset>
															<legend>
																 General Information
															</legend>
															<div class="row">
																<div class="col-md-6">
																	<div class="form-group">
																		<label>
																			Project Title <span class="symbol required"></span>
																		</label>
																		<input type="text" placeholder="Pick a name for your project" class="form-control" name="pTitle"/>
																	</div>
																</div>
																<div class="col-md-6">
																	<div class="form-group">
																		<label class="control-label">
																			Describe the Job <span class="symbol required"></span>
																		</label>
																		
																		<textarea placeholder="Tell us about the project!" class="form-control" name="description"></textarea>
																	</div>
																</div>
															</div>
															<div class="row">
																<div class="col-md-6">
																	<div class="form-group">
																		<label class="block">
																			Budget
																		</label>
																		<div class="clip-radio radio-primary">
																			<input type="radio" id="fixed" name="budgetType" value="fixed">
																			<label for="fixed">
																				Range
																			</label>
																			<input type="radio"  id="notsure" name="budgetType" value="notsure">
																			<label for="notsure">
																				Fixed Amount
																			</label>
																		</div>
																	</div>
																</div>
																<div id="fixedDiv" class="col-md-6">
																	<div class="form-group">
																		<label>
																			Choose your budget
																		</label>
																		<select class="form-control" name="budget" id="fixedBudget">
																			<option value="10,000 - 30,000"> &#8358;10,000 - &#8358;30,000</option>
																			<option value="30,000 - 80,000"> &#8358;30,000 - &#8358;80,000</option>
																			<option value="80,000 - 120,000"> &#8358;80,000 - &#8358;120,000</option>
																			<option value="120,000 - 160,000"> &#8358;120,000 - &#8358;160,000</option>
																			<option value="160,000 - 200,000"> &#8358;160,000 - &#8358;200,000</option>
																			<option value="200,000 - 240,000"> &#8358;200,000 - &#8358;240,000</option>
																			<option value="240,000 - 280,000"> &#8358;240,000 - &#8358;280,000</option>
																			<option value="320,000 - 360,000"> &#8358;320,000 - &#8358;360,000</option>
																			<option value="360,000 - 400,000"> &#8358;360,000 - &#8358;400,000</option>
																			<option value="400,000 - 500,000"> &#8358;400,000 - &#8358;500,000</option>
																			<option value="500,000 - 600,000"> &#8358;500,000 - &#8358;600,000</option>
																			<option value="600,000 and above"> &#8358;600,000 and above</option>
																		</select>
																	</div>
																</div>
																<div id="notsureDiv" style="display:none" class="col-md-6">
																	<div class="form-group">
																		<label class="block">
																			Custom Budget
																		</label>
																		<div class="clip-radio radio-primary">
																			<input type="text" id="customBudget" class="form-control" name="customBudget" value="" Placeholder="E.g &#8358; 400000">
																			
																			
																		</div>
																	</div>
																</div>
															</div>
															<p>
																<a href="javascript:void(0)" data-content="Your budget is not required for unlawful purposes, but only to help target your project to the right audience" data-title="Don't worry!" data-placement="top" data-toggle="popover">
																	Why do you need my budget information?
																</a>
															</p>
														</fieldset>
														
														<div class="form-group">
															<button class="btn btn-primary btn-o next-step btn-wide pull-right">
																Next <i class="fa fa-arrow-circle-right"></i>
															</button>
														</div>
													</div>
												</div>
											</div>
											<!-- end: WIZARD STEP 1 -->
											<!-- start: WIZARD STEP 2 -->
											<div id="step-2">
												<div class="row">
													<div class="col-md-5">
														<div class="padding-30">
															<h2 class="StepTitle">Tell Us More <span class="text-large block">Let's us understand more about your project</span></h2>
															<p>
																You’ll enjoy faster services and great benefits by being specific about what you need done!
															</p>
															<p class="text-small">
																<ul class="no-margin">
																	<li>
																		List some generic skills you think is important for this project. 
																		
																	</li>
																	<li>
																		Add any releveant files to better explain this project.
																	</li>
																</ul>
															</p>
														</div>
													</div>
													<div class="col-md-7">
														<fieldset>
															<legend>
																Additional Details
															</legend>
															<div class="form-group">
																<label class="control-label">
																	Optional Category <span class="symbol required"></span>
																</label>
																
																<select class="form-control" name="category">
																<option value="0" disabled="" selected="">Select Category</option>
																<option value="1">Softwares and Website</option>
																<option value="2">Mobile App Development</option>
																<option value="3">Animations and Design</option> 
																<option value="4">Network And Data Security </option>
																<option value="5">Media</option>
																<option value="6">Writing And Contents</option>
																<option value="7">Sales And Marketing</option> 
																<option value="8">Data And Data Entry</option>
																<option value="9">Product Sourcing And Manufacturing</option>
																<option value="10">Animations and Design</option> 
																<option value="11">Fashion Design</option>
																<option value="12">Translation And Languages</option>
																<option value="13">Engineering And Science</option> 
																<option value="14">Local Jobs And services</option>
																<option value="15">Events</option>
																<option value="16">Education</option> 
																<option value="17">StartUp</option> 
																<option value="18">Others</option> 

																</select>
															</div>
															<div class="row">
																<div class="col-md-12">
																	<div class="form-group">
																		<label class="control-label">
																			Skills Required <span class="symbol required"></span>
																			
																		</label>
																		 <div data-tags-input-name="taggone" id="tag">Web design, photoshop</div>
																		 <input type="hidden" class="hidden" value="" />
																		<p class="text-small">Press Enter, Comma or Spacebar to create a new tag, Backspace or Delete to remove the last one.</p>
																	</div>
																</div>
																<div class="col-md-12">
																	<div class="form-group">
																		<label class="control-label">
																			Relevent files 
																		</label>
																		<input type="file"  class="form-control" name="rFiles"/>
																	</div>
																</div>
															</div>
														</fieldset>
														<div class="form-group">
															<button class="btn btn-primary btn-o back-step btn-wide pull-left">
																<i class="fa fa-circle-arrow-left"></i> Back
															</button>
															<button class="btn btn-primary btn-o next-step btn-wide pull-right">
																Next <i class="fa fa-arrow-circle-right"></i>
															</button>
														</div>
													</div>
												</div>
											</div>
											<!-- end: WIZARD STEP 2 -->
											<!-- start: WIZARD STEP 3 -->
											<div id="step-3">
												<div class="row">
													<div class="col-md-5">
														<div class="padding-30">
															<h2 class="StepTitle">Enter billing details</h2>
															<p class="success">The payments are not made untill you are satisfied with the services provided. </p>
															
															
														</div>
													</div>
													<div class="col-md-7">
													
													<fieldset>
															<legend>
																Pay from LancerShelf Account
															</legend>
															<label class="btn btn-primary active">
																		<input type="checkbox" name="paymentOption" id="LancerShelfAccount" autocomplete="off" value="custom">
																		<i class="fa fa-user" ></i> Pay from LancerShelf Account
																	</label>
																	<br>
															<p>You can choose to pay from your LancerShelf account or use the form below to pay through your bank</p>
													</fieldset>
														<fieldset>
															<legend>
																Payment From Bank
															</legend>
															<label>
																Payment type
															</label>
															<div class="form-group">
																<div class="btn-group" data-toggle="buttons">
																	<label class="btn btn-primary active">
																		<input type="radio" name="paymentMethod" id="option1" autocomplete="off" value="credit card">
																		<i class="fa fa-cc-visa" ></i> <i class="fa fa-cc-mastercard" ></i> Credit Card
																	</label>
																	<label class="btn btn-primary">
																		<input type="radio" name="paymentMethod" id="option2" autocomplete="off" value="paypal">
																		<i class="fa fa-cc-paypal" ></i> PayPal
																	</label>
																</div>
															</div>
															<div class="form-group">
																<label>
																	Card Number
																</label>
																<input type="text" class="form-control" name="cardNumber" placeholder="Enter Your Card Number">
															</div>
															<label>
																Expires
															</label>
															<div class="row">
																<div class="col-md-4 col-sm-6">
																	<div class="form-group">
																		<select class="cs-select cs-skin-slide">
																			<option value="" disabled>Month</option>
																			<option value="January">January</option>
																			<option value="February">February</option>
																			<option value="March">March</option>
																			<option value="April">April</option>
																			<option value="May">May</option>
																			<option value="June">June</option>
																			<option value="July">July</option>
																			<option value="August">August</option>
																			<option value="September">September</option>
																			<option value="October">October</option>
																			<option value="November">November</option>
																			<option value="December">December</option>
																		</select>
																	</div>
																</div>
																<div class="col-md-4 col-sm-6">
																	<div class="form-group">
																		<select class="cs-select cs-skin-slide">
																			<option value="" disabled>Year</option>
																			<option value="2015">2015</option>
																			<option value="2016">2016</option>
																			<option value="2017">2017</option>
																			<option value="2018">2018</option>
																			<option value="2019">2019</option>
																			<option value="2020">2020</option>
																		</select>
																	</div>
																</div>
															</div>
															<div class="row">
																<div class="col-xs-12">
																	<label>
																		Security code
																	</label>
																	<div class="row">
																		<div class="col-xs-3">
																			<div class="form-group">
																				<input type="text" class="form-control" name="securityCode" placeholder="Security code">
																			</div>
																		</div>
																		<span class="help-inline col-xs-4">
																			<a href="javascript:void(0)" data-content="The security code is a three-digit number on the back of your credit card, immediately following your main card number." data-title="How to find the security code" data-placement="top" data-toggle="popover">
																				<i class="ti-help-alt text-large text-primary"></i>
																			</a> </span>
																	</div>
																</div>
															</div>
														</fieldset>
														<div class="form-group">
															<button class="btn btn-primary btn-o back-step btn-wide pull-left">
																<i class="fa fa-circle-arrow-left"></i> Back
															</button>
															<button class="btn btn-primary btn-o next-step btn-wide pull-right">
																Next <i class="fa fa-arrow-circle-right"></i>
															</button>
														</div>
													</div>
												</div>
											</div>
											<!-- end: WIZARD STEP 3 -->
											<!-- start: WIZARD STEP 4 -->
											<div id="step-4">
												<div class="row">
													<div class="col-md-12">
														<div class="text-center">
															<h1 class=" ti-check block text-primary"></h1>
															<h2 class="StepTitle">Congratulations!</h2>
															<p class="text-large">
																Your project IS READY.
																Click Start Project Below to Begin
															</p>
															<p class="text-small">
																Sit back and let us do the rest. You will be notified when freelancers start bidding for your project.
															</p>
															
															<button class="btn btn-primary btn-o" type="submit">
																Start Project
															</button>
															<a class="btn btn-primary btn-o go-first" href="javascript:void(0)">
																Back to Step 1
															</a>
														</div>
													</div>
												</div>
											</div>
											<!-- end: WIZARD STEP 4 -->
										</div>
									</form>
									<!-- end: WIZARD FORM -->
								</div>
							</div>
						</div>
						<!-- start: WIZARD DEMO -->
					</div>
				</div>
			</div>
			<!-- start: FOOTER -->
			<footer>
				<div class="footer-inner">
					<div class="pull-left">
						&copy; <span class="current-year"></span><span class="text-bold text-uppercase"> LancerShelf</span>. <span>All rights reserved</span>
					</div>
					<div class="pull-right">
						<span class="go-top"><i class="ti-angle-up"></i></span>
					</div>
				</div>
			</footer>
			<!-- end: FOOTER -->
			<!-- start: OFF-SIDEBAR -->
			<?php require_once 'right_sidebar.php'; ?>
			<!-- end: OFF-SIDEBAR -->
			<!-- start: SETTINGS -->
			
			<!-- end: SETTINGS -->
		</div>
		<!-- start: MAIN JAVASCRIPTS -->
		<script src="vendor/jquery/jquery.min.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="vendor/modernizr/modernizr.js"></script>
		<script src="vendor/jquery-cookie/jquery.cookie.js"></script>
		<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
		<script src="vendor/switchery/switchery.min.js"></script>
		<script src="vendor/selectFx/classie.js"></script>
		<script src="vendor/selectFx/selectFx.js"></script>
		<!-- end: MAIN JAVASCRIPTS -->
		<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script src="vendor/jquery-validation/jquery.validate.min.js"></script>
		<script src="vendor/jquery-smart-wizard/jquery.smartWizard.js"></script>
		<script src="vendor/taggingJS-master/tagging.js"></script>
		<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<!-- start: CLIP-TWO JAVASCRIPTS -->
		<script src="assets/js/main.js"></script>
		<!-- start: JavaScript Event Handlers for this page -->
		<script src="assets/js/form-wizard.js"></script>
		<script>
			jQuery(document).ready(function() {
				Main.init();
				FormWizard.init();
			});
			
			//init tagging functions
			(function( $, window, document, undefined ) {
    $( document ).ready(function() {
        var t = $( "#tag" ).tagging();
		
        t[0].addClass( "form-control" );
		console.log($('.type-zone').val());
        console.log( t[0].text() );
		
		//init tagging autocomplete

		//end autocomplete for tags
		
		
    });
})( window.jQuery, window, document );

//init budget switch mode
$(document).ready(function() {
    $("input:radio[name='budgetType']").click(function() {
        var test = $(this).attr('id');
		if(test == 'notsure'){
		$('#fixedDiv').hide();
		$("select#fixedBudget").attr('disabled','disabled');
		$('#notsureDiv').show();
		}else{$('#notsureDiv').hide();  $('#fixedDiv').show(); 
		document.getElementById("fixedBudget").disabled = false;
					} 
        
    });
});

//init ajax upload and form submit


		$("form#form").on('submit', function(event){
				
					event.preventDefault();
    var formData = new FormData(this); 
	
	var dateObj = new Date();
var newDateString = dateObj.getMilliseconds();
        $.ajax({
            url: 'modules/create_project.php?id='+ newDateString,
            type: 'POST',
            data: formData,
            success: function (data) {
				
				$('#post-response').html(data);
				
				var res = data.match(/successful/gi); 
				
			   if(res.length > 0) {  
			   $('#lock_display').hide();
			   $('#lock_loader').show();
			   setTimeout(function(){ location.href = 'dashboard.php'; }, 3000);
			   }
			   
            },
            cache: false,
            contentType: false,
            processData: false
        });
            
    });


		</script>
		<!-- end: JavaScript Event Handlers for this page -->
		<!-- end: CLIP-TWO JAVASCRIPTS -->
	</body>
</html>
