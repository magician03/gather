<!DOCTYPE html>

<html>
    
    <head>
        
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css" rel="stylesheet"/>
        <link rel='shortcut icon' href='favicon.ico' type='image/x-icon' >
        <link href="/css/styles.css" rel="stylesheet"/>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <?php if (isset($title)): ?>
            <title>Gather| <?= htmlspecialchars($title) ?></title>
        <?php else: ?>    
            <title>Gather</title>
        <?php endif ?>
        
         <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.js"></script>
         <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js"></script>
        
        <script src="https://use.fontawesome.com/6a1a10264f.js"></script>

        <script src="/js/scripts.js"></script>

    </head>

    <body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.7";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script> 
  
  
        

            
               
                
                <?php if (!empty($_SESSION["id"])): ?>
           <nav>
    <div class="nav-wrapper  red lighten-1">
      <a href="#!" class="brand-logo">Gather</a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li><a class="waves-effect" href="organise.php"><em>Organise An Event</em></a></li>
        <li><a class="waves-effect" href="change.php">Change Interests</a></li>
        <li><a class="waves-effect" href="history.php">History</a></li>
        <li><a class="waves-effect" href="about.php">About Us</a></li>
        <li><a class="waves-effect" href="changepassword.php">Change Password</a></li>
        <li><a class="waves-effect" href="logout.php"><strong>Log Out</strong></a></li>
      </ul>
      <ul class="side-nav" id="mobile-demo">
        <li><a class="waves-effect" href="organise.php"><em>Organise An Event</em></a></li>
        <li><a class="waves-effect" href="change.php">Change Interests</a></li>
        <li><a class="waves-effect" href="history.php">History</a></li>
        <li><a class="waves-effect" href="about.php">About Us</a></li>
        <li><a class="waves-effect" href="changepassword.php">Change Password</a></li>
        <li><a class="waves-effect" href="logout.php"><strong>Log Out</strong></a></li>
      </ul>
    </div>
  </nav>
  
                <?php endif ?>
         

            
            
