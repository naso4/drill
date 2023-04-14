<?php

namespace Drill\ActionFigures\Actions;

/**
 * Class Move
 */
interface Movable
{
  public function move(int $axisX, int $axisY) : self;

  public function getPosition() : Position;
}