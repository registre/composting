<?php
namespace App\BusinessLogic;

/*
 * A compost site is where the compost users compost
 */
class CompostSite
{
    private $id;
    private $name;
    private $address;
    private $defaultStartHour;
    private $defaultEndHour;
    private $generalInformationHtml;
    private $userCapacity; // maximum number of compost users
    
    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getAddress()
    {
        return $this->address;
    }

    public function setAddress($address)
    {
        $this->address = $address;
    }

    public function getDefaultStartHour()
    {
        return $this->defaultStartHour;
    }

    public function setDefaultStartHour($defaultStartHour)
    {
        $this->defaultStartHour = $defaultStartHour;
    }

    public function getDefaultEndHour()
    {
        return $this->defaultEndHour;
    }

    public function setDefaultEndHour($defaultEndHour)
    {
        $this->defaultEndHour = $defaultEndHour;
    }

    public function getGeneralInformationHtml()
    {
        return $this->generalInformationHtml;
    }

    public function setGeneralInformationHtml($generalInformationHtml)
    {
        $this->generalInformationHtml = $generalInformationHtml;
    }
    
    public function getUserCapacity()
    {
        return $this->userCapacity;
    }

    public function setUserCapacity($userCapacity)
    {
        $this->userCapacity = $userCapacity;
    }
}
