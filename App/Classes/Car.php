<?php
namespace App\Classes;
class Car extends CarAbstract implements CarInterface
{
    protected $speed = 20;
    const STEP_MOVE = 10;

    public function move($distance, $speed, $direction)
    {
        $this->engine->on();
        $this->transmission->setMode($direction);
        $gear = 1;
        if ($speed >= 20) {
            $gear = 2;
        }
        if ($this->transmission instanceof TransmissionMechanic) {
            $this->transmission->setSpeedTrans($gear);
        }
        while ($this->distanceTraveled < $distance) {
            $this->distanceTraveled += self::STEP_MOVE;
            echo 'Проехали ' . $this->distanceTraveled . ' метров' . '<br>';
            $this->engine->heat();
        }
        echo 'Общий пробег : ' . $this->distanceTraveled . '<br>';
        $this->engine->off();
        if ($direction = Car::DIRECTION_BACKWARD) {
            $this->distanceTraveled = 0;
        }
    }
}