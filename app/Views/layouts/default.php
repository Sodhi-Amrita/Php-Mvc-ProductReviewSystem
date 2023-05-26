
<!DOCTYPE html>
<html lang="en">

<head>
    <title> <?= $this->renderSection("title") ?></title>
    <meta charset="UTF-8">
    <meta name="author" content="Amrita">
    <meta name="keywords" content="HTML, CSS, Homepage design">
    <meta name="descriptiosn" content="This is the homepage of shopLenses wesite.">
    <meta name="viewport" content="width=device-width initial-scale=0.1">
    
    <style>
        
        <?= $this->renderSection("css") ?>
        
    </style>

    <link rel="shortcut icon" href="images/home/favicon.ico">
</head>

<body>
    <header>
        <img src="images/home/logo3.png" alt="Logo">
        <h3>Sodhi & Sons</h3>
        
        <nav>
            <ul id="navigation">
                <li><a>AK</a></li>
                <li><a href="/CI4/public/">HOME</a></li>
                <li><a href="/CI4/public/Product/index">SUNGLASSES</a></li>
                <li><a href="/CI4/public/Eye/index">EYEGLASSES</a></li>
                <li><a href="contact_lens.php">LENSES</a></li>
                <li><a href="appointment.php">BOOK APPOINTMENT</a></li>
                <li><a href="contactus.php">CONTACT US</a></li>
                <li><a href="logout.php">LOGOUT</a></li>
                
            </ul>
            <ul id="icons">
                <li>
                    <a href=""><img src="https://img.icons8.com/ultraviolet/50/000000/like--v1.png" /></a>
                </li>

                <li>
                    <a href=""><img src="https://img.icons8.com/ultraviolet/50/000000/add-to-collection--v1.png" /></a>
                </li>
            </ul>
        </nav>
    </header>

    <?= $this->renderSection("content") ?>
     <!--information about the footer section of the page-->
     <footer>
        <div id="social-media">
            <a href="https://www.facebook.com/login.php/" target="_blank">
                <img src="https://img.icons8.com/glyph-neue/64/000000/facebook.png" />
            </a>

            <a href="https://www.instagram.com/accounts/login/" target="_blank">
                <img src="https://img.icons8.com/glyph-neue/64/000000/instagram-new.png" />
            </a>

            <a href="https://twitter.com/i/flow/login" target="_blank">
                <img src="https://img.icons8.com/ios-filled/50/000000/twitter.png" />
            </a>
        </div>
        <div id="footer-navigation">
            <ul>SUNGLASSES
                <li><a href="sunglasses.html">Sunglasses for men</a></li>
                <li><a href="sunglasses.html">Sunglasses for women</a></li>
                <li><a href="sunglasses.html">Sunglasses for children</a></li>
                <li><a href="sunglasses.html">Sunglasses for beach</a></li>
            </ul>

            <ul>EYEGLASSES
                <li><a href="eyewear.html">Style for men</a></li>
                <li><a href="eyewear.html">Style for women</a></li>
                <li><a href="eyewear.html">Style for children</a></li>
                <li><a href="eyewear.html">Lightweight Styles</a></li>
            </ul>

            <ul>LENSES
                <li><a href="contact_lens.html">Contact Lenses</a></li>
                <li><a href="contact_lens.html">Color Lenses</a></li>
                <li><a href="contact_lens.html">Trending Lenses</a></li>
            </ul>

            <ul>TRENDING STYLES
                <li><a href="sunglasses.html">Aviator</a></li>
                <li><a href="sunglasses.html">Square</a></li>
                <li><a href="sunglasses.html">Cat Eye</a></li>
                <li><a href="sunglasses.html">Lightweight</a></li>
            </ul>

            <ul>INFORMATION
                <li><a href="contactus.html">Feedback</a></li>
                <li><a href="contactus.html">Complaint</a></li>
                <li><a href="">Track Order</a></li>
                <li><a href="">Student Discount</a></li>
            </ul>
        </div>

        <section id="rest-info">
            <div>
                <img src="images/home/mastercard.jpg" alt="master card">
                <img src="images/home/visa.jpg" alt="Visa">
                <img src="images/home/americanxpress.png" alt="america express">
                <br>
                <p>PAYMENT PARTNERS</p>
            </div>

            <div>
                <img src="images/home/dhl" alt="DHL">
                <img src="images/home/fedex.jpg" alt="FedEx">
                <br>
                <p>DELIVERY PARTNERS</p>
            </div>

            <div>
                <br>
                <a href="">Privacy Policy</a> |
                <a href="">Terms and Consitions of Use</a>
            </div>

        </section>
    </footer>

</body>

</html>