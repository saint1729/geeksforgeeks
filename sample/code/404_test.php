<?php


    include('simple_html_dom.php');
    
    $auth = base64_encode('INDIABLR\\blrbg:Altair123');

    $aContext = array(
        'http' => array(
            'proxy' => 'tcp://192.168.0.18:8080',
            'request_fulluri' => true,
            'header' => "Proxy-Authorization: Basic $auth",
        ),
    );

    //$cxContext = stream_context_create($aContext);

    $cxContext = NULL;

    //$url = "http://www.geeksforgeeks.org/add-two-numbers-without-using-arithmetic-operators/";
    
    $pages = 20;
    
    $page = 20;

    $id = 1;

    $url = "http://www.geeksforgeeks.org/category/bit-magic/page/$page/";
    
    $handle = curl_init($url);
    curl_setopt($handle,  CURLOPT_RETURNTRANSFER, TRUE);

    /* Get the HTML or whatever is linked in $url. */
    $response = curl_exec($handle);

    /* Check for 404 (file not found). */
    $httpCode = curl_getinfo($handle, CURLINFO_HTTP_CODE);
    if($httpCode == 404) {
        echo "<h2>404 Error</h2>";
    }

    curl_close($handle);

    // Retrieve the DOM from a given URL
    //$html = file_get_html($url, false, $cxContext);

    //echo $html;

?>
