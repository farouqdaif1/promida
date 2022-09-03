<?php
    $api_url = 'https://promida-strapi.herokuapp.com/api/projects?populate=*';
    $project_data=json_decode(file_get_contents($api_url),true);
        for ($x = 0; $x <count($project_data["data"]); $x++) {
            $project_type=$project_data["data"][$x]["attributes"]["Type"];
            $project_name=$project_data["data"][$x]["attributes"]["Name"];
            $project_description=$project_data["data"][$x]["attributes"]["Descraption"];
            $project_link=$project_data["data"][$x]["attributes"]["Link"];
            $project_img=$project_data["data"][$x]["attributes"]["Cover"]["data"]["attributes"]["url"];
                echo "<div class='project-container ".$project_type."'>
                <a href='".$project_link."'>
                    <img class='image-project' src='".$project_img."'/>
                    <div class='info'>
                        <p class='first-paragraph'>".$project_name."</p>
                        <p class='sec-paragraph'>".$project_type."</p>
                        <p class='third-paragraph'>".$project_description."</p>
                    </div>
                </a>
            </div>";  
            }
?>
