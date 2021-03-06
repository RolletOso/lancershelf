<?php  require_once 'modules/profile_display.php'; ?>

<!DOCTYPE html>
<!-- Template Name: Clip-Two - Responsive Admin Template build with Twitter Bootstrap 3.x | Author: ClipTheme -->
<!--[if IE 8]><html class="ie8" lang="en"><![endif]-->
<!--[if IE 9]><html class="ie9" lang="en"><![endif]-->
<!--[if !IE]><!-->
<html lang="en">
	<!--<![endif]-->
	<!-- start: HEAD -->
	<head>
		<title>Edit Profile - Hire Artisans And Freelancers in Seconds</title>
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
		<link href="vendor/perfect-scrollbar/perfect-scrollbar.min.css" rel="stylesheet" media="screen">
		<link href="vendor/switchery/switchery.min.css" rel="stylesheet" media="screen">
		<!-- end: MAIN CSS -->
		<!-- start: CLIP-TWO CSS -->
		<link rel="stylesheet" href="assets/css/styles.css">
		<link rel="stylesheet" href="assets/css/plugins.css">
		<link rel="stylesheet" href="assets/css/themes/theme-1.css" id="skin_color" />
		<!-- end: CLIP-TWO CSS -->
		<!-- start: CSS REQUIRED FOR THIS PAGE ONLY -->
		<link href="vendor/bootstrap-fileinput/jasny-bootstrap.min.css" rel="stylesheet" media="screen">
		<link href="vendor/select2/select2.min.css" rel="stylesheet" media="screen">
		<link href="vendor/sweetalert/sweet-alert.css" rel="stylesheet" media="screen">
		
		<style> .fix-select{width: auto !important; } </style>
		<!-- end: CSS REQUIRED FOR THIS PAGE ONLY -->
	</head>
	<!-- end: HEAD -->
	<body>
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
							<li class="dropdown current-user">
								<a href class="dropdown-toggle" data-toggle="dropdown">
									<img src="assets/images/avatar-1.jpg" alt="Peter"> <span class="username">Peter <i class="ti-angle-down"></i></i></span>
								</a>
								<ul class="dropdown-menu dropdown-dark">
									<li>
										<a href="pages_user_profile.html">
											My Profile
										</a>
									</li>
									
									<li>
										<a hef="pages_messages.html">
											My Messages (3)
										</a>
									</li>
									
									<li>
										<a href="login.php">
											Log Out
										</a>
									</li>
								</ul>
							</li>
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
									<h1 class="mainTitle">Profile</h1>
									<span class="mainDescription">Keep your profile up to date to reach more people.</span>
								</div>
								<ol class="breadcrumb">
									<li>
										<span>Dashboard</span>
									</li>
									<li class="active">
										<span>User Profile</span>
									</li>
								</ol>
							</div>
						</section>
						<!-- end: PAGE TITLE -->
						<!-- start: USER PROFILE -->
						<div class="container-fluid container-fullw bg-white">
							<div class="row">
								<div class="col-md-12">
									<div class="tabbable">
										<ul class="nav nav-tabs tab-padding tab-space-3 tab-blue" id="myTab4">
											<li class="active">
												<a data-toggle="tab" href="#panel_overview">
													Overview
												</a>
											</li>
											<li>
												<a data-toggle="tab"  id="fix_select" href="#panel_edit_account">
													Edit profile
												</a>
											</li>
											<li>
												<a data-toggle="tab" href="#panel_projects">
													Projects
												</a>
											</li>
										</ul>
										<div class="tab-content">
											<div id="panel_overview" class="tab-pane fade in active">
												<div class="row">
													<div class="col-sm-5 col-md-4">
														<div class="user-left">
															<div class="center">
																<h4><?php echo $user_first_name." ".$user_last_name; ?></h4>
																<div class="fileinput fileinput-new" data-provides="fileinput">
																	<div class="user-image">
																		<div class="fileinput-new thumbnail"><img id="user_profile_1" src="modules/<?php echo $user_avatar; ?>" alt="<?php echo $user_last_name."'s profile picture";?>">
																		</div>
																		<div class="fileinput-preview fileinput-exists thumbnail"></div>
																		<div class="user-image-buttons">
																			
																			<a href="#" class="btn fileinput-exists btn-red btn-sm" data-dismiss="fileinput">
																				<i class="fa fa-times"></i>
																			</a>
																		</div>
																	</div>
																</div>
																<hr>
																<div class="social-icons block">
																	<ul>
																		<li data-placement="top" data-original-title="Twitter" class="social-twitter tooltips">
																			<a href="<?php echo $user_twitter; ?>" id="twitter_url" target="_blank">
																				Twitter
																			</a>
																		</li>
																		<li data-placement="top" data-original-title="Facebook" class="social-facebook tooltips">
																			<a href="<?php echo $user_facebook; ?>" id="facebook_url" target="_blank">
																				Facebook
																			</a>
																		</li>
																		<li data-placement="top" data-original-title="Google" class="social-google tooltips">
																			<a href="<?php echo $user_googleplus; ?>" id="google_plus_url" target="_blank">
																				Google+
																			</a>
																		</li>
																		<li data-placement="top" data-original-title="LinkedIn" class="social-linkedin tooltips">
																			<a href="<?php echo $user_linkedin; ?>"  id="linkedin_url" target="_blank">
																				LinkedIn
																			</a>
																		</li>
																		<li data-placement="top" data-original-title="Github" class="social-github tooltips">
																			<a href="<?php echo $user_github; ?>" id="github_url" target="_blank">
																				Github
																			</a>
																		</li>
																		<li data-placement="top" data-original-title="Skype" class="social-skype tooltips">
																			<a href="<?php echo $user_skype; ?>" id="skype_url" target="_blank">
																				Skype
																			</a>
																		</li>
																	</ul>
																</div>
																<hr>
															</div>
															<table class="table table-condensed">
																<thead>
																	<tr>
																		<th colspan="3">Contact Information</th>
																	</tr>
																</thead>
																<tbody>
																	<tr>
																		<td>profile url</td>
																		<td>
																		<a  id="profile_url" href="#">
																			lancerShelf.com/<?php echo $user_nickname; ?>
																		</a></td>
																		<td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
																	</tr>
																	<tr>
																		<td>email:</td>
																		<td>
																		<a href="mailto:<?php echo $user_email; ?>" id="mailto_url">
																			<?php echo $user_email; ?>
																		</a></td>
																		<td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
																	</tr>
																	<tr>
																		<td>phone:</td>
																		<td id="phone_data"><?php echo $user_phone; ?></td>
																		<td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
																	</tr>
																	<tr>
																		<td>Location</td>
																		<td id="user_location">
																	<?php echo $user_city; ?> , Nigeria
																		</td>
																		<td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
																	</tr>
																</tbody>
															</table>
															<table class="table">
																<thead>
																	<tr>
																		<th colspan="3">General information</th>
																	</tr>
																</thead>
																<tbody>
																	<tr>
																		<td>Major Skills</td>
																		<td id="major_skills"><?php echo $user_skills; ?></td>
																		<td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
																	</tr>
																	<tr>
																		<td>Rating</td>
																		<td id="user_rating">  
																		
																		<i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-half-o"></i><i class="fa fa-star-o"></i>
																		
																		
																		</td>
																		<td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
																	</tr>
																	<tr>
																		<td>Join Date</td>
																		<td><?php echo $user_join_date; ?></td>
																		<td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
																	</tr>
																	<tr>
																		<td>Completed Projects</td>
																		<td>
																		<a href="#">
																			23 
																		</a></td>
																		<td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
																	</tr>
																	<tr>
																		<td>Status</td>
																		<td><span class="label label-sm label-info">Active</span></td>
																		<td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
																	</tr>
																</tbody>
															</table>
															<table class="table">
																<thead>
																	<tr>
																		<th colspan="3">Additional information</th>
																	</tr>
																</thead>
																<tbody>
																	<tr>
																		<td>Date of Birth</td>
																		<td id="user_birthday"><?php echo $user_birthday; ?></td>
																		<td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
																	</tr>
																	
																</tbody>
															</table>
														</div>
													</div>
													<div class="col-sm-7 col-md-8">
														<div class="row space20">
															<div class="col-sm-3">
																<a class="btn btn-icon margin-bottom-5 margin-bottom-5 btn-block" href="projects.php">
																	<i class="ti-layers-alt block text-primary text-extra-large margin-bottom-10"></i>
																	Projects
																</a>
															</div>
															<div class="col-sm-3">
																<a class="btn btn-icon margin-bottom-5 btn-block" href="pages_messages.php">
																	<i class="ti-comments block text-primary text-extra-large margin-bottom-10"></i>
																	Messages <span class="badge badge-danger"> <?php 
																	require_once 'modules/session.php';
																	require_once 'modules/db.php';

																	$test_inbox = mysql_query(" SELECT * FROM pm_messages WHERE receiver = '$active_session_mail' AND status = 'unread' "); 
																	$count = mysql_num_rows($test_inbox);
																	echo $count;
																	?> </span>
																</a>
															</div>
															
															<div class="col-sm-3">
																<a class="btn btn-icon margin-bottom-5 btn-block" href="#">
																	<i class="ti-flag block text-primary text-extra-large margin-bottom-10"></i>
																	Bids
																</a>
															</div>
														</div>
														<div class="panel panel-white" id="activities">
															<div class="panel-heading border-light">
																<h4 class="panel-title text-primary">Recent Activities</h4>
																<paneltool class="panel-tools" tool-collapse="tool-collapse" tool-refresh="load1" tool-dismiss="tool-dismiss"></paneltool>
															</div>
															<div collapse="activities" ng-init="activities=false" class="panel-wrapper">
																<div class="panel-body">
																	<ul class="timeline-xs">
																		<li class="timeline-item success">
																			<div class="margin-left-15">
																				<div class="text-muted text-small">
																					2 minutes ago
																				</div>
																				<p>
																					<a class="text-info" href>
																						Olamide
																					</a>
																					has completed his account.
																				</p>
																			</div>
																		</li>
																		<li class="timeline-item">
																			<div class="margin-left-15">
																				<div class="text-muted text-small">
																					12:30
																				</div>
																				<p>
																					Completed Project For client<a class="text-info" href>
																						Emeka
																					</a>
																				</p>
																			</div>
																		</li>
																		<li class="timeline-item danger">
																			<div class="margin-left-15">
																				<div class="text-muted text-small">
																					11:11
																				</div>
																				<p>
																					Completed new layout.
																				</p>
																			</div>
																		</li>
																		<li class="timeline-item info">
																			<div class="margin-left-15">
																				<div class="text-muted text-small">
																					Thu, 12 Jun
																				</div>
																				<p>
																					Contacted
																					<a class="text-info" href>
																						Microsoft
																					</a>
																					for license upgrades.
																				</p>
																			</div>
																		</li>
																		<li class="timeline-item">
																			<div class="margin-left-15">
																				<div class="text-muted text-small">
																					Tue, 10 Jun
																				</div>
																				<p>
																					Started development new site project
																				</p>
																			</div>
																		</li>
																		<li class="timeline-item">
																			<div class="margin-left-15">
																				<div class="text-muted text-small">
																					Sun, 11 Apr
																				</div>
																				<p>
																					Won a bid for
																					<a class="text-info" href>
																						Nicole
																					</a>'s Project
																					.
																				</p>
																			</div>
																		</li>
																		<li class="timeline-item warning">
																			<div class="margin-left-15">
																				<div class="text-muted text-small">
																					Wed, 25 Mar
																				</div>
																				<p>
																					server Maintenance.
																				</p>
																			</div>
																		</li>
																		<li class="timeline-item">
																			<div class="margin-left-15">
																				<div class="text-muted text-small">
																					Fri, 20 Mar
																				</div>
																				<p>
																					New User Registration
																					<a class="text-info" href>
																						more details
																					</a>
																					.
																				</p>
																			</div>
																		</li>
																	</ul>
																</div>
															</div>
														</div>
														<div class="panel panel-white space20">
															<div class="panel-heading">
																<h4 class="panel-title">About</h4>
															</div>
															<div class="panel-body">
																<ul class="ltwt">
																	<li class="ltwt_tweet">
																	
																		<p class="ltwt_tweet_text">
																			<a href class=text-info">
																			
																				@<?php echo $user_first_name,$user_last_name; ?>
																			</a>
																			<?php echo $user_bio; ?>
																		</p>
																		<span class="block text-light"><i class="fa fa-fw fa-clock-o"></i> updated some time ago</span>
																	</li>
																</ul>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div id="panel_edit_account" class="tab-pane fade">
												<form action="#" method="POST" role="form" id="form">
													<fieldset>
														<legend>
															Account Info - <h3 class="hidden" id="post-response"> </h3>
														</legend>
														<div class="row">
															<div class="col-md-6">
																<div class="form-group">
																	<label class="control-label">
																		First Name
																	</label>
																	<input type="text" placeholder="Peter" value="<?php echo $user_first_name; ?>" class="form-control"  id="firstname" name="firstname">
																</div>
																<div class="form-group">
																	<label class="control-label">
																		Last Name
																	</label>
																	<input type="text" placeholder="Clark" class="form-control" value="<?php echo $user_last_name; ?>" id="lastname" name="lastname">
																</div>
																<div class="form-group">
																	<label class="control-label">
																		Email Address
																	</label>
																	<input type="email" placeholder="peter@example.com" value="<?php echo $user_email; ?>" class="form-control" id="email" name="email">
																</div>
																<div class="form-group">
																	<label class="control-label">
																		Phone
																	</label>
																	<input type="text" placeholder="(641)-734-4763" value="<?php echo $user_phone; ?>" class="form-control" id="phone" name="phone">
																</div>
																<div class="form-group">
																	<label class="control-label">
																		Password
																	</label>
																	<input type="password" placeholder="password" class="form-control" name="password" id="password">
																</div>
																<div class="form-group">
																	<label class="control-label">
																		Dirth Of Birth
																	</label>
																	<p class="input-group input-append datepicker date">
														<input type="text" name="birthday" class="form-control" value="<?php echo $user_birthday; ?>">
														<span class="input-group-btn">
															<button type="button" class="btn btn-default">
																<i class="glyphicon glyphicon-calendar"></i>
															</button> </span>
																	</p>
																</div>
																
																<div class="form-group">
																<input type="text" placeholder="bio" id="form-field-12" name="bio" value="<?php echo $user_bio; ?>" class="form-control input-lg">
																</div>
																
																<!---Skills select widget -->
																
																<div class="form-group">
															<label>
																Skills
															</label>
															<select multiple="" name="skillset[]" class="js-example-basic-multiple js-example-placeholder-single js-states form-control">
																
<option value="Web Design">Web Design</option>
<option value="Web Application Development and Design">Web Application Development and Design</option>
<option value="Cryptography"> Cryptography </option>
<option value="Ethical Hacking"> Ethical Hacking </option>
<option value="Blogging"> Blogging </option>
<option value="Software Development"> Software Development </option>
<option value="Software Architecture">Software Architecture</option>
<option value="Desktop Application">Desktop Application</option>
<option value="Payment Gateway"> Payment Gateway </option>
<option value="PHP"> PHP </option>
<option value="CSS"> CSS </option>
<option value="JavaScript"> JavaScript</option>
<option value="OpenCV">  OpenC </option>
<option value="Software Testing"> Software Testing </option>
<option value="Android Application"> Android Application </option>
<option value="IOS"> IOS </option>
<option value="Windows"> Windows </option>
<option value="Blackberry"> Blackberry </option>
<option value="Mobile Application Development"> Mobile Application Development </option>
<option value="Mobile Games"> Mobile Games </option>
<option value="Graphic designs"> Graphic designs </option>
<option value="logo designs">logo designs</option>
<option value="cartooning">cartooning</option>
<option value="animations">animations</option>
<option value="commercial animations">commercial animations</option>
<option value="gaming graphics">gaming graphics</option>
<option value="2D and 3D Animations">2D and 3D Animations</option>
<option value="GIF Imaging">2D and 3D Animations</option>
<option value="Print Media">Print Media</option>
<option value="Commercials">Commercials</option>
<option value="Comedy">Comedy</option>
<option value="Actors">Actors</option>
<option value="Actresses">Actresses</option>
<option value="Mc">Mc</option>
<option value="Singers">Singers</option>
<option value="Photography">Photography</option>
<option value="Photo/Media Studio">Photo/Media Studio</option>
<option value="Video Coverage">Video Coverage</option>
<option value="Video Production">Video Production</option>
<option value="Audio Production">Audio Production</option>
<option value="Article Writing">Article Writing</option>
<option value="Copywriter">Copywriter</option>
<option value="Content Writing">Content Writing</option>
<option value="Research">Research</option>
<option value="Story Writing">Story Writing</option>
<option value="Play Writing">Play Writing</option>
<option value="Movie Writing">Movie Writing</option>
<option value="Script Writing">Script Writing</option>
<option value="Song Writing">Song Writing</option>
<option value="Book Writing">Book Writing</option>
<option value="Fiction">Fiction</option>
<option value="Drama">Drama</option>
<option value="Movie Series">Movie Series</option>
<option value="Chapters">Chapters</option>
<option value="Campaign Writing">Campaign Writing</option>
<option value="Excel">Excel</option>
<option value="Data Entry">Data Entry</option>
<option value="Virtual Assistant">Virtual Assistant</option>
<option value="Web Search">Web Search</option>
<option value="Analysis">Analysis</option>
<option value="Data Analysis">Data Analysis</option>
<option value="Suggestions">Suggestions</option>
<option value="Performance Survey">Performance Survey</option>
<option value="Internet Marketing">Internet Marketing</option>
<option value="Marketing">Marketing</option>
<option value="Sales">Sales</option>
<option value="Leads">Leads</option>
<option value="Social Media Marketing">Social Media Marketing</option>
<option value="Marketing Campaigns">Marketing Campaigns</option>
<option value="Marketing Ideas">Marketing Ideas</option>
<option value="Supplier Sourcing">Supplier Sourcing</option>
<option value="Product Design">Product Design</option>
<option value="Manufacturing">Manufacturing</option>
<option value="Product Sourcing">Product Sourcing</option>
<option value="Logistics">Logistics</option>
<option value="Shipping">Shipping</option>
<option value="Re-packaging">Re-packaging</option>
<option value="Buyer Sourcing">Buyer Sourcing</option>
<option value="Tailoring">Tailoring</option>
<option value="T-Shirt">T-Shirt</option>
<option value="Sewing">Sewing</option>
<option value="Shoe Making">Shoe Making</option>
<option value="Makeup Artist">Makeup Artist</option>
<option value="Jewelry Making">Jewelry Making</option>
<option value="Fashion Designer">Fashion Designer</option>
<option value="Patterns">Patterns</option>
<option value="Mass Productions">Mass Productions</option>
<option value="Bid Making">Bid Making</option>
<option value="English translation">English translation</option>
<option value="Foreign Languages translation">Foreign Languages translation</option>
<option value="African Languages translation">African Languages translation</option>
<option value="Grammar">Grammar</option>
<option value="Engineering">Engineering</option>
<option value="Electricals">Electricals</option>
<option value="AutoCAD">AutoCAD</option>
<option value="MATLAB">MATLAB</option>
<option value="Civil Engineering">Civil Engineering</option>
<option value="Microbiology">Microbiology</option>
<option value="Botany">Botany</option>
<option value="Network Engineering">Network Engineering</option>
<option value="Medical">Medical</option>
<option value="Computer Networking">Computer Networking</option>
<option value="Microcontroller">Microcontroller</option>
<option value="Mining Engineering">Mining Engineering</option>
<option value="Physics">Physics</option>
<option value="Herbal Products">Herbal Products</option>
<option value="Business Plan">Business Plan</option>
<option value="Accounting">Accounting</option>
<option value="Business Analysis">Business Analysis</option>
<option value="Finance">Finance</option>
<option value="Project Management">Project Management</option>
<option value="Lawyer">Lawyer</option>
<option value="Human Resources">Human Resources</option>
<option value="Patent">Patent</option>
<option value="Terms and Conditions">Terms and Conditions</option>
<option value="General labour">General labour</option>
<option value="Computer Help">Computer Help</option>
<option value="Delivery">Delivery</option>
<option value="Drafting">Drafting</option>
<option value="Pickup">Pickup</option>
<option value="Air Conditioner">Air Conditioner</option>
<option value="Driver">Driver</option>
<option value="Taxi">Taxi</option>
<option value="Catering">Catering</option>
<option value="Cleaning Service">Cleaning Service</option>
<option value="Equipment Hire">Equipment Hire</option>
<option value="Entertainers">Entertainers</option>
<option value="Live Band">Live Band</option>
<option value="Orchestra">Orchestra</option>
<option value="Jazz Band">Jazz Band</option>
<option value="Even Planner">Even Planner</option>
<option value="Event Center">Event Center</option>
<option value="Meeting Venue">Meeting Venue</option>
<option value="Lighting">Lighting</option>
<option value="Equipment">Equipment</option>
<option value="Wedding">Wedding</option>
<option value="Birthdays">Birthdays</option>
<option value="Schools">Schools</option>
<option value="Lesson Teacher">Lesson Teacher</option>
<option value="Computer School">Computer School</option>
<option value="Database Development">Database Development</option>
<option value="Data Mining">Data Mining</option>
<option value="Data Warehousing">Data Warehousing</option>
<option value="Database Security">Database Security</option>
<option value="MySQL">MySQL</option>
<option value="Oracle">Oracle</option>
<option value="Database Administrator">Database Administrator</option>
<option value="Networking">Networking</option>
<option value="Brain Storming">Brain Storming</option>
<option value="Furniture">Furniture</option>
<option value="Mechanics">Mechanics</option>
<option value="Room Arrangement">Room Arrangement</option>
<option value="Interiors">Interiors</option>
<option value="Farmer">Farmer</option>
<option value="Warehouse">Warehouse</option>
<option value="Cooking recipes">Cooking recipes</option>
<option value="History">History</option>
<option value="Real Estate">Real Estate</option>
<option value="Trouble Shooting">Trouble Shooting</option>
															</select>
														</div>
																
																
																
																<!---skills select widget --->
																
																
																
															</div>
															<div class="col-md-6">
																<div class="form-group">
																	<label class="control-label">
																		Gender
																	</label>
																	<div class="clip-radio radio-primary">
																	<?php if($user_gender == 'male') {echo'
																		<input type="radio" value="female" name="gender" id="us-female">
																		<label for="us-female">
																			Female
																		</label>
																		<input type="radio" value="male" name="gender" id="us-male" checked>
																		<label for="us-male">
																			Male
																	</label>'; }else{echo'
																		<input type="radio" value="female" name="gender" id="us-female" checked>
																		<label for="us-female">
																			Female
																		</label>
																		<input type="radio" value="male" name="gender" id="us-male">
																		<label for="us-male">
																			Male
																	</label>'; 
																		
																	} ?>
																	</div>
																</div>
																<div class="row">
																	<div class="col-md-4">
																		<div class="form-group">
																			<label class="control-label">
																				Username
																			</label>
																			<input class="form-control" placeholder="janedoe123" type="text" value="<?php echo $user_nickname; ?>" name="nickname" id="nickname">
																		</div>
																	</div>
																	<div class="col-md-8">
																		<div class="form-group">
																			<label class="control-label">
																				City
																			</label>
																			<input class="form-control tooltips" placeholder="London (UK)" type="text" data-original-title="We'll display it when you write reviews" data-rel="tooltip" value="<?php $v= $user_city; echo $v;?>" title="" data-placement="top" name="city" id="city">
																		</div>
																	</div>
																</div>
																<div class="form-group">
																	<label>
																		Image Upload
																	</label>
																	<div class="fileinput fileinput-new" data-provides="fileinput">
																		<div class="fileinput-new thumbnail"><img src="modules/<?php echo $user_avatar; ?>" alt="<?php echo $user_last_name."'s profile picture";?>">
																		<input type="hidden" class="hidden" value="" id="imgSrc" name="profilePicture"/>
																		</div>
																		<div class="fileinput-preview fileinput-exists thumbnail"></div>
																		<div class="user-edit-image-buttons">
																			<span class="btn btn-azure btn-file"><span class="fileinput-new"><i class="fa fa-picture"></i> Select image</span><span class="fileinput-exists"><i class="fa fa-picture"></i> Change</span>
																				<input type="file" >
																			</span>
																			<a href="#" class="btn fileinput-exists btn-red" data-dismiss="fileinput">
																				<i class="fa fa-times"></i> Remove
																			</a>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</fieldset>
													<fieldset>
														<legend>
															Additional Info
														</legend>
														<div class="row">
															<div class="col-md-6">
																<div class="form-group">
																	<label class="control-label">
																		Twitter
																	</label>
																	<span class="input-icon">
																		<input class="form-control" type="text" name="twitter" value="<?php echo $user_twitter; ?>" placeholder="Text Field">
																		<i class="fa fa-twitter"></i> </span>
																</div>
																<div class="form-group">
																	<label class="control-label">
																		Facebook
																	</label>
																	<span class="input-icon">
																		<input class="form-control" type="text" name="facebook" value="<?php echo $user_facebook;?>" placeholder="Text Field">
																		<i class="fa fa-facebook"></i> </span>
																</div>
																<div class="form-group">
																	<label class="control-label">
																		Google Plus
																	</label>
																	<span class="input-icon">
																		<input class="form-control" type="text" name="googleplus" value="<?php echo $user_googleplus;?>" placeholder="Text Field">
																		<i class="fa fa-google-plus"></i> </span>
																</div>
															</div>
															<div class="col-md-6">
																<div class="form-group">
																	<label class="control-label">
																		Github
																	</label>
																	<span class="input-icon">
																		<input class="form-control" type="text" name="github" value="<?php echo $user_github;?>" placeholder="Text Field">
																		<i class="fa fa-github"></i> </span>
																</div>
																<div class="form-group">
																	<label class="control-label">
																		Linkedin
																	</label>
																	<span class="input-icon">
																		<input class="form-control" type="text" name="linkedin" value="<?php echo $user_linkedin;?>" placeholder="Text Field">
																		<i class="fa fa-linkedin"></i> </span>
																</div>
																<div class="form-group">
																	<label class="control-label">
																		Skype
																	</label>
																	<span class="input-icon">
																		<input class="form-control" type="text" name="skype" value="<?php echo $user_skype;?>" placeholder="Text Field">
																		<i class="fa fa-skype"></i> </span>
																</div>
															</div>
														</div>
													</fieldset>
													<div class="row">
														<div class="col-md-12">
															<div>
																Required Fields
																<hr>
															</div>
														</div>
													</div>
													<div class="row">
														<div class="col-md-8">
															<p>
																By clicking UPDATE, you are agreeing to the Policy and Terms &amp; Conditions.
															</p>
														</div>
														<div class="col-md-4">
															<button class="btn btn-primary pull-right" type="submit">
																Update <i class="fa fa-arrow-circle-right"></i>
															</button>
															
														</div>
													</div>
												</form>
												<button class="secret-santa basic-message" style="display:none;">
														<!-- open message !-->
													</button>
											</div>
											<div id="panel_projects" class="tab-pane fade">
												<table class="table" id="projects">
													<thead>
														<tr>
															<th>Project Name</th>
															<th class="hidden-xs">Client</th>
															<th>Proj Comp</th>
															
														</tr>
													</thead>
													<tbody>
														<tr>
															<td>IT Help Desk</td>
															<td class="hidden-xs">Master Company</td>
															<td>11 november 2014</td>
															
														</tr>
														<tr>
															<td>PM New Product Dev</td>
															<td class="hidden-xs">Brand Company</td>
															<td>12 june 2014</td>
															
														</tr>
														<tr>
															<td>ClipTheme Web Site</td>
															<td class="hidden-xs">Internal</td>
															<td>11 november 2014</td>
															
														</tr>
														<tr>
															<td>Local Ad</td>
															<td class="hidden-xs">UI Fab</td>
															<td>15 april 2014</td>
															
														</tr>
														<tr>
															<td>Design new theme</td>
															<td class="hidden-xs">Internal</td>
															<td>2 october 2014</td>
															
														</tr>
														<tr>
															<td>IT Help Desk</td>
															<td class="hidden-xs">Designer TM</td>
															<td>6 december 2014</td>
															
														</tr>
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- end: USER PROFILE -->
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
		<!-- end: MAIN JAVASCRIPTS -->
		<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script src="vendor/bootstrap-fileinput/jasny-bootstrap.js"></script>
		<script src="vendor/select2/select2.min.js"></script>
		<script src="assets/js/form-elements.js"></script>
		
		
		<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<!-- start: CLIP-TWO JAVASCRIPTS -->
		<script src="assets/js/main.js"></script>
		<script src="vendor/sweetalert/sweet-alert.min.js"></script>
		<script src="assets/js/ui-notifications.js"></script>
		
		<!-- start: JavaScript Event Handlers for this page -->
		
		
		
		<script>
			jQuery(document).ready(function() {
				Main.init();
					UINotifications.init();
							$(".js-example-placeholder-single").select2({
			maximumSelectionLength: 5,
			placeholder: "Select skills to add",
			 allowClear: true
		});
			});
			
			$('#fix_select').on('click',function(){
				
				$('.select2-container, .select2-container--default').css('width','auto');
				
			});
		</script>
		<script>
		
				$("form#form").on('submit', function(event){
				
					event.preventDefault();
    var formData = new FormData(this); 
	var profilePicVal = $('#profilePicture').attr('src');
	 formData.append(profilePicVal, 'profilePic');
	
	var dateObj = new Date();
var newDateString = dateObj.getMilliseconds();
        $.ajax({
            url: 'modules/ajax.update_profile.php?id='+ newDateString,
            type: 'POST',
            data: formData,
            success: function (data) {
				
				$('#post-response').text(data);
				
				var res = data.match(/successful/gi);
				
			   if(res.length > 0) { $('button.secret-santa').click(); }
			   
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
