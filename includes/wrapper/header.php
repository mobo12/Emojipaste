<?php
require_once('includes/config.php');
require_once('includes/database.php');
require_once('includes/class/read.class.php');
?>

<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php echo $config['site_description']; ?>">
    <link rel="icon" href="/assets/img/favicon.png">

    <title><?php echo $config['site_title']; ?></title>

    <link href='https://fonts.googleapis.com/css?family=Lato:400,300,700' rel='stylesheet' type='text/css'>


    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <link href="assets/css/emoji.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<nav class="navbar navbar-inverse navbar-static-top">
         <div class="container">
            <div class="navbar-header">
               <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
               <span class="sr-only">
               Toggle navigation
               </span>
               <span class="icon-bar">
               </span>
               <span class="icon-bar">
               </span>
               <span class="icon-bar">
               </span>
               </button>
               <a class="navbar-brand" href="<?php echo $config['site_url']; ?>"><div id="logo"><img src="/logo.png"></div> <span class="logo-text"><?php echo $config['site_name']; ?></span></a>
            </div>
            <div class="collapse navbar-collapse" id="navbar">
               <ul class="nav navbar-nav">
                  <li><a href="#people">People</a></li>
                  <li><a href="#nature">Nature</a></li>
                  <li><a href="#food">Food</a></li>
                  <li><a href="#sport">Sport</a></li>
                  <li><a href="#travel">Travel</a></li>
                  <li><a href="#objects">Media</a></li>
                  <li><a href="#symbols">Symbols</a></li>
               </ul>
               <form class="navbar-form navbar-right social-icons">
                  <a href="https://twitter.com/home?status=<?php echo $config['tweet_message']; ?>" class="btn btn-outline">Share on twitter</a>
</form>
</div>
</div>
</nav>
