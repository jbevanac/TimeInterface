<?php
namespace Jbevanac\TimeInterface;

class Minutes implements TimeInterface
{
    private float $minutes;
    const IN_HOURS = 0.016666666666667;
    const IN_MINUTES = 1;
    const IN_SECONDS = 60;

    /* CREATE MINUTES */
    public function __construct(float $minutes)
    {
        $this->minutes = $minutes;
    }

    /**
     * Sets Value of Minutes
     * @param float $minutes
     */
    public function setMinutes(float $minutes): void
    {
        $this->minutes = $minutes;
    }
    public static function create(float $minutes) : TimeInterface
    {
        return new Minutes($minutes);

    }
    public static function createFromHours(float $hours) : TimeInterface{
        return new Minutes(Hours::inMinutes($hours));
    }
    public static function createFromMinutes(float $minutes): TimeInterface
    {
        return new Minutes($minutes);
    }
    public static function createFromSeconds(float $seconds) : TimeInterface{
        return new Minutes(Seconds::inMinutes($seconds));
    }
    /* GET */
    public function getHours(): float
    {
        return $this->minutes * self::IN_HOURS;
    }
    public function getMinutes(): float
    {
        return $this->minutes;
    }
    public function getSeconds(): float
    {
        return round($this->minutes * self::IN_SECONDS);
    }
    /* STATIC */
    public static function fromDateTime(\DateTimeInterface $dateTime): float
    {
        $hours = $dateTime->format("H");
        $minutes = $dateTime->format("i");
        return floatval(Hours::inMinutes($hours)) + floatval($minutes);
    }

    public static function inHours(float $minutes) : float {
        return $minutes * Minutes::IN_HOURS;
    }
    public static function inMinutes(float $minutes) : float{
        return $minutes;
    }
    public static function inSeconds(float $minutes) : float{
        return round($minutes * Minutes::IN_SECONDS);
    }
}