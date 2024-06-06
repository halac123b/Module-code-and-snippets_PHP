<?php

class Circle implements ShapeInterface
{
  public $radius;

  public function __constructor($radius)
  {
    $this->radius = $radius;
  }

  public function area()
  {
    return pi() * pow($this->radius, 2);
  }
}
