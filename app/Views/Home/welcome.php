<?= $this->extend("layouts/default") ?>
<?= $this->section("title") ?>
Home
<?= $this->endSection()?>

<?= $this->section("css") ?>

<?php include "./CSS/reset.css" ?>
<?php include "./CSS/indexstyle.css" ?>
<?= $this->endSection()?>


<?= $this->section("content") ?>
    <main>
        <!--Today deal-->

        <section id="intro-pic">
            <img src="images/home/todayOffer1.jpg" alt="Buy Now">
        </section>


        <!--Categories of items that customer can shop-->
        <h3>WHAT YOU CAN SHOP</h3>
        <section id="shop-categories">
            <div>
                <img src="images/home/sunglasses.jpg" alt="sunglasses" id="sunglass"><br><br><br>
                <p id="caption">Sunglasses</p><br>
                <p id="sub-caption">Browse Colorful Sunglasses</p><br>
                <div>
                    <a href="product.php">Shop Now</a>
                </div>
            </div>

            <div>
                <img src="images/home/eyeglasses.jpg" alt="eyeglasses" id="eyeglass"><br><br><br>
                <p id="caption">eyeglasses</p><br>
                <p id="sub-caption">Browse Galsses for Vision</p><br>
                <div>
                    <a href="eyewear.php">Shop Now</a>
                </div>
            </div>

            <div>
                <img src="images/home/fashion.jpg" alt="fashion glasses" id="fashion"><br><br><br>
                <p id="caption">Fashion</p><br>
                <p id="sub-caption">Browse Extra Colorful Vibe Glasses</p><br>
                <div>
                    <a href="product.php">Shop Now</a>
                </div>
            </div>

            <div>
                <img src="images/home/contactlenses.jpg" alt="contactlenses" id="contact"><br><br><br>
                <p id="caption">Contact Lenses</p><br>
                <p id="sub-caption">Shop Colorful Lenses</p><br>
                <div>
                    <a href="contact_lens.php">Shop Now</a>
                </div>
            </div>
        </section>

        <!--Information about popular designs-->
        <h3>POPULAR DESIGNS</h3><br><br>
        <section id="popular-designs">
            <div>
                <img src="images/home/aviator.jpg" alt="Aviator" id="aviator">
                <br><br>
                <p>
                    <a href="product.php">AVIATOR</a>
                </p>
            </div>

            <div>
                <img src="images/home/sqaure.jpg" alt="square" id="square">
                <br><br>
                <p>
                    <a href="product.php">SQUARE</a>
                </p>
            </div>

            <div>
                <img src="images/home/cateye.jpg" alt="cat eye" id="cateye">
                <br><br>
                <p>
                    <a href="eyewear.php">CAT EYE</a>
                </p>
            </div>
        </section>

        <!--Information about our website and what we offer-->
        <section id="aboutUs">
            <div>
                <img src="images/home/aboutus.jpg" alt="about us">
            </div>
            <div>
                <h3>Who we are</h3><br>
                <p>With a large number of people facing eye disorders. Our clear focus on providing a better vision to
                    millions with high-quality eye-wear at very affordable prices along with giving free eye checkups
                    and reaching a large part of the people in need. <br>
                    <br> Our endeavor is to enhance your vision clarity and make it easy for you to see the vivid shades
                    of the world. LET YOUR EYES TWINKLE!!!
                </p><br>
                <h3>Our Mission</h3><br>
                <p>
                    Keeping in mind the cause, our mission is to make a difference on the whole by providing vision
                    access to the underprivileged and beautifying lives. <br>
                    <br> We aim to become a unique identity in the industry by communicating our ideology of delivering
                    high quality eye-wear products to people without having them worry about their pockets.
                </p>
            </div>
        </section>
        <br><br>

        <!--sub navigation information-->
        <section id="sub-navigation">
            <div>
                <img src="https://img.icons8.com/ios/50/000000/phonelink-ring.png" />
                <p>TOLL FREE NUMBER</p><br>
                <a href="">1800-200-200 (9 AM- 9 PM Eastern Standard Time)</a>
            </div>

            <div>
                <img src="https://img.icons8.com/ios/50/000000/new-message.png" />
                <p>EMAIL</p><br>
                <a href="">support@shoplenses.com</a>
            </div>

            <div>
                <img src="https://img.icons8.com/ios/50/000000/complaint.png" />
                <p>COMPLAINTS</p><br>
                <a href="contactus.html">Register any complaint</a>
            </div>
        </section>
        <br><br>

        <!--information about our brands-->
        <h3>OUR BRANDS</h3><br><br>
        <img src="images/home/ourbrand.jpg" alt="Brand image" id="our-brand"><br><br><br><br>
        <section id="our-brands">
            <img src="images/home/dolcegabbana.jpg" alt="Dolce Gabbana" id="dc">
            <img src="images/home/versace" alt="versace" id="versace">
            <img src="images/home/gucci.png" alt="">
            <img src="images/home/oakley.png" alt="">
            <img src="images/home/tomford.png" alt="">
            <img src="images/home/rayban.png" alt="">
        </section>
        <br><br>
        <!--layout the sebscribe section where user can subscribe to our website-->
        <section id="subscribe">
            <div>
                <img src="https://img.icons8.com/clouds/100/000000/cloud-mail.png" />
                <p>Subscribe For Exciting Deals and Offers </p>
            </div>

            <div>
                <form action="index.html" name="Subscribe-form">
                    <input type="email" placeholder="Email" id="email-subscribe" required>
                    <input type="submit" value="Subscribe" id="submit-email" onclick="subscribe()">
                </form>
            </div>
            <script src="javascript/homejs.js"></script>
        </section>

        <p id="confirmation">
        </p>
    </main>
<?= $this->endSection()?>
