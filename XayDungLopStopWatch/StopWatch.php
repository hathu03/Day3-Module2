<?php

class StopWatch
{
    private $startTime;
    private $endTime;

    public function __construct()
    {
        $this->startTime = 0;
        $this->endTime = 0;
    }

    public function getStartTime()
    {
        return $this->startTime;
    }
    public function getEndTime()
    {
        return $this->endTime;
    }

    public function setStartTime($startTime)
    {
        $this->startTime;
        return $this;
    }

    public function setEndTime($endTime)
    {
        $this->endTime = $endTime;
        return $this;
    }

    public function start()
    {
        $this->startTime = microtime(true);
    }

    public function stop()
    {
        $this->setEndTime = microtime(true);
    }

    public function getElapsedTime()
    {
        return $this->endTime - $this->startTime ;
    }
    function sum() {
        $sum = 0;
        for ($i=0; $i<1000; $i++) {
            $sum+= $i;
        }
        echo $sum;
    }
    

}