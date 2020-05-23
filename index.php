<?php
namespace Jbevanac\TimeInterface;
require "src/TimeInterface.php";
require "src/Hours.php";
require "src/Minutes.php";
require "src/Seconds.php";


$time = Hours::createFromHours(20);
echo $time->getHours() . " Hours<br>";
echo $time->getMinutes() . " Minutes<br>";
echo $time->getSeconds() . " Seconds<br>";
echo "<br>";

$time = Minutes::createFromMinutes(20);
echo $time->getHours() . " Hours<br>";
echo $time->getMinutes() . " Minutes<br>";
echo $time->getSeconds() . " Seconds<br>";
echo "<br>";

$time = Seconds::createFromSeconds(20);
echo $time->getHours() . " Hours<br>";
echo $time->getMinutes() . " Minutes<br>";
echo $time->getSeconds() . " Seconds<br>";
echo "<br>";

echo 20 * HOURS::IN_SECONDS . " Seconds<br>";