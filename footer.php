<?php
    if($_SERVER['REQUEST_METHOD']=='GET' && realpath(__FILE__) == realpath($_SERVER['SCRIPT_FILENAME'])){

        die(header('location:index.php'));

    }
    echo '
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-5 mt-5 footer-left">
                    <span class="logo">Perfection</span>
                    <br>
                    <ul class="footer-ul">
                        <li>
                            <a href="">Home</a>
                        </li>
                        <li>
                            <a href="">Blog</a>
                        </li>
                        <li>
                            <a href="">Delivery & Returns</a>
                        </li>
                        <li>
                            <a href="">FAQs</a>
                        </li>
                        <li>
                            <a href="">About</a>
                        </li>
                        <li>
                            <a href="">Contact</a>
                        </li>
                    </ul>
                    <br>

                    <p class="copy">Perfection &copy; 2019 | All rights reserved.</p>

                    <br><br>
                </div>

                <div class="col-lg-3 footer-center mt-5">
                    <div class="mt-2">
                        <i class="fa fa-map-marker"></i>
                        <b class="footer-b"> Mazar Road, Mirpur 1<br>&nbsp&nbsp&nbsp&nbsp&nbsp Dhaka, Bangladesh</b>
                    </div>
                    <br>
                    <div>
                        <i class="fa fa-phone"></i>
                        <b class="footer-b">+880 123456</b>
                    </div>
                    <br>
                    <div>
                        <i class="fa fa-envelope"></i>
                        <b class="footer-b"><a href="mailto:perfection.bd@gmail.com">perfection.bd@gmail.com</a></b>
                    </div>
                </div>
                <div class="col-lg-4 mt-5 footer-right">
                    <p class="about"><a href="aboutus.php">About Us<a></p>
                    <p class="details"></p>
                    <div class="footer-icons">
                        <i class="fab fa-facebook"></i>
                        <i class="fab fa-twitter"></i>
                        <i class="fab fa-linkedin"></i>
                        <i class="fab fa-instagram"></i>
                    </div>
                    <br>
                </div>
            </div>
        </div>
    </footer>';
    ?>
