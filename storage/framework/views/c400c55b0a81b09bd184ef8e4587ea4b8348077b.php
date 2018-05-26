<!DOCTYPE html>
<html>

<head>
<title><?php echo $__env->yieldContent('title'); ?></title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!--Styles-->
<link href="css/style_responsive.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- Scripts-->
<script src="js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="js/app.js"></script>
</head>

<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">WICON</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li class="hvr-bounce-to-bottom"><a href="/snacks" style="color:white">Snacks</a></li>
        <li class="hvr-bounce-to-bottom"><a href="/pizza" style="color:white">Pizza</a></li>
        <li class="hvr-bounce-to-bottom"><a href="/chinese" style="color:white">Chinese</a></li>
		<li class="hvr-bounce-to-bottom"><a href="/abc" style="color:white">Cart</a></li>
		<li class="hvr-bounce-to-bottom"><a href="/myorder" style="color:white">MyOrder</a></li>
		<li class="hvr-bounce-to-bottom"><a href="/play" style="color:white">Game</a></li>
	<!--	<?php if(session('pwd')): ?>
		<li class="hvr-bounce-to-bottom"><a href="/end-session" style="color:white">Logout</a></li>
		<?php endif; ?>  -->
      </ul>
    </div>
  </div>
</nav>


<?php echo $__env->yieldContent('content'); ?>

<div class="footer">
		<div class="container">				 	
		<!--<div class="col-md-2 ftr_navi ftr">
				<h3>Navigation</h3>
				<ul>
					<li><a href="/snacks" style="color:white">Snacks</a></li>
        			<li><a href="/pizza" style="color:white">Pizza</a></li>
        			<li><a href="/chinese" style="color:white">Chinese</a></li>
					<li><a href="/abc" style="color:white">Cart</a></li>
					<li><a href="/myorder" style="color:white">MyOrder</a></li>
					<li><a href="/play" style="color:white">Game</a></li>
				</ul>
			</div> -->
			<div class="col-md-4 ftr_navi ftr">
					 <h3>Developers</h3>
					 <ul>
						 <li><a href="#">Dhaval Bhensdadiya</a></li>
						 <li><a href="#">Ashish Chocha </a></li>
						 <li><a href="#">Tirth Doshi </a></li>						
						 <li><a href="#">Mihir Trivedi</a></li>
					 </ul>
			</div>
			<div class="col-md-4 get_in_touch ftr">
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

