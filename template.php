<!DOCTYPE html>
<html lang="en">
<head>
 <title>Template for an interactive web page</title>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 <!-- Bootstrap CSS File -->
 <link rel="stylesheet"
 href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.cs"
 integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4"
 crossorigin="anonymous">
 <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="container" style="margin-top:30px">
<!-- Header Section #1-->
<header class="jumbotron text-center row"
style="margin-bottom:2px; background:linear-gradient(white, #0073e6);padding:20px;">
 <?php include('header.php'); ?>
</header>
<!-- Body Section #2-->
 <div class="row" style="padding-left: 0px;">
<!-- Left-side Column Menu Section -->
 <nav class="col-sm-2">
 <ul class="nav nav-pills flex-column">
 <?php include('nav.php'); ?>
 </ul>
 </nav>
<!-- Center Column slider Section -->
 <div class="slider">
  <?php include('slide.php');?>
  
 </div>
<!-- Footer Content Section #4-->
 <?php include('footer.php'); ?>
</footer>
</div>
</body>
</html>