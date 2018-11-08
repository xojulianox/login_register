<?php include 'components/session-check-index.php' ?>
<?php require '_database/database.php'; ?>
<?php include 'controllers/base/head.php' ?>
<body>	
    <script type="text/javascript"> 
        ChangeIt();
    </script>
<?php include 'controllers/navigation/index-before-login-navigation.php' ?>
     
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" media="screen" href="p.css" />
</head>
<body>

<div class="container">

    <form method="post" action="login.php">
    <div class="row">

        <div class="col-xs-2 form-group">
            <label for="email">Email adress:</label>
            <input type="email" class="form-control" id="email">
        </div>

        <div class="col-xs-2 form-group">
            <label for ="pwd">Password:</label>
            <input type ="password" class="form-control" id="pwd">
        </div>

        <div class="col-xs-2 form-group media media-middle">
                <button type="button" id="logbut"class="btn btn-primary">Login</button>
            </div>

        <div class="col-xs-2 media media-bottom register">
            <a href="#">Register!</a>
        </div></div>
        <div></div>

        <div class="registerContainer">
        	<?php include 'controllers/form/registration-form.php' ?>
                    </div>
                </li>

            </ul>
        </form>
        </div>

    </form>
</div>






















    <script src="p.js"></script>
</body>
</html>

