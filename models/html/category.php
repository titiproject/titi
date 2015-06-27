<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class CategoryHtml {
    public function __construct() {
        
    }
    public function showTHead($title) {
        $str = "<tr>";
        for ($i=0; $i < count($title); $i++) {
            $str .= "<th>".$title[$i]."</th>";
        }
        $str.= "</tr>";
        return $str;
    }
    
    public function showTBody($content) {
        foreach ($content as $key => $v) {
            echo '<tr>';
            echo "<td><input type='checkbox'/></td>";
            echo "<td>".$v->getCatid()."</td>";
            echo "<td>".$v->getCatname()."</td>";
            echo "<td>".$v->getStatus()."</td>";
            echo "<td>".$v->getAuthor()."</td>";
            echo "<td>".$v->getCreated()."</td>";
            echo "<td>".$v->getModified()."</td>";
            echo "<td>".$v->getDescription()."</td>";
            echo "<td>".$v->getParentId()."</td>";
            echo '</tr>';
        }
    }
    /**
     * showCategories()
     * Hien thi tat ca cac Categories
     * **/
    public function showCategories($title,$list) {
        echo "<table border='1' cellspacing='0' cellpadding='0'>";
            $this->showTitle($title);
            $this->showTBody($list);
        echo "</table>";
    }

}