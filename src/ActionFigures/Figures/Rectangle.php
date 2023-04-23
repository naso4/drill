<?php

namespace Drill\ActionFigures\Figures;

class Rectangle extends ActionFigure
{

  private int $width;

  private int $height;

  public function __construct(int $width, int $height)
  {
    $this->width = $width;
    $this->height = $height;
  }

  public function getArea() : float
  {
    return $this->width * $this->height;
  }
}