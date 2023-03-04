<?php
session_start();
if (!isset($_SESSION["USER_ID"]) && $_SESSION["USER_ID"] == '') {
  header("Location: ../login.php");
}


$ini_array = parse_ini_file("../php.ini");

if ($ini_array["PROD_MOD"] == true) {
  ini_set("error_reporting", "~E_NOTICE");
}

require_once "includes/db.inc.php";

require_once "includes/functions.inc.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>PHP BLOG : <?php echo $PAGE_TITLE ?>
  </title>

  <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,600,700,700i,800&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.css">
  <script src="https://kit.fontawesome.com/07c04c5cdb.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../css/style.css">

</head>

<body>
  <?php require_once "navbar.inc.php";
