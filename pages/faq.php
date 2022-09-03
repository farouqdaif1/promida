<!DOCTYPE html>
<html lang="en">
<?php include 'subcode/head.php'?>
<body>
<div class="parent">

<?php include 'subcode/header.php'?>
    <main >
        <section class="fqa-section">
            <div class="container">
                <div class="heading">
                        <h1>A Frequently Asked Questions</h1>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Velit saepe sequi, illum facerenecessitatibus cum aliquam id illo omnis maxime, totam soluta voluptate amet ut sit ipsum aperiam.Perspiciatis, porro!</p>
                </div>
                <section class="faq-container">
                        <div class="faq">
                            <!-- faq question -->
                            <p class="faq-page">What is an FAQ Page?</p>
                            <!-- faq answer -->
                            <div class="faq-body">
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Velit saepe sequi, illum facere
                                    necessitatibus cum aliquam id illo omnis maxime, totam soluta voluptate amet ut sit ipsum
                                    aperiam.
                                    Perspiciatis, porro!</p>
                            </div>
                        </div>
                        <div class="faq">
                            <!-- faq question -->
                            <p class="faq-page">Why do you need an FAQ page?</p>
                            <!-- faq answer -->
                            <div class="faq-body">
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Velit saepe sequi, illum facere
                                    necessitatibus cum aliquam id illo omnis maxime, totam soluta voluptate amet ut sit ipsum
                                    aperiam.
                                    Perspiciatis, porro!</p>
                            </div>
                        </div>
                        <div class="faq">
                            <!-- faq question -->
                            <p class="faq-page">Does it improves the user experience of a website?</p>
                                            <!-- faq answer -->
                            <div class="faq-body">
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Velit saepe sequi, illum facere
                                                    necessitatibus cum aliquam id illo omnis maxime, totam soluta voluptate amet ut sit ipsum
                                                    aperiam.
                                                    Perspiciatis, porro!</p>
                            </div>
                        </div>
                        <div class="faq">
                            <!-- faq question -->
                            <p class="faq-page">Does it improves the user experience of a website?</p>
                                            <!-- faq answer -->
                            <div class="faq-body">
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Velit saepe sequi, illum facere
                                                    necessitatibus cum aliquam id illo omnis maxime, totam soluta voluptate amet ut sit ipsum
                                                    aperiam.
                                                    Perspiciatis, porro!</p>
                                </div>
                        </div>
                        <div class="faq">
                            <!-- faq question -->
                            <p class="faq-page">Does it improves the user experience of a website?</p>
                                <!-- faq answer -->
                                <div class="faq-body">
                                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Velit saepe sequi, illum facere
                                                    necessitatibus cum aliquam id illo omnis maxime, totam soluta voluptate amet ut sit ipsum
                                                    aperiam.
                                                    Perspiciatis, porro!</p>
                            </div>
                        </div>
                        <div class="faq">
                            <!-- faq question -->
                            <p class="faq-page">Does it improves the user experience of a website?</p>
                                            <!-- faq answer -->
                            <div class="faq-body">
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Velit saepe sequi, illum facere
                                                    necessitatibus cum aliquam id illo omnis maxime, totam soluta voluptate amet ut sit ipsum
                                                    aperiam.
                                                    Perspiciatis, porro!</p>
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
</script>
</body>
</html>