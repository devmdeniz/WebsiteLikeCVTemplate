<?php

?>
<head>

<?php
    if($_SESSION["darkmode"] == "true") {
       echo '<link rel = "stylesheet" href="css/darkmode.css">';
    } else {
        echo '<link rel="stylesheet" href="css/style.css">';
    }

    ?>

<title>Hello World</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="theme/main.js"></script>
</head>