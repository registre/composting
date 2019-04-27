<?php
namespace App\BusinessLogic;

/*
 * A duty is managed by one or more duty managers who are subscribed compost users
 * The duty managers unlock the compost site, prepare the tools and ensure the 
 * composting is done well. At the end of the duty, the duty managers tidy up
 * everything and close the compost site.
 */
class DutyManager
{
    private $dutyId;
    private $compostUserId;
    
    public function getDutyId()
    {
        return $this->dutyId;
    }
    
    public function setDutyId($dutyId)
    {
        $this->dutyId = $dutyId;
    }
    
    public function getCompostUserId()
    {
        return $this->compostUserId;
    }
    
    public function setCompostUserId($compostUserId)
    {
        $this->compostUserId = $compostUserId;
    }
}
