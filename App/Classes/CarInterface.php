<?php
namespace App\Classes;
interface CarInterface
{
    const DIRECTION_FORWARD = 'forward';
    const DIRECTION_BACKWARD = 'backward';

    public function move($distance, $speed, $direction);
}