<!DOCTYPE html>
<html lang="en">
<?php include 'subcode/head.php'?>
<body>
<div id="preloader">
        <img src="../images/preloader.png" alt="preloader">
    </div>
<div class="parent">

<?php include 'subcode/header.php'?>
<main>
<section class="review-page">
    <div class="container">
        <div class="review-header fade-in-section">
            <h1>Reviews from our Clients</h1>
            <p>Check what our clients say about our work</p>
        </div>
        <div class="reviews-container fade-in-section delay-200">
        <?php include 'subcode/reviewsinclude.php'?>
        </div>
    </div>
    <div class="be-with-us fade-in-section delay-400">
        <div class="container">
        <h2>We're Sure You Have </br>
            an Amazing Idea</h2>
        <p>Let's discuss how to bring it to life.</p>

                <a class="touch" href="contact.php">Contact Us</a>
            </div>
            <img class="layer"src="../images/layer-12@2x.png" alt="layer">
        </div>
</section>

</main>
<?php include 'subcode/footer.php'?>
</div>

<?php include 'subcode/script.php'?>
<script>
    let loader=document.getElementById("preloader");
    window.addEventListener('load',function(){
        loader.style.display="none"
    })
</script>
</body>
</html>