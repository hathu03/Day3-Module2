<?php

class Fan
{
    private $slow;
    private $medium;
    private $fast;
    private $speed;
    private $on;
    private $radius;
    private $color;

    public function __construct()
    {
        $this->slow = 1;
        $this->medium = 2;
        $this->fast = 3;
        $this->speed = $this->slow;
        $this->on = false;
        $this->radius = 5;
        $this->color = 'blue';
    }

    /**
     * @return int
     */
    public function getSlow(): int
    {
        return $this->slow;
    }

    /**
     * @param int $slow
     */
    public function setSlow(int $slow): void
    {
        $this->slow = $slow;
    }

    /**
     * @return int
     */
    public function getMedium(): int
    {
        return $this->medium;
    }

    /**
     * @param int $medium
     */
    public function setMedium(int $medium): void
    {
        $this->medium = $medium;
    }

    /**
     * @return int
     */
    public function getFast(): int
    {
        return $this->fast;
    }

    /**
     * @param int $fast
     */
    public function setFast(int $fast): void
    {
        $this->fast = $fast;
    }

    /**
     * @return int
     */
    public function getSpeed(): int
    {
        return $this->speed;
    }

    /**
     * @param int $speed
     */
    public function setSpeed(int $speed): void
    {
        $this->speed = $speed;
    }

    /**
     * @return false
     */
    public function getOn(): bool
    {
        return $this->on;
    }

    /**
     * @param false $on
     */
    public function setOn(bool $on): void
    {
        $this->on = $on;
    }

    /**
     * @return int
     */
    public function getRadius(): int
    {
        return $this->radius;
    }

    /**
     * @param int $radius
     */
    public function setRadius(int $radius): void
    {
        $this->radius = $radius;
    }

    /**
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * @param string $color
     */
    public function setColor(string $color): void
    {
        $this->color = $color;
    }
    public function toString() {
        if ($this->on) {
            echo $this->speed.', '.$this->color.', '.$this->radius.', '.'fan is on';
        } else {
            echo $this->speed.', '.$this->color.', '.$this->radius.', '.'fan is off';
        }
    }
}