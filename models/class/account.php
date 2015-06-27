<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Account {
    private $id;
    private $username;
    private $email;
    private $password;
    private $status;
    private $lastLogin; 
    
    public function getId() {return $this->id;}
    public function getUsername() {return $this->username;}
    public function getEmail() {return $this->email;}
    public function getPassword() {return $this->password;}
    public function getStatus() {return $this->status;}
    public function getLastLogin() {return $this->lastLogin;}
    
    public function setId($id) { $this->id = $id;}
    public function setUsername($username) { $this->username = $username;}
    public function setEmail($email) { $this->email = $email;}
    public function setPassword($password) { $this->password = $password;}
    public function setStatus($status) { $this->status = $status;}
    public function setLastLogin($lastLogin) { $this->lastLogin = $lastLogin;}
    
    public function __construct() {}
    
    /**
    * equals($obj1, $obj2)
    * check $obj1 and $obj2 is equals
    * @param (object) $obj1 contain object
    * @param (object) $obj2 contain object
    * @return (boolean) true or false 
    */
    public static function equals($obj1, $obj2) {
        if (is_a($obj1, 'Account') && is_a($obj2, 'Account')) {
            if ((trim($obj1->getId()) == trim($obj2->getId()))&& (trim($obj1->getUsername()) == trim($obj2->getUsername())))
                return true;
            if ((trim($obj1->getId()) == trim($obj2->getId()))&& (trim($obj1->getEmail()) == trim($obj2->getEmail())))
                return true;
            return false;
        } 
        return false;
    }
    
    public function __toString() {
        return "Account['id'=>'".$this->getId()."','username'=>'".$this->getUserame()."', 'password'=>'".$this->getPassword()
                .",'email'=>'".$this->getEmail()."','lastLogin'=>'".$this->getLastLogin()."']";
    }
    
}
/**
 * Contain list customer
 **/
class AccountList {
    private $list = null;
    public function __construct() {
        $this->list = array();
    }
    /* return count array */
    public function count() {
        return count($this->list);
    }
    public function add($account) {
        $acc = $this->find($account);
        if (!$acc) {
            $this->list[$account->getId()] = $account;
            return true;
        }
        return false;
    }
    public function update($account) {
        $acc = $this->find($account);
        if ($acc) {
            $this->list[$account->getId()] = $account;
            return true;
        }
        return false;
    }
    public function remove($account) {
        $acc = $this->find($account);
        if ($acc) {
            unset($this->list[$account->getId()]);
            return true;
        }
        return false;
    }
    public function __toString() {
        $str = "";
        foreach($this->list as $k => $v) {
            $str .= "AccountList['Id'=>'".$k."','Account'=>'".$v->__toString()."']<br/>";
        }
        return $str;
    }
    
    /** 
     * @param Customer customer object
     * @return customer object
     **/
    public function find($account) {
        if (!is_a($account, 'Account')) return null;
        foreach ($this->list as $key => $value) {
            if ($value->getId() == $account->getId()
                    || $value->getUsername() == $account->getUsername()
                    || $value->getEmail() == $account->getEmail())
            {return $value; }
        }
        return null;
    }
    /** findAccountId($id)
     * @param string id
     * @return account object
     **/
    public function findAccountId($id) {
        if ($id == '') return null;
        foreach ($this->list as $key => $value) {
            if ($value->getId() == $id) {return $value; }
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
public static function sfind($list,$account) {
    foreach ($list as $key => $value) {
        if ($value->getId() == $account->getId()
                || $value->getUsername() == $account->getUsername()
                || $value->getEmail() == $account->getEmail())
        {return $value;}
    }
    return null;
}
/**
* findAccount($list, $customer)
* find $customer id in $listCustomer
* @param (CustomerList) $list contain list customer
* @param (Customer) $customer contain a customer
* @return (customer) object 
*/
public function findAccount($list,$account) {
    foreach ($list as $key => $value) {
        if ($value->getId() == $account->getId()
                || $value->getUsername() == $account->getUsername()
                || $value->getEmail() == $account->getEmail())
        {return $value;}
    }
    return null;
}
/**
 * getAccountsStatus()
 *  get list Accounts active or not active or archive
 * @param (string) $status save status => 1:active, 0:not, -1:archive
 * @return (boolean) object 
 */
public function getAccountsStatus($status) {
    $list = array();
    foreach($this->list as $k => $v) {
        if ($v->getStatus() == $status) {
            $list[$k]= $v;
        }
    }
    return $list;
}

/**
 * loginUsername()
 * login $login loginUsername to system
 * @param (string) $username contain username
 * @param (string) $password contain password
 * @return (boolean) object 
 */
    public function loginUsername($username,$password) {
        $list = array();
        $list = $this->getAccountsStatus('1');
        $acc = new Account();
        $acc->setUsername($username);
        $acc->setPassword($password);
        $acc = $this->findAccount($list,$acc);
        if ($acc) {
            if ($acc->getPassword() == $password)
                return $acc->getId();
            return 0;
        } 
        return -1;
    }
    /**
 * loginEmail()
 * login $login loginEmail to system
 * @param (string) $email contain email
 * @param (string) $password contain password
 * @return (boolean) object 
 */
    public function loginEmail($email,$password) {
        $list = array();
        $list = $this->getAccountsStatus('1');
        $acc = new Account();
        $acc->setUsername($username);
        $acc->setPassword($password);
        $acc = $this->findAccount($list,$acc);
        if ($acc) {
            if ($acc->getPassword() == $password)
                return $acc->getId();
            return 0;
        } 
        return -1;
    }
}
