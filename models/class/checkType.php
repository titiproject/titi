<?php

/** 
 * class check Type all data
 * 
 */
class Type {
    /**
     * checkInt()
     * @param $param int
     * @return boolean
     */
    public static function checkInt($param) {
       if (!isset($param)) {return false;}
       if (empty($param)) {return false;}
       if (is_numeric($param)) {return true;}
       return flase; 
    }
}

