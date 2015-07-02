<?php
/** 
 * Manipopulate database with Customer table
 */
class CustomerDB extends Database {
    public function __construct() {
        parent::__construct();
    }
    /**
    * getCustomers
    * get all customer in database
    * @param (no) param
    * @return (CustomerList) object 
    */
    public function getCustomers() {
        $this->db_connect();
        $sql = "SELECT * FROM `customers`";
        $cusList = new CustomerList();
        $result = $this->query($sql);
        while ($row = $this->fetch_assoc($result)) {
            $cus = new Customer();
            $cus->setId($row['customerid']);
            $cus->setName($row['name']);
            $cus->setEmail($row['email']);
            $cus->setAddress($row['address']);
            $cus->setCity($row['city']);
            $cus->setState($row['state']);
            $cus->setZip($row['zip']);
            $cus->setCountry($row['country']);
            $cus->setCreated($row['created']);
            $cus->setGender($row['gender']);
            $cus->setPhone($row['phone']);
            $cus->setAvatar($row['avatar']);
            $cusList->add($cus);
        }
        $this->db_close();
        return $cusList;
    }
    /**
    * insertCustomer
    * get all customer in database
    * @param (Customer) customer object
    * @return (int) object 
    */
    public function insertCustomer($customer) {
        $this->db_connect();
        $sql = "INSERT INTO `titi`.`customers` "
                . "(`customerid`, `name`, `address`, "
                . "`city`, `state`, `zip`, `country`, "
                . "`created`, `gender`, "
                . "`phone`, `email`, `avatar`) "
                . "VALUES ('".$customer->getId()."', '".$customer->getName()."', '".$customer->getAddress()."',"
                . " '".$customer->getCity()."', ".$customer->getStatus().", '".$customer->getZip()."', '".$customer->getCountry()."',"
                . "  '".$customer->getCreated()."', ".$customer->getGender().","
                . " '".$customer->getPhone()."', '".$customer->getEmail()."','".$customer->getAvatar()."');";
        $result = $this->query($sql);
        $this->db_close();
        return $result;
    }
    /**
    * UpdateCustomer
    * update a customer in database
    * @param (Customer) customer object
    * @return (int) object 
    */
    public function updateCustomer($customer) {
        $this->db_connect();
        $sql = "UPDATE `titi`.`customers` SET 
                    `name` = '".$customer->getName()."',
                    `address` = '".$customer->getAddress()."',
                    `city` = '".$customer->getCity()."',
                    `state` = '".$customer->getState()."',
                    `zip` = '".$customer->getZip()."',
                    `country` = '".$customer->getCountry()."',
                    `created` = '".$customer->getCreated()."',
                    `gender` = '".$customer->getGender()."',
                    `phone` = '".$customer->getPhone()."',
                    `email` = '".$customer->getEmail()."',
                    `avatar` = '".$customer->getAvatar()."' WHERE `customers`.`customerid` =".$customer->getId();
        $result = $this->query($sql);
        $this->db_close();
        return $result;
    }
}
