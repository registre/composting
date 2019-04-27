<?php
namespace App\BusinessLogic;

/*
 * A compost site is open and usable only during the duties
 * The rest of the time, it's locked
 */
class Duty
{
    private $id;
    private $date;
    private $startHour;
    private $endHour;
    
    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getDate()
    {
        return $this->date;
    }

    public function setDate($date)
    {
        $this->date = $date;
    }

    public function getStartHour()
    {
        return $this->startHour;
    }

    public function setStartHour($startHour)
    {
        $this->startHour = $startHour;
    }

    public function getEndHour()
    {
        return $this->endHour;
    }

    public function setEndHour($endHour)
    {
        $this->endHour = $endHour;
    }
}
