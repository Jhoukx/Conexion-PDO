<?php
namespace App;
class connect extends credentials{
    public $con;
    function __construct(private $dns = "mysql", private $port = 3306){
        try {
            $this->con = new \PDO($this->dns . ":host=" . $this->__get('host') . ";dbname=" . $this->__get('dbname') . ";user=" . $this->username . ";password=" . $this->__get('password') . ";port=" . $this->port);
            $this->con->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

            // print_r("Successfully connected");

        } catch (\PDOException $e) {
            print_r($e->getMessage());
        }
    }
}
?>