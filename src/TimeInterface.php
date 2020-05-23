<?php
namespace Jbevanac\TimeInterface;


interface TimeInterface {
    /* CREATE */
    public function __construct(float $time);

    /* STATIC CONSTRUCTORS */
    public static function create(float $time) : TimeInterface;
    public static function createFromHours(float $time) : TimeInterface;
    public static function createFromMinutes(float $time) : TimeInterface;
    public static function createFromSeconds(float $time) : TimeInterface;
    /* GET */
    public function getHours() : float;
    public function getMinutes() : float;
    public function getSeconds() : float;
    /* STATIC */
    public static function inHours(float $time) : float;
    public static function inMinutes(float $time) : float;
    public static function inSeconds(float $time) : float;
}