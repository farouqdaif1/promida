<?php
    $api_url = 'https://promida-strapi.herokuapp.com/api/projects?populate=*';
    $project_data=json_decode(file_get_contents($api_url),true);
        for ($x = 0; $x <count($project_data["data"]); $x++) {
            $project_type=$project_data["data"][$x]["attributes"]["Type"];
            $project_name=$project_data["data"][$x]["attributes"]["Name"];
            $project_description=$project_data["data"][$x]["attributes"]["Descraption"];
            $project_link=$project_data["data"][$x]["attributes"]["Link"];
            $project_img=$project_data["data"][$x]["attributes"]["Cover"]["data"]["attributes"]["url"];
            if($project_type==" Video Production"){
                echo
                "<div class='project-container ".$project_type."'>
                       <img class='image-project' src='".$project_img."'/>
                       <button class='myBtn'>Open Project</button>
                   </div>
                   <div class='modal'>
                       <!-- Modal content -->
                       <div class='modal-content'>
                       <span class='close'>&times;</span>
                       <div class='right-modal-content'>
                           <div class='title-modal-content'>
                               <div>
                                   <h2>".$project_name."</h2>
                               </div>
                               <p>".$project_type."</p>
                           </div>
                           <div class='image-modal-content'>
                                                                <iframe width='100%' height='315'
                                        src='https://www.youtube.com/embed/tgbNymZ7vqY'>
                                        </iframe>
                           </div>
                       </div>
                       <div class='left-modal-content'>
                           <p class='modal-content-description'>".$project_description."</p>
                           <a class='modal-content-link'  href=".$project_link." target='_blank'>Full project</a>
                       </div>
                       </div>
                   </div>
                   ";  
            }else{
                echo
                 "<div class='project-container ".$project_type."'>
                        <img class='image-project' src='".$project_img."'/>
                        <button class='myBtn'>Open Project</button>
                    </div>
                    <div class='modal'>
                        <!-- Modal content -->
                        <div class='modal-content'>
                        <span class='close'>&times;</span>
                        <div class='right-modal-content'>
                            <div class='title-modal-content'>
                                <div>
                                    <h2>".$project_name."</h2>
                                </div>
                                <p>".$project_type."</p>
                            </div>
                            <div class='image-modal-content'>
                            <img class='image-modal' src='".$project_img."'/>
                            </div>
                        </div>
                        <div class='left-modal-content'>
                            <p class='modal-content-description'>".$project_description."</p>
                            <a class='modal-content-link'  href=".$project_link." target='_blank'>Full project</a>
                        </div>
                        </div>
                    </div>
                    ";  
            }
                
            }
?>