<?php
include_once "StopWatch.php";
$time = new StopWatch();
$time ->start();
$time ->sum();
echo '<br>';
$time->stop();
echo $time->getElapsedTime();
