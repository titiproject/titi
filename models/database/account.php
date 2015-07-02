<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class AccountDB extends Database {
    public function __construct() {
        parent::__construct();
    }
    public function getAccounts() {
        $this->db_connect();
        $sql = "SELECT * FROM `accounts`";
        $accList = new AccountList();
        $result = $this->query($sql);
        while ($row = $this->fetch_assoc($result)) {
            $acc = new Account();
            $acc->setId($row['id']);
            $acc->setUsername($row['username']);
            $acc->setEmail($row['email']);
            $acc->setPassword($row['password']);
            $acc->setLastLogin($row['lastLogin']);
            $acc->setStatus($row['status']);
            $accList->add($acc);
        }
        $this->db_close();
        return $accList;
    }
/**
 * updateAccount()
 *  update Accounts in server
 * @param (account) object 
 * @return (int) -1: 
 */
    public function updateAccount($account) {
        
    }
}

