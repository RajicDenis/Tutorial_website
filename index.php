<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href='https://fonts.googleapis.com/css?family=Fira+Sans:400,400italic' rel='stylesheet' type='text/css'>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" >
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">


    <?php include ("assets/css/style.php"); ?>
    <?php include ("assets/js/main.php"); ?>

</head>

<body>
    <div class="body-wrapper">

        <div class="header">

            <div class="logo"><img src="images/logo.svg"/></div>

            <div class="navigation"><?php include('site-vars/header.php');?></div>

            <a class="mail-link" href="#">E-mail me</a>

        </div>

        <div class="sections">

            <?php include('site-vars/section-about.php'); ?>

            <?php include('site-vars/section-youtube.php'); ?>

            <?php include('site-vars/section-mentoring.php'); ?>

            <?php include('site-vars/section-articles.php'); ?>

            <?php include('site-vars/section-vine.php'); ?>

            <?php include('site-vars/section-design.php'); ?>

            <?php include('site-vars/section-subscribe.php'); ?>

            <?php include('site-vars/section-podcast.php'); ?>

            <div class="footer">
                <a class="home-footer" href="#">travisneilson@gmail.com</a>
            </div>

        </div>

    </div>

</body>

</html>