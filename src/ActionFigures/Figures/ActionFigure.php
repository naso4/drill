<?php

namespace Drill\ActionFigures\Figures;

use Drill\ActionFigures\Actions\Movable;
use Drill\ActionFigures\Actions\Position;
use Drill\ActionFigures\Actions\Rotatable;

abstract class ActionFigure implements Figure, Movable, Rotatable
{

  protected Position $position;

  public function move(int $axisX, int $axisY): ActionFigure
  {
    $this->position = $this->position->shift($axisX, $axisY);
    return $this;
  }

  public function rotate(int $degrees): Rotatable
  {
    // TODO: Implement rotate() method.
  }

  public function getPosition(): Position
  {
    return $this->position;
  }
}