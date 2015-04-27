<head>
       <title>Add two numbers without using arithmetic operators - GeeksforGeeks</title>
       <style type="text/css" media="screen">
          @import url('http://d2o58evtke57tz.cloudfront.net/wp-content/themes/minimoo/style.css');
    </style>
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

<body>
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

    //$cxContext = stream_context_create($aContext);

    $cxContext = NULL;

    $url = "http://www.geeksforgeeks.org/add-two-numbers-without-using-arithmetic-operators/";


    // Retrieve the DOM from a given URL
    $html = file_get_html($url, false, $cxContext);
    
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
    

    foreach($html->find('div.post-title-info') as $e)
        echo $e->innertext . '<br>';
    
    foreach($html->find('div.post-content') as $e)
        $text = $e->outertext . '<br>';
    
    $arr = explode("<script async", $text);

    echo $arr[0];
    
    //echo "<div class=\"post-info\">";

    
    //foreach($html->find('div.post-info') as $e) {
    //    echo $e->innertext . '<br>';
    //}
    //echo "</div>";
    
    
?>


<!--div id="footer">
		
		    <div class="xhtml">
                        @geeksforgeeks, <a href="http://creativecommons.org/licenses/by-nc-nd/2.5/in/deed.en_US" title="Valid XHTML Strict 1.0">Some rights reserved</a>  <a href="http://www.geeksforgeeks.org/about/contact-us/"> &nbsp; &nbsp; &nbsp; &nbsp;Contact Us!</a>

		    </div>
		    
		    <div class="credits">
			  Powered by <a href="http://wordpress.org">WordPress </a> &amp; <a href="http://mootools.net/" title="Mootools JavaScript Framework">MooTools</a>, customized by geeksforgeeks team </div>
			  
		   <div class="clear"></div>						                            
		   
		</div> <!--end footer-->  
        
		        <script type="text/javascript">
        // <![CDATA[
        var disqus_shortname = 'geeksforgeeks';
        (function () {
            var nodes = document.getElementsByTagName('span');
            for (var i = 0, url; i < nodes.length; i++) {
                if (nodes[i].className.indexOf('dsq-postid') != -1) {
                    nodes[i].parentNode.setAttribute('data-disqus-identifier', nodes[i].getAttribute('data-dsqidentifier'));
                    url = nodes[i].parentNode.href.split('#', 1);
                    if (url.length == 1) { url = url[0]; }
                    else { url = url[1]; }
                    nodes[i].parentNode.href = url + '#disqus_thread';
                }
            }
            var s = document.createElement('script'); 
            s.async = true;
            s.type = 'text/javascript';
            s.src = '//' + disqus_shortname + '.disqus.com/count.js';
            (document.getElementsByTagName('HEAD')[0] || document.getElementsByTagName('BODY')[0]).appendChild(s);
        }());
        // ]]>
        </script>
        <script type='text/javascript' src='http://d2o58evtke57tz.cloudfront.net/wp-content/plugins/syntaxhighlighter/syntaxhighlighter3/scripts/shCore.js?ver=3.0.9b'></script>
<script type='text/javascript' src='http://d2o58evtke57tz.cloudfront.net/wp-content/plugins/syntaxhighlighter/syntaxhighlighter3/scripts/shBrushCpp.js?ver=3.0.9b'></script>
<script type='text/javascript'>
	(function(){
		var corecss = document.createElement('link');
		var themecss = document.createElement('link');
		var corecssurl = "http://d2o58evtke57tz.cloudfront.net/wp-content/plugins/syntaxhighlighter/syntaxhighlighter3/styles/shCore.css?ver=3.0.9b";
		if ( corecss.setAttribute ) {
				corecss.setAttribute( "rel", "stylesheet" );
				corecss.setAttribute( "type", "text/css" );
				corecss.setAttribute( "href", corecssurl );
		} else {
				corecss.rel = "stylesheet";
				corecss.href = corecssurl;
		}
		document.getElementsByTagName("head")[0].insertBefore( corecss, document.getElementById("syntaxhighlighteranchor") );
		var themecssurl = "http://d2o58evtke57tz.cloudfront.net/wp-content/plugins/syntaxhighlighter/syntaxhighlighter3/styles/shThemeDefault.css?ver=3.0.9b";
		if ( themecss.setAttribute ) {
				themecss.setAttribute( "rel", "stylesheet" );
				themecss.setAttribute( "type", "text/css" );
				themecss.setAttribute( "href", themecssurl );
		} else {
				themecss.rel = "stylesheet";
				themecss.href = themecssurl;
		}
		//document.getElementById("syntaxhighlighteranchor").appendChild(themecss);
		document.getElementsByTagName("head")[0].insertBefore( themecss, document.getElementById("syntaxhighlighteranchor") );
	})();
	SyntaxHighlighter.config.strings.expandSource = '+ expand source';
	SyntaxHighlighter.config.strings.help = '?';
	SyntaxHighlighter.config.strings.alert = 'SyntaxHighlighter\n\n';
	SyntaxHighlighter.config.strings.noBrush = 'Can\'t find brush for: ';
	SyntaxHighlighter.config.strings.brushNotHtmlScript = 'Brush wasn\'t configured for html-script option: ';
	SyntaxHighlighter.defaults['gutter'] = false;
	SyntaxHighlighter.defaults['pad-line-numbers'] = true;
	SyntaxHighlighter.defaults['toolbar'] = false;
	SyntaxHighlighter.all();
</script>
				  
		</div> <!--end wrapper-->
        <div id="ajaxSpinner"></div> <!--For AJAX spinner holder-->
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-12148232-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>


</body>


