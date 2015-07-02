<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Customer {
    private $id;
    private $name;
    private $gender;
    private $address;
    private $phone;
    private $email;
    private $state; // Trang thai => 0 lock, 1 unlock
    private $city; // Thanh pho hien tai
    private $zip; // ma zip code
    private $created; // ngay tao
    private $country; // dat nuoc => default: vietnam
    private $avatar;
    
    public function getId() {return $this->id;}
    public function getName() {return $this->name;}
    public function getGender() {return $this->gender;}
    public function getAddress() {return $this->address;}
    public function getPhone() {return $this->phone;}
    public function getEmail() {return $this->email;}
    public function getState() {return $this->state;}
    public function getCity() {return $this->city;}
    public function getZip() {return $this->zip;}
    public function getCreated() {return $this->created;}
    public function getCountry() {return $this->country;}
    public function getAvatar() {return $this->avatar;}
    
    public function setId($id) { $this->id = $id;}
    public function setName($name) { $this->name = $name;}
    public function setGender($gender) { $this->gender = $gender;}
    public function setAddress($address) { $this->address = $address;}
    public function setPhone($phone) { $this->phone = $phone;}
    public function setEmail($email) { $this->email = $email;}
    public function setState($state) { $this->state = $state;}
    public function setCity($city) { $this->city = $city;}
    public function setZip($zip) { $this->zip = $zip;}
    public function setCreated($created) { $this->created = $created;}
    public function setCountry($country) { $this->country = $country;}
    public function setAvatar($avatar) { $this->avatar = $avatar;}
    
    public function __construct() {
        $this->setState('1');
        $this->setCreated(date("Y-m-d h:i:s"));
    }
    
    public static function compare($a, $b) {
        if ($a->getId() > $b->getId()) return 1;
        else if ($a->getId() == $b->getId()) return 0;
        else return -1;
    }
    /**
    * equals($obj1, $obj2)
    * check $obj1 and $obj2 is equals
    * @param (object) $obj1 contain object
    * @param (object) $obj2 contain object
    * @return (boolean) true or false 
    */
    public static function equals($obj1, $obj2) {
        if (is_a($obj1, 'customer') && is_a($obj2, 'customer')) {
            if (trim($obj1->getId()) == trim($obj2->getId()))
                return true;
            return false;
        } 
        return false;
    }
    
    public function __toString() {
        return "Customer['id'=>'".$this->getId()."','name'=>'".$this->getName()."', 'gender'=>'".$this->getGender()."','address'=>'".$this->getAddress()."',"
                . "'phone'=>'".$this->getPhone()."','email'=>'".$this->getEmail()."',"
                . "'avatar'=>'".$this->getAvatar()."']";
    }
    
}
/**
 * Contain list customer
 **/
class CustomerList {
    private $list = null;
    public function __construct() {
        $this->list = array();
    }
    /* return count array */
    public function count() {
        return count($this->list);
    }
    public function add($customer) {
        $cus = CustomerList::sfind($this->list, $customer);
        if (!$cus) {
            $this->list[$customer->getId()] = $customer;
            return true;
        }
        return false;
    }
    public function update($customer) {
        $cus = CustomerList::sfind($this->list, $customer);
        if ($cus) {
            $this->list[$customer->getId()] = $customer;
            return true;
        }
        return false;
    }
    public function remove($customer) {
        $cus = CustomerList::sfind($this->list, $customer);
        if ($cus) {
            unset($this->list[$customer->getId()]);
            return true;
        }
        return false;
    }
    public function __toString() {
        $str = "";
        foreach($this->list as $k => $v) {
            $str .= "CustomerList['Id'=>'".$k."','Customer'=>'".$v->__toString()."']<br/>";
        }
        return $str;
    }
    
    /** 
     * @param Customer customer object
     * @return customer object
     **/
    public function find($customer) {
        foreach ($this->list as $key => $value) {
            if ($value->getId() == $customer->getId()&& $key == $customer->getId())
            {return $value;}
        }
        return null;
    }
    /**
     * findCustomerId($id) find customer follow id
     * @param string id 
     * @return customer object
     **/
    public function findCustomerId($id) {
        foreach ($this->list as $key => $value) {
            if ($key == $id)
            {return $value;}
        }
        return null;
    }

/**
 * sfind($list, $customer)
 * find $customer id in $listCustomer
 * @param (CustomerList) $list contain list customer
 * @param (Customer) $customer contain a customer
 * @return (customer) object 
 */
    public static function sfind($list,$customer) {
        foreach ($list as $key => $value) {
            if ($value->getId() == $customer->getId() && $key == $customer->getId())
            {return $value;}
        }
    }
}
