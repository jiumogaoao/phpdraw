<?php
$im=imagecreate(670,500); 
$white = imagecolorallocate($im, 0xFF, 0xFF, 0xFF); 
$g = imagecolorallocate($im, 0x00, 0x00, 0x00); 
$time = 10;
$pointArry=[
[20,0,30,10,20,62,50,45,70,45,54],
[20,0,30,10,20,62,50,45,70,45,54],
[20,0,30,10,20,62,50,45,70,45,54],
[20,0,30,10,20,62,50,45,70,45,54],
[20,0,30,10,20,62,50,45,70,45,54],
[20,0,30,10,20,62,50,45,70,45,54],
[20,0,30,10,20,62,50,45,70,45,54],
[20,0,30,10,20,62,50,45,70,45,54],
[20,0,30,10,20,62,50,45,70,45,54],
[20,0,30,10,20,62,50,45,70,45,54],
[20,0,30,10,20,62,50,45,70,45,54],
[20,0,30,10,20,62,50,45,70,45,54]
];
for ($i=0;$i<count($pointArry);$i++){
	for ($y= 0;$y<count($pointArry[$i]);$y++){
		$lasttime=0;
		if($y-1>=0){
			$lasttime=$y-1;
			}
		$offset=0;
		if($y-1>0){
			$offset=$y-1;
			}
		ImageLine($im,$lasttime*$time,$pointArry[$i][$offset]+($i*100),$time*$y,$pointArry[$i][$y]+($i*100),  $g);
		}
	}
header("Content-type: image/png"); 
imagepng($im);
?>