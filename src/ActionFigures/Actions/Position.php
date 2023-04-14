<?php

namespace Drill\ActionFigures\Actions;

class Position
{
  private int $axisX;

  private int $axisY;

  public function __construct(int $axisX, int $axisY)
  {
    $this->axisX = $axisX;
    $this->axisY = $axisY;
  }

  public function shift(int $axisX, int $axisY) : Position
  {
    return new Position($this->axisX += $axisX, $this->axisY += $axisY);
  }
}