<div class="logo" id="logo">
    <a href="#menu" uk-scroll><img src="images/logo.png"></a>
</div>
<div class="desc">
    <p class="desc">kliknij logo, aby przejść dalej</p>
</div>
<div class="menu" id="menu">
    <ul>
            <li><a class="uk-link-reset" href="./index.php?page=home">Home</a></li>
            <li><a class="uk-link-reset" href="./index.php?page=newsy">Newsy</a></li>
            <li><a class="uk-link-reset" href="./index.php?page=login">Konto</a></li>
            <li><a class="uk-link-reset" href="./index.php?page=sport">Sport</a></li>
            <li><a class="uk-link-reset" href="./index.php?page=muzyka">Muzyka</a></li>
    </ul>
</div>

<a class="uk-link-reset" uk-scroll href="#gallery"><h1 class="timeline" id="timeline"> Na czasie </h1></a>

<div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slideshow id="gallery">

    <ul class="uk-slideshow-items">
        <li>
            <img src="images/1.jpg" alt="Katastrofa lotnicza w Etiopii" uk-cover>
        </li>
        <li>
            <img src="images/2.png" alt="Barcelona - Liverpool" uk-cover>
        </li>
        <li>
            <img src="images/3.jpg" alt="Tornado w Polsce" uk-cover>
        </li>
    </ul>

    <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
    <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>

</div>

<div>
<button uk-totop uk-scroll class="uk-button uk-button-secondary uk-width-1-1"></button><button class="demo uk-button uk-button-default, uk-position-top-right" type="button" onclick="UIkit.notification({message: 'Created by Jakub Stawski IIIDTI'})">Twórca</button></div>
</div>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.1.5/css/uikit.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.1.5/js/uikit.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.1.5/js/uikit-icons.min.js"></script>
