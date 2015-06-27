<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Category {
    private $catid;
    private $catname;
    private $modified;
    private $created;
    private $author;
    private $description;
    private $parentid;
    private $status;


    public function getCatid() {return $this->catid;}
    public function getCatname() {return $this->catname;}
    public function getModified() {return $this->modified;}
    public function getCreated() {return $this->created;}
    public function getAuthor() {return $this->author;}
    public function getDescription() {return $this->description;}
    public function getParentId() {return $this->parentid;}
    public function getStatus() {return $this->status;}
    
    public function setCatid($catid) { $this->catid = $catid;}
    public function setCatname($catname) { $this->catname = $catname;}
    public function setModified($modified) { $this->modified = $modified;}
    public function setCreated($created) { $this->created = $created;}
    public function setAuthor($author) { $this->author = $author;}
    public function setDescription($description) { $this->description = $description;}
    public function setParentId($parentid) { $this->parentid = $parentid;}
    public function setStatus($status) { $this->status = $status;}
    
    public function __construct() {
        $this->setCreated(date("Y-m-d H:i:s"));
        $this->setModified(date("Y-m-d H:i:s"));
        $this->setParentId('-1');
    }
    
    /**
    * equals($obj1, $obj2)
    * check $obj1 and $obj2 is equals
    * @param (object) $obj1 contain object
    * @param (object) $obj2 contain object
    * @return (boolean) true or false 
    */
    public static function equals($obj1, $obj2) {
        if (is_a($obj1, 'Category') && is_a($obj2, 'Category')) {
            if (trim($obj1->getCatid()) == trim($obj2->getCatid()))
                return true;
            return false;
        } 
        return false;
    }
    
    public function __toString() {
        return "Category['catid'=>'".$this->getCatid()."','catname'=>'".$this->getCatname()."', 'modified'=>'".$this->getModified()
                .",'created'=>'".$this->getCreated()."','author'=>'".$this->getAuthor().""
                . "','description'=>'".$this->getDescription()."',"
                . "'parentid'=>'".$this->getParentId()."']";
    }
    
}
/**
 * Contain list customer
 **/
class CategoryList {
    private $list = null;
    public function __construct() {
        $this->list = array();
    }
    public function getList() {
        return $this->list;
    }
    /* return count array */
    public function count() {
        return count($this->list);
    }
    public function add($category) {
        if (!is_a($category, 'Category')) return false;
        $cate = $this->find($category);
        if (!$cate) {
            $this->list[$category->getCatid()] = $category;
            return true;
        }
        return false;
    }
    public function update($category) {
        if (!is_a($category, 'Category')) return false;
        $cat = $this->find($category);
        if ($cat) {
            $this->list[$category->getCatid()] = $category;
            return true;
        }
        return false;
    }
    public function remove($category) {
        if (!is_a($category, 'Category')) return false;
        $cat = $this->find($category);
        if ($cat) {
            unset($this->list[$category->getCatid()]);
            return true;
        }
        return false;
    }
    public function __toString() {
        $str = "";
        foreach($this->list as $k => $v) {
            $str .= "CategoryList['Catid'=>'".$k."','Category'=>'".$v->__toString()."']<br/>";
        }
        return $str;
    }
    
    /** 
     * @param Customer customer object
     * @return customer object
     **/
    public function find($category) {
        if (!is_a($category, 'Category')) return null;
        foreach ($this->list as $key => $value) {
            if ($value->getCatid() == $category->getCatid())
            {return $value; }
        }
        return null;
    }
    /** find category id
     * @param  string $id
     * @return category object
     **/
    public function findCategoryId($id) {
        foreach ($this->list as $key => $value) {
            if ($value->getCatid() == $id)
            {return $value; }
        }
        return null;
    }
    /** 
     * @param Customer customer object
     * @return customer object
     **/
    public function getCategory($id) {
        //if (!is_a($category, 'Category')) return null;
        foreach ($this->list as $key => $value) {
            if ($key == $id)
            {return $value; }
        }
        return null;
    }
    /**
 * findAttribute()
 *  find attribute 
 * @param (string) $attr 
 * @param (string) $value contain password
 * @return (CategoryList) list 
 */
    public function findAttribute($attr, $value) {
        $ds = array();
        foreach($this->list as $k => $v) {
            
        }
    }
/**
 * getAllCategories()
 *  get all categories => show 
 * @param (none) no param
 * @return (CategoryList) object 
 */
    public function getCategoriesActive() {
        $ds = new CategoryList();
        foreach($this->list as $k => $v) {
        if ($v->getStatus() == '1') { $ds->add($v);}
        }
        return $ds;
    }

}
