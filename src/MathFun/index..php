<?php

namespace bcgreen24\MathFun;

trait mathfun {
  public static function doubleIt(int $x) : int{
        return $x*2;
    }

    public static function  halveIt(int $x) : int{
        return $x/2;
    }

    public static function  squareIt(int $x) : int{
        return $x^2;
    }
}