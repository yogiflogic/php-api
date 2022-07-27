<?php

//api openweathermap
$APPID = "Isi Dengan API ID";
$APIurl = "https://api.openweathermap.org/data/2.5/weather?q=Jakarta&appid=$APPID";

// api youtube
$APPIDYT = "Isi Dengan API ID";
$APIyt = "https://www.googleapis.com/youtube/v3/channels?part=snippet,statistics&id=UCSUWBtaz8MVTFy9GULySSmA&key=$APPIDYT";

$json = file_get_contents($APIurl);
$data = json_decode($json, true);

?>