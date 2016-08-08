<!DOCTYPE html>

<html>

    <head>
        

       
        <link href="/css/bootstrap.min.css" rel="stylesheet"/>

        <link href="/css/styles.css" rel="stylesheet"/>

        <?php if (isset($title)): ?>
            <title>Gather| <?= htmlspecialchars($title) ?></title>
        <?php else: ?>
            <title>Gather</title>
        <?php endif ?>

        
        <script src="/js/jquery-1.11.3.min.js"></script>

        
        <script src="/js/bootstrap.min.js"></script>

        <script src="/js/scripts.js"></script>

    </head>

    <body>

        <div class="container">

            <div id="top">
                <div>
                    <a href="/"><img alt="C$50 Finance" src="/img/gather1.jpg"/></a>
                </div>
                <?php if (!empty($_SESSION["id"])): ?>
                    <ul class="nav nav-pills">
                        <li><a href="organise.php"><i><strong>Organise An Event</strong></i></a></li>
                        <li><a href="change.php">Change Interests</a></li>
                        <li><a href="history.php">History</a></li>
                        <li><a href="about.php">About Us</a></li>
                        <li><a href="changepassword.php">Change Password</a></li>
                        <li><a href="logout.php"><strong>Log Out</strong></a></li>
                        
                    </ul>
                <?php endif ?>
            </div>

            <div id="middle">
