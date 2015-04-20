<head>
       <title>Add two numbers without using arithmetic operators - GeeksforGeeks</title>
       <style type="text/css" media="screen">
          @import url('http://d2o58evtke57tz.cloudfront.net/wp-content/themes/minimoo/style.css');
    </style>
      <link href="http://d2o58evtke57tz.cloudfront.net/wp-content/themes/minimoo/favicon.ico" rel="shortcut icon" />    
    
<!-- This site is optimized with the Yoast WordPress SEO plugin v2.0.1 - https://yoast.com/wordpress/plugins/seo/ -->
<link rel="canonical" href="http://www.geeksforgeeks.org/add-two-numbers-without-using-arithmetic-operators/" />
<meta property="og:locale" content="en_US" />
<meta property="og:type" content="article" />
<meta property="og:title" content="Add two numbers without using arithmetic operators - GeeksforGeeks" />
<meta property="og:description" content="Write a function Add() that returns sum of two integers. The function should not use any of the arithmetic operators (+, ++, &#8211;, -, .. etc). Sum of two bits can be obtained by performing XOR (^) of the two bits. Carry bit can be obtained by performing AND (&amp;) of two bits. Above is &hellip;" />
<meta property="og:url" content="http://www.geeksforgeeks.org/add-two-numbers-without-using-arithmetic-operators/" />
<meta property="og:site_name" content="GeeksforGeeks" />
<meta property="article:section" content="Bit Magic" />
<meta property="article:published_time" content="2012-03-17T23:08:59+00:00" />
<!-- / Yoast WordPress SEO plugin. -->

<link rel='stylesheet' id='wp-quicklatex-format-css'  href='http://d2o58evtke57tz.cloudfront.net/wp-content/plugins/wp-quicklatex/css/quicklatex-format.css?ver=4.1.1' type='text/css' media='all' />
<link rel='stylesheet' id='bbp-default-css'  href='http://d2o58evtke57tz.cloudfront.net/wp-content/plugins/bbpress/templates/default/css/bbpress.css?ver=2.5.6-5643' type='text/css' media='screen' />
<link rel='stylesheet' id='wp-pagenavi-css'  href='http://d2o58evtke57tz.cloudfront.net/wp-content/plugins/wp-pagenavi/pagenavi-css.css?ver=2.70' type='text/css' media='all' />
<script type='text/javascript' src='http://d2o58evtke57tz.cloudfront.net/wp-includes/js/jquery/jquery.js?ver=1.11.1'></script>
<script type='text/javascript' src='http://d2o58evtke57tz.cloudfront.net/wp-includes/js/jquery/jquery-migrate.min.js?ver=1.2.1'></script>
<script type='text/javascript' src='http://d2o58evtke57tz.cloudfront.net/wp-content/plugins/google-captcha/js/script.js?ver=4.1.1'></script>
<script type='text/javascript' src='http://d2o58evtke57tz.cloudfront.net/wp-content/plugins/wp-quicklatex/js/wp-quicklatex-frontend.js?ver=1.0'></script>

<!-- Bad Behavior 2.2.16 run time: 1.665 ms -->
<script type="text/javascript">
<!--
function bb2_addLoadEvent(func) {
	var oldonload = window.onload;
	if (typeof window.onload != 'function') {
		window.onload = func;
	} else {
		window.onload = function() {
			oldonload();
			func();
		}
	}
}

bb2_addLoadEvent(function() {
	for ( i=0; i < document.forms.length; i++ ) {
		if (document.forms[i].method == 'post') {
			var myElement = document.createElement('input');
			myElement.setAttribute('type', 'hidden');
			myElement.name = 'bb2_screener_';
			myElement.value = '1428164329 106.208.158.75';
			document.forms[i].appendChild(myElement);
		}
	}
});
// --></script>
		<style type="text/css" id="syntaxhighlighteranchor"></style>
   <meta name="google-site-verification" content="rHK2v8_zzuAZQY8JHAzbllDN8u-aQxcn2Kqnp67Old0" />
</head>


<?php

    // Include the library
    include('simple_html_dom.php');
    
    $auth = base64_encode('INDIABLR\\blrbg:Altair123');

    $aContext = array(
        'http' => array(
            'proxy' => 'tcp://192.168.0.18:8080',
            'request_fulluri' => true,
            'header' => "Proxy-Authorization: Basic $auth",
        ),
    );
    $cxContext = stream_context_create($aContext);
    
    // Retrieve the DOM from a given URL
    $html = file_get_html('http://www.geeksforgeeks.org/add-two-numbers-without-using-arithmetic-operators/', false, $cxContext);
    
    //echo $html;
    
    // Find all "A" tags and print their HREFs
    //foreach($html->find('a') as $e) 
    //    echo $e->href . '<br>';

    // Retrieve all images and print their SRCs
    //foreach($html->find('img') as $e)
    //    echo $e->src . '<br>';

    // Find all images, print their text with the "<>" included
    //foreach($html->find('img') as $e)
    //    echo $e->outertext . '<br>';

    // Find the DIV tag with an id of "myId"
    //foreach($html->find('div#myId') as $e)
    //    echo $e->innertext . '<br>';

    // Find all SPAN tags that have a class of "myClass"
    //foreach($html->find('span.myClass') as $e)
    //    echo $e->outertext . '<br>';

    // Find all TD tags with "align=center"
    //foreach($html->find('td[align=center]') as $e)
    //    echo $e->innertext . '<br>';
        
    // Extract all text from a given cell
    //echo $html->find('td[align="center"]', 1)->plaintext.'<br><hr>';
    
    // Find the DIV tag with a class of "myClass"
    //foreach($html->find('div.post-content') as $e)
    //    echo $e->innertext . '<br>';
    
    
    //foreach($html->find('div.post-title-info') as $e)
    //    echo $e->innertext . '<br>';
    
    //foreach($html->find('div.post-content') as $e)
    //    echo $e->innertext . '<br>';
    
    echo "<div class=\"post-info\">";
    foreach($html->find('div.post-info') as $e) {
        echo $e->innertext . '<br>';
    }
    echo "</div>";
    
    
?>
