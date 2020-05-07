<?php
include "./includes/viewpaste.inc.php";
?>

<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Paste</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css" />
    <link rel="stylesheet" href="css/viewpaste.css" />
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.2.8/ace.js"></script>
    <style type="text/css">
        #jsEditor {
            height: 500px;
        }
    </style>
</head>

<body>
    <div class="all-content">
        <div class="header">
            <nav>
                <ul class="nav_links">
                    <li><a href="home.php"> Home</a></li>
                    <li><a href="instructiePagina.html">Instructie pagina</a></li>
                    <li><a href="about.php"> About</a></li>
                </ul>
            </nav>
            <img class="logo" src="img/PasteBit_logo.png" alt="#PasteBit" width="10%" height="10%">
        </div>
        <?php if ($resultCheck > 0) { ?>
            <div class="paste">
                <div class="title">
                    <h3> Paste title: <?php echo $pasteTitle; ?></h3>
                </div>
                <div class="syntax">
                    <h4>Syntax: <?php echo $syntax; ?></h4>
                </div>
                <div id="jsEditor">
                    <p><?php echo $paste; ?></p>
                </div>
                <script src="js/editor.js"></script>
            </div>
        <?php } ?>
        <div>
            <p>
                <?php
                if (isset($errorMssge)) {
                    echo $errorMssge;
                } ?>
            </p>
        </div>
</body>

</html>