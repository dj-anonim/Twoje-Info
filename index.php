<?php
    $css = '';

    if(isset($_GET['page']) && !empty($_GET['page']))
        $page = $_GET["page"];
    else
        $page = 'home';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="Stylesheet" type="text/css" href="css/login.css">
    <link rel="Stylesheet" type="text/css" href="css/lightbox.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>    
    <script type="text/javascript" src="js/lightbox-plus-jquery.min.js"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <title>Twoje Info</title>
    <style>
        <?php include("./css/".$page.".css");
        ?>

    </style>
</head>

<body>

    <?php
        include("./pages/".$page.".php");
    ?>
</body>

</html>