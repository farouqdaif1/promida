<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Promida</title>
    <!-- Main css File -->
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/all.min.css">
    <!-- Render all Elements Normally   -->
    <link rel="stylesheet" href="css/normalize.css">
</head>
<body>
    <div class="parent">
        <!-- start header -->
        <header>
            <div class="container">
            <a class="logo" href="index.php"><img  src="images/logo.png" alt="logo"></a>
                <nav class="nav-bar">
                <i class="fas fa-bars toggle-menu"></i>
                    <div class="mob active">
                        <button type="button" class="close-btn active">
                        &times;
                        </button>
                        <ul class="ul-links active">
                            <li><a class="links" href="index.php"> Home</a></li>
                            <li><a class="links" href="pages/services.php"> Services</a></li>
                            <li><a class="links" href="pages/work.php"> Work</a></li>
                            <li><a class="links" href="pages/people.php">Our Team</a></li>
                            <li><a class="links" href="pages/about.php"> About us</a></li>
                            <li><a class="links" href="pages/reviews.php"> Reviews</a></li>
                        </ul>
                    </div>
                </nav>
            <a  class="touch" href="pages/contact.php"> Get In Touch</a>
            </div>
        </header>
        <!-- end header -->
        <!-- start Main -->
        <main>
            <!-- start LANDING -->
            <section class="landing">
                <div class="container">
                    <div class="landing-header">
                        <h1>Embrace</br> Your Legacy</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
                        <a href=""><i class="fa-solid fa-circle-play"></i> Showreel!</a>
                    </div>
                    <div class="landing-image">
                        <div class="image-div">
                            <div class="line-top"></div>
                            <img src="images/landing.png" alt="chess">
                            <div class="line-bottom"></div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END LANDING -->
            <!-- start SERVICES -->
            <section class="services">
                <div class="container">
                    <h2 class="our-services">Our Services</h2>
                    <p class="prag-services">full-service Masterly agency that provides a wide range of services in almost all aspects of marketing and advertising We are  people, relationships and the convergence of vision, focus and teamwork to deliver the best digital strategies and results your brand is looking.</p>
                    <div class="all-services">
                        <div class="card">
                            <div class="title">
                            <i class="fa-solid fa-tag"></i>                                
                                <span>01</span>
                            </div>
                            <h3>Branding & Creating full identity system</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
                        </div>
                        <div class="card">
                            <div class="title">
                                <i class="fa-solid fa-laptop-code"></i>
                                <span>02</span>
                                </div>
                                <h3>website & Mobile Apps creation & development</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
                        </div>
                        <div class="card">
                        <div class="title">
                            <i class="fa-solid fa-thumbs-up"></i>
                            <span>03</span>
                            </div>
                            <h3>Social Media Marketing</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
                        </div>
                        <div class="card">
                            <div class="title">
                            <i class="fa-solid fa-camera"></i>
                            <span>04</span>
                            </div>
                            <h3>Media production</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
                        </div>
                        <div class="card">
                            <div class="title">
                            <i class="fa-solid fa-tv"></i>
                                <span>05</span>
                                </div>
                                <h3>Media buying plane</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
                        </div>
                        <div class="card">
                            <div class="title">
                                    <i class="fa-solid fa-chart-pie"></i>                                        
                                    <span>06</span>
                                </div>
                                <h3>Creating Strategies</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END SERVICES -->
            <!-- start WORK -->
            <section class="work">
            <h1>work</h1>

            </section>
            <!-- END WORK -->
            <!-- START WORK WITH -->
            <?php include 'pages/subcode/workwith.php'?>

            <!-- END WORK WITH -->
            <!-- start CONTACT -->
            <section class="contact">
            <div class="be-with-us">
                    <div class="container">
                        <h2>We’re Sure You Have </br>
                            an Amazing Idea</h2>
                        <p>Let’s discuss how to bring it to life.</p>
                        <a class="touch" href="pages/contact.php">Contact Us</a>
                    </div>
                    <img class="layer"src="images/layer-12@2x.png" alt="layer">
                </div>
            </section>
            <!-- END CONTACT -->
        </main>
        <!-- End Main -->
        <!-- start footer -->
        <footer>
            <div class="container">
                    <a  class="logo" href="index.php"><img  src="images/logo.png" alt="logo"></a>
                    <div class="text">
                    <div> <a href="pages/faq.php">FAQ </a>  <span> | Privacy Policy</span><span> | Cookie Policy </span> </div>
                    <p class="rights">© 2022. All Rights Reserved. </p>
                    </div>
                    <ul>
                        <li><a  class="links" href="index.php"> <i class="fa-brands fa-linkedin-in"></i></a></li>
                        <li><a  class="links" href="services.php"> <i class="fa-brands fa-facebook-f"></i></a></li>
                        <li><a  class="links" href="work.php"> <i class="fa-brands fa-instagram"></i></a></li>
                        <li><a  class="links" href="people.php"> <i class="fa-brands fa-twitter"></i></a></li>
                        <li><a  class="links" href="about.php"> <i class="fa-brands fa-whatsapp"></i></a></li>
                        <li><a  class="links" href="reviews.php"> <i class="fa-brands fa-youtube"></i></a></li>
                        <li><a  class="links" href="reviews.php"> <i class="fa-brands fa-behance"></i></a></li>
                    </ul>
                </div>
        </footer>
        </div>
        <!-- start footer -->

    </div>
    <script >
        const menu = document.querySelector('.toggle-menu');
        const button= document.querySelector('.close-btn')
            function showMenu() {
                document.querySelector('.close-btn').classList.toggle('active');
                document.querySelector('.ul-links').classList.toggle('active');
                document.querySelector('.mob').classList.toggle('active');
                document.getElementById("overlay").classList.toggle('overlay');

            }
        menu.addEventListener('click', showMenu);
        button.addEventListener('click', showMenu);
    </script>
</body>
</html>