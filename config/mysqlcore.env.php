<?php
Class Mysqlenv {

    public static $SERVERNAME = "127.0.0.1";
    public static $USERNAME = "root";
    public static $PASSWORD = "";
    public static $DB = "blaster_php";
}

abstract class Mysqlrun extends Mysqlenv {

    public $conn;
    abstract public function db_connect();
}

class Mysqlcore extends Mysqlrun {

    public function db_connect()
    {
        // cancel php errors and warnings
        error_reporting(E_ERROR | E_PARSE);
        $this->conn = mysqli_connect(parent::$SERVERNAME, parent::$USERNAME, parent::$PASSWORD, parent::$DB);
        if (!$this->conn) {
            die("<br<br><br>
                <div class='container display-6 text-center bg-primary text-dark'>
                <div class='bg-light'>
                <i class='bi bi-bug text-primary text-uppercase fw-bold'> BlasterPHP: Oops :(</i>
                 <hr> Connection error<br>" 
                . mysqli_connect_error()) . "</div></div>";
        } 
    }

}


