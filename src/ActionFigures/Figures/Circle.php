<?php

namespace Drill\ActionFigures\Figures;

class Circle extends ActionFigure
{

  private int $radius;

  /**
   * @param int $radius
   */
  public function __construct(int $radius)
  {
    $this->radius = $radius;
  }

  public function getArea(): float
  {
    return pow($this->radius, 2) * pi();
  }
}