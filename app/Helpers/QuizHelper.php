<?php

class QuizHelper
{
  public static function getPercentage($total, $correct)
  {
    $percent = round(($correct * 100) / $total, 2);

    return $percent.'%';
  }
}