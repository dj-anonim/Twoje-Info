<?php

session_start();

session_unset();

$_SESSION['zakodowane'] = base64_decode($_SESSION['zakodowane']);

header("Location: ./index.php?pages=index");
?>