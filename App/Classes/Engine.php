<?php
namespace App\Classes;
class Engine
{
    protected $temperature = 0;
    protected $cooler;
    protected $power;
    const STEP_TEMP = 5;
    const MAX_TEMP = 90;
    const COOL_TEMP = 10;

    public function __construct($power)
    {
        $this->power = $power;
        $this->cooler = new Cooler();
    }

    public function heat()
    {
        $this->temperature += self::STEP_TEMP;
        echo '<i>Температура двигателя : </i>' . "<i>$this->temperature</i> &deg;" . '<br>';
        if ($this->temperature >= self::MAX_TEMP) {
            $this->cool();
        }
    }

    public function cool()
    {
        $this->cooler->CoolerOn();
        $this->temperature-=self::COOL_TEMP;
        $this->cooler->CoolerOff();
    }

    public function on()
    {
        echo "<b>Заводим автомобиль</b><br>\n";
    }

    public function off()
    {
        echo "<b>Выключаем двигатель</b><br>\n";
    }
}