<?php
include_once 'speedometer.class.php';

$speedometer = new SpeedoMeter();

$speedometer->start();

for($i=0;$i<5;$i++)
	echo "Line_$i\n";

$speedometer->stop();

echo "++Needed time: ".$speedometer->getDiff();
?>