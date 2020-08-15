<?php

$stream_url = "https://live.karwan.tv/karwan.tv/waar-tv_1/chunks.m3u8?nimblesessionid=1089564&wmsAuthSign=c2VydmVyX3RpbWU9OC8xNS8yMDIwIDQ6MjA6MzkgUE0maGFzaF92YWx1ZT0rNzljWFVaMkRxYmhJU3h6azg2NVFRPT0mdmFsaWRtaW51dGVzPTIw"; // scraping with web page use curl in php

header('Content-Type: application/octet-stream');
echo "#EXTM3U\n";
echo "#EXTINF:-1," . $stream_name . "\n";
echo $stream_url;
?>
