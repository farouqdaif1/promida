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
    <section>
    <div class="container">
        <div class="promida-hero">
            <div class="hero-header">
                <h1>Promida</br>Super Heros</h1>
                <p>Each work Has come to a result because of PROMIDA Super Heros there is no perfect work without An Amazing Team Get to know them in person !. </p>
            </div>
            <div class="hero-image">
              <img src="../images/Group 29.png" alt="person">
            </div>
        </div>
    </div>
    </section>
    <section class="promida-people">
        <div class="container">
        <?php
            $api_url = 'https://promida-strapi.herokuapp.com/api/heroes?populate=*';
            $hero_data=json_decode(file_get_contents($api_url),true);
                for ($x = 0; $x <count($hero_data["data"]); $x++) {
                    $hero_title=$hero_data["data"][$x]["attributes"]["title"];
                    $hero_name=$hero_data["data"][$x]["attributes"]["name"];
                    $hero_img=$hero_data["data"][$x]["attributes"]["photo"]["data"]["attributes"]["url"];
                        echo "<div class='hero-container'>
                            <img class='image-hero' src='".$hero_img."'/>
                            <div class='hero-info'>
                                <p class='hero-first-paragraph'>".$hero_name."</p>
                                <p class='hero-sec-paragraph'>".$hero_title."</p>
                            </div>
                    </div>";  
                    }
        ?>
        </div>
        <div class="be-with-us">
        <div class="container">
                <h2>Want To Join Our Team ?</h2>
                <a class="touch" href="contact.php">Apply Now</a>
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