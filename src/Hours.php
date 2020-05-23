<?php


namespace Jbevanac\TimeInterface;


class Hours implements TimeInterface
{
    private float $hours;
    const IN_HOURS = 1;
    const IN_MINUTES = 60;
    const IN_SECONDS = 3600;

    /* CREATE HOURS */
    public function __construct(float $hours)
    {
        $this->hours = $hours;
    }
    public static function create(float $hours) : TimeInterface
    {
        return new Hours($hours);
    }
    public static function createFromHours(float $hours) : TimeInterface{
        return new Hours($hours);
    }
    public static function createFromMinutes(float $minutes): TimeInterface
    {
        return new Hours($minutes/self::IN_MINUTES);
    }
    public static function createFromSeconds(float $seconds) : TimeInterface{
        return new Hours(Seconds::inHours($seconds));
    }
    /* GET */
    public function getHours(): float
    {
        return $this->hours;
    }
    public function getMinutes(): float
    {
        return $this->hours * self::IN_MINUTES;
    }
    public function getSeconds(): float
    {
        return round($this->hours * self::IN_SECONDS);
    }
    /* STATIC */
    public static function inHours(float $hours) : float {
        return $hours;
    }
    public static function inMinutes(float $hours) : float{
        return $hours * Hours::IN_MINUTES;
    }
    public static function inSeconds(float $hours) : float{
        return round($hours * Hours::IN_SECONDS);
    }
}