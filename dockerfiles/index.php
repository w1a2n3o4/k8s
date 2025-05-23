<?php
$hostname = gethostname();
$ip_server = gethostbyname($hostname);
$client_ip = $_SERVER['REMOTE_ADDR'];
echo  "<h2> This WebPage was created by Kubernetes and Docker</h2>";
echo "<h3> Server (pod) IP Address is: $ip_server</h3>";
#echo "<h3>Client IP Address is: $client_ip</h3>";
?>
