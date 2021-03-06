<?php require_once 'modules/session.php'; ?><!DOCTYPE html>
<!-- Template Name: Clip-Two - Responsive Admin Template build with Twitter Bootstrap 3.x | Author: ClipTheme -->
<!--[if IE 8]><html class="ie8" lang="en"><![endif]-->
<!--[if IE 9]><html class="ie9" lang="en"><![endif]-->
<!--[if !IE]><!-->
<html lang="en">
	<!--<![endif]-->
	<!-- start: HEAD -->
	<head>
		<title>LancerShelf.com - My Inbox </title>
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
		<link href="vendor/sweetalert/sweet-alert.css" rel="stylesheet" media="screen">
		<!-- end: CLIP-TWO CSS -->
		<!-- start: CSS REQUIRED FOR THIS PAGE ONLY -->
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
							<img src="assets/images/logo.png" alt="Clip-Two"/>
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
										<a href="pages_calendar.html">
											My Calendar
										</a>
									</li>
									<li>
										<a hef="pages_messages.html">
											My Messages (3)
										</a>
									</li>
									<li>
										<a href="login_lockscreen.html">
											Lock Screen
										</a>
									</li>
									<li>
										<a href="login_signin.html">
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
						<div class="wrap-messages">
							<div id="inbox" class="inbox">
								<!-- start: EMAIL OPTIONS -->
								<div class="col email-options perfect-scrollbar">
									<div class="padding-15">
										<button class="btn btn-primary btn-block margin-bottom-30" type="button" data-toggle="modal" data-target="#myModal">
											Reply
										</button>
										<p class="email-options-title no-margin">
											BROWSE
										</p>
										<ul class="main-options padding-15">
											<li>
												<a href="#">
													<span class="title"><i class="ti-import"></i> Inbox</span>
													<span class="badge pull-right">
													
													<?php 		
																require_once 'modules/db.php';
																
																$test_inbox = mysql_query("SELECT * FROM pm_messages WHERE receiver = '$active_session_mail'  "); //AND status = 'unread'
																	echo mysql_num_rows($test_inbox);
																
																?>
													
													
													</span>
												</a>
											</li>
											<li>
												<a href="#">
													<span class="title"><i class="ti-upload"></i> Sent</span>
													<span class="badge pull-right">
													
													<?php 
															
																
																$test_inbox = mysql_query("SELECT * FROM pm_messages WHERE sender = '$active_session_id'  "); //AND status = 'unread'
																	echo mysql_num_rows($test_inbox);
																
																?>
													
													
													</span>
												</a>
											</li>
											
											<li>
												<a href="#">
													<span class="title"><i class="ti-star"></i> Starred</span>
													<span class="badge pull-right">
													
													<?php 
																
																
																$test_inbox = mysql_query("SELECT * FROM pm_messages WHERE receiver = '$active_session_mail' AND star = '1' "); //AND status = 'unread'
																	echo mysql_num_rows($test_inbox);
																
																?>
													
													
													</span>
												</a>
											</li>
										</ul>
									</div>
								</div>
								<!-- end: EMAIL OPTIONS -->
								<!-- start: EMAIL LIST -->
								<div class="email-reader perfect-scrollbar">
									<div>
										<div class="message-actions">
											<ul class="actions no-margin no-padding block">
												<li class="email-list-toggle">
													<a href="pages_messages.php"><i class="fa fa-1x fa-angle-left"></i> All Inboxes </a> 
													<a class="" type="button" data-toggle="modal" href="#myModal">
											Reply
										</a>
													<?php
													$message_id = $_REQUEST['2ea6201a068c5fa0eea5d81a3863321a87f8d533_a'];
													$message_id = (int)mysql_real_escape_string($message_id);
													
													echo "<script>
													function deletepm(){
													$.ajax({
            url: 'modules/delete_pm.php?2ea6201a068c5fa0eea5d81a3863321a87f8d533_u=23&2ea6201a068c5fa0eea5d81a3863321a87f8d533_c=".$message_id."',
            type: 'POST',
            data: 'hash',
            success: function (ndata) {
			
			//sucessful
			
            },
            cache: false,
            contentType: false,
            processData: false
        });
													
													
													}
													
													</script>";
													
													
													
													
													
													
													
												echo '<a href="#" onclick="deletepm();"> Delete </a> <span class="fa fa-trash"></span>';
													?>
												</li>
												
												
												
												
												<li class="no-padding ">
												<a href="pages_messages.php"><i class="fa fa-1x fa-angle-left"></i> Back to All Inbox </a> 
													<a href="#" onclick="deletepm();">
														Delete
													</a>
													<span class="fa fa-trash"></span>
												</li>
											</ul>
										</div>
										
										
										<?php
										require_once 'modules/utilities/match_maker.php';
											$converter = new profileFieldMatcher();
											
											$message_id = $_REQUEST['2ea6201a068c5fa0eea5d81a3863321a87f8d533_a'];
											$message_id = mysql_real_escape_string($message_id);
							$test_inbox = mysql_query(" SELECT * FROM pm_messages WHERE id = '$message_id'  "); //AND status = 'unread'
							$update_inbox = mysql_query(" UPDATE pm_messages SET status = 'read' WHERE id = '$message_id' ");
										while($rows = mysql_fetch_assoc($test_inbox)){
										$sender_email = $converter->userIdToEmail($rows['sender']);
										echo '
										<div class="message-header">
											<img class="message-item-avatar" alt="'.$rows['sender_name'].'" src="assets/images/avatar-6.jpg">
											<div class="message-time">
												'.$rows['date'].'
											</div>
											
											<div class="message-from">
												'.$rows['sender_name'].' &lt; '.$sender_email.' &gt;
											</div>
											<div class="message-to">
												To: User Account '.$active_session_mail.'
											</div>
										</div>
										<div class="message-subject">
											'.$rows['title'].'
										</div>
										<div class="message-content">
											


							

							<p>'.$rows['message'].'</p>
							
											
										
											
											<p>
												Sincerely  ,' .$rows['sender_name'].'
											</p>';
										}
										?>
										</div>
									</div>
								</div>
								<!-- end: EMAIL LIST -->
								<!-- start: EMAIL READER -->
								
								<!-- end: EMAIL READER -->
							</div>
						</div>
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
			
			
			<!---MESSAGE EDITOR MODAL --->
			
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
		<div class="modal-dialog " >
						<div class="modal-content" style="background-color:#fff">
						<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
										</button>
										<h4 class="modal-title" id="myModalLabel">Reply Message</h4>
										</div>
										<div class="modal-body">
										
										
										
										
														<div class="box-login">
					<form class="form-login messenger-prompt" id="log" action="index.html">
						<fieldset>
							<legend>
								<?php echo $active_session_mail; ?>
							</legend>
							<p id="post-response">
							</p>
							<p>
								*Please enter username or email of receiver
							</p>
							<div class="form-group">
								<span class="input-icon">
									<input type="text" class="form-control" name="receiver" placeholder="Username or Email" value="<?php require_once 'modules/utilities/match_maker.php';$converter = new profileFieldMatcher();$user_id = $_REQUEST['2ea6201a068c5fa0eea5d81a3863321a87f8d533_b']; $id_to_email = $converter->userIdToEmail($user_id);echo $id_to_email;?>">
									<i class="fa fa-user"></i> </span>
							</div>
							<div class="form-group">
								<span class="input-icon">
									<input type="text" class="form-control" name="title" placeholder="Message Title" value="<?php $message_id = $_REQUEST['2ea6201a068c5fa0eea5d81a3863321a87f8d533_a']; $query_1 = mysql_query("SELECT title FROM pm_messages WHERE id='".mysql_real_escape_string($message_id)."'"); echo "Reply: (".mysql_result($query_1,0).")";  ?>">
									<i class="fa fa-bars"></i> </span>
							</div>
							<div class="form-group form-actions">
								<span class="input-icon">
									<textarea class="form-control" name="message"  style="height:173px !important;" placeholder="  Type message here">   '\n' </textarea>
									<i class="fa fa-envelope"></i>
									<a class="forgot" href="#">
										Slow network? Try basic html
									</a> </span>
							</div>
							<div class="form-actions">
								
								<button type="submit" class="btn btn-primary pull-right">
									Send <i class="fa fa-paper-plane"></i>
								</button>
							</div>
							
						</fieldset>
					</form>
					<!-- start: COPYRIGHT -->
					<div class="copyright">
						&copy; <span class="current-year"></span><span class="text-bold text-uppercase"> LancerShelf</span>. <span>All rights reserved</span>
					</div>
					<!-- end: COPYRIGHT -->
				</div>
										
										
										
										
										
										
										
										
										
										
										</div>
										<div class="modal-footer">
										<button type="button" class="btn btn-primary btn-o" data-dismiss="modal">
										Close
										</button>
								
						</div>
						</div>
		</div>
		</div>
										
			<button class="hidden secret-christmas-santa"></button>
		</div>
		<!-- start: MAIN JAVASCRIPTS -->
		<script src="vendor/jquery/jquery.min.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="vendor/modernizr/modernizr.js"></script>
		<script src="vendor/jquery-cookie/jquery.cookie.js"></script>
		<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
		<script src="vendor/switchery/switchery.min.js"></script>
		<!-- end: MAIN JAVASCRIPTS -->
		<!-- start: CLIP-TWO JAVASCRIPTS -->
		<script src="assets/js/main.js"></script>
		<!-- start: JavaScript Event Handlers for this page -->
		<script src="assets/js/pages-messages.js"></script>
		<script src="vendor/sweetalert/sweet-alert.min.js"></script>
		<script src="assets/js/ui-notifications.js"></script>
		<script>
			jQuery(document).ready(function() {
				Main.init();
				Messages.init();
				UINotifications.init();
			});
		</script>
		<script>
		
		$("form.messenger-prompt").on('submit', function(event){
				
					event.preventDefault();
    var formData = new FormData(this); 
	
	
	var dateObj = new Date();
var newDateString = dateObj.getMilliseconds();
        $.ajax({
            url: 'modules/ajax.messenger.php?id='+ newDateString,
            type: 'POST',
            data: formData,
            success: function (data) {
				
				$('#post-response').text(data);
				
				var res = data.match(/successful/gi);
				
			   if(res.length > 0) {$('.secret-christmas-santa').click(function(){alert('hi am max');});}
			   
            },
            cache: false,
            contentType: false,
            processData: false
        });
            
    });
	
	
				function getNewMessages(){
	var dateObj1 = new Date();
	var newDateString = dateObj1.getMilliseconds();
			$.ajax({
            url: 'modules/inbox_display.php?nocache='+ newDateString,
            type: 'POST',
            data: 'hash',
            success: function (ndata) {
			
			$('#myInbox_view').html(ndata);
			
            },
            cache: false,
            contentType: false,
            processData: false
        });
			}

		setInterval(getNewMessages, 5000); //Timeout
		
		
		</script>
		<!-- end: JavaScript Event Handlers for this page -->
		<!-- end: CLIP-TWO JAVASCRIPTS -->
	</body>
</html>
