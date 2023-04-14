<?php

namespace Drill\ActionFigures\Actions;

interface Rotatable
{
  /**
   * Rotate the object clockwise (positive integer) and counterclockwise (negative integer)
   */
  public function rotate(int $degrees) : self;
}