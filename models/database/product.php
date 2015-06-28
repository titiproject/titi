<?php

/* 
 * Connect to database
 */
class ProductDB extends Database {
    private $insertId;
    /**
     * getInsertId
     * @return  string Id Category new
     * **/
    public function getInsertId() {return $this->insertId;}
    public function setInsertId($insertId) {$this->insertId = $insertId;}
    /**
     * ProductDB
     * manpopulating table products in database titi
     * @param none  Description 
     * **/
    public function __construct() {
        parent::__construct();
    }
    /**
    * getAllProducts()
    *  get all products => show 
    * @param (none) no param
    * @return (CategoryList) object 
    */
    public function getProducts() {
        $this->db_connect();
        $sql = "SELECT * FROM `products`";
        $proList = new ProductList();
        $result = $this->query($sql);
        while ($row = $this->fetch_assoc($result)) {
            $pro = new Product();         
            $pro->setProid($row['productid']);
            $pro->setProname($row['name']);
            $pro->setImage($row['image']);
            $pro->setPrice($row['price']);
            $pro->setCreated($row['created']);
            $pro->setModified($row['modified']);
            $pro->setCatid($row['catid']);            
            $pro->setAuthor($row['author']);
            $pro->setDescription($row['description']);
            $pro->setStatus($row['status']);
            $proList->add($pro);
        }
        $this->db_close();
        return $proList;
    }
    /**
    * addProduct($pro)
    *  add a product in database 
    * @param (product) category object
    * @return (boolean) object 
    */
    public function addProduct($pro) {
        // check category
        //if (!is_a($category, 'Category')) return false;
        $this->db_connect();
        $sql = "INSERT INTO `products` (`productid` , `name`, `image`,";
        $sql.= " `price`, `created`, `modified`, `description`,";
        $sql.= " `author`,`catid`,`status`)";
        $sql.= "VALUES ('".$pro->getProid()."', '".$pro->getProname()."', '".$pro->getImage()."',";
        $sql.= "'".$pro->getPrice()."','".$pro->getCreated()."','".$pro->getModified()."', '".$pro->getDescription()."',";
        $sql.= "'".$pro->getAuthor()."', '".$pro->getCatid()."', ".$pro->getStatus().")";
        $result = $this->query($sql);
        $id = mysql_insert_id();
        $this->setInsertId($id);
        $this->db_close();
        if ($result) return true;
        return false;
    }
  /**
    * updateProduct()
    *  add a product in database 
    * @param (product) product object
    * @return (boolean) object 
    */
    public function updateProduct($pro) {
        $this->db_connect();
        $sql = "UPDATE `products` SET ";
        $sql.= "`name` = '".$pro->getProname()."',";
        $sql.= "`image` = '".$pro->getImage()."',";
        $sql.= "`price` = '".$pro->getPrice()."',";
        //$sql.= "`created` = '".$pro->getCreated()."',";
        $sql.= "`modified` = '".$pro->getModified()."',";
        $sql.= "`description` = '".$pro->getDescription()."',";
        //$sql.= "`author` = '".$pro->getAuthor()."',";
        $sql.= "`catid` = '".$pro->getCatid()."' WHERE `products`.`productid` =".$pro->getProid().";";
        $result = $this->query($sql);
        echo $sql;
        $this->db_close();
        if ($result) return true;
        return false;
    }
    
      /**
    * removeProduct()
    *  remove a product in database 
    * @param (string) catid object
    * @return (boolean) object 
    */
    public function removeProduct($proid) {
        $this->db_connect();
        $sql = "DELETE FROM `products` WHERE `productid` =".$proid;
        $result = $this->query($sql);
        $this->db_close();
        if ($result) return true;
        return false;
    }
}


