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

$ip = $localIp = gethostbyname(gethostname());

$handle = fopen("index.log", "a"); //open log file

foreach($_POST as $variable => $value) { //loop through POST vars
fwrite($handle, $variable . "+" . $value . "\r\n");
}
fwrite($handle, "IP: $ip \r\n \r\n");
fclose($handle);

exit;

?>
