<section class="work-with">
    <div class="container">
        <div class="work-with-container">
            <h2>BRANDS WE’VE WORKED WITH</h2>
                <div class="image-container">
                    <?php
                        $api_url = 'https://promida-strapi.herokuapp.com/api/companies?populate=*';
                        $image_data=json_decode(file_get_contents($api_url),true);
                        for ($x = 0; $x <count($image_data["data"]); $x++) {
                        $image_link=$image_data["data"][$x]["attributes"]["company_Image"]["data"]["attributes"]["url"];
                        // echo  $image_link;
                        echo "<img class='image-logo' src='".$image_link."'/>";
                        }
                    ?>
                </div>
            <h3>More than 100 clients</h3>
        </div>
        <div class="story-container">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
        </div>
    </div>
</section>
