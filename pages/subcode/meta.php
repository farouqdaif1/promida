<?php
    // API call to fetch meta data
    $api_url = 'http://localhost:1337/api/metas?populate=*';
    $meta_data = json_decode(file_get_contents($api_url), true);
    
    // Check if we have data before accessing it
    if (isset($meta_data["data"]) && count($meta_data["data"]) > 0) {
        $meta_keyword = $meta_data["data"][0]["keyword"];
        $meta_description = $meta_data["data"][0]["description"];
        
        echo "
            <meta name='description' content='".$meta_description."'>
            <meta name='keywords' content='".$meta_keyword."'>
        ";  
    } else {
        // Fallback to static content if API fails or returns no data
        echo "
            <meta name='description' content='Promida Digital Agency - Full-service digital marketing agency providing branding, web development, and marketing solutions'>
            <meta name='keywords' content='digital marketing, branding, web development, social media marketing, advertising'>
        ";
    }
?>