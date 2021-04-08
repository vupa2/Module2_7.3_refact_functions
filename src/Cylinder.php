<?php

/**
 * Created by PhpStorm.
 * User: phanluan
 * Date: 26/10/2018
 * Time: 22:50
 */
class Cylinder
{
    public function getBaseArea($radius)
    {
        return pi() * pow($radius, 2);
    }

    public function getPerimeter($radius)
    {
        return 2 * pi() * $radius;
    }
    
    public function getVolume($radius, $height)
    {
        return $this->getPerimeter($radius) * $height + 2 * $this->getBaseArea($radius);
    }
}
