<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My website</title>
    <link rel="stylesheet" href="./assets/style.css"
</head>
<body>
<ul>
  <li><a class="active" href="#home">Home</a></li>
  <li><a href="#profile">Profile</a></li>
  <li><a href="#setting">Settings</a></li>
  <li><a href="./php/logout.php">Logout</a></li>
</ul>

<div style="margin-left:25%;padding:1px 16px;height:1000px;">
  <h2>ZURI-PHP</h2>
  <h3>Welcome to Zuri Authentication with PHP
  <?php session_start();
      if($_SESSION || isset($_SESSION['username'])){
      echo $_SESSION['username'];
     }
     ?>
  </h3>
  
</div>
</body>
</html>