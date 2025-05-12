<?php
    // Enable error reporting for debugging
    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    // API call to fetch project data
    $api_url = 'http://strapi.promida.net:3000/api/projects?populate=*';
    $project_data = json_decode(file_get_contents($api_url), true);
    
    // Get the service type from URL parameter
    $variable = isset($_GET["var"]) ? $_GET["var"] : "";
    
    // Debug output
    echo "<!-- Debug: Requested service type: " . $variable . " -->";
    
    // Check if we have data before looping
    if (isset($project_data["data"]) && count($project_data["data"]) > 0) {
        echo "<!-- Debug: Found " . count($project_data["data"]) . " projects -->";
        
        for ($x = 0; $x < count($project_data["data"]); $x++) {
            $project = $project_data["data"][$x];
            $project_type = $project["type"];
            $project_link = $project["link"];
            
            // Debug output for each project
            echo "<!-- Debug: Project type: " . $project_type . " -->";
            
            // Get image URL from cove object
            if (isset($project["cove"]) && isset($project["cove"]["url"])) {
                $project_img = $project["cove"]["url"];
                // URL is already absolute from Cloudinary
            } else {
                // Fallback image if no image provided
                $project_img = '../images/placeholder.jpg';
            }
            
            // Only show projects matching the requested service type
            // Convert both to lowercase for case-insensitive comparison
            if(strtolower($variable) === strtolower($project_type)) {
                echo "<div class='project-container-services ".$project_type."'>
                    <a href='".$project_link."' target='_blank'>
                        <img class='image-project-services' alt='Cover for the project' src='".$project_img."'/>
                    </a>
                </div>";  
            }
        }
    } else {
        // Debug output if no data
        echo "<!-- Debug: No projects found in API response -->";
        
        // Fallback to static content if API fails or returns no data
        if($variable === "Branding" || $variable === "branding") {
            echo "<div class='project-container-services Branding'>
                <a href='#'>
                    <img class='image-project-services' alt='Cover for the project' src='../images/project1.jpg'/>
                </a>
            </div>";
            
            echo "<div class='project-container-services Branding'>
                <a href='#'>
                    <img class='image-project-services' alt='Cover for the project' src='../images/project2.jpg'/>
                </a>
            </div>";
        }
        
        if($variable === "Web Development & UI/UX" || $variable === "web development & ui/ux") {
            echo "<div class='project-container-services Web'>
                <a href='#'>
                    <img class='image-project-services' alt='Cover for the project' src='../images/project3.jpg'/>
                </a>
            </div>";
        }
        
        if($variable === "Social Media" || $variable === "social media") {
            echo "<div class='project-container-services Social'>
                <a href='#'>
                    <img class='image-project-services' alt='Cover for the project' src='../images/project4.jpg'/>
                </a>
            </div>";
        }

        if($variable === "Media Production" || $variable === "media production") {
            echo "<div class='project-container-services Video Production'>
                <a href='#'>
                    <img class='image-project-services' alt='Cover for the project' src='../images/video-project.jpg'/>
                </a>
            </div>";
        }
        
        if($variable === "Outdoor" || $variable === "outdoor") {
            echo "<div class='project-container-services Outdoor'>
                <a href='#'>
                    <img class='image-project-services' alt='Cover for the project' src='../images/project4.jpg'/>
                </a>
            </div>";
        }
    }
?>