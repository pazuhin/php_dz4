<?php
namespace App\Classes;
trait TransmissionMode
{
    protected $mode;
    public function getMode()
    {
        return $this->mode;
    }
    public function setMode($mode)
    {
        $this->mode = $mode;
        if ($mode == 'forward') {
            echo 'Режим езды вперед' . "<br>";
        } else {
            echo 'Режим езды назад' . "<br>";
        }
    }
}
