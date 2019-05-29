<?php
    session_start();

    if((!isset($_POST['login']))||(!isset($_POST['psswd'])))
    {
        header("Location: ../index.php?pages=index");
        exit();
    }

    require_once('./database.php'); 

    $login = $_POST["login"];
    $psswd = $_POST["psswd"];

    $res = mysqli_query($mysqli, "SELECT * from users where BINARY login='$login' and BINARY pwd='$psswd'");
    $num = mysqli_num_rows($res);
    
    if ($num)
    {
        $_SESSION['Zalogowany'] = true; 
        $_SESSION['login'] = $login;
        header("Location: ../index.php?page=messeges");
    }
        else
    {
        header("Location: ../index.php?page=login2");
    }
            
    // TODO Zrobić sesje jako zabezpieczenie do podstrony messeges
    // TODO Wyświetlanie jeżeli użytkownik podał złe dane logowanie
?>
