<?php
    // Define API endpoint
    $api_url = 'http://localhost:1337/api/reviews?populate=*';
    
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
    
    // Fetch data with error handling
    $review_data = fetchApiData($api_url);
    
    // Check if we have data to display
    if (!empty($review_data['data'])) {
        foreach ($review_data['data'] as $review) {
            // Extract data safely with fallbacks
            $reviewer_name = $review['name'] ?? 'Unknown Name';
            $reviewer_title = $review['title'] ?? '';
            $reviewer_review = $review['review'] ?? '';
            
            // Handle image URL - check if avatar exists and use appropriate path
            $image_base_url = 'http://localhost:1337';
            $reviewer_img = '';
            
            if (isset($review['avater']) && isset($review['avater']['url'])) {
                // Use medium format if available, otherwise use the main URL
                if (isset($review['avater']['formats']['medium']['url'])) {
                    $reviewer_img = $image_base_url . $review['avater']['formats']['medium']['url'];
                } else {
                    $reviewer_img = $image_base_url . $review['avater']['url'];
                }
            } else {
                // Fallback image if no avatar is available
                $reviewer_img = '../images/default-profile.jpg';
            }
            
            // Output the review HTML
            echo "<div class='review'>
                <div class='reviewer-info'>
                    <div class='reviewer-image'>
                        <img src='" . htmlspecialchars($reviewer_img) . "' alt='Reviewer: " . htmlspecialchars($reviewer_name) . "'>
                    </div>
                    <div class='reviewer-name'>
                        <h3>" . htmlspecialchars($reviewer_name) . "</h3>
                        <p class='reviewer-title'>" . htmlspecialchars($reviewer_title) . "</p>
                        <span class='current-state'>Current <br class='break'>client</span>
                    </div>
                    <div class='review-description'>
                        <p>" . htmlspecialchars($reviewer_review) . "</p>
                    </div>
                </div>
            </div>";
        }
    } else {
        // Fallback content if no reviews are found
        echo "<div class='review'>
            <div class='reviewer-info'>
                <div class='reviewer-image'>
                    <img src='../images/default-profile.jpg' alt='Default reviewer'>
                </div>
                <div class='reviewer-name'>
                    <h3>John Client</h3>
                    <p class='reviewer-title'>CEO, Company Inc.</p>
                    <span class='current-state'>Current <br class='break'>client</span>
                </div>
                <div class='review-description'>
                    <p>Working with Promida was a great experience. They delivered excellent results for our campaign.</p>
                </div>
            </div>
        </div>";
    }
?>
