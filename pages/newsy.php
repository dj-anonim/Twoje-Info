<div class="logo" id="logo">
    <a href="#menu" uk-scroll><img src="images/logo.png"></a>
</div>
<div class="desc">
    <p class="desc">kliknij logo, aby przejść do newsów</p>
</div>
<div class="menu" id="menu">
    <ul>
        <center>
            <li><a class="uk-link-reset" href="./index.php?page=home">Home</a></li>
            <li><a class="uk-link-reset" href="./index.php?page=newsy">Newsy</a></li>
            <li><a class="uk-link-reset" href="./index.php?page=login">Konto</a></li>
            <li><a class="uk-link-reset" href="./index.php?page=sport">Sport</a></li>
            <li><a class="uk-link-reset" href="./index.php?page=muzyka">Muzyka</a></li>
        </center>
    </ul>
</div>

<div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slideshow="animation: push">

    <ul class="uk-slideshow-items">
        <li>
            <img src="images/4.jpg" alt="Roksana Węgiel" uk-cover>
            <div class="uk-position-center uk-position-small uk-text-center">
                <h2 uk-slideshow-parallax="x: 100,-100">Roksana Węgiel</h2>
                <p uk-slideshow-parallax="x: 200,-200">Kim jest nastolatka, która wygrała eurowizję?</p>
            </div>
        </li>
        <li>
            <img src="images/5.jpg" alt="Dorota Wellman" uk-cover>
            <div class="uk-position-center uk-position-small uk-text-center">
                <h2 uk-slideshow-parallax="x: 100,-100">Dorota Wellman</h2>
                <p uk-slideshow-parallax="x: 200,-200">"Nie chce słyszeć, że jestem puszysta!"</p>
            </div>
        </li>
        <li>
            <img src="images/6.jpg" alt="" uk-cover>
            <div class="uk-position-center uk-position-small uk-text-center">
                <h2 uk-slideshow-parallax="y: -50,0,0; opacity: 1,1,0">Kryzys w Wenezueli!</h2>
                <p uk-slideshow-parallax="y: 50,0,0; opacity: 1,1,0">Wenezuelski rząd i opozycja będą rozmawiać w Norwegii.</p>
            </div>
        </li>
    </ul>

    <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
    <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>

</div>

<button uk-totop uk-scroll class="uk-button uk-button-secondary uk-width-1-1"></button>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.1.5/css/uikit.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.1.5/js/uikit.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.1.5/js/uikit-icons.min.js"></script>