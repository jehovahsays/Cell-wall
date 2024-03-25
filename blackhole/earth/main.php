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
<title>Command Prompt</title>
<link rel="shortcut icon" href="/blackhole/mediawiki/__utm.gif" type="image/gif"/>
<style>
body {
    margin: 0;            
}
iframe {
    display: block;       
    background: #000;
    border: none;         
    height: 100vh;        
    width: 100vw;
}
</style>

<style>
body {
  margin: 0;
  height: 50vh;
  width: 100vw;
}

.box h2 {
  display: block;
  align-items: center;
  gap: 2px;
}

@keyframes cursor-blink {
  0% {
    opacity: 0;
  }
}

.box h2::after {
  content: "";
  width: 15px;
  height: 20px;
  background: #ec7fff;
  display: inline-block;
  animation: cursor-blink 1.5s steps(2) infinite;
}
</style>

</head>

<body style="
background-color:black;
color:white;">

<div class="container">
  <span class="box">
    <h2>C:\Users\Admin></h2>
<iframe color="white" width="100vw" height="100vh" src="/blackhole/blackhole/blackhole.dat" frameborder="0">
</iframe>
</span>
</div>

<a rel="nofollow" style="display:none;" href="/blackhole/" title="Do NOT follow this link or you will be temporarily banned from the site! The blackhole.dat file can lift ban">
<img src="/blackhole/__utm.gif" alt="" />
</a>

</body>
</html>
