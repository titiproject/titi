<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Product {
    private $proid;
    private $proname;
    private $image;
    private $price;
    private $modified;
    private $created;
    private $author;
    private $description;
    private $catid;
    private $status;

    public function getProid() {return $this->proid;}
    public function getProname() {return $this->proname;}
    public function getImage() {return $this->image;}
    public function getPrice() {return $this->price;}
    public function getCreated() {return $this->created;}
    public function getModified() {return $this->modified;}
    public function getCatid() {return $this->catid;}  
    public function getDescription() {return $this->description;}
    public function getAuthor() {return $this->author;}        
    public function getStatus() {return $this->status;}
    
    public function setProid($proid) { $this->proid = $proid;}    
    public function setProname($proname) { $this->proname = $proname;}
    public function setCreated($created) { $this->created = $created;}
    public function setModified($modified) { $this->modified = $modified;}    
    public function setCatid($catid) { $this->catid = $catid;}    
    public function setDescription($description) { $this->description = $description;}
    public function setAuthor($author) { $this->author = $author;}
    public function setStatus($status) { $this->status = $status;}
    public function setImage($image) { $this->image = $image;}
    public function setPrice($price) { $this->price = $price;}
    
    
    public function __construct() {
        $this->setCreated(date("Y-m-d H:i:s"));
        $this->setModified(date("Y-m-d H:i:s"));
        $this->setStatus('1');
    }
    
    /**
    * equals($obj1, $obj2)
    * check $obj1 and $obj2 is equals
    * @param (object) $obj1 contain object
    * @param (object) $obj2 contain object
    * @return (boolean) true or false 
    */
    public static function equals($obj1, $obj2) {
        if (is_a($obj1, 'Product') && is_a($obj2, 'Product')) {
            if (trim($obj1->getProid()) == trim($obj2->getProid())) {return true;}
            return false;
        } 
        return false;
    }
    
    public function __toString() {
        return "Product['proid'=>'".$this->getProid()."','proname'=>'".$this->getProname()."', 'modified'=>'".$this->getModified()
                .",'price'=>'".$this->getPrice()."'"
                .",'created'=>'".$this->getCreated()."'"
                .",'modified'=>'".$this->getModified()."'"
                .",'catid'=>'".$this->getCatid()."'"
                . "','description'=>'".$this->getDescription()."'"
                . ",'author'=>'".$this->getAuthor().""                
                . "',status'=>'".$this->getStatus()."']";
    }
    
}
/**
 * Contain list customer
 **/
class ProductList {
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
    public function add($product) {
        if (!is_a($product, 'Product')) return false;
        $pro = $this->find($product);
        if (!$pro) {
            $this->list[$product->getProid()] = $product;
            return true;
        }
        return false;
    }
    public function update($product) {
        if (!is_a($product, 'Product')) { return false;}
        $pro = $this->find($pro);
        if ($pro) {
            $this->list[$product->getProid()] = $product;
            return true;
        }
        return false;
    }
    public function remove($product) {
        if (!is_a($product, 'Product')) {return false;}
        $pro = $this->find($product);
        if ($pro) {
            unset($this->list[$pro->getProid()]);
            return true;
        }
        return false;
    }
    /**
     * getlastid()
     * 
     * **/
    public function __toString() {
        $str = "";
        foreach($this->list as $k => $v) {
            $str .= "ProList['Proid'=>'".$k."','Product Object'=>'".$v->__toString()."']<br/>";
        }
        return $str;
    }
    
    /** find($product)
     * @param Product $product object
     * @return Product object
     **/
    public function find($product) {
        if (!is_a($product, 'Product')){ return null;}
        foreach ($this->list as $key => $value) {
            if ($value->getProid() == $product->getProid()) {return $value; }
        }
        return null;
    }
    /** findProductId($id)
     * Lấy product trong ProductList
     * @param  string $id
     * @return Product object
     **/
    public function findProductId($id) {
        foreach ($this->list as $key => $value) {
            if ($value->getProid() == $id)
            {return $value; }
        }
        return null;
    }
    /** getProduct($id)
     * Lấy product trong ProductList
     * @param string id object
     * @return Product object
     **/
    public function getProduct($id) {
        //if (!is_a($category, 'Category')) return null;
        foreach ($this->list as $key => $value) {
            if ($v->getProid() == $id)
            {return $value; }
        }
        return null;
    }
    /**
 * findAttribute()
 *  find attribute 
 * @param (string) $attr 
 * @param (string) $value contain password
 * @return (ProductList) list 
 */
    public function findAttribute($attr, $value) {
        $ds = array();
        foreach($this->list as $k => $v) {
            
        }
    }
/**
 * getProductsActive()
 *  get all Products have status = 1  => show 
 * @param (none) no param
 * @return (CategoryList) object 
 */
    public function getProductsActive() {
        $ds = new CategoryList();
        foreach($this->list as $k => $v) {
        if ($v->getStatus() == '1') { $ds->add($v);}
        }
        return $ds;
    }

}
