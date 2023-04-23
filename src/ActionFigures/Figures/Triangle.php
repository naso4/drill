<?php

namespace Drill\ActionFigures\Figures;

class Triangle extends ActionFigure
{

  private int $height;

  private int $base;

  /**
   * @param int $height
   * @param int $base
   */
  public function __construct(int $height, int $base)
  {
    $this->height = $height;
    $this->base = $base;
  }

  public function getArea(): float
  {
    return $this->base * $this->height * 0.5;
  }
}