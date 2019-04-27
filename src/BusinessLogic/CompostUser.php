<?php
namespace App\BusinessLogic;

/*
 * A compost user is an individual that requested for a compost site and is or not subscribed to this latter
 * When subscribed, the compost user can use the compost site
 * He/she can be a manager of his/her compost site
 */
class CompostUser
{
    private $id;
    private $firstName;
    private $lastName;
    private $isCompostSiteManager;
    private $compostSiteId;
    private $email;
    private $address;
    private $phone;
    private $subscriptionRequestDate;
    private $subscriptionDate; // if null, the compost user cannot compost
    private $householdNames;
    
    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getFirstName()
    {
        return $this->firstName;
    }

    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    public function getLastName()
    {
        return $this->lastName;
    }

    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    public function getIsCompostSiteManager()
    {
        return $this->isCompostSiteManager;
    }

    public function setIsCompostSiteManager($isCompostSiteManager)
    {
        $this->isCompostSiteManager = $isCompostSiteManager;
    }

    public function getCompostSiteId()
    {
        return $this->compostSiteId;
    }
    
    public function setCompostSiteId($id)
    {
        if($id != null && $this->compostSiteId != null)
        {
            throw Exception("A compost user can't subscribe to several compost sites. Please unsubscribe first");
        }
        else if ($id == null && $this->compostSiteId == null)
        {
            throw Exception("The compost user has no subscription, can't unsubscribe");
        }
        else
        {
            $this->compostSiteId = $id;
        }
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getAddress()
    {
        return $this->address;
    }

    public function setAddress($address)
    {
        $this->address = $address;
    }

    public function getPhone()
    {
        return $this->phone;
    }

    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    public function getSubscriptionRequestDate()
    {
        return $this->subscriptionRequestDate;
    }

    public function setSubscriptionRequestDate($subscriptionRequestDate)
    {
        if($this->subscriptionDate != null && $subscriptionRequestDate > $this->subscriptionDate)
        {
            throw Exception("Subscription request date can't be later than subscription date");
        }
        else
        {
            $this->subscriptionRequestDate = $subscriptionRequestDate;
        }
    }

    public function getSubscriptionDate()
    {
        return $this->subscriptionDate;
    }

    public function setSubscriptionDate($subscriptionDate)
    {
        if($subscriptionDate != null && $this->subscriptionRequestDate > $subscriptionDate)
        {
            throw Exception("Subscription request date can't be later than subscription date");
        }
        else
        {
            $this->subscriptionDate = $subscriptionDate;
        }
    }

    public function getHouseholdNames()
    {
        return $this->householdNames;
    }

    public function setHouseholdNames($householdNames)
    {
        $this->householdNames = $householdNames;
    }
}
