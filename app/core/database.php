<?php
class database{
    private $host = host;
    private $sid = sid;
    private $username = username;
    private $password = password;
    private $dbh;
    private $stmt;

    public function __construct()
{
    // Oracle connection string (DSN)
    $dsn = 'oci:dbname=//' . $this->host . '/' . $this->sid;
    
    $option = [
        PDO::ATTR_PERSISTENT => true,
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION    
    ];
    try {
        $this->dbh = new PDO($dsn, $this->username, $this->password, $option);

    } catch(PDOException $e) {
        echo($e->getMessage());
    }
}

public function query($query){
    try {
        $this->stmt = $this->dbh->prepare($query);
    } catch(PDOException $e) {
        echo("Prepare query gagal: " . $e->getMessage());
    }
}
public function bind($param, $value, $type = null){
    if(is_null($type)){
        switch(true){
            case is_int($value):
                $type = PDO::PARAM_INT;
                break;
            case is_bool($value):
                $type = PDO::PARAM_BOOL;
                break;
            case is_null($value):
                $type = PDO::PARAM_NULL;
                break;
            default:
                $type = PDO::PARAM_STR;
        }
    }
    try {
        $this->stmt->bindValue($param, $value, $type);
        
    } catch(PDOException $e) {
        echo("Binding parameter gagal: " . $e->getMessage());
    }
}
    public function execute(){
        try{
        $this->stmt->execute(); 
        }
     catch(PDOException $e) {
        echo("execute query gagal: " . $e->getMessage());
    }
    }
    public function resultSet(){
        $this->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function single(){
        $this->execute();
        return $this->stmt->fetch(PDO::FETCH_ASSOC);
    }
    public function column(){
        $this->execute();
        return $this->stmt->fetchColumn();
    }
}