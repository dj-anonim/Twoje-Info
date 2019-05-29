<div class="up-panel">
<?php
   
    session_start();
    
    if(!isset($_SESSION['Zalogowany']))
    {
        header("Location: ./index.php?pages=login2");
        exit();
    }

    echo "Witaj ".$_SESSION['login']."!"." |";
    echo date('d.m.Y', filemtime($_SERVER['SCRIPT_FILENAME']))."r."." |";
?>
    <a class="uk-link-reset" href="./index.php?pages=panel">Wejdź do panelu</a>
</div>


<div class="nav">
    <div class="logo">
        <a href="./index.php?pages=index"><img src="./images/logo.png" alt="Twoje Info" style="height: 70px;"></a>
    </div>
    <div class="logout">
        <ul>
            <li>
                <a href="./index.php?page=logout"><i class="fas fa-sign-out-alt"></i></a>
            </li>
        </ul>
    </div>
</div>

<div class="messege">
<div class="uk-child-width-1-3@m uk-grid-small uk-grid-match" uk-grid>
    <div>
        <div class="uk-card uk-card-default uk-card-body">
            <h3 class="uk-card-title">Witaj</h3>
            <p>Pomyślnie zalogowałeś się do swojego konta! Możesz teraz bez problemu sprawdzić wiadomość, bądź przejść do panelu kontrolnego.
            </p>
        </div>
    </div>
    <div>
        <div class="uk-card uk-card-primary uk-card-body">
            <h3 class="uk-card-title">Przejśćie do panelu</h3>
            <p>Aby przejść do panelu kontrolnego użyj przycisku u góry strony <br>"Wejdź do panelu"</p>
        </div>
    </div>
    <div>
        <div class="uk-card uk-card-secondary uk-card-body">
            <h3 class="uk-card-title">Wyjście</h3>
            <p>Aby wyjść ze strony swojego konta wystarczy kliknąć logo strony.
            Jeśli chcesz się całkowicie wylogować nacisnij ikonkę w prawym górnym rogu.</p>
        </div>
    </div>
</div>
</div>

<div  class="msg2">
<div class="uk-child-width-1-2@s" uk-grid>
    <div>
        <div uk-grid>
            <div class="uk-width-auto@m">
                <ul class="uk-tab-left" uk-tab="connect: #component-tab-left; animation: uk-animation-fade">
                    <li><a href="#">Wiadomość1</a></li>
                    <li><a href="#">Wiadomość2</a></li>
                    <li><a href="#">Wiadomość3</a></li>
                </ul>
            </div>
            <div class="uk-width-expand@m">
                <ul id="component-tab-left" class="uk-switcher">
                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
                    <li>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                    <li>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur, sed do eiusmod.</li>
                </ul>
            </div>
        </div>
    </div>
    <div>
        <div uk-grid>
            <div class="uk-width-auto@m uk-flex-last@m">
                <ul class="uk-tab-right" uk-tab="connect: #component-tab-right; animation: uk-animation-fade">
                    <li><a href="#">Wiadomość4</a></li>
                    <li><a href="#">Wiadomość5</a></li>
                    <li><a href="#">Wiadomość6</a></li>
                </ul>
            </div>
            <div class="uk-width-expand@m">
                <ul id="component-tab-right" class="uk-switcher">
                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
                    <li>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                    <li>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur, sed do eiusmod.</li>
                </ul>
            </div>
        </div>
    </div>
</div>
</div>
<div class="gallery" id="gallery">
    <a href="images/1.jpg" data-lightbox="mygallery" data-title="Katastrofa lotnicza w Etiopii">
        <img src="images/1-small.jpg">
    </a>
    <a href="images/2.png" data-lightbox="mygallery" data-title="Barcelona odpada z Liverpoolem w półfinale Ligi Mistrzów">
        <img src="images/2-small.jpg">
    </a>
    <a href="images/3.jpg" data-lightbox="mygallery" data-title="Torando w Polsce. Czy to możliwe?">
        <img src="images/3-small.jpg">
    </a>
    <a href="images/4.jpg" data-lightbox="mygallery" data-title="Roksana Węgiel. Kim jest nastolatka, która wygrała Eurowizję?">
        <img src="images/4-small.jpg">
    </a>
</div>

<button uk-totop uk-scroll class="uk-button uk-button-secondary uk-width-1-1"></button>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.1.5/css/uikit.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.1.5/js/uikit.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.1.5/js/uikit-icons.min.js"></script>
