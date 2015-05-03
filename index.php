<head>

    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />

    <style type="text/css" media="screen">
        @import url('http://d2o58evtke57tz.cloudfront.net/wp-content/themes/minimoo/style.css');
    </style>
    
    <style type="text/css" media="screen">
    
        .post-content {
            font-size: 200%;
        }
    
        h1 {
            font-size: 250%;
        }
    
        p.headings#topic {
            font-size: 250%;
            color: #006600;
        }
    
        p.headings#question {
            font-size: 250%;
            color: #006600;
        }
    
    </style>

    <link rel='stylesheet' id='wp-quicklatex-format-css'  href='http://d2o58evtke57tz.cloudfront.net/wp-content/plugins/wp-quicklatex/css/quicklatex-format.css?ver=4.1.1' type='text/css' media='all' />
    <link rel='stylesheet' id='bbp-default-css'  href='http://d2o58evtke57tz.cloudfront.net/wp-content/plugins/bbpress/templates/default/css/bbpress.css?ver=2.5.6-5643' type='text/css' media='screen' />
    <link rel='stylesheet' id='wp-pagenavi-css'  href='http://d2o58evtke57tz.cloudfront.net/wp-content/plugins/wp-pagenavi/pagenavi-css.css?ver=2.70' type='text/css' media='all' />
    <script type='text/javascript' src='http://d2o58evtke57tz.cloudfront.net/wp-includes/js/jquery/jquery.js?ver=1.11.1'></script>
    <script type='text/javascript' src='http://d2o58evtke57tz.cloudfront.net/wp-includes/js/jquery/jquery-migrate.min.js?ver=1.2.1'></script>
    <script type='text/javascript' src='http://d2o58evtke57tz.cloudfront.net/wp-content/plugins/google-captcha/js/script.js?ver=4.1.1'></script>
    <script type='text/javascript' src='http://d2o58evtke57tz.cloudfront.net/wp-content/plugins/wp-quicklatex/js/wp-quicklatex-frontend.js?ver=1.0'></script>

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
    </script>

    <style type="text/css" id="syntaxhighlighteranchor"></style>
    <meta name="google-site-verification" content="rHK2v8_zzuAZQY8JHAzbllDN8u-aQxcn2Kqnp67Old0" />
</head>

<body>

    <?php
    
        set_time_limit(20000);
        require_once 'htmlpurifier/library/HTMLPurifier.auto.php';
    
        $config = HTMLPurifier_Config::createDefault();
        $purifier = new HTMLPurifier($config);
    
        include('simple_html_dom.php');
        
        $proxyip_with_port_without_protocol = '<proxy_ip>:<port>'; // ex: '192.168.0.1:8080'
        $proxyauth = '<domain_name>\\<username>:<password>'; // ex: 'fb\\sai:alpha'

        $auth = base64_encode($proxyauth);
        
        $aContext = array(
            'http' => array(
                'proxy' => 'tcp://' . $proxyip_with_port_without_protocol,
                'request_fulluri' => true,
                'header' => "Proxy-Authorization: Basic $auth",
            ),
        );

        $cxContext = NULL;

        //$cxContext = stream_context_create($aContext);
    
        $topics = [["Arrays", "c-arrays"], ["Bit Magic", "bit-magic"], ["C C++", "c-puzzles"], ["Articles", "articles"], ["GFacts", "gfact"], ["Linked List", "linked-list"], ["MCQ", "multiple-choice-question"], ["Misc", "c-programs"], ["Output", "program-output"], ["String", "c-strings"], ["Tree", "tree"], ["Graph", "graph"], ["Interview Experiences", "interview-experiences"], ["Advance Data Structures", "advance-data-structures"], ["Dynamic Programming", "dynamic-programming"], ["Greedy Algorithm", "Greedy-Algorithm"], ["Backtracking", "backtracking"], ["Pattern Searching", "pattern-searching"], ["Divide & Conquer", "divide-and-conquer"], ["Mathematical Algorithms", "MathematicalAlgo"], ["Recursion", "recursion"], ["Geometric Algorithms", "geometric-algorithms"]];
        
        $topicCode = NULL;
        $cat_or_tag = NULL;
    
        if(isset($_GET['topic']) && isset($_GET['cat_or_tag'])) {
            $topicCode = $_GET['topic'];
            $cat_or_tag = $_GET['cat_or_tag'];
        }
    
        $id = 1;
        $file = "log.txt";
    
        $topic_headings = [];
        $topic_codes = [];
    
        foreach($topics as $topic) {
            array_push($topic_codes, $topic[1]);
            array_push($topic_headings, $topic[0]);
        }
    
        if ($topicCode == NULL || $cat_or_tag == NULL || !in_array($topicCode, $topic_codes)) {
            echo "Select one of the <b><i>topic_name</i></b> among the following to get all questions of that topic.<br>";
            echo "<h2>Topic names (Catergories):</h2>";
            $i = 0;
            foreach($topic_codes as $topic_code) {
                echo '<a href="javascript:void(0)" onclick=window.open("index.php?topic='. $topic_code . '&cat_or_tag=category")>' . $topic_code . '</a><br>';
                if($i++ == 12) {
                    break;
                }
            }
            echo "<h2>Topic names (Tags):</h2>";
            $i =0;
            foreach($topic_codes as $topic_code) {
                if($i++ > 12) {
                    echo '<a href="javascript:void(0)" onclick=window.open("index.php?topic='. $topic_code . '&cat_or_tag=tag")>' . $topic_code . '</a><br>';
                }
            }
        }
    
        else {
            $page = 50;
            $topic = [$topic_headings[array_search($topicCode, $topic_codes)], $topicCode];
            echo '<p class="headings" id="topic"><b>' . $topic[0] . '</b></p>' . '<br>';
            while($page != 0) {
    
                $topic_url = "http://www.geeksforgeeks.org/$cat_or_tag/$topic[1]/page/$page/";
                $topic_response_httpCode = get_response_http_code($topic_url); //, $proxyip_with_port_without_protocol, $proxyAuth);
                $topic_httpCode = $topic_response_httpCode[1];
                if($topic_httpCode == 200 || $topic_httpCode == 301) {
                    $html = $topic_response_httpCode[0]; //file_get_html($topic_url, false, $cxContext);
    
                    $urls = [];
                    foreach($html->find('h2.post-title') as $e) {
                        $text = $e->innertext . '<br>';
                        $arr = explode("\"", $text);
                        array_unshift($urls, $arr[1]);
                    }

                    foreach($urls as $url) {
                        $url_response_httpCode = get_response_http_code($url);//, $proxyip_with_port_without_protocol, $proxyAuth);
                        $url_httpCode = $url_response_httpCode[1];
                        if($url_httpCode == 200 || $url_httpCode == 301) {
                            $postHtml = $url_response_httpCode[0]; //file_get_html($url, false, $cxContext);
                            foreach($postHtml->find('h2.post-title') as $e2) {
                                $heading = $id . '.&nbsp;&nbsp;' .$e2->innertext;
                                echo '<p class="headings" id="question">' . $heading . '</p>';
                            }
                            foreach($postHtml->find('div.post-content') as $e2) {
                                $text = $e2->outertext . '<br>';
                            }
                            $arr = explode("<script async", $text);
                            $clean_html = $purifier->purify($arr[0]);
                            echo $clean_html;
                            echo "</div>";
                            echo "<br><br><br><br>";
                            $id++;
                        }
                    }
                }
    
                $page--;
    
            }
        }
        
    ?>


    <script type="text/javascript">
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
