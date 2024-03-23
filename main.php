<?php
header_remove( 'X-Powered-By' );
header( 'Content-Type-Options: nosniff' );
header( 'X-Content-Type-Options: nosniff' );
header( 'XSS-Protection: 1; mode=block' );
header( 'X-XSS-Protection: 1; mode=block' );
header( 'Vary: Accept-Encoding' );
header( 'Cache-control: no-store, no-cache, private, must-revalidate, max-age=0' );
header( 'Expires: no-cache' );
header( 'Pragma: no-cache' );
header( 'viewport: width=device-width' );
header( 'Accept-Language: en-US,en;q=0.5' );
header( 'Connection: Keep-alive' );

?>
	
<!DOCTYPE html>
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>RSS Feed Reader</title>

<script src="rssticker.js" type="text/javascript">

/***********************************************
* Advanced RSS Ticker (Ajax invocation)- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* Please keep this notice intact
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for this script and 100s more
***********************************************/

</script>

<style type="text/css">
.bbcclass{
width: 400px;
padding: 6px;
background-color: lightyellow;
border: 1px solid #004A00;
}

.rsstitle{ /*shared class for all title elements in an RSS feed*/
font-weight: bold;
}

.rssdate{ /*shared class for all date elements in an RSS feed*/
color: gray;
font-size: 85%;
}

.rssdescription{ /*shared class for all description elements in an RSS feed*/
}

</style>

</head>
<body>

<div style="height: 225px">
<script type="text/javascript">

document.write("<br />BBC News: (Title+date+description shown)")
new rssticker_ajax("BBC", 1200, "ddbox", "bbcclass", 3500, "date+description")

</script>
</div>

<a rel="nofollow" style="display:none;" href="/blackhole/" title="Do NOT follow this link or you will be temporarily banned from the site! The blackhole.dat file can lift ban"><img src="/__utm.gif" alt="" /></a>

</body>

</html>	