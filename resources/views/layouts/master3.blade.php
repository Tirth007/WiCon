<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>@yield('title')</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Delicacies Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style_responsive.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script src="js/jquery-1.11.1.min.js"></script>
<!-- //js -->
<!-- FlexSlider -->
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
<script defer src="js/jquery.flexslider.js"></script>
<script type="text/javascript" src="js/app.js"></script>
<script type="text/javascript">
						$(window).load(function(){
						  $('.flexslider').flexslider({
							animation: "slide",
							start: function(slider){
							  $('body').removeClass('loading');
							}
						  });
						});
					  </script>
<!-- //FlexSlider -->
<link href='//fonts.googleapis.com/css?family=Play:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Quicksand:400,300,700' rel='stylesheet' type='text/css'>
</head>
	
<body>
<!-- banner -->
	<div class="banner">
		<div class="container">
			<div class="header-nav">
				<nav class="navbar navbar-default">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
					  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					  </button>
						<div class="logo">
							<a class="navbar-brand" href="/home">Delicacies <span>The Best Cake Bakery</span></a>
						</div>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav">
							<li class="hvr-bounce-to-bottom"><a href="/home">Home</a></li>
					<!--		<li class="hvr-bounce-to-bottom"><a href="/about">About</a></li>  -->
							<li class="hvr-bounce-to-bottom"><a href="/menu">Menu</a></li>
							<li class="hvr-bounce-to-bottom"><a href="/abc">Cart</a></li>
							<li class="hvr-bounce-to-bottom"><a href="/myorder">MyOrder</a></li>
				<!--		Login Registration and Logout	
							<li class="hvr-bounce-to-bottom">
								@if(Auth::check()) 
								 <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
								@else
								<a href="/login">Login/Register</a>
								@endif
							</li>   -->        

						</ul>
					</div><!-- /.navbar-collapse -->	
				</nav>
			</div>
		</div>	
	</div>		

	@yield('content')
	

	<div class="footer">
		<div class="container">				 	
			<div class="col-md-2 ftr_navi ftr">
				<h3>Navigation</h3>
				<ul>
					<li><a href="/home">Home</a></li>
					<li><a href="/menu">menu</a></li>						
			<!--		<li><a href="/about">About</a></li>  -->
					<li><a href="/abc">Cart</a></li>
					<li><a href="/myorder">MyOrder</a></li>
				</ul>
			</div>
			<div class="col-md-3 ftr_navi ftr">
					 <h3>Developers</h3>
					 <ul>
						 <li><a href="#">Dhaval Bhensdadiya</a></li>
						 <li><a href="#">Ashish Chocha </a></li>
						 <li><a href="#">Tirth Doshi </a></li>						
						 <li><a href="#">Mihir Trivedi</a></li>
					 </ul>
			</div>
			<div class="col-md-3 get_in_touch ftr">
				<h3>Get In Touch</h3>
				<a href="www.wicon.co.in">www.wicon.co.in</a>
			</div>
			<div class="col-md-4 ftr-logo">
				<a href="index.html"><h3>Source Code </h3></a>
				
				<p><a href="https://github.com/Dhaval117/Lara53">WiCon GitHub Repository</a></p>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //banner -->
<!-- banner-bottom -->
	
<!--footer-->
<!-- for bootstrap working -->
		<script src="js/bootstrap.js"> </script>
		<script type="text/javascript">
		$(document).on('click','.cartadd',function(){
		//alert($(this).name);
			$.ajax({
				type: 'post',
				url: '/cart-add',
				data: {
					'_token': $('input[name=_token]').val(),
					'id': $(this).data('id'),
					'name': $(this).data('name'),
					'price': $(this).data('price'),
				},
				success: function(data){
					$('#myModal').modal('show');
				}
			});
		}); 	

		$('.table').on('change','.itemqty',function(){
			//alert('cache');
			if( $(this).val() <= 10){
				$.ajax({
					cache: 'false',
					type: 'post',
					data: {
						'_token': $('input[name=_token]').val(),
						'id': $(this).data('id'),
						'rowid': $(this).data('rowid'),
						'qty': $(this).val(),
						'price': $(this).data('price'),	
					},
					dataType: 'json',
					url: '/cart-updater',
					success: function(data){
					
					//alert($('#cart-total').text());
						$('.item'+data.id).find('.itemcost').html(data.itemtotal);
						$('#cart-subtotal').html(data.subtotal);
						$('#cart-tax').html(data.tax);
						$('#cart-total').html(data.total);
					}
				});
			}
		});

		$('.table').on('click','.removeitem',function(){
			//alert('cache');
			$.ajax({
				cache: 'false',
				type: 'post',
				data: {
					'_token': $('input[name=_token]').val(),
					'id': $(this).data('id'),
					'rowid': $(this).data('rowid'),
					'qty': '0',	
					'msg': 'remove',
				},
				dataType: 'json',
				url: '/cart-updater',
				success: function(data){
				
				//alert($('#cart-total').text());
					$('.item'+data.id).hide();
					$('#cart-subtotal').html(data.subtotal);
					$('#cart-tax').html(data.tax);
					$('#cart-total').html(data.total);
				}
			});
		});
		</script>
<!-- //for bootstrap working -->
</body>
</html>