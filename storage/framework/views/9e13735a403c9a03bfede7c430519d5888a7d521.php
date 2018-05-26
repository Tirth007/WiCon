<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
<!-- <?php echo e(config('app.name', 'Laravel')); ?> --> 
    <title><?php echo $__env->yieldContent('title'); ?></title>

    <!-- Styles -->
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link href="/css/app.css" rel="stylesheet">
    <?php echo $__env->yieldContent('styles'); ?>
    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
   
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
                        Bakery
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        <?php if(Auth::guest()): ?>
                            <li><a href="<?php echo e(url('/login')); ?>">Login</a></li>
                            <li><a href="<?php echo e(url('/register')); ?>">Register</a></li>
                        <?php else: ?>
                         <!--   <li><a href="<?php echo e(url('/base')); ?>">Base</a></li>  -->
                            <li><a href="<?php echo e(url('/bill')); ?>">Generate Bill</a></li>
                            
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                Chart <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="<?php echo e(url('/today-analysis')); ?>">
                                            Todays' Report
                                        </a>
                                        <a href="<?php echo e(url('/weekly-analysis')); ?>">
                                            Weekly Report
                                        </a>
                                        <a href="<?php echo e(url('/monthly-analysis')); ?>">
                                            Monthly Report
                                        </a>
                                        <a href="<?php echo e(url('/total-analysis')); ?>">
                                            Total Report
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                Orders <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="<?php echo e(url('/view-orders')); ?>">
                                            View Orders
                                        </a>
                                        <a href="<?php echo e(url('/export')); ?>">
                                            Export to Excel
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                Codes <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="<?php echo e(url('/view-code')); ?>">
                                            View Codes
                                        </a>
                                        <a href="<?php echo e(url('/generate-code')); ?>">
                                            Generate Codes
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                Items <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="<?php echo e(url('/insert')); ?>">
                                            Add Items
                                        </a>
                                        <a href="<?php echo e(url('/view-items')); ?>">
                                            View Items
                                        </a>
                                        <a href="<?php echo e(url('/edit-items')); ?>">
                                            Update Items
                                        </a>
                                        <a href="<?php echo e(url('/delete-items')); ?>">
                                            Delete Items
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="<?php echo e(url('/logout')); ?>"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="<?php echo e(url('/logout')); ?>" method="POST" style="display: none;">
                                            <?php echo e(csrf_field()); ?>

                                        </form>
                                    </li>
                                </ul>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </nav>

        <?php echo $__env->yieldContent('content'); ?>
    </div>

    <!-- Scripts 
     <script src="js/jquery-1.11.1.min.js"></script>-->
    <script src="/js/bootstrap.js"></script> 
    <script src="/js/app.js"></script>   
    <script src="/js/jquery-1.11.1.min.js"></script>
    <script type="text/javascript">
        $(document).on('change','.availability',function(){
        // alert('value changed');    
        if( $(this).val() >= 0){
                $.ajax({
                    cache: 'false',
                    type: 'post',
                    data: {
                        '_token': $('input[name=_token]').val(),
                        'qty': $(this).val(),
                        'msg': 'availability',  
                        'id' : $(this).data('id'),
                    },
                    dataType: 'json',
                    url: '/edit/'+$(this).data('id'),
                    success: function(data){
                       alert($('#item'+data.id).html());
                        $('#item'+data.id).html(data.quantity);
                    }
                });
            }
        });
    </script>
</body>
</html>
