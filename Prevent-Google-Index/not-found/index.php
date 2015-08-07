<?php
	//Determine what HTTP protocol to use
	$protocol = "HTTP/1.0";
	if ( "HTTP/1.1" == $_SERVER["SERVER_PROTOCOL"] ){
		$protocol = "HTTP/1.1";
	}

	//Sends Header Responses
	header( "$protocol 404 Not Found", true, 404 );
	header("X-Robots-Tag: noindex, nofollow", true );
	
	?><html>
<head>
	<meta name="googlebot-news" content="noindex" />
	<meta name="ROBOTS" content="NOINDEX,NOFOLLOW" />
	<title>Sorry, Page not found</title>
	
</head>
<body>
	<h1>Sorry, Page not found</h1>
	<p>
	We apologize but this page is not available. Either the page is not found or it has been removed.
	</p>
</body>
</html>