<?php
    $mysqli = mysqli_connect("localhost", "root", "", "Poczta");

    $polaczenie=$mysqli;

    $rezultat=mysqli_connect_errno($mysqli);

    if ($rezultat)
        echo "Nie można się połączyć z serwerem poczty: " . mysqli_connect_error();
?>
