<section class="work-with">
    <div class="container">
        <div class="work-with-container">
            <h2>BRANDS WE'VE WORKED WITH</h2>
                <div class="image-container">
                    <?php
                        // Define API endpoint for company logos
                        $api_url = 'http://localhost:1337/api/work-withs?populate=*';
                        
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
                        
                        // Fetch company logos
                        $company_data = fetchApiData($api_url);
                        
                        // Check if we have data to display
                        if (!empty($company_data['data'])) {
                            $image_base_url = 'http://localhost:1337';
                            
                            foreach ($company_data['data'] as $company) {
                                // Check if logo exists
                                if (isset($company['logo']) && isset($company['logo']['url'])) {
                                    // Use small format if available for better performance with logos
                                    if (isset($company['logo']['formats']['small']['url'])) {
                                        $logo_url = $image_base_url . $company['logo']['formats']['small']['url'];
                                    } else {
                                        $logo_url = $image_base_url . $company['logo']['url'];
                                    }
                                    
                                    echo "<img class='image-logo' alt='Company logo' src='" . htmlspecialchars($logo_url) . "'/>";
                                }
                            }
                        } 
                        
                        // If no data, show default logos
                        if (empty($company_data['data'])) {
                            echo "<img class='image-logo' alt='Company logo' src='../images/client1.png'/>";
                            echo "<img class='image-logo' alt='Company logo' src='../images/client2.png'/>";
                            echo "<img class='image-logo' alt='Company logo' src='../images/client3.png'/>";
                        }
                    ?>
                </div>
            <h3>More than 100 clients</h3>
        </div>
        <div class="story-container">
            <div class="swiper">
                <div class="swiper-wrapper">
                    <?php
                        // Define API endpoint for stories
                        $stories_api_url = 'http://localhost:1337/api/stories?populate=*';
                        
                        // Fetch stories data
                        $story_data = fetchApiData($stories_api_url);
                        
                        // Check if we have stories to display
                        if (!empty($story_data['data'])) {
                            foreach ($story_data['data'] as $story) {
                                // Extract data safely with fallbacks
                                $story_year = $story['year'] ?? 'Unknown Year';
                                $story_text = $story['story'] ?? 'No story available';
                                
                                echo "<div class='swiper-slide'>
                                    <div class='slides'>
                                        <div class='year-container'>
                                            <span class='ourStory'> Our Story</span>
                                            <div class='year'>" . htmlspecialchars($story_year) . "</div>
                                        </div>
                                        <div class='story'>" . htmlspecialchars($story_text) . "</div> 
                                    </div>
                                </div>";
                            }
                        } else {
                            // Fallback content if no stories are found
                            echo "<div class='swiper-slide'>
                                <div class='slides'>
                                    <div class='year-container'>
                                        <span class='ourStory'> Our Story</span>
                                        <div class='year'>2020</div>
                                    </div>
                                    <div class='story'>Promida Digital Agency was founded with a vision to provide innovative digital marketing solutions.</div> 
                                </div>
                            </div>";
                            
                            echo "<div class='swiper-slide'>
                                <div class='slides'>
                                    <div class='year-container'>
                                        <span class='ourStory'> Our Story</span>
                                        <div class='year'>2022</div>
                                    </div>
                                    <div class='story'>We expanded our services to include comprehensive branding and marketing solutions for businesses across industries.</div> 
                                </div>
                            </div>";
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
