<?php


namespace Jbevanac\TimeInterface;

use \DateTimeInterface;

class Seconds implements TimeInterface
{
    private float $seconds;
    const IN_SECONDS = 1;
    const IN_MINUTES = 0.016666666666667;
    const IN_HOURS = 0.000277777777778;

    /* CREATE MINUTES */
    public function __construct(float $seconds)
    {
        $this->seconds = $seconds;
    }

    /**
     * Set Value of seconds
     * @param float $seconds
     */
    public function setSeconds(float $seconds): void
    {
        $this->seconds = $seconds;
    }
    public static function create(float $seconds) : TimeInterface
    {
        return new Seconds($seconds);
    }
    public static function createFromHours(float $hours) : TimeInterface{
        return new Seconds(Hours::inSeconds($hours));
    }
    public static function createFromMinutes(float $minutes): TimeInterface
    {
        return new Seconds(Minutes::inSeconds($minutes));
    }
    public static function createFromSeconds(float $seconds) : TimeInterface{
        return new Seconds($seconds);
    }
    /* GET */
    public function getHours(): float
    {
        return round($this->seconds * self::IN_HOURS, 2);
    }
    public function getMinutes(): float
    {
        return $this->seconds * self::IN_MINUTES;
    }
    public function getSeconds(): float
    {
        return $this->seconds;
    }
    /* STATIC */
    public static function fromDateTime(DateTimeInterface $dateTime): float
    {
        $hours = $dateTime->format("H");
        $minutes = $dateTime->format("i");
        return floatval(Hours::inSeconds($hours)) + floatval(Minutes::inSeconds($minutes));
    }

    public static function inHours(float $seconds) : float {
        return round($seconds * Seconds::IN_HOURS, 2);
    }
    public static function inMinutes(float $seconds) : float{
        return $seconds * Seconds::IN_MINUTES;
    }
    public static function inSeconds(float $seconds) : float{
        return $seconds;
    }
}