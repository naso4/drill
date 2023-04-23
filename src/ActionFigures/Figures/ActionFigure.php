<?php

namespace Drill\ActionFigures\Figures;

use Drill\ActionFigures\Actions\Movable;
use Drill\ActionFigures\Actions\Position;
use Drill\ActionFigures\Actions\Rotatable;
use Drill\ActionFigures\Figures\Exception\UnacceptableAngleException;

abstract class ActionFigure implements Figure, Movable, Rotatable
{

  protected int $rotationAngleDegrees;
  protected Position $position;

  public function move(int $axisX, int $axisY): ActionFigure
  {
    $this->position = $this->position->shift($axisX, $axisY);
    return $this;
  }

  /**
   * @param int $degrees
   * @return Rotatable
   * @throws UnacceptableAngleException
   */
  public function rotate(int $degrees): ActionFigure
  {
    if ($degrees < -360
      || $degrees > 360
    ) {
      throw new UnacceptableAngleException('Rotation angle unacceptable');
    }
    $this->rotationAngleDegrees += $degrees;
    return $this;
  }

  public function getPosition(): Position
  {
    return $this->position;
  }
}