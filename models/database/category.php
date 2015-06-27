<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class CategoryDB extends Database {
    private $insertId;
    /**
     * getInsertId
     * @return  string Id Category new
     * **/
    public function getInsertId() {return $this->insertId;}
    public function setInsertId($insertId) {$this->insertId = $insertId;}
    
    public function __construct() {
        parent::__construct();
    }
    /**
    * getAllCategories()
    *  get all categories => show 
    * @param (none) no param
    * @return (CategoryList) object 
    */
    public function getCategoies() {
        $this->db_connect();
        $sql = "SELECT * FROM `categories`";
        $catList = new CategoryList();
        $result = $this->query($sql);
        while ($row = $this->fetch_assoc($result)) {
            $cat = new Category();
            $cat->setCatid($row['catid']);
            $cat->setCatname($row['catname']);
            $cat->setModified($row['modified']);
            $cat->setCreated($row['created']);
            $cat->setAuthor($row['author']);
            $cat->setDescription($row['description']);
            $cat->setParentId($row['parentid']);
            $cat->setStatus($row['status']);
            $catList->add($cat);
        }
        $this->db_close();
        return $catList;
    }
    /**
    * addCategory()
    *  add a category in database 
    * @param (category) category object
    * @return (boolean) object 
    */
    public function addCategory($category) {
        // check category
        //if (!is_a($category, 'Category')) return false;
        $this->db_connect();
        $sql = "INSERT INTO `categories` "
                . "(`catid`, `catname`, `modified`, `created`, `author`, `description`, `status`,`parentid`) "
                . "VALUES ('', '".$category->getCatname()."', '".$category->getModified()."', "
                . " '".$category->getCreated()."', '".$category->getAuthor()."', '".$category->getDescription()."',"
                . " '".$category->getStatus()."','".$category->getParentid()."')";
        $result = $this->query($sql);
        $id = mysql_insert_id();
        $this->setInsertId($id);
        $this->db_close();
        if ($result) return true;
        return false;
    }
}


