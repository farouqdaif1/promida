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
            <div class="hero-header fade-in-section">
                <h1>Promida</br>Super Heros</h1>
                <p>Each work Has come to a result because of PROMIDA Super Heros there is no perfect work without An Amazing Team Get to know them in person !. </p>
            </div>
            <div class="hero-image fade-in-section delay-200">
              <img src="../images/Group 29.png" alt="person">
            </div>
        </div>
    </div>
    </section>
    <section class="promida-people">
        <div class="container">
        <?php
            // Define API endpoint
            $api_url = 'http://strapi.promida.net:3000/api/teams?populate=*';
            
            // Function to safely fetch data with error handling
            function fetchApiData($url) {
                $context = stream_context_create([
                    'http' => [
                        'timeout' => 5, // 5 seconds timeout
                        'ignore_errors' => true
                    ]
                ]);
                
                $response = @file_get_contents($url, false, $context);
                
                // Check for errors
                if ($response === false) {
                    // Return empty data structure if request fails
                    return [
                        'data' => [],
                        'meta' => ['pagination' => ['total' => 0]]
                    ];
                }
                
                return json_decode($response, true);
            }
            
            // Fetch team data with error handling
            $team_data = fetchApiData($api_url);
            
            // Check if we have data to display
            if (!empty($team_data['data'])) {
                $delay = 0;
                foreach ($team_data['data'] as $team_member) {
                    // Extract data safely with fallbacks
                    $member_name = $team_member['name'] ?? 'Unknown Name';
                    $member_title = $team_member['title'] ?? 'Team Member';
                    
                    // Handle image URL - check if photo exists and use appropriate path
                    $member_img = '../images/default-profile.jpg'; // Default fallback image
                    
                    if (isset($team_member['photo']) && isset($team_member['photo']['url'])) {
                        // Use medium format if available for better performance vs quality balance
                        if (isset($team_member['photo']['formats']['medium']['url'])) {
                            $member_img = $team_member['photo']['formats']['medium']['url'];
                        } else {
                            $member_img = $team_member['photo']['url'];
                        }
                    }
                    
                    // Output the team member HTML with fade-in-section class and delay
                    echo "<div class='hero-container fade-in-section delay-" . $delay . "'>
                        <img class='image-hero' src='" . htmlspecialchars($member_img) . "' alt='" . htmlspecialchars($member_name) . "'/>
                        <div class='hero-info'>
                            <p class='hero-first-paragraph'>" . htmlspecialchars($member_name) . "</p>
                            <p class='hero-sec-paragraph'>" . htmlspecialchars($member_title) . "</p>
                        </div>
                    </div>";
                    $delay += 200; // Increment delay for next member
                }
            } else {
                // Fallback content if no team members are found
                echo "<div class='hero-container fade-in-section'>
                    <img class='image-hero' src='../images/default-profile.jpg' alt='Default profile'/>
                    <div class='hero-info'>
                        <p class='hero-first-paragraph'>John Doe</p>
                        <p class='hero-sec-paragraph'>Creative Director</p>
                    </div>
                </div>";
                
                echo "<div class='hero-container fade-in-section delay-200'>
                    <img class='image-hero' src='../images/default-profile.jpg' alt='Default profile'/>
                    <div class='hero-info'>
                        <p class='hero-first-paragraph'>Jane Smith</p>
                        <p class='hero-sec-paragraph'>Marketing Specialist</p>
                    </div>
                </div>";
            }
        ?>
        </div>
        <div class="be-with-us fade-in-section">
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