<?php
namespace App\Classes;
class TransmissionMechanic
{
    use TransmissionMode;
    public function setSpeedTrans($SpeedTrans)
    {
        $this->SpeedTrans = $SpeedTrans;
        echo 'Передача скорости : ' . $SpeedTrans . "<br>";
    }
    public function getSpeedTrans($SpeedTrans)
    {
        return $this->$SpeedTrans;
    }
}
