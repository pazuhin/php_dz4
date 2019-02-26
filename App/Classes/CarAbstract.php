<?php
namespace App\Classes;
abstract class CarAbstract
{
    protected $engine;
    protected $transmission;
    protected $distanceTraveled = 0;
    const TYPE_TRANSMISSION_MECHANIC = 1;
    const TYPE_TRANSMISSION_AUTO = 0;

    public function __construct($power, $transmission)
    {
        $this->engine = new Engine($power);
        switch ($transmission) {
            case self::TYPE_TRANSMISSION_MECHANIC:
                $this->transmission = new TransmissionMechanic;
                break;
            case self::TYPE_TRANSMISSION_AUTO:
                $this->transmission = new TransmissionAuto;
                break;
            default:
                throw new InvalidArgumentException();
        }
    }
}