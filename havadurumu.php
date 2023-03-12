<?php

$api_key = 'YOUR_API_KEY'; // API anahtarınızı buraya girin
$city = 'Istanbul'; // Hava durumu verilerini almak istediğiniz şehrin adını buraya girin

$url = "http://api.openweathermap.org/data/2.5/weather?q=$city&appid=$api_key";

$json_data = file_get_contents($url);
$data = json_decode($json_data, true);

$temp = $data['main']['temp'];
$description = $data['weather'][0]['description'];
$humidity = $data['main']['humidity'];
$wind_speed = $data['wind']['speed'];

echo "Sıcaklık: " . round($temp - 273.15) . "°C<br>";
echo "Hava Durumu: " . ucfirst($description) . "<br>";
echo "Nem: " . $humidity . "%<br>";
echo "Rüzgar Hızı: " . $wind_speed . " m/s<br>";

?>
