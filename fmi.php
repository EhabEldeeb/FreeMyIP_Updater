<?php
$myUrl = "https://freemyip.com/update?verbose=yes&" . $_SERVER['QUERY_STRING'];
$ch = curl_init($myUrl);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$content = curl_exec($ch);
echo "<pre>$content</pre>";
