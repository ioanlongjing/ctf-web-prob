<?php
error_reporting(0);
session_start();
include './include/library.php';

if(isset($_SESSION['username'])){
  exit("<script>location.href='./home.php';</script>");
}

if(isset($_POST['username'], $_POST['password'])){
  login($_POST['username'], $_POST['password']);
}

?>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="./assets/style.css" type="text/css">
  <meta name="description" content="daily life of Daniel">
  <meta name="keywords" content="daily life of Daniel">
  <title>Daniel Lee</title>
</head>
<body class="text-center">
  <nav class="navbar navbar-inverse navbar-expand-md navbar-dark bg-primary">
    <div class="container">
      <a class="navbar-brand" href="home.php">daily life of Daniel</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span></button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
        <ul class="navbar-nav ">
          <li class="nav-item">
            <a class="nav-link" href="cooking.php">Cooking</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="song.php">Song</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contacts.php">Contacts</a>
          </li>
        </ul>
        <a class="btn navbar-btn btn-secondary mx-3" href="login.php">login</a>
      </div>
    </div>
  </nav>
  <div class="jumbotron jumbotron-fluid">
    <div class="container">
      <br>
      <h1 class="display-6">Login page</h1>
      <p class="lead">daily life of Daniel</p>
    </div>
  </div>
  <br>
  <div class="section">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <form role="form" method="POST" id="login_frm">
            <div class="form-group">
              <input class="form-control" placeholder="username" type="text" name="username">
            </div>
            <div class="form-group">
              <input class="form-control" placeholder="password" type="password" name="password">
            </div>
            <input type="submit" value="Submit" class="btn btn-block btn-outline-primary btn-lg" />
          </form>
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
  <script src="./assets/bootstrap-4.0.0-alpha.6.min.js"></script>
  <script src="./assets/smooth-scroll.js"></script>
</body>
</html>