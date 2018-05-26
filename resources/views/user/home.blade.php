@extends('layouts.master')

@section('title')
Home
@endsection

@section('content')
<!--
<div class="wlcome">
		<div class="container">
			<div class="wlcome-grids">
				<div class="col-md-7 wlcome-grid-left">
					<h3>illum dolorem fugiat</h3>
					<p class="nihil">Nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur</p>
					<div class="wlcome-grid-left-grid">
						<div class="col-xs-4 wlcome-grid-left-grid">
							<img src="images/2.png" alt=" " class="img-responsive" />
						</div>
						<div class="col-xs-8 wlcome-grid-left-grid">
							<h4>vel illum qui dolorem eum fugiat</h4>
							<p>Quis autem vel eum iure reprehenderit qui in ea voluptate 
								velit esse quam nihil molestiae consequatur, vel illum qui dolorem 
								eum fugiat quo voluptas nulla pariatur.</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="wlcome-grid-left-grid">
						<div class="col-xs-8 wlcome-grid-left-grid">
							<h4>vel illum qui dolorem eum fugiat</h4>
							<p>Quis autem vel eum iure reprehenderit qui in ea voluptate 
								velit esse quam nihil molestiae consequatur, vel illum qui dolorem 
								eum fugiat quo voluptas nulla pariatur.</p>
						</div>
						<div class="col-xs-4 wlcome-grid-left-grid fgh">
							<img src="images/3.png" alt=" " class="img-responsive" />
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="col-md-5 wlcome-grid-right">
					<div class="sap_tabs">	
						<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
							  <ul class="resp-tabs-list">
								  <li class="resp-tab-item grid1" aria-controls="tab_item-0" role="tab"><span>Popular</span></li>
								  <li class="resp-tab-item grid2" aria-controls="tab_item-1" role="tab"><span>Recent</span></li>
								  <div class="clear"></div>
							  </ul>				  	 
								<div class="resp-tabs-container">
									<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
										<div class="facts">
										  <div class="tab_list">
											<img src="images/1.jpg" alt=" " class="img-responsive" />
										  </div>
										  <div class="tab_list1">
											<a href="#">excepturi sint occaecati</a>
											<p>June 30,2015 <span>Nam libero tempore, cum soluta nobis.</span></p>
										  </div>
										  <div class="clearfix"> </div>
										</div>
										<div class="facts">
										   <div class="tab_list">
												<img src="images/2.jpg" alt=" " class="img-responsive" />
										  </div>
										  <div class="tab_list1">
											<a href="#">excepturi sint occaecati</a>
											<p>June 30,2015<span>Nam libero tempore, cum soluta nobis.</span></p>
										  </div>
										  <div class="clearfix"> </div>
										</div>
										<div class="facts">
										   <div class="tab_list">
												<img src="images/3.jpg" alt=" " class="img-responsive" />
										  </div>
										  <div class="tab_list1">
											<a href="#">excepturi sint occaecati</a>
											<p>June 30,2015<span>Nam libero tempore, cum soluta nobis.</span></p>
										  </div>
										  <div class="clearfix"> </div>
										</div>
									</div>
									<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
										<div class="facts">
										  <div class="tab_list">
												<img src="images/4.jpg" alt=" " class="img-responsive" />
										  </div>
										  <div class="tab_list1">
											<a href="#">excepturi sint occaecati</a>
											<p>June 30,2015<span>Nam libero tempore, cum soluta nobis.</span></p>
										  </div>
										  <div class="clearfix"> </div>
										</div>
										<div class="facts">
										   <div class="tab_list">
												<img src="images/1.jpg" alt=" " class="img-responsive" />
										  </div>
										  <div class="tab_list1">
											<a href="#">excepturi sint occaecati</a>
											<p>June 30,2015<span>Nam libero tempore, cum soluta nobis.</span></p>
										  </div>
										  <div class="clearfix"> </div>
										</div>
										<div class="facts">
										   <div class="tab_list">
												<img src="images/2.jpg" alt=" " class="img-responsive" />
										  </div>
										  <div class="tab_list1">
											<a href="#">excepturi sint occaecati</a>
											<p>June 30,2015<span>Nam libero tempore, cum soluta nobis.</span></p>
										  </div>
										  <div class="clearfix"> </div>
										</div>
									</div>
								</div>
							 <script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
								<script type="text/javascript">
									$(document).ready(function () {
										$('#horizontalTab').easyResponsiveTabs({
											type: 'default', //Types: default, vertical, accordion           
											width: 'auto', //auto or any width like 600px
											fit: true   // 100% fit in a container
										});
									});
								   </script>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
 //wlcome 
 welcome-bottom 
	<div class="welcome-bottom">
		<div class="container">
			<h3>What We do</h3>
			<p class="nihil nih">Nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur</p>
			<div class="welcome-bottom-grids">
				<div class="col-md-3 welcome-bottom-grid">
					<div class="welcome-bottom-grd">
						<span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
					</div>
					<p>Duis aute irure dolor in reprehenderit in voluptate velit 
						esse cillum dolore eu fugiat nulla pariatur. Excepteur sint 
						occaecat cupidatat non proident.</p>
					<div class="more">
						<a href="#" class="hvr-bounce-to-bottom">Learn More</a>
					</div>
				</div>
				<div class="col-md-3 welcome-bottom-grid">
					<div class="welcome-bottom-grd">
						<span class="glyphicon glyphicon-screenshot" aria-hidden="true"></span>
					</div>
					<p>Duis aute irure dolor in reprehenderit in voluptate velit 
						esse cillum dolore eu fugiat nulla pariatur. Excepteur sint 
						occaecat cupidatat non proident.</p>
					<div class="more">
						<a href="#" class="hvr-bounce-to-bottom">Learn More</a>
					</div>
				</div>
				<div class="col-md-3 welcome-bottom-grid">
					<div class="welcome-bottom-grd">
						<span class="glyphicon glyphicon-wrench" aria-hidden="true"></span>
					</div>
					<p>Duis aute irure dolor in reprehenderit in voluptate velit 
						esse cillum dolore eu fugiat nulla pariatur. Excepteur sint 
						occaecat cupidatat non proident.</p>
					<div class="more">
						<a href="#" class="hvr-bounce-to-bottom">Learn More</a>
					</div>
				</div>
				<div class="col-md-3 welcome-bottom-grid">
					<div class="welcome-bottom-grd">
						<span class="glyphicon glyphicon-filter" aria-hidden="true"></span>
					</div>
					<p>Duis aute irure dolor in reprehenderit in voluptate velit 
						esse cillum dolore eu fugiat nulla pariatur. Excepteur sint 
						occaecat cupidatat non proident.</p>
					<div class="more">
						<a href="#" class="hvr-bounce-to-bottom">Learn More</a>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
 //welcome-bottom 
 video 
	<div class="video">
		<div class="container">
			<div class="video-grid">
				<div class="col-md-8 video-grid-left">
					<iframe src="https://player.vimeo.com/video/56358638" width="500" height="212" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
				</div>
				<div class="col-md-4 video-grid-left">
					<h3>voluptate velit 
						esse cillum dolore eu fugiat nulla pariatur</h3>
					<p>Duis aute irure dolor in reprehenderit in voluptate velit 
						esse cillum dolore eu fugiat nulla pariatur. Excepteur sint 
						occaecat cupidatat non proident.</p>
					<div class="more m1">
						<a href="#" class="hvr-bounce-to-bottom">See Video</a>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
-->
@endsection