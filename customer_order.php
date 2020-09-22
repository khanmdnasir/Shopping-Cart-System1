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
                        <h1>Customer Order Details</h1>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                <img src="product_images/camera.jpg" class="img-thumbnail" style="float:right" alt="">
                            </div>
                            <div class="col-md-6">
                                    <table>
                                        <tr><td>Product Name:</td><td><b>Sony Camera</b></td></tr>
                                        <tr><td>Product Price:</td><td></b>$500</b></td></tr>
                                        <tr><td>Quantity:</td><td><b>3</b></td></tr>
                                        <tr><td>Payment:</td><td><b>Completed</b></td></tr>
                                        <tr><td>Transaction Id:</td><td><b>RTSH415SDF344</b></td></tr>
                                    </table>
                            </div>
                        </div>
                    </div>
                    <div class="panel-footer"></div>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
</body>
</html>