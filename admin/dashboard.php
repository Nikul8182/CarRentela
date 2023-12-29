<?php
session_start();
error_reporting(0);
include('includes/config.php');
if (strlen($_SESSION['alogin']) == 0) {
    header('location:index.php');
} else {
?>
    <!doctype html>
    <html lang="en" class="no-js">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="theme-color" content="#3e454c">

        <title>Car Rental Portal | Admin Dashboard</title>

        <!-- Font awesome -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <!-- Sandstone Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!-- Bootstrap Datatables -->
        <link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
        <!-- Bootstrap social button library -->
        <link rel="stylesheet" href="css/bootstrap-social.css">
        <!-- Bootstrap select -->
        <link rel="stylesheet" href="css/bootstrap-select.css">
        <!-- Bootstrap file input -->
        <link rel="stylesheet" href="css/fileinput.min.css">
        <!-- Awesome Bootstrap checkbox -->
        <link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
        <!-- Admin Stye -->
        <link rel="stylesheet" href="css/style.css">
    </head>

    <body>
        <?php include('includes/header.php'); ?>

        <div class="ts-main-content">
            <?php include('includes/leftbar.php'); ?>
            <div class="content-wrapper">
                <div class="container-fluid">

                    <div class="row">
                        <div class="col-md-12">

                            <h2 class="page-title">Dashboard</h2>
                            <center>
                                <div class="dashbord_bg">
                                    <img width="40%" src="https://img.freepik.com/free-vector/sentiment-analysis-concept-illustration_114360-5182.jpg?w=740&t=st=1696911582~exp=1696912182~hmac=b0834ee4e7cb99bb57bb8827a3822ce1a1191a9322d3a4506f6a345cef83c51d" placeholder="Adminphoto">

                                </div>
                            </center>


                            <!-- Loading Scripts -->
                            <script src="js/jquery.min.js"></script>
                            <script src="js/bootstrap-select.min.js"></script>
                            <script src="js/bootstrap.min.js"></script>
                            <script src="js/jquery.dataTables.min.js"></script>
                            <script src="js/dataTables.bootstrap.min.js"></script>
                            <script src="js/Chart.min.js"></script>
                            <script src="js/fileinput.js"></script>
                            <script src="js/chartData.js"></script>
                            <script src="js/main.js"></script>

                        
		
	
	
    </body>

    </html>
<?php } ?>