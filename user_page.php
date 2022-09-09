<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>user page</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="form.css">

</head>
<body class="bg1">
   
<div class="container">

   <div class="content">
      <h3>hi, <span><?php echo $_SESSION['user_name'] ?></span></h3>
      <h1>Welcome to</h1>
      <h1 style="color:rgb(250, 52, 2);">GoodBites</h1>
      <a href="index.html" class="btn">Get Started</a>
   </div>
</div>

</body>
</html>