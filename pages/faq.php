<!DOCTYPE html>
<html lang="en">
<?php include 'subcode/head.php'?>
<body>
<div id="preloader">
        <img src="../images/preloader.png" alt="preloader">
    </div>
<div class="parent">

<?php include 'subcode/header.php'?>
    <main >
        <section class="fqa-section">
            <div class="container">
                <div class="heading">
                        <h1>A Frequently Asked Questions</h1>
                        <p>Check Out Our FAQ to Know How we Do it Amazingly! <br> Still If you Needed to know More <br> <a href="contact.php"> Get In Touch With Us. </a> </p>
                </div>
                <section class="faq-container">
                        <div class="faq">
                            <!-- faq question -->
                            <p class="faq-page">Does my business really need digital marketing?</p>
                            <!-- faq answer -->
                            <div class="faq-body">
                                <p>Any Business Needs Digital Marketing or At least The Common Service “ Social Media Marketing “ as It is Vital to Build a Solid Relationship with your Customer. </p>
                            </div>
                        </div>
                        <div class="faq">
                            <!-- faq question -->
                            <p class="faq-page">Do you have a portfolio or samples of your past campaigns or client work?</p>
                            <!-- faq answer -->
                            <div class="faq-body">
                                <p>You Can Check Our Portfolio on Our Behance or our section on our website from <a href="work.php">here</a>.</p>
                            </div>
                        </div>
                        <div class="faq">
                            <!-- faq question -->
                            <p class="faq-page">How Do You Work ?</p>
                                            <!-- faq answer -->
                            <div class="faq-body">
                                <p>We Assigns to you one Key-Person From the team & Executing Precise Marketing Plan to your Business .</p>
                            </div>
                        </div>
                        <div class="faq">
                            <!-- faq question -->
                            <p class="faq-page">What Packages Do you Provide ?</p>
                                            <!-- faq answer -->
                            <div class="faq-body">
                                <p>Typically we don't provide packages for our campaigns, instead our services are fully customizable and flexible to meet our customers' need and avoid unwanted service.</p>
                                </div>
                        </div>
                        <div class="faq">
                            <!-- faq question -->
                            <p class="faq-page">Why Us ?</p>
                                <!-- faq answer -->
                                <div class="faq-body">
                                    <p>Quality  Specialists in Variant Fields Customer Care .</p>
                            </div>
                        </div>
                </section>
            </div>
        </section>
    </main>
<?php include 'subcode/footer.php'?>
</div>

<?php include 'subcode/script.php'?>
<script>
    const faq = document.getElementsByClassName("faq-page");
    for (let i = 0; i < faq.length; i++) {
        faq[i].addEventListener("click", function () {
            this.classList.toggle("faq-active");
            let body = this.nextElementSibling;
            if (body.style.display === "block") {
                body.style.display = "none";
            } else {
                body.style.display = "block";
            }
        });
    }
    let loader=document.getElementById("preloader");
    window.addEventListener('load',function(){
        loader.style.display="none"
    })
</script>
</body>
</html>