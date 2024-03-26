<?php
header_remove( 'X-Powered-By' );
header( 'Cache-control: none' );
header( 'Pragma: no-cache' );
header( 'Content-Type-Options: nosniff' );
header( 'X-Content-Type-Options: nosniff' );
header( 'XSS-Protection: 1; mode=block' );
header( 'X-XSS-Protection: 1; mode=block' );
header( 'Vary: Accept-Encoding' );
header( 'Cache-control: no-store, no-cache, private, must-revalidate, max-age=0' );
header( 'Expires: no-cache' );
header( 'Pragma: no-cache' );
header( 'Host: 127.0.0.1' );
header( 'viewport: width=device-width' );
header( 'Accept-Language: en-US,en;q=0.5' );
header( 'Connection: Keep-alive' );
header( 'Referrer-Policy:  same-origin' );
header( 'author: Morgan Shatee Byers' );
header( 'description: Self hosted webserver developer testing' );
header( 'keywords: morgansbyers' );
?>
<meta name="viewport" content="width=device-width">
<meta http-equiv="Cache-Control" content="private, no-cache, no-store, must-revalidate, pre-check=0, post-check=0, max-age=0, s-maxage=0"/>
	<div id="&#x70;&#x61;&#x67;&#x65;&#x2D;&#x77;&#x72;&#x61;&#x70;">
		<h1>&#x46;&#x6F;&#x72;&#x6D;&#x20;&#x52;&#x65;&#x73;&#x75;&#x6C;&#x74;&#x73;</h1>		
        <?php 
		
            $answer1 = $_POST['secure-form-answer'];        
            $totalCorrect = 0;           
            if ($answer1 == "Human") { $totalCorrect++; }            
            echo "<div id='&#x72;&#x65;&#x73;&#x75;&#x6C;&#x74;&#x73;'>$totalCorrect / &#x31;&#x20;&#x63;&#x6F;&#x72;&#x72;&#x65;&#x63;&#x74;</div>";           
        ?><br>
	<a href="../index.html">&#x45;&#x6E;&#x74;&#x65;&#x72; this website</a>
	</div>
	<a rel="nofollow" style="display:none;" href="/blackhole/" title="Do NOT follow this link or you will be temporarily banned from the site! The blackhole.dat file can lift ban"><img src="/__utm.gif" alt="" /></a>
