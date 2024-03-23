<?php
header_remove( 'X-Powered-By' );
header( 'Content-Type-Options: nosniff' );
header( 'X-Content-Type-Options: nosniff' );
header( 'XSS-Protection: 1; mode=block' );
header( 'X-XSS-Protection: 1; mode=block' );
header( 'Frame-Options: Deny' );
header( 'X-Frame-Options: Deny' );
header( 'Cache-Control: no-store, no-cache, must-revalidate');
header( 'Expires: no-cache' );
header( 'Pragma: no-cache' );
//header( 'Content-Security-Policy: default-src "self";');
header( 'Referrer-Policy:  same-origin' );
//include(realpath(getenv('DOCUMENT_ROOT')) .'/blackhole/blackhole.php');
//header( 'Strict-Transport-Security: max-age=31536000; includeSubDomains; preload' );
//header( 'google-site-verification: ' );
//header( 'msvalidate.01: ' );
//header( 'norton-safeweb-site-verification: ' );
//header( 'wot-verification: ' );
//header( 'author: ' );
//header( 'description: ' );
//header( 'keywords: ' );
//header( 'Expect-CT:  enforce,max-age=30,report-uri=""' );
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
	<a href="/main.php">&#x45;&#x6E;&#x74;&#x65;&#x72; this website</a>
	</div>
	<a rel="nofollow" style="display:none;" href="/blackhole/" title="Do NOT follow this link or you will be temporarily banned from the site! The blackhole.dat file can lift ban"><img src="/__utm.gif" alt="" /></a>
