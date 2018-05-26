<!DOCTYPE html>
<html>
    <head>
	
    <title>No Orders</title>
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
                <div class="title">You have not ordered anything</div>
            </div><br />
            <button class="btn btn-primary btn-lg" style="float:center; font-size:48px" onclick="redirector('/menu')">Go Back</button>
        </div>
    </body>
</html>
