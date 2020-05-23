<?php
namespace Jbevanac\TimeInterface;
require "src/TimeInterface.php";
require "src/Hours.php";
require "src/Minutes.php";
require "src/Seconds.php";

$dateTime = new \DateTime("now");

echo Hours::fromDateTime($dateTime) . " Hours<br>";
echo Minutes::fromDateTime($dateTime) . " Minutes<br>";
echo Seconds::fromDateTime($dateTime) . " Seconds<br>";
echo "<br>";

$time = Hours::createFromHours(20);
echo $time->getHours() . " Hours<br>";
echo $time->getMinutes() . " Minutes<br>";
echo $time->getSeconds() . " Seconds<br>";
echo "<br>";

$time = Minutes::createFromMinutes(1200);
echo $time->getHours() . " Hours<br>";
echo $time->getMinutes() . " Minutes<br>";
echo $time->getSeconds() . " Seconds<br>";
echo "<br>";

$time = Seconds::createFromSeconds(72000);
echo $time->getHours() . " Hours<br>";
echo $time->getMinutes() . " Minutes<br>";
echo $time->getSeconds() . " Seconds<br>";
echo "<br>";

echo 20 * HOURS::IN_SECONDS . " Seconds<br>";