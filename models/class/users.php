<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class User extends Customer {
    private $role;
    /*
    public function getId() {return $this->id;}
    public function getName() {return $this->name;}
    public function getGender() {return $this->gender;}
    public function getAddress() {return $this->address;}
    public function getPhone() {return $this->phone;}
    public function getEmail() {return $this->email;}*/
    public function getRole() {return $this->role;}
    
    /*
    public function setId($id) { $this->id = $id;}    
    public function setName($name) { $this->name = $name;}
    public function setGender($gender) { $this->gender = $gender;}
    public function setAddress($address) { $this->address = $address;}
    public function setPhone($phone) { $this->phone = $phone;}
    public function setEmail($email) { $this->email = $email;}*/
    public function setRole($role) { $this->role = $role;}
    
    public function __construct() { 
        parent::__construct();
    }
    public function __toString() {
        return "Users['id'=>'".$this->getId()."','name'=>'".$this->getName()."', 'gender'=>'".$this->getGender()."','address'=>'".$this->getAddress()."',"
                . "'phone'=>'".$this->getPhone()."','email'=>'".$this->getEmail()."',"
                . "'role'=>'".$this->getRole()."']";
    }
}
