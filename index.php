<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Promida</title>
    <?php include 'pages/subcode/meta.php'; ?>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-PS3T5RDTM1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-PS3T5RDTM1');
    </script>
    <link rel="icon" href="images/preloader.png">
    <!-- Main css File -->
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/all.min.css">
    <!-- Render all Elements Normally   -->
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
</head>
<body>
    <div id="preloader">
        <img src="images/preloader.png" alt="preloader">
    </div>
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
                            <li><a class="links" href="pages/work.php"> Achievements</a></li>
                            <li><a class="links" href="pages/people.php">Our heroes</a></li>
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
                    <div class="landing-header fade-in-section">
                        <h1>Embrace</br> Your Legacy</h1>
                        <p>It all began with a pursuit of glory and strength Journey shaped by vision, passion, and purpose. <br>That’s how you choose to begin, too Where is where our paths align.</p>
                    </div>
                    <div class="landing-image fade-in-section delay-400">
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
                <div class="container" id="container" >
                    <h2 class="our-services fade-in-section">Our Services</h2>
                    <p class="prag-services fade-in-section delay-200">We are a full-service, masterly agency offering a wide range of services across nearly all aspects of marketing and advertising.</br>
We believe in people, strong relationships, and the power of vision, focus, and teamwork to deliver outstanding digital strategies and
results that your brand truly deserves.</p>
                    <div class="all-services items">
                        <a href="pages/services.php" class="card item fade-in-section">
                            <div class="title">
                            <i class="fa-solid fa-tag"></i>                                
                                <span>01</span>
                            </div>
                            <h3>Branding & Creating full identity system</h3>
                            <!-- <p>It is the art of Creating your Unique Identity. </p> -->
                        </a>
                        <a href="pages/services.php" class="card item fade-in-section delay-200">
                            <div class="title">
                                <i class="fa-solid fa-laptop-code"></i>
                                <span>02</span>
                                </div>
                                <h3>website & Mobile Apps creation & development</h3>
                                <!-- <p>A brands.com experience is its best opportunity to control its own message. Therefore. we create content with a strong communications purpose while taking into consideration consumer insights. We then build elegant, durable solutions to key business challenges across all touchpoints, screens, and Devices.</p> -->
                        </a>
                        <a href="pages/services.php"  class="card item fade-in-section delay-400">
                            <div class="title">
                                <i class="fa-solid fa-thumbs-up"></i>
                                <span>03</span>
                                </div>
                                <h3>Social Media Marketing</h3>
                                    <!-- <p>we generate ideas, branded content, and selectively distribute it across owned and paid Social Media Channels; Facebook, Twitter,Youtube, Pinterest, Instagram. etc., depending on a holistic data-driven strategy.</p> -->
                        </a>
                        <a href="pages/services.php"  class="card item fade-in-section delay-600">
                            <div class="title">
                            <i class="fa-solid fa-camera"></i>
                            <span>04</span>
                            </div>
                            <h3>Media production</h3>
                                <!-- <p>Show Off is what Media Production Really Means.</p> -->
                        </a>
                        <a href="pages/services.php" class="card item fade-in-section delay-800">
                            <div class="title">
                            <i class="fa-solid fa-tv"></i>
                                <span>05</span>
                                </div>
                                <h3>Media buying strategy</h3>
                                <!-- <p>We are Here to choose you the best Platform to appear according to your Budget per year . </p> -->
                        </a>
                    </div>
                </div>
            </section>
            <!-- END SERVICES -->
            <!-- start WORK -->
            <section class="work">
                <div class="container">
                <?php include 'pages/subcode/projects.php'?>
                </div>
                <a href="pages/work.php" class="grid-container fade-in-section">
                    <h2>Our</br>Latest Work</h2>
                    <p>Check Out Our Humble Portfolio with Marvelous Clients. </p>
                </a>
            </section>
            <!-- END WORK -->
            <!-- START WORK WITH -->
            <?php include 'pages/subcode/workwith.php'?>
            <!-- END WORK WITH -->
             <!-- start Over all -->
             <section class="over-all">
                <div class="container">
                    <h2 class="fade-in-section">Trusted by</h2>
                    <div class="nums">
                        <div class="countainer-num fade-in-section">
                        <span class="plus">&plus;</span>
                            <div class="num" data-goal="50">0</div>
                            <div class="text-num">More than  50 clintes </br>All over the middle east</div>
                        </div>
                        <div class="countainer-num fade-in-section delay-200">
                        <span class="plus">&plus;</span>
                            <div class="num" data-goal="250">0</div>
                            <div class="text-num">More than  </br>250 sucsseful campaigns</div>
                        </div>
                        <div class="countainer-num fade-in-section delay-400">
                            <span class="plus">&plus;</span>
                            <div class="num" data-goal="50">0</div>
                            <div class="text-num">More than </byr> 50 case studies and </br>media buying plane solutions</div>
                        </div>
                        <div class="countainer-num fade-in-section delay-600">
                            <span class="plus">&plus;</span>
                            <div class="num" data-goal="45">0</div>
                            <div class="text-num">More than 45 media </br>Production campaingns</div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END Over all -->
            <!-- start CONTACT -->
            <section class="contact">
            <div class="be-with-us">
                    <div class="container">
                        <h2 class="fade-in-section">We're Sure You Have </br>
                            an Amazing Idea</h2>
                        <p class="fade-in-section delay-200">Let's discuss how to bring it to life.</p>
                        <a class="touch fade-in-section delay-400" href="pages/contact.php">Contact Us</a>
                    </div>
                </div>
                <img class="layer-index"src="images/layer-12@2x.png" alt="layer">
            </section>
            <!-- END CONTACT -->
        </main>
        <!-- End Main -->
        <!-- start footer -->
        <footer>
            <div class="container">
                    <a  class="logo" href="index.php"><img  src="images/logo.png" alt="logo"></a>
                    <div class="text">
                    <div> <a href="pages/faq.php">FAQ </a></div>
                    <p class="rights">© 2025. All Rights Reserved. </p>
                    </div>
                    <ul>

                        <li><a  class="links" target="_blank" href="https://www.behance.net/Promida"> <i class="fa-brands fa-behance"></i></a></li>
                        <li><a  class="links" target="_blank" href="https://www.linkedin.com/company/promidadigialagency/"> <i class="fa-brands fa-linkedin-in"></i></a></li>
                        <li><a  class="links" target="_blank" href="https://www.facebook.com/PromidaDigitalMarketing/?_rdc=2&_rdr"> <i class="fa-brands fa-facebook-f"></i></a></li>
                        <li><a  class="links" target="_blank" href="https://www.instagram.com/promida.digital/"> <i class="fa-brands fa-instagram"></i></a></li>
                        <li><a  class="links" target="_blank" href="https://www.youtube.com/channel/UCj_DLx9f0JXituqDinf16ww"> <i class="fa-brands fa-youtube"></i></a></li>
                        <li><a  class="links" target="_blank" href="https://pin.it/2iK82BkQu"> <i class="fa-brands fa-pinterest"></i></a></li>
                    </ul>
                </div>
        </footer>
        </div>
        <!-- start footer -->

    </div>
    <?php include 'pages/subcode/counter.php'?>
    <script >
        const menu = document.querySelector('.toggle-menu');
        const button= document.querySelector('.close-btn');
            function showMenu() {
                document.querySelector('.close-btn').classList.toggle('active');
                document.querySelector('.ul-links').classList.toggle('active');
                document.querySelector('.mob').classList.toggle('active');
                document.getElementById("overlay").classList.toggle('overlay');
            }
        menu.addEventListener('click', showMenu);
        button.addEventListener('click', showMenu);
    </script>
    <script>
        let loader=document.getElementById("preloader");
        window.addEventListener('load',function(){
            loader.style.display="none"
        })
        const slider=document.querySelector('.items');
        let isDown=false;
        let startX;
        let scrollLeft;
        slider.addEventListener('mousedown',(e)=>{
        isDown=true;
        slider.classList.add('moveactive');
        startX=e.pageX-slider.offsetLeft;
        scrollLeft=slider.scrollLeft;
        }) 
        slider.addEventListener('mouseleave',()=>{
            isDown=false;
            slider.classList.remove('moveactive');

        })  
        slider.addEventListener('mouseup',()=>{
            isDown=false;
            slider.classList.remove('moveactive');

        })  
        slider.addEventListener('mousemove',(e)=>{
            if(!isDown) return;
            e.preventDefault();
            const x=e.pageX-slider.offsetLeft;
            const walk=(x-startX)*1.5;
            slider.scrollLeft= scrollLeft-walk;
        }) 
    </script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script>
        const swiper = new Swiper('.swiper', {
        // Optional parameters
        loop: true,
        autoplay:{
            delay:3000,
            disableOnInteraction:false,
        },        
        // Navigation arrows
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        });
    </script>
    <!-- Fade effects script -->
    <script src="js/fade-effects.js"></script>
</body>
</html>