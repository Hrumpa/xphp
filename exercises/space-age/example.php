<?php

class SpaceAge
{
    public $seconds;

    const EARTH_YEAR_IN_SECONDS = 31557600;
    const MERCURY_YEAR_IN_EY    = 0.2408467;
    const VENUS_YEAR_IN_EY      = 0.61519726;
    const MARS_YEAR_IN_EY       = 1.8808158;
    const JUPITER_YEAR_IN_EY    = 11.862615;
    const SATURN_YEAR_IN_EY     = 29.447498;
    const URANUS_YEAR_IN_EY     = 84.016846;
    const NEPTUNE_YEAR_IN_EY    = 164.79132;

    public function __construct($seconds)
    {
        $this->seconds = $seconds;
    }
    
    public function seconds()
    {
        return $this->seconds;
    }

    public function earth()
    {
        return $this->seconds / self::EARTH_YEAR_IN_SECONDS;
    }

    public function mercury()
    {
        return $this->earth() / self::MERCURY_YEAR_IN_EY;
    }

    public function venus()
    {
        return $this->earth() / self::VENUS_YEAR_IN_EY;
    }

    public function mars()
    {
        return $this->earth() / self::MARS_YEAR_IN_EY;
    }

    public function jupiter()
    {
        return $this->earth() / self::JUPITER_YEAR_IN_EY;
    }

    public function saturn()
    {
        return $this->earth() / self::SATURN_YEAR_IN_EY;
    }

    public function uranus()
    {
        return $this->earth() / self::URANUS_YEAR_IN_EY;
    }

    public function neptune()
    {
        return $this->earth() / self::NEPTUNE_YEAR_IN_EY;
    }
}
