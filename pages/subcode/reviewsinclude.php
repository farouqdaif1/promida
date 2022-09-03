<?php
    $api_url = 'https://promida-strapi.herokuapp.com/api/reviews?populate=*';
    $review_data=json_decode(file_get_contents($api_url),true);
        for ($x = 0; $x <count($review_data["data"]); $x++) {
            $reviewer_name=$review_data["data"][$x]["attributes"]["name"];
            $reviewer_title=$review_data["data"][$x]["attributes"]["title"];
            $reviewer_review=$review_data["data"][$x]["attributes"]["Review"];
            $reviewer_img=$review_data["data"][$x]["attributes"]["photo"]["data"]["attributes"]["url"];
                echo "
            <div class='review'>
                    <div class='reviewer-info'>
                    <div class='reviewer-image'>
                    <img src='".$reviewer_img."' alt='reviewer image'>
                    </div>
                    <div class='reviewer-name'>
                        <h3>".$reviewer_name."</h3>
                        <p class='reviewer-title'>".$reviewer_title."</p>
                        <span class='current-state'>Current</br>clint</span>
                    </div>
                    <div class='review-description'>
                        <p>".$reviewer_review."</p>
                    </div>
                </div>
            </div>
                ";  
            }
?>
