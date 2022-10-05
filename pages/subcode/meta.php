<?php
    $api_url = 'https://promida-strapi.herokuapp.com/api/meta-descriptions';
    $meta_data=json_decode(file_get_contents($api_url),true);
            $project_keyword=$meta_data["data"][0]["attributes"]["keyword"];
            $project_description=$meta_data["data"][0]["attributes"]["Discerption"];
                echo "
                    <meta name='description' content='".$project_description."'>
                    <meta name='keywords' content='".$project_keyword."'>
                ";  
?>