<?php

//api openweathermap
$APPID = "746422cd5541efc4f524ab4bc115c58a";
$APIurl = "https://api.openweathermap.org/data/2.5/weather?q=Jakarta&appid=$APPID";

// api youtube
$APPIDYT = "AIzaSyD8qSzPPyFJyPugifji4rc3FcLT8rP5XNA";
$APIyt = "https://www.googleapis.com/youtube/v3/channels?part=snippet,statistics&id=UCSUWBtaz8MVTFy9GULySSmA&key=$APPIDYT";

$json = file_get_contents($APIurl);
$data = json_decode($json, true);

?>