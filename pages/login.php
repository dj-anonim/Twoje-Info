<?php
    session_start();

    if((isset($_SESSION['Zalogowany']))&&($_SESSION['Zalogowany']==true))
    {
        header("Location: ./index.php?page=messeges");
        exit();
    }
?>
  

<div class="show-login-btn"><i class="fas fa-sign-in-alt"></i>
   Zaloguj się do poczty
</div>

<div class="login-box">
   <div class="hide-login-btn">&times;</div>
   <form class="login-form" action="./services/auth.php" method="post">
       <h1>Witaj!</h1>
       <input class="txtb" type="text" name="login" placeholder="Login">
       <input class="txtb" type="password" name="psswd" placeholder="Hasło">
       <button class="login-btn" type="submit">Zaloguj</button>
   </form>

   <div class="reg"><button><a style="text-decoration: none; color: black" href="./index.php?page=register">Rejestracja - załóż konto!</a></button></div> 

   <script type="text/javascript">
       $(".show-login-btn").on("click", function() {
           $(".login-box").toggleClass("showed");
       });
       
       $(".hide-login-btn").on("click", function() {
           $(".login-box").toggleClass("showed");
       });

   </script>

</div>
