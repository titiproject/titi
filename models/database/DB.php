<?php

/** 
 * Connect to database
 */
class Database {
    protected $db;
    protected $conn;
    protected $host;
    protected $username;
    protected $password;
    protected $database;
    public function __construct() {
        $this->host = DB_HOST;
        $this->username = DB_USER;
        $this->password = DB_PASSWORD;
        $this->database = DB_DATABASE;
    }
    public function db_connect() {
        $this->db = mysql_connect($this->host, $this->username, $this->password) or die('Not connect host');
        $this->db = mysql_select_db($this->database) or die('Not connect database');
        if (!$this->db) {
            die('Not connect database ');
            exit;
        }
        mysql_query('set names utf8');
    }
    public function query($sql) {
        return mysql_query($sql);
    }
    public function num_rows($sql) {
        return mysql_num_rows(mysql_query($sql));
    }
    public function fetch_array($sql) {
        return mysql_fetch_array($sql);
    }
    public function fetch_assoc($sql) {
        return mysql_fetch_assoc($sql);
    }
    public function db_close() {
        mysql_close($this->db);
    }
}

