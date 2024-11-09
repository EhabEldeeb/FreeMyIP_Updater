<?php
$requestIP = $_SERVER['REMOTE_ADDR'];
$myUrl = "https://freemyip.com/update?";
if (isset($_GET['myip']) && $_GET['myip'] == "")
  $_GET['myip'] = $_SERVER['REMOTE_ADDR'];
$_GET['verbose'] = 'yes';
$QueryString = [];
foreach ($_GET as $k => $v) {
  $QueryString[] = $k . "=" . urlencode($v);
}
$myUrl .= implode("&", $QueryString);
$ch = curl_init($myUrl);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$content = curl_exec($ch);
echo "<pre>$content</pre>";
