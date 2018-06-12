<?php
if(isset($_POST["submit"])){
    $error = [];
    if(isset($_POST["name"]) && strlen($_POST["name"])===0){
        $error[] = "Vous n'avez pas mis votre nom";
    }
    if(isset($_POST["email"]) && strlen($_POST["email"])===0){
        $error[] = "Vous n'avez pas mis votre email";
    }
    if(isset($_POST["message"]) && strlen($_POST["message"])===0){
        $error[] = "Vous n'avez pas mis de message";
    }

    if(sizeof($error)===0){
        header('location:envoye.html');
    }
}
?>



<!DOCTYPE html>
<html lang="en" class="no-js">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Contact | Charlotte Toussaint's portefolio</title>
        <meta name="description" content="Charlotte Toussaint portefolio">
        <meta name="keywords" content="portefolio, web, design, webdesign">
        <meta name="author" content="Charlotte Toussaint">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

        <link rel="stylesheet" href="../assets/css/bundle.css">
    </head>
    <body>
        <!--[if lte IE 9]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->
        <header class="blocheader bloccontact__header">
            <div class="blocheader__flex flex">
                <div class="flex__logo">
                    <a href="../index.html" class="flex__logo__link link" title="Go to the main page">
                        <h1 class="hidden">
                            Charlotte Toussaint's portefolio
                        </h1>
                        <img src="../assets/images/logo.svg" alt="Portefolio Charlotte Toussaint home" class="link__logo">
                    </a>
                </div>
                <button id="buttonjs" class="bloccontact__menu__desk">
                    <span class="hidden">Ouvrir/fermer le menu</span>
                </button>
                <input id="burger" type="checkbox"/>
                <label for="burger" class="burgercss">
                    <span class="hidden">Ouvrir/fermer le menu</span>
                    <span></span>
                    <span></span>
                    <span></span>
                </label>
                <nav class="blocheader__menu">
                    <h2 class="hidden">Principle navigation</h2>
                    <ul class="blocheader__menu__list menu list">
                        <li class="menu__items">
                            <a href="../index.html" class="menu__items__link bloccontact__menu__link" title="Go to the page 'About Charlotte Toussaint'">About</a>
                        </li>
                        <li class="menu__items contact">
                            <a href="work.html" class="menu__items__link bloccontact__menu__link" title="Go to the page 'Works of Charlotte Toussaint'">Works</a>
                        </li>
                        <li class="menu__items">
                            <a href="#" class="menu__items__link bloccontact__menu__link active" title="Go to the page 'Contact information of Charlotte Toussaint'">Contact</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </header>
        <main>
            <section class="bloccontact__info">
                <h1 class="contact__title">
                   Contact
                </h1>
                <div class="bloccontact__picture">
                    <img src="../assets/images/phone.png" alt="An old telephone with a long thread that goes beyond the picture" width="3215" height="899" class="bloccontact__picture__img">
                </div>
                <div class="contact__div">
                    <div class="bloccontact__content">
                        <h2 class="bloccontact__title1">
                            Contact information
                        </h2>
                        <div itemscope itemtype="http://schema.org/Person" class="bloccontact__info__content content">
                            <p itemprop="name" class="content--name info">Charlotte Toussaint</p>
                            <meta itemprop="jobTitle" content="webdesigner">
                            <meta itemprop="birthDate" content="16/07/1994">
                            <meta itemprop="gender" content="female">
                            <img src="../assets/images/charlotte_toussaint.jpg" alt="Charlotte Toussaint" class="meta" itemprop="image">
                            <div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
                                <meta itemprop="addressLocality" content="Luxembourg">
                            </div>
                            <p itemprop="email" class="content--email info">charlotte_toussaint@hotmail.com</p>
                            <p itemprop="telephone" class="content--number info">+32 (0)491 313 576</p>
                        </div>
                        <div class="bloccontact__network">
                            <a href="https://www.facebook.com/charlotte.toussaint" class="bloccontact__network__link--facebook social" title="Go to the Facebook account of Charlotte Toussaint">
                                <span class="fab fa-facebook-square">
                                    <span class="hidden">Facebook de Charlotte Toussaint</span>
                                </span>
                            </a>
                            <a href="https://www.instagram.com/chat_mallo/" class="bloccontact__network__link--instagram social" title="Go to the Instagram account of Charlotte Toussaint">
                                <span class="fab fa-instagram">
                                    <span class="hidden">Instagram de Charlotte Toussaint</span>
                                </span>
                            </a>
                            <a href="https://www.linkedin.com/in/charlotte-toussaint-1b8572a9/" class="bloccontact__network__link--linkedin social" title="Go to the LinkedIn account of Charlotte Toussaint">
                                <span class="fab fa-linkedin">
                                    <span class="hidden">LinkedIn de Charlotte Toussaint</span>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="bloccontact__form border">
                        <div class="errors">
                            <?php if(isset($error) && sizeof($error)>0): ?>
                                <ul>
                                    <?php foreach($error as $e): ?>
                                        <li>
                                            <p>
                                                <i class="fas fa-exclamation"></i>
                                                <?= $e ?>
                                            </p>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            <?php endif; ?>
                        </div>
                        <form action="#" method="post" class="bloccontact__form">
                            <div class="bloccontact__form__flex">
                                <label for="name" class="bloccontact__form--labelname label">Nom</label>
                                <input type="text" id="name" name="name" value="<?= @$_POST['name']?>" class="bloccontact__form--inputname input">
                            </div>
                            <div class="bloccontact__form__flex">
                                <label for="email" class="bloccontact__form--labelemail label">Email</label>
                                <input type="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" id="email" value="<?= @$_POST['email']?>" class="bloccontact__form--inputemail input">
                            </div>
                            <div class="bloccontact__form__flex">
                                <label for="message" class="bloccontact__form--labelmessage label">Message</label>
                                <textarea name="message" id="message" cols="30" rows="10" class="bloccontact__form--textarea"><?= @$_POST['message']?></textarea>
                            </div>
                            <input type="submit" name="submit" value="Send" class="bloccontact__form--inputsubmit">
                        </form>
                    </div>
                </div>
            </section>
            <div class="bloccontact__blockquote">
               <blockquote class="bloccontact__blockquote__item">
                   I love
                   <span
                       class="txt-rotate"
                       data-period="2000"
                       data-rotate='[ "working.", "designing.", "coding."]'>
                   </span>
               </blockquote>
            </div>
        </main>
        <footer class="blocfooter">
            <div class="blocfooter__logo">
                <img src="../assets/images/logo.svg" alt="Charlotte Toussaint portefolio's logo" class="blocfooter__logo__img">
                <div class="bloccontact__copyright">
                    <small>© All rights reserved - Charlotte Toussaint</small>
                </div>
            </div>
        </footer>
        <script src="../assets/js/jquery.js"></script>
        <script src="../assets/js/bundle.js"></script>
    </body>
    </html>