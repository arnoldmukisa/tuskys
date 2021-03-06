<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tuskys Supermarket Makerere</title>
    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Oxygen:400,300,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Lora' rel='stylesheet' type='text/css'>
  </head>
<body>
  <header>
    <nav id="header-nav" class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <a href="home.php" class="pull-left">
            <div id="logo-img" alt="Logo image"></div>
         </a>
         <div class="navbar-brand">
            <a href="home.php"><h1 class="text-center visible-lg">Store Operations Management System</h1></a>
          </div>

          <button id="navbarToggle" type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapsable-nav" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        
        <div id="collapsable-nav" class="collapse navbar-collapse">
           <ul id="nav-list" class="nav navbar-nav navbar-right">
            <li id="navHomeButton">
              <a href="home.php">
                <span class="glyphicon glyphicon-home"></span><br>Home</a>
            </li>
            <li>
              <a href="#">
                <span class="glyphicon glyphicon-question-sign"></span><br> Help</a>
            </li>
            <li id="navMenuButton">
              <a href="../includes/logout.php">
                <span class="glyphicon glyphicon-modal-window"></span><br>Log Out</a>
            </li>
          </ul><!-- #nav-list -->
        </div>
      </div><!-- .container -->
    </nav><!-- #header-nav -->
  </header>