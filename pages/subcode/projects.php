<?php
    // API call to fetch project data
    $api_url = 'http://strapi.promida.net:3000/api/projects?populate=*';
    $project_data = json_decode(file_get_contents($api_url), true);
    
    // Check if we have data before looping
    if (isset($project_data["data"]) && count($project_data["data"]) > 0) {
        for ($x = 0; $x < count($project_data["data"]); $x++) {
            $project = $project_data["data"][$x];
            $project_type = $project["type"];
            $project_name = $project["name"];
            $project_description = $project["description"];
            $project_link = $project["link"];
            
            // Get image URL from cove object
            if (isset($project["cove"]) && isset($project["cove"]["url"])) {
                $project_img = $project["cove"]["url"];
                // URL is already absolute from Cloudinary
            } else {
                // Fallback image if no image provided
                $project_img = '../images/placeholder.jpg';
            }
            
            // Render project based on type
            if($project_type == "Video Production"){
                // Process video URL for embedding
                $video_embed_url = $project_link;
                
                // Check if it's a YouTube link and convert to embed format
                if (strpos($project_link, 'youtube.com/watch?v=') !== false) {
                    // Extract video ID from youtube.com/watch?v= format
                    preg_match('/watch\?v=([^&]+)/', $project_link, $matches);
                    if (isset($matches[1])) {
                        $video_embed_url = 'https://www.youtube.com/embed/' . $matches[1] . '?rel=0&showinfo=0&autoplay=1';
                    }
                } elseif (strpos($project_link, 'youtu.be/') !== false) {
                    // Extract video ID from youtu.be/ format
                    preg_match('/youtu\.be\/([^?&]+)/', $project_link, $matches);
                    if (isset($matches[1])) {
                        $video_embed_url = 'https://www.youtube.com/embed/' . $matches[1] . '?rel=0&showinfo=0&autoplay=1';
                    }
                } elseif (strpos($project_link, 'vimeo.com/') !== false) {
                    // Extract video ID from vimeo.com/ format
                    preg_match('/vimeo\.com\/([0-9]+)/', $project_link, $matches);
                    if (isset($matches[1])) {
                        $video_embed_url = 'https://player.vimeo.com/video/' . $matches[1] . '?autoplay=1';
                    }
                }
                
                echo
                "<div class='project-container ".$project_type." fade-in-section'>
                       <img class='image-project' alt='Cover for the project' src='".$project_img."'/>
                       <button class='myBtn'>Open Project</button>
                   </div>
                   <div class='modal'>
                       <!-- Modal content -->
                       <div class='modal-content'>
                       <span class='close'></span>
                       <div class='right-modal-content'>
                           <div class='title-modal-content'>
                               <div>
                                   <h2>".$project_name."</h2>
                               </div>
                               <p>".$project_type."</p>
                           </div>
                           <div class='image-modal-content'>
                                <iframe width='100%' height='315'
                                        src='".$video_embed_url."' 
                                        frameborder='0'
                                        allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' 
                                        allowfullscreen>
                                </iframe>
                           </div>
                       </div>
                       <div class='left-modal-content'>
                           <p class='modal-content-description'>".$project_description."</p>
                           <a class='modal-content-link' href='".$project_link."' target='_blank'>Full project</a>
                       </div>
                       </div>
                   </div>
                   ";  
            } else {
                echo
                 "<div class='project-container ".$project_type." fade-in-section'>
                        <img class='image-project' alt='Cover for the project' src='".$project_img."' />
                        <button class='myBtn'>Open Project</button>
                    </div>
                    <div class='modal'>
                        <!-- Modal content -->
                        <div class='modal-content'>
                        <span class='close'></span>
                        <div class='right-modal-content'>
                            <div class='title-modal-content'>
                                <div>
                                    <h2>".$project_name."</h2>
                                </div>
                                <p>".$project_type."</p>
                            </div>
                            <div class='image-modal-content'>
                            <img class='image-modal' alt='Cover for the project' src='".$project_img."'/>
                            </div>
                        </div>
                        <div class='left-modal-content'>
                            <p class='modal-content-description'>".$project_description."</p>
                            <a class='modal-content-link' href='".$project_link."' target='_blank'>Full project</a>
                        </div>
                        </div>
                    </div>
                    ";  
            }
        }
    } else {
        // Fallback to static content if API fails or returns no data
        echo 
        "<div class='project-container Video Production fade-in-section'>
            <img class='image-project' alt='Cover for the project' src='../images/video-project.jpg'/>
            <button class='myBtn'>Open Project</button>
        </div>
        <div class='modal'>
            <!-- Modal content -->
            <div class='modal-content'>
            <span class='close'></span>
            <div class='right-modal-content'>
                <div class='title-modal-content'>
                    <div>
                        <h2>Corporate Video</h2>
                    </div>
                    <p>Video Production</p>
                </div>
                <div class='image-modal-content'>
                    <iframe width='100%' height='315'
                        src='https://www.youtube.com/embed/tgbNymZ7vqY?rel=0&showinfo=0&autoplay=0'
                        frameborder='0'
                        allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' 
                        allowfullscreen>
                    </iframe>
                </div>
            </div>
            <div class='left-modal-content'>
                <p class='modal-content-description'>A corporate video project showcasing company culture and values.</p>
                <a class='modal-content-link' href='#' target='_blank'>Full project</a>
            </div>
            </div>
        </div>";
        
        // Branding project
        echo 
        "<div class='project-container Branding fade-in-section'>
            <img class='image-project' alt='Cover for the project' src='../images/branding-project.jpg'/>
            <button class='myBtn'>Open Project</button>
        </div>
        <div class='modal'>
            <!-- Modal content -->
            <div class='modal-content'>
            <span class='close'></span>
            <div class='right-modal-content'>
                <div class='title-modal-content'>
                    <div>
                        <h2>Brand Identity</h2>
                    </div>
                    <p>Branding</p>
                </div>
                <div class='image-modal-content'>
                <img class='image-modal' alt='Cover for the project' src='../images/branding-project.jpg'/>
                </div>
            </div>
            <div class='left-modal-content'>
                <p class='modal-content-description'>Complete brand identity design including logo, color palette, and brand guidelines.</p>
                <a class='modal-content-link' href='#' target='_blank'>Full project</a>
            </div>
            </div>
        </div>";
    }
?>