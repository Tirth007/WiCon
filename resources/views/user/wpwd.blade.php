<!DOCTYPE html>
<html>
    <head>
	
        <title>incorrect Password</title>
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	
        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                color: red;
                display: table;
                font-weight: 500;
                font-family: 'Lato', sans-serif;
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 54px;
                margin-bottom: 40px;
            }
        </style>
		<script src='js/app.js'></script>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">Incorrect Password or Previous Login</div>
            </div><br />
            <button class="btn btn-primary " style="float:center;font-size:48px" onclick="redirector('/abc')">Go Back</button>
            @if(session('pwd'))
            <button class="btn btn-primary " style="float:center;font-size:48px" onclick="redirector('/end-session')">Logout</button>
            @endif
        </div>
    </body>
</html>
