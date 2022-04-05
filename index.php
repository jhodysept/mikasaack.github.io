<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title>Mikasa Ackerman</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="icon" type="image/png" href="icon/smartphone.ico"/>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

<?php include "menu.php"; ?>

<?php
if($_GET["p"]=="profil"){
  include "profil.php";
}
else if($_GET["p"]=="photos"){
  include "photos.php";
}
else if($_GET["p"]=="about"){
  include "about.php";
}
else{
  include "home.php";
}
?>
</body>
</html>