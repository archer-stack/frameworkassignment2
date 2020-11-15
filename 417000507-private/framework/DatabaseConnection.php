<?php
class DatabaseConnection {
protected $servername;
protected $username;
protected $password;
protected $dbname;
protected $config;

function __construct() {
    $this->config = parse_ini_file("../../417000507-private/config/db-config.ini");
    $this->servername = $this->config["servername"];
    $this->username = $this->config["username"];
    $this->password = $this->config["password"];
     $this->dbname = $this->config["dbname"];
}

public function createConnection() {
    return new PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->username, $this->password);
}
}

?>