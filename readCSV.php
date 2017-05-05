<?php 

$file = fopen('./datasets/csv/worldbank.csv','r');

while ($data = fgetcsv($file)) {
	$goods_list[] = $data;
}
//print_r($goods_list);

//echo json_encode($goods_list);
fclose($file);


$url = "http://apis.map.qq.com/ws/geocoder/v1/?address=北京市海淀区彩和坊路海淀西大街74号&key=OB4BZ-D4W3U-B7VVO-4PJWW-6TKDJ-WPB77";

$html = json_decode(file_get_contents($url));

?>