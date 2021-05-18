<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Omnifood is a premium food delivery service with the mission to bring affordable and healthy meals to as many as possible">

        <link rel="stylesheet" type="text/css" href="vendors/css/normalize.css">
        <link rel="stylesheet" type="text/css" href="vendors/css/grid.css">
        <link rel="stylesheet" type="text/css" href="resources/css/styles.css">
        <link rel="stylesheet" type="text/css" href="resources/css/queries.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;1,300&display=swap" rel="stylesheet">
        <script type="module" src="https://unpkg.com/ionicons@5.4.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule="" src="https://unpkg.com/ionicons@5.4.0/dist/ionicons/ionicons.js"></script>
        <title>Omnifood</title>


        <link rel="apple-touch-icon" sizes="180x180" href="/resources/favicons/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/resources/favicons/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/resources/favicons/favicon-16x16.png">
        <link rel="manifest" href="/resources/favicons/site.webmanifest">
        <link rel="mask-icon" href="/resources/favicons/safari-pinned-tab.svg" color="#5bbad5">
        <link rel="shortcut icon" href="/resources/favicons/favicon.ico">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="msapplication-config" content="/resources/favicons/browserconfig.xml">
        <meta name="theme-color" content="#ffffff">

    </head>
    <body>
        <header>
            <nav>
                <div class="row">
                    <a href="#">
                    <img src="resources/img/logo.png" alt="Omni Food logo" class="logo-black">
                    <img src="resources/img/logo-white.png" alt="Omni Food logo" class="logo">
                    </a>
                    <ul class="main-nav js--main-nav">
                        <li><a href="#features">Food delivery</a></li>
                        <li><a href="#working">How it works</a></li>
                        <li><a href="#location">Our cities</a></li>
                        <li><a href="sign-up-page.html">Sign up</a></li>
                    </ul>
                    <a class="mobile-nav-icon js--nav-icon"><ion-icon name="menu"></ion-icon></a>
                    <a class="mobile-nav-icon js--nav-icon"><ion-icon name="close" class="hide"></ion-icon></a>
                </div>
            </nav>
            <div class="hero-text-box">
                <h1>Goodbye junk food.<br> Hello super healthy meals.</h1>
                <a class="btn btn-full js--scroll-to-plans" href="#">I’m hungry</a>
                <a class="btn btn-ghost js--scroll-to-start" href="#">Show me more</a>

            </div>

        </header>

        <section class="section-features js--section-features" id="features">
            <div class="row">
                <h2>Get food fast &mdash; not fast food</h2>
                <p class="long-copy">
                    Hello, we're Omnifood, your new premium food delivery service. We know you're always busy. No
                    time for cooking. So let us take care of that, we're really good at it, we promise!
                </p>
            </div>

            <div class="row">
                <div class="col span-1-of-4 box">
                    <ion-icon name="infinite-outline" class="icon-big"></ion-icon>
                    <h3>Up to 365 days/year</h3>
                    <p>
                        Never cook again! We really mean that. Our subscription plans include up to 365 days/year coverage. You can
                        also choose to order more flexibly if that's your style.
                    </p>
                </div>
                <div class="col span-1-of-4 box">
                    <ion-icon name="stopwatch-outline" class="icon-big"></ion-icon>
                    <h3>Ready in 20 minutes</h3>
                    <p>
                        You're only twenty minutes away from your delicious and super healthy meals delivered right to your home. We 
                        work with the best chefs in each town to ensure that you're 100% happy.
                    </p>
                </div>
                <div class="col span-1-of-4 box">
                    <ion-icon name="nutrition-outline" class="icon-big"></ion-icon>
                    <h3>100% organic</h3>
                    <p>
                        All our vegetables are fresh, organic and local. Animals are raised without added hormones or antibiotics. Good 
                        for your health, the environment, and it also tastes better!
                    </p>
                </div>
                <div class="col span-1-of-4 box">
                    <ion-icon name="cart-outline" class="icon-big"></ion-icon>
                    <h3>Order anything</h3>
                    <p>
                        We don't limit your creativity, which means you can order whatever you feel like. You can also choose from our
                        menu containing over 100 delicious meals. It's up to you!
                    </p>
                </div>
            </div>
        </section>

        <section class="section-meals" style="text-align: center; font-weight: 300; text-transform: uppercase; font-size: 180%; word-spacing: 2px; letter-spacing: 1px; "> Want to know what food these pictures are? Click them!
            <ul class="meals-showcase clearfix">
                <li>
                    <figure class="meal-photo">
                        <a href="https://en.wikipedia.org/wiki/Bibimbap" target="_blank"><img src="resources/img/1.jpg" alt="Korean bibimbap with egg and vegetables"></a>
                    </figure>
                </li>
                <li>
                    <figure class="meal-photo">
                        <a href="https://en.wikipedia.org/wiki/Pizza" target="_blank"><img src="resources/img/2.jpg" alt="Simple italian pizza with cherry tomatoes"></a>
                    </figure>
                </li>
                <li>
                    <figure class="meal-photo">
                        <a href="https://en.wikipedia.org/wiki/Chicken_as_food" target="_blank"><img src="resources/img/3.jpg" alt="Chicken breast steak with vegetables "></a>
                    </figure>
                </li>
                <li>
                    <figure class="meal-photo">
                        <a href="https://food52.com/recipes/1386-autumn-pumpkin-soup" target="_blank"><img src="resources/img/4.jpg" alt="Autumn pumpkin soup"></a>
                    </figure>
                </li>
            </ul>
            <ul class="meals-showcase clearfix">
                <li>
                    <figure class="meal-photo">
                        <a href="https://paleoflourish.com/paleo-steak-recipes" target="_blank"><img src="resources/img/5.jpg" alt="Paleo beef steak with vegetables"></a>
                    </figure>
                </li>
                <li>
                    <figure class="meal-photo">
                        <a href="https://en.wikipedia.org/wiki/Baguette" target="_blank"><img src="resources/img/6.jpg" alt="Healthy baguette with egg and vegetables"></a>
                    </figure>
                </li>
                <li>
                    <figure class="meal-photo">
                        <a href="https://en.wikipedia.org/wiki/Hamburger" target="_blank"><img src="resources/img/7.jpg" alt="Burger with cheddar and bacon"></a>
                    </figure>
                </li>
                <li>
                    <figure class="meal-photo">
                        <a href="https://en.wikipedia.org/wiki/Granola" target="_blank"><img src="resources/img/8.jpg" alt="Granola with cherries and strawberries"></a>
                    </figure>
                </li>
            </ul>
        </section>

        <section class="section-steps" id="working">
            <div class="row">
                <h2>How it works &mdash; Simple as 1, 2, 3</h2>
            </div>
            <div class="row">
                <div class="col span-1-of-2 steps-box">
                    <img src="resources/img/app-iPhone.png" alt="Omnifood app on iPhone" class="app-screen">
                </div>
                <div class="col span-1-of-2 steps-box">
                    <div class="works-step">
                        <div>1</div>
                        <p>Choose the subscription plan that best fits your needs and sign up today.</p>
                    </div>
                    <div class="works-step">
                        <div>2</div>
                        <p>Order your delicious meal using our mobile app or website. Or you can even call us!</p>
                    </div>
                    <div class="works-step">
                        <div>3</div>
                        <p>Enjoy your meal after less than 20 minutes. See you the next time!</p>
                    </div>

                    <a href="#" class="btn-app"><img src="resources/img/download-app.svg" alt="App Store Button"></a>
                    <a href="#" class="btn-app"><img src="resources/img/download-app-android.png" alt="Play Store Button"></a>
                </div>
            </div>
        </section>

        <section class="section-cities" id="location">
            <div class="row">
                <h2>We're currently in these cities</h2>
            </div>
            <div class="row">
                <div class="col span-1-of-4 box">
                    <img src="resources/img/lisbon-3.jpg" alt="Lisbon">
                    <h3>Lisbon</h3>
                    <div class="city-feature">
                        <ion-icon name="person-outline" class="icon-small"></ion-icon>
                        1600+ happy eaters
                    </div>
                    <div class="city-feature">
                        <ion-icon name="star" class="icon-small"></ion-icon>
                        60+ top chefs
                    </div>
                    <div class="city-feature">
                        <ion-icon name="logo-twitter" class="icon-small"></ion-icon>
                        <a href="#">omnifood_lx</a>
                    </div>
                </div>
                <div class="col span-1-of-4 box">
                    <img src="resources/img/san-francisco.jpg" alt="San Francisco">
                    <h3>San Francisco</h3>
                    <div class="city-feature">
                        <ion-icon name="person-outline" class="icon-small"></ion-icon>
                        3700+ happy eaters
                    </div>
                    <div class="city-feature">
                        <ion-icon name="star" class="icon-small"></ion-icon>
                        160+ top chefs
                    </div>
                    <div class="city-feature">
                        <ion-icon name="logo-twitter" class="icon-small"></ion-icon>
                        <a href="#">omnifood_sf</a>
                    </div>
                </div>
                <div class="col span-1-of-4 box">
                    <img src="resources/img/berlin.jpg" alt="Berlin">
                    <h3>Berlin</h3>
                    <div class="city-feature">
                        <ion-icon name="person-outline" class="icon-small"></ion-icon>
                        2300+ happy eaters
                    </div>
                    <div class="city-feature">
                        <ion-icon name="star" class="icon-small"></ion-icon>
                        110+ top chefs
                    </div>
                    <div class="city-feature">
                        <ion-icon name="logo-twitter" class="icon-small"></ion-icon>
                        <a href="#">omnifood_berlin</a>
                    </div>
                </div>
                <div class="col span-1-of-4 box">
                    <img src="resources/img/london.jpg" alt="London">
                    <h3>London</h3>
                    <div class="city-feature">
                        <ion-icon name="person-outline" class="icon-small"></ion-icon>
                        1200+ happy eaters
                    </div>
                    <div class="city-feature">
                        <ion-icon name="star" class="icon-small"></ion-icon>
                        50+ top chefs
                    </div>
                    <div class="city-feature">
                        <ion-icon name="logo-twitter" class="icon-small"></ion-icon>
                        <a href="#">omnifood_london</a>
                    </div>
                </div>
                </div>
            
        </section>
        <section class="section-testimonials">
            <div class="row">
                <h2>Our customers can't live without us</h2>
            </div>
            <div class="row">
                <div class="col span-1-of-3">
                    <blockquote>
                        Omnifood is just awesome! I just launched a startup which leaves me with no time for cooking,
                        so Omnifood is a life-saver. Now that I got used to it, I couldn't live without my daily 
                        meals!
                    <cite><img src="resources/img/customer-1.jpg" alt="picture of customer1">Alberto Duncan</cite>
                    </blockquote>
                </div>
                <div class="col span-1-of-3">
                    <blockquote>
                        Inexpensive, healthy and great-tasting meals, delivered right to my home. We have lots of 
                        food delivery here in Lisbon, but no one comes even close to Omifood. Me and my family are 
                        so in love!
                    <cite><img src="resources/img/customer-2.jpg" alt="picture of customer2">Joana Silva</cite>
                    </blockquote>
                </div>
                <div class="col span-1-of-3">
                    <blockquote>
                        I was looking for a quick and easy food delivery service in San Franciso. I tried a lot of 
                        them and ended up with Omnifood. Best food delivery service in the Bay Area. Keep up the 
                        great work! 
                    <cite><img src="resources/img/customer-3.jpg" alt="picture of customer3">Milton Chapman</cite>
                    </blockquote>
                </div>
            </div>
        </section>

        <section class="section-plans js--section-plans" id="sign-up">
            <div class="row">
                <h2>Start eating healthy today</h2>
            </div>
            <div class="row">
                <div class="col span-1-of-3">
                    <div class="plan-box">
                        <div>
                            <h3>Premium</h3>
                            <p class="plan-price">$399 <span>/ month</span></p>
                            <p class="plan-price-meal">That’s only 13.30$ per meal</p>
                        </div>
                        <div>
                            <ul>
                                <li><ion-icon name="checkmark-outline" class="icon-small"></ion-icon>1 meal every day</li>
                                <li><ion-icon name="checkmark-outline" class="icon-small"></ion-icon>Order 24/7</li>
                                <li><ion-icon name="checkmark-outline" class="icon-small"></ion-icon>Access to newest creations</li>
                                <li><ion-icon name="checkmark-outline" class="icon-small"></ion-icon>Free delivery</li>
                            </ul>
                        </div>
                        <div>
                            <a href="#" class="btn btn-full js--scroll-to-sign-up">Sign up now</a>
                        </div>
                    </div>
                </div>
                <div class="col span-1-of-3">
                    <div class="plan-box">
                        <div>
                            <h3>Pro</h3>
                            <p class="plan-price">149$ <span>/ month</span></p>
                            <p class="plan-price-meal">That’s only 14.90$ per meal</p>
                        </div>
                        <div>
                            <ul>
                                <li><ion-icon name="checkmark-outline" class="icon-small"></ion-icon>1 meal 10 days/month</li>
                                <li><ion-icon name="checkmark-outline" class="icon-small"></ion-icon>Order 24/7</li>
                                <li><ion-icon name="checkmark-outline" class="icon-small"></ion-icon>Access to newest creations</li>
                                <li><ion-icon name="checkmark-outline" class="icon-small"></ion-icon>Free delivery</li>
                            </ul>
                        </div>
                        <div>
                            <a href="#" class="btn btn-ghost js--scroll-to-sign-up">Sign up now</a>
                        </div>
                    </div>
                </div>
                <div class="col span-1-of-3">
                    <div class="plan-box">
                        <div>
                            <h3>Starter</h3>
                            <p class="plan-price">$19 <span>/ meal</span></p>
                            <p class="plan-price-meal">&nbsp;</p>
                        </div>
                        <div>
                            <ul>
                                <li><ion-icon name="checkmark-outline" class="icon-small"></ion-icon>1 meal</li>
                                <li><ion-icon name="checkmark-outline" class="icon-small"></ion-icon>Order from 8am to 12pm</li>
                                <li><ion-icon name="close-outline" class="icon-small"></ion-icon></li>
                                <li><ion-icon name="checkmark-outline" class="icon-small"></ion-icon>Free delivery</li>
                            </ul>
                        </div>
                        <div>
                            <a href="#" class="btn btn-ghost js--scroll-to-sign-up">Sign up now</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-form" id="form">
            <div class="row">
                <h2>We're happy to hear from you</h2>
            </div>

            <div class="row">
                <form method="POST" action="mailer.php" class="contact-form">

                    <div class="row">

                        <?php
                        if($_GET['success'] == 1) {
                            echo "<div class=\"form-messages success\"> Thank you! Your message has been sent </div>";
                        }
                        
                        if($_GET['success'] == -1) {
                            echo "<div class=\"form-messages error\"> Oops! Something went wrong, please try again </div>";
                        }
                        ?>
                    </div>

                    <div class="row">

                        <div class="col span-1-of-3">
                            <label for="name">Name</label>
                        </div>
                        <div class="col span-2-of-3">
                            <input type="text" name="name" id="name" placeholder="Type your name here" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label for="email">Email</label>
                        </div>
                        <div class="col span-2-of-3">
                            <input type="email" name="name" id="email" placeholder="Type your email here" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label for="find-us">How did you find us?</label>
                        </div>
                        <div class="col span-2-of-3">
                            <select name="find-us" id="find-us">
                                <option value="-" disabled selected>Choose from the menu...</option>
                                <option value="From friends">From friends</option>
                                <option value="Search Engine">From the search engine</option>
                                <option value="ad">Through an advertisment</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label>Drop us a line</label>
                        </div>
                        <div class="col span-2-of-3">
                            <textarea name="message" placeholder="Want to convey something to us?"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="bottom-right">
                            <input type="checkbox" name="news" id="news" checked>
                            <label for="news">Newsletter?</label>
                        </div>
                        <div class="col span-2-of-3">
                            <input type="submit" value="Click to send">
                        </div>  
                    </div>
                </form>
            </div>
        </section>

        <footer>
            <div class="row">
                <div class="col span-1-of-2">
                    <ul class="footer-nav">
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Press</a></li>
                        <li><a href="#">iOS App</a></li>
                        <li><a href="#">Android App</a></li>
                    </ul>
                </div>
                <div class=" col span-1-of-2">
                    <ul class="social-links">
                        <li><a href="#"><ion-icon name="logo-facebook" class="facebook"></ion-icon></a></li>
                        <li><a href="#"><ion-icon name="logo-twitter" class="twitter"></ion-icon></a></li>
                        <li><a href="#"><ion-icon name="logo-discord" class="discord"></ion-icon></a></li>
                        <li><a href="#"><ion-icon name="logo-instagram" class="instagram"></ion-icon></a></li>
                        
                    </ul>
                </div>
            </div>
            <div class="row">
                <p>
                    Copyright &copy; 2015 by Omnifood. All rights reserved
                </p>
            </div>
        </footer>



    <script src="https://cdn.jsdelivr.net/npm/respond.js@1.4.2/dest/respond.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/html5shiv@3.7.3/dist/html5shiv.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/selectivizr@1.0.3/selectivizr.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="resources/js/script.js"></script>
    <script src="vendors/js/jquery.waypoints.min.js"></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-197355212-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-197355212-1');
</script>

    </body>

</html>
