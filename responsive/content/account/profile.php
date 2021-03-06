<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>thenewboston</title>

	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,600,700,300&subset=latin" rel="stylesheet" type="text/css">
	<link href="../../assets/stylesheets/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="../../assets/stylesheets/pixel-admin.min.css" rel="stylesheet" type="text/css">
	<link href="../../assets/stylesheets/widgets.min.css" rel="stylesheet" type="text/css">
	<link href="../../assets/stylesheets/pages.min.css" rel="stylesheet" type="text/css">
	<link href="../../assets/stylesheets/themes.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body class="theme-default main-menu-animated page-profile">
<script>var init = [];</script>
<div id="main-wrapper">
	<?php include("../../panel/top_nav.php"); ?>
	<?php include("../../panel/left_account.php"); ?>

	<div id="content-wrapper">
		<!-- 5. $PROFILE ===================================================================================

				Profile
		-->
		<div class="profile-full-name">
			<span class="text-semibold">Bucky Roberts</span>'s profile
		</div>
		<div class="profile-row">
			<div class="left-col">
				<div class="profile-block">
					<div class="panel profile-photo">
						<img src="https://www.thenewboston.com/photos/users/2/resized/23471ba4417d650505928a0b1f1fd8b1.jpg" alt="">
					</div><br>
					<a href="#" class="btn btn-success"><i class="fa fa-check"></i>&nbsp;&nbsp;Following</a>&nbsp;&nbsp;
					<a href="#" class="btn"><i class="fa fa-comment"></i></a>
				</div>

				<div class="panel panel-transparent">
					<div class="panel-heading">
						<span class="panel-title">About me</span>
					</div>
					<div class="panel-body">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et <a href="#">dolore magna</a> aliqua.
					</div>
				</div>

				<div class="panel panel-transparent">
					<div class="panel-heading">
						<span class="panel-title">Statistics</span>
					</div>
					<div class="list-group">
						<a href="#" class="list-group-item"><strong>126</strong> Likes</a>
						<a href="#" class="list-group-item"><strong>579</strong> Followers</a>
						<a href="#" class="list-group-item"><strong>100</strong> Following</a>
					</div>
				</div>

				<div class="panel panel-transparent profile-skills">
					<div class="panel-heading">
						<span class="panel-title">Skills</span>
					</div>
					<div class="panel-body">
						<span class="label label-primary">UI/UX</span>
						<span class="label label-primary">Web design</span>
						<span class="label label-primary">Photoshop</span>
						<span class="label label-primary">HTML</span>
						<span class="label label-primary">CSS</span>
					</div>
				</div>

				<div class="panel panel-transparent">
					<div class="panel-heading">
						<span class="panel-title">Social</span>
					</div>
					<div class="list-group">
						<a href="#" class="list-group-item"><i class="profile-list-icon fa fa-twitter" style="color: #4ab6d5"></i> @dsteiner</a>
						<a href="#" class="list-group-item"><i class="profile-list-icon fa fa-facebook-square" style="color: #1a7ab9"></i> Denise Steiner</a>
						<a href="#" class="list-group-item"><i class="profile-list-icon fa fa-envelope" style="color: #888"></i> dsteiner@example.com</a>
					</div>
				</div>

			</div>
			<div class="right-col">

				<hr class="profile-content-hr no-grid-gutter-h">

				<div class="profile-content">

					<ul id="profile-tabs" class="nav nav-tabs"><li class="dropdown pull-right tabdrop hide"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-bars"></i> <b class="caret"></b></a><ul class="dropdown-menu"></ul></li>
						<li class="active">
							<a href="#profile-tabs-board" data-toggle="tab">Board</a>
						</li>
						<li>
							<a href="#profile-tabs-activity" data-toggle="tab">Timeline</a>
						</li>
						<li>
							<a href="#profile-tabs-followers" data-toggle="tab">Followers</a>
						</li>
						<li>
							<a href="#profile-tabs-following" data-toggle="tab">Following</a>
						</li>
					</ul>

					<div class="tab-content tab-content-bordered panel-padding">
						<div class="widget-article-comments tab-pane panel no-padding no-border fade in active" id="profile-tabs-board">

							<div class="comment">
								<img src="https://www.thenewboston.com/images/defaultProfileImage.png" alt="" class="comment-avatar">
								<div class="comment-body">
									<form action="" id="leave-comment-form" class="comment-text no-padding no-border expanding-input">
										<textarea class="form-control expanding-input-target" rows="1"></textarea>
										<div class="expanding-input-hidden expanding-input-content" style="margin-top: 10px;">
											<label class="checkbox-inline pull-left">
												<input type="checkbox" class="px">
												<span class="lbl">Private message</span>
											</label>
											<button class="btn btn-primary pull-right">Leave Message</button>
										</div>
										<div class="expanding-input-overlay"><div class="expanding-input-placeholder">Write message</div></div></form>
								</div> <!-- / .comment-body -->
							</div>

							<hr class="no-panel-padding-h panel-wide">

							<div class="comment">
								<img src="https://www.thenewboston.com/images/defaultProfileImage.png" alt="" class="comment-avatar">
								<div class="comment-body">
									<div class="comment-text">
										<div class="comment-heading">
											<a href="#" title="">Robert Jang</a><span>14 hours ago</span>
										</div>
										Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.
									</div>
									<div class="comment-footer">
										<a href="#"><i class="fa fa-thumbs-o-up"></i></a>&nbsp;&nbsp;
										<a href="#"><i class="fa fa-thumbs-o-down"></i></a>
										&nbsp;&nbsp;�&nbsp;&nbsp;
										<a href="#">Reply</a>
									</div>
								</div> <!-- / .comment-body -->

								<div class="comment">
									<img src="https://www.thenewboston.com/images/defaultProfileImage.png" alt="" class="comment-avatar">
									<div class="comment-body">
										<div class="comment-text">
											<div class="comment-heading">
												<a href="#" title="">Timothy Owens</a><span>14 hours ago</span>
											</div>
											Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.
										</div>
										<div class="comment-footer">
											<a href="#"><i class="fa fa-thumbs-o-up"></i></a>&nbsp;&nbsp;
											<a href="#"><i class="fa fa-thumbs-o-down"></i></a>
											&nbsp;&nbsp;�&nbsp;&nbsp;
											<a href="#">Reply</a>
										</div>
									</div> <!-- / .comment-body -->
								</div> <!-- / .comment -->

								<div class="comment">
									<img src="https://www.thenewboston.com/images/defaultProfileImage.png" alt="" class="comment-avatar">
									<div class="comment-body">
										<div class="comment-text">
											<div class="comment-heading">
												<a href="#" title="">Denise Steiner</a><span>14 hours ago</span>
											</div>
											Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.
										</div>
										<div class="comment-footer">
											<a href="#"><i class="fa fa-thumbs-o-up"></i></a>&nbsp;&nbsp;
											<a href="#"><i class="fa fa-thumbs-o-down"></i></a>
											&nbsp;&nbsp;�&nbsp;&nbsp;
											<a href="#">Reply</a>
										</div>
									</div> <!-- / .comment-body -->

									<div class="comment">
										<img src="https://www.thenewboston.com/images/defaultProfileImage.png" alt="" class="comment-avatar">
										<div class="comment-body">
											<div class="comment-text">
												<div class="comment-heading">
													<a href="#" title="">John Doe</a><span>14 hours ago</span>
												</div>
												Lorem ipsum dolor sit amet, consectetur adipisicing elit.
											</div>
											<div class="comment-footer">
												<a href="#"><i class="fa fa-thumbs-o-up"></i></a>&nbsp;&nbsp;
												<a href="#"><i class="fa fa-thumbs-o-down"></i></a>
												&nbsp;&nbsp;�&nbsp;&nbsp;
												<a href="#">Reply</a>
											</div>
										</div> <!-- / .comment-body -->
									</div> <!-- / .comment -->
								</div> <!-- / .comment -->
							</div> <!-- / .comment -->

							<div class="comment">
								<img src="https://www.thenewboston.com/images/defaultProfileImage.png" alt="" class="comment-avatar">
								<div class="comment-body">
									<div class="comment-text">
										<div class="comment-heading">
											<a href="#" title="">Michelle Bortz</a><span>14 hours ago</span>
										</div>
										Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.
									</div>
									<div class="comment-footer">
										<a href="#"><i class="fa fa-thumbs-o-up"></i></a>&nbsp;&nbsp;
										<a href="#"><i class="fa fa-thumbs-o-down"></i></a>
										&nbsp;&nbsp;�&nbsp;&nbsp;
										<a href="#">Reply</a>
									</div>
								</div> <!-- / .comment-body -->
							</div> <!-- / .comment -->

							<div class="comment">
								<img src="https://www.thenewboston.com/images/defaultProfileImage.png" alt="" class="comment-avatar">
								<div class="comment-body">
									<div class="comment-text">
										<div class="comment-heading">
											<a href="#" title="">Robert Jang</a><span>14 hours ago</span>
										</div>
										Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.
									</div>
									<div class="comment-footer">
										<a href="#"><i class="fa fa-thumbs-o-up"></i></a>&nbsp;&nbsp;
										<a href="#"><i class="fa fa-thumbs-o-down"></i></a>
										&nbsp;&nbsp;�&nbsp;&nbsp;
										<a href="#">Reply</a>
									</div>
								</div> <!-- / .comment-body -->

								<div class="comment">
									<img src="https://www.thenewboston.com/images/defaultProfileImage.png" alt="" class="comment-avatar">
									<div class="comment-body">
										<div class="comment-text">
											<div class="comment-heading">
												<a href="#" title="">Timothy Owens</a><span>14 hours ago</span>
											</div>
											Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.
										</div>
										<div class="comment-footer">
											<a href="#"><i class="fa fa-thumbs-o-up"></i></a>&nbsp;&nbsp;
											<a href="#"><i class="fa fa-thumbs-o-down"></i></a>
											&nbsp;&nbsp;�&nbsp;&nbsp;
											<a href="#">Reply</a>
										</div>
									</div> <!-- / .comment-body -->
								</div> <!-- / .comment -->

								<div class="comment">
									<img src="https://www.thenewboston.com/images/defaultProfileImage.png" alt="" class="comment-avatar">
									<div class="comment-body">
										<div class="comment-text">
											<div class="comment-heading">
												<a href="#" title="">Denise Steiner</a><span>14 hours ago</span>
											</div>
											Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.
										</div>
										<div class="comment-footer">
											<a href="#"><i class="fa fa-thumbs-o-up"></i></a>&nbsp;&nbsp;
											<a href="#"><i class="fa fa-thumbs-o-down"></i></a>
											&nbsp;&nbsp;�&nbsp;&nbsp;
											<a href="#">Reply</a>
										</div>
									</div> <!-- / .comment-body -->

									<div class="comment">
										<img src="https://www.thenewboston.com/images/defaultProfileImage.png" alt="" class="comment-avatar">
										<div class="comment-body">
											<div class="comment-text">
												<div class="comment-heading">
													<a href="#" title="">John Doe</a><span>14 hours ago</span>
												</div>
												Lorem ipsum dolor sit amet, consectetur adipisicing elit.
											</div>
											<div class="comment-footer">
												<a href="#"><i class="fa fa-thumbs-o-up"></i></a>&nbsp;&nbsp;
												<a href="#"><i class="fa fa-thumbs-o-down"></i></a>
												&nbsp;&nbsp;�&nbsp;&nbsp;
												<a href="#">Reply</a>
											</div>
										</div> <!-- / .comment-body -->
									</div> <!-- / .comment -->
								</div> <!-- / .comment -->
							</div> <!-- / .comment -->

							<div class="comment">
								<img src="https://www.thenewboston.com/images/defaultProfileImage.png" alt="" class="comment-avatar">
								<div class="comment-body">
									<div class="comment-text">
										<div class="comment-heading">
											<a href="#" title="">Michelle Bortz</a><span>14 hours ago</span>
										</div>
										Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.
									</div>
									<div class="comment-footer">
										<a href="#"><i class="fa fa-thumbs-o-up"></i></a>&nbsp;&nbsp;
										<a href="#"><i class="fa fa-thumbs-o-down"></i></a>
										&nbsp;&nbsp;�&nbsp;&nbsp;
										<a href="#">Reply</a>
									</div>
								</div> <!-- / .comment-body -->
							</div> <!-- / .comment -->

						</div> <!-- / .tab-pane -->
						<div class="tab-pane fade" id="profile-tabs-activity">
							<div class="timeline">
								<!-- Timeline header -->
								<div class="tl-header now">Now</div>

								<div class="tl-entry">
									<div class="tl-time">
										1h ago
									</div>
									<div class="tl-icon bg-warning"><i class="fa fa-envelope"></i></div>
									<div class="panel tl-body">
										<h4 class="text-warning">Lorem ipsum dolor sit amet</h4>
										Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
									</div> <!-- / .tl-body -->
								</div> <!-- / .tl-entry -->

								<div class="tl-entry left">
									<div class="tl-time">
										2h ago
									</div>
									<div class="tl-icon bg-success"><i class="fa fa-picture-o"></i></div>
									<div class="panel tl-body">
										<a href="#">Denise Steiner</a> shared an image on <a href="#">The Gallery</a>
										<div class="tl-wide text-center" style="padding: 10px;margin-top:15px;margin-bottom: 15px;background: #f1f1f1">
											<img src="https://www.thenewboston.com/images/defaultProfileImage.png" alt="" style="max-height: 150px;max-width: 100%;">
										</div>
										<i class="text-muted text-sm">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</i>
									</div> <!-- / .tl-body -->
								</div> <!-- / .tl-entry -->

								<div class="tl-entry">
									<div class="tl-time">
										3h ago
									</div>
									<div class="tl-icon bg-success"><img src="https://www.thenewboston.com/images/defaultProfileImage.png" alt=""></div>
									<div class="panel tl-body">
										<a href="#">Robert Jang</a> commented on <a href="#">The Article</a>
										<div class="well well-sm" style="margin: 10px 0 0 0;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
									</div> <!-- / .tl-body -->
								</div> <!-- / .tl-entry -->

								<div class="tl-entry left">
									<div class="tl-time">
										4h ago
									</div>
									<div class="tl-icon bg-dark-gray"><i class="fa fa-check"></i></div>
									<div class="panel tl-body">
										<img src="https://www.thenewboston.com/images/defaultProfileImage.png" alt="" class="rounded" style=" width: 20px;height: 20px;margin-top: -2px;">&nbsp;&nbsp;<a href="#">Denise Steiner</a> followed <a href="#">Johg Doe</a>
									</div> <!-- / .tl-body -->
								</div> <!-- / .tl-entry -->

								<!-- Timeline header -->
								<div class="tl-header">Yesterday</div>

								<div class="tl-entry">
									<div class="tl-time">
										9:02 pm
									</div>
									<div class="tl-icon bg-info"><i class="fa fa-comment"></i></div>
									<div class="panel tl-body">
										<a href="#">Denise Steiner</a> liked a comment on <a href="#">Some Article</a>
										<div style="margin-top: 10px;" class="text-sm">
											<img src="https://www.thenewboston.com/images/defaultProfileImage.png" alt="" class="rounded" style=" width: 20px;height: 20px;margin-top: -2px;">&nbsp;&nbsp;<a href="#">Michelle Bortz</a> commented 2 days ago
											<div class="well well-sm" style="margin: 6px 0 0 0;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
										</div>
									</div> <!-- / .tl-body -->
								</div> <!-- / .tl-entry -->

								<div class="tl-entry left">
									<div class="tl-time">
										5:47 pm
									</div>
									<div class="panel tl-body">
										Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
									</div> <!-- / .tl-body -->
								</div> <!-- / .tl-entry -->

								<div class="tl-entry">
									<div class="tl-time">
										2:35 pm
									</div>
									<div class="tl-icon bg-danger"><i class="fa fa-heart"></i></div>
									<div class="panel tl-body">
										<a href="#">Denise Steiner</a> liked <a href="#">Shop Item</a>
									</div> <!-- / .tl-body -->
								</div> <!-- / .tl-entry -->

								<div class="tl-entry left">
									<div class="tl-time">
										11:21 am
									</div>
									<div class="panel tl-body">
										<h4 class="text-danger">Lorem ipsum dolor sit amet</h4>
										Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
									</div> <!-- / .tl-body -->
								</div> <!-- / .tl-entry -->

							</div> <!-- / .timeline -->
						</div> <!-- / .tab-pane -->
						<div class="tab-pane fade widget-followers" id="profile-tabs-followers">
							<div class="follower">
								<img src="https://www.thenewboston.com/images/defaultProfileImage.png" alt="" class="follower-avatar">
								<div class="body">
									<div class="follower-controls">
										<a href="#" class="btn btn-sm btn-success"><i class="fa fa-check"></i><span>&nbsp;&nbsp;Following</span></a>
									</div>
									<a href="#" class="follower-name">John Doe</a><br>
									<a href="#" class="follower-username">@jdoe</a>
								</div>
							</div>

							<div class="follower">
								<img src="https://www.thenewboston.com/images/defaultProfileImage.png" alt="" class="follower-avatar">
								<div class="body">
									<div class="follower-controls">
										<a href="#" class="btn btn-sm btn-outline">Follow</a>
									</div>
									<a href="#" class="follower-name">Michelle Bortz</a><br>
									<a href="#" class="follower-username">@mbortz</a>
								</div>
							</div>

							<div class="follower">
								<img src="https://www.thenewboston.com/images/defaultProfileImage.png" alt="" class="follower-avatar">
								<div class="body">
									<div class="follower-controls">
										<a href="#" class="btn btn-sm btn-outline">Follow</a>
									</div>
									<a href="#" class="follower-name">Timothy Owens</a><br>
									<a href="#" class="follower-username">@towens</a>
								</div>
							</div>

							<div class="follower">
								<img src="https://www.thenewboston.com/images/defaultProfileImage.png" alt="" class="follower-avatar">
								<div class="body">
									<div class="follower-controls">
										<a href="#" class="btn btn-sm btn-outline">Follow</a>
									</div>
									<a href="#" class="follower-name">Denise Steiner</a><br>
									<a href="#" class="follower-username">@dsteiner</a>
								</div>
							</div>

							<div class="follower">
								<img src="https://www.thenewboston.com/images/defaultProfileImage.png" alt="" class="follower-avatar">
								<div class="body">
									<div class="follower-controls">
										<a href="#" class="btn btn-sm btn-success"><i class="fa fa-check"></i><span>&nbsp;&nbsp;Following</span></a>
									</div>
									<a href="#" class="follower-name">John Doe</a><br>
									<a href="#" class="follower-username">@jdoe</a>
								</div>
							</div>

							<div class="follower">
								<img src="https://www.thenewboston.com/images/defaultProfileImage.png" alt="" class="follower-avatar">
								<div class="body">
									<div class="follower-controls">
										<a href="#" class="btn btn-sm btn-outline">Follow</a>
									</div>
									<a href="#" class="follower-name">Michelle Bortz</a><br>
									<a href="#" class="follower-username">@mbortz</a>
								</div>
							</div>

							<div class="follower">
								<img src="https://www.thenewboston.com/images/defaultProfileImage.png" alt="" class="follower-avatar">
								<div class="body">
									<div class="follower-controls">
										<a href="#" class="btn btn-sm btn-outline">Follow</a>
									</div>
									<a href="#" class="follower-name">Timothy Owens</a><br>
									<a href="#" class="follower-username">@towens</a>
								</div>
							</div>

							<div class="follower">
								<img src="https://www.thenewboston.com/images/defaultProfileImage.png" alt="" class="follower-avatar">
								<div class="body">
									<div class="follower-controls">
										<a href="#" class="btn btn-sm btn-outline">Follow</a>
									</div>
									<a href="#" class="follower-name">Denise Steiner</a><br>
									<a href="#" class="follower-username">@dsteiner</a>
								</div>
							</div>

							<div class="follower">
								<img src="https://www.thenewboston.com/images/defaultProfileImage.png" alt="" class="follower-avatar">
								<div class="body">
									<div class="follower-controls">
										<a href="#" class="btn btn-sm btn-success"><i class="fa fa-check"></i><span>&nbsp;&nbsp;Following</span></a>
									</div>
									<a href="#" class="follower-name">John Doe</a><br>
									<a href="#" class="follower-username">@jdoe</a>
								</div>
							</div>

							<div class="follower">
								<img src="ahttps://www.thenewboston.com/images/defaultProfileImage.png" alt="" class="follower-avatar">
								<div class="body">
									<div class="follower-controls">
										<a href="#" class="btn btn-sm btn-outline">Follow</a>
									</div>
									<a href="#" class="follower-name">Michelle Bortz</a><br>
									<a href="#" class="follower-username">@mbortz</a>
								</div>
							</div>

							<div class="follower">
								<img src="https://www.thenewboston.com/images/defaultProfileImage.png" alt="" class="follower-avatar">
								<div class="body">
									<div class="follower-controls">
										<a href="#" class="btn btn-sm btn-outline">Follow</a>
									</div>
									<a href="#" class="follower-name">Timothy Owens</a><br>
									<a href="#" class="follower-username">@towens</a>
								</div>
							</div>

							<div class="follower">
								<img src="https://www.thenewboston.com/images/defaultProfileImage.png" alt="" class="follower-avatar">
								<div class="body">
									<div class="follower-controls">
										<a href="#" class="btn btn-sm btn-outline">Follow</a>
									</div>
									<a href="#" class="follower-name">Denise Steiner</a><br>
									<a href="#" class="follower-username">@dsteiner</a>
								</div>
							</div>

							<div class="follower">
								<img src="https://www.thenewboston.com/images/defaultProfileImage.png" alt="" class="follower-avatar">
								<div class="body">
									<div class="follower-controls">
										<a href="#" class="btn btn-sm btn-success"><i class="fa fa-check"></i><span>&nbsp;&nbsp;Following</span></a>
									</div>
									<a href="#" class="follower-name">John Doe</a><br>
									<a href="#" class="follower-username">@jdoe</a>
								</div>
							</div>

							<div class="follower">
								<img src="https://www.thenewboston.com/images/defaultProfileImage.png" alt="" class="follower-avatar">
								<div class="body">
									<div class="follower-controls">
										<a href="#" class="btn btn-sm btn-outline">Follow</a>
									</div>
									<a href="#" class="follower-name">Michelle Bortz</a><br>
									<a href="#" class="follower-username">@mbortz</a>
								</div>
							</div>

							<div class="follower">
								<img src="https://www.thenewboston.com/images/defaultProfileImage.png" alt="" class="follower-avatar">
								<div class="body">
									<div class="follower-controls">
										<a href="#" class="btn btn-sm btn-outline">Follow</a>
									</div>
									<a href="#" class="follower-name">Timothy Owens</a><br>
									<a href="#" class="follower-username">@towens</a>
								</div>
							</div>

							<div class="follower">
								<img src="https://www.thenewboston.com/images/defaultProfileImage.png" alt="" class="follower-avatar">
								<div class="body">
									<div class="follower-controls">
										<a href="#" class="btn btn-sm btn-outline">Follow</a>
									</div>
									<a href="#" class="follower-name">Denise Steiner</a><br>
									<a href="#" class="follower-username">@dsteiner</a>
								</div>
							</div>
						</div> <!-- / .tab-pane -->
						<div class="tab-pane fade widget-followers" id="profile-tabs-following">
							<div class="follower">
								<img src="https://www.thenewboston.com/images/defaultProfileImage.png" alt="" class="follower-avatar">
								<div class="body">
									<div class="follower-controls">
										<a href="#" class="btn btn-sm btn-success"><i class="fa fa-check"></i><span>&nbsp;&nbsp;Following</span></a>
									</div>
									<a href="#" class="follower-name">John Doe</a><br>
									<a href="#" class="follower-username">@jdoe</a>
								</div>
							</div>

							<div class="follower">
								<img src="https://www.thenewboston.com/images/defaultProfileImage.png" alt="" class="follower-avatar">
								<div class="body">
									<div class="follower-controls">
										<a href="#" class="btn btn-sm btn-outline">Follow</a>
									</div>
									<a href="#" class="follower-name">Denise Steiner</a><br>
									<a href="#" class="follower-username">@dsteiner</a>
								</div>
							</div>
						</div> <!-- / .tab-pane -->
					</div> <!-- / .tab-content -->
				</div>
			</div>
		</div>


	</div>

	<div id="main-menu-bg"></div>
</div>
<?php include("../../panel/end_scripts.php"); ?>
</body>
</html>