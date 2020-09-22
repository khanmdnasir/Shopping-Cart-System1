<?php
    session_start();
    if(!isset($_SESSION['uid'])){
        header('location:index.php');
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart System</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="main.js"></script>
    <style>
        tr{ padding:10px;}
    </style>
</head>
<body>
    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <a  class="navbar-brand">Sonar Bangla Store</a>
            </div>
            <ul class="nav navbar-nav">
                <li><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
                <li><a href=""><span class="glyphicon glyphicon-modal-window"></span> Product</a></li>
            </ul>
        </div>
    </div>
    <br><br><br>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="panel panel-default">
                    <div class="panel-heading"></div>
                    <div class="panel-body">
                        <h1>ThankYou</h1>
                        <hr>
                        <p>Hello <?php echo $_SESSION["name"]; ?>,Your payment process is successfully completed and your Transaction id is xxxxx-xx-x-x <br>You can continue your Shopping<br></p>
                        <a href="index.php" class="btn btn-success btn-lg">Continue Shopping</a>
                    </div>
                    <div class="panel-footer"></div>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
</body>
</html>