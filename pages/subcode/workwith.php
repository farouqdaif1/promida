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
                        echo "<img class='image-logo' src='".$image_link."'/>";
                        }
                    ?>
                </div>
            <h3>More than 100 clients</h3>
        </div>
        <div class="story-container">
            <div class="swiper">
                <div class="swiper-wrapper">
                            <?php
                                $api_url = 'https://promida-strapi.herokuapp.com/api/stories';
                                $story_data=json_decode(file_get_contents($api_url),true);
                                for ($x = 0; $x <count($story_data["data"]); $x++) {
                                $story_year=$story_data["data"][$x]["attributes"]["year"];
                                $story_story=$story_data["data"][$x]["attributes"]["story"];
                                    echo
                                    "<div class='swiper-slide'>
                                        <div class='slides'>
                                            <div class='year-container'>
                                                    <span class='ourStory'> Our Story</span>
                                                    <div class='year'>".$story_year."</div>
                                            </div>
                                            <div class='story'>".$story_story."</div> 
                                        </div>
                                    </div>";
                                }
                                ?>
                </div>
                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>  
            </div>
        </div>
    </div>
</section>
