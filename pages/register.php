<?php
    session_start();

    if(isset($_POST['email']))
    {
        //Udana walidacja? Załóżmy, że tak!
        $wszystko_OK=true;

        //poprawnosc nickname'a
        $nick=$_POST['nick'];

        //sprawdzenie dlugosci nick'a
        if((strlen($nick)<3)||(strlen($nick)>20))
        {
            $wszystko_OK=false;
            $_SESSION['e_nick']="Nick musi posiadać od 3 do 20 znaków";
        }

        if(ctype_alnum($nick)==false)
        {
            $wszystko_OK=false;
            $_SESSION['e_nick']="Nick może składać się tylko z liter i cyfr (bez polskich znaków)";
        }

        //poprawnosc adresu email
        $email=$_POST['email'];
        $emailB=filter_var($email, FILTER_SANITIZE_EMAIL);

        if((filter_var($emailB, FILTER_VALIDATE_EMAIL)==false) || ($emailB!=$email))
        {
            $wszystko_OK=false;
            $_SESSION['e_email']="Podaj poprawny adres e-mail!";
        }

        //sprawdz poprawnosc hasla

        $psswd1=$_POST['psswd1'];
        $psswd2=$_POST['psswd2'];

        if((strlen($psswd1)<8)||(strlen($psswd2)>20))
        {
            $wszystko_OK=false;
            $_SESSION['e_haslo']="Hasło musi posiadać od 8 do 20 znaków!";
        }

        if($psswd1!=$psswd2)
        {
            $wszystko_OK=false;
            $_SESSION['e_haslo']="Hasła nie są identyczne!";
        }

        // $psswd_hash = password_hash($psswd1, PASSWORD_DEFAULT);
        // echo $psswd_hash;
        
        //czy zaakceptowano regulamin?

        if(!isset($_POST['regulamin']))
        {
            $wszystko_OK=false;
            $_SESSION['e_checkbox']="Nie zaakceptowano regulaminu!";
        }

        //bot or not? oto jest pytanie

        $secret="6LcsJ6YUAAAAAJ2ngszTY0E9n3tmxSCAHIoFVuD1";

        $sprawdz=file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);

        if ($wszystko_OK==true)
        {
            //hurra, wszystko ok, dodajemy gracza do bazy
            echo "Udana walidacja!"; exit();

        }
    }
?>

    <form method="post">
        Login: <br /><input type="text" name="nick" /> <br />
        <?php
        if (isset($_SESSION['e_nick']))
        {
            echo '<div class="error">'.$_SESSION['e_nick'].'</div>';
            unset($_SESSION['e_nick']);
        }
        ?>
        E-Mail: <br /><input type="text" name="email" /> <br />
        <?php
        if (isset($_SESSION['e_email']))
        {
            echo '<div class="error">'.$_SESSION['e_email'].'</div>';
            unset($_SESSION['e_email']);
        }
        ?>
        Hasło: <br /><input type="password" name="psswd1" /> <br />
        <?php
        if (isset($_SESSION['e_haslo']))
        {
            echo '<div class="error">'.$_SESSION['e_haslo'].'</div>';
            unset($_SESSION['e_haslo']);
        }
        ?>
        Powtórz Hasło: <br /><input type="password" name="psswd2" /> <br />
        <label><input type="checkbox" name="regulamin" /> Akceptuję regulamin</label> <br />
        <?php
        if (isset($_SESSION['e_checkbox']))
        {
            echo '<div class="error">'.$_SESSION['e_checkbox'].'</div>';
            unset($_SESSION['e_checkbox']);
        }
        ?>
        <div class="g-recaptcha" data-sitekey="6LcsJ6YUAAAAAIHGMCPBezl5PApFCj8lDmOKDZS4"></div> <br />
        <input type="submit" value="Zarejestruj"> 
    </form>