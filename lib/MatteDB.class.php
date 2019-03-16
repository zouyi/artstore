<?php
/*
   Handles database access for the TypesMatt table. 

 */
class MatteDB 
{  
    private $pdo = null;
    private static $baseSQL = "SELECT MattID, Title, ColorCode FROM TypesMatt ";
    
    public function __construct($connection) {
        $this->pdo = $connection;
    }
    
    public function getAll()
    {
        $statement = DatabaseHelper::runQuery($this->pdo, self::$baseSQL. ' ORDER BY Title', null);
        return $statement;        
    }   
    
    public function findById($id)
    {
        $sql = self::$baseSQL . " WHERE MattID=?";
        $statement = DatabaseHelper::runQuery($this->pdo, $sql, Array($id));
        return $statement->fetch();        
    }      
    
    

}

?>