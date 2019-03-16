<?php
/*
   Handles database access for the TypesFrames table. 

 */
class FrameDB 
{  
    private $pdo = null;
    private static $baseSQL = "SELECT FrameID, Title, Price, Color, Syle FROM TypesFrames ";
    
    public function __construct($connection) {
        $this->pdo = $connection;
    }
    
    public function getAll()
    {
        $statement = DatabaseHelper::runQuery($this->pdo, self::$baseSQL . ' ORDER BY Title', null);
        return $statement;        
    }   
    
    public function findById($id)
    {
        $sql = self::$baseSQL . " WHERE FrameID=?";
        $statement = DatabaseHelper::runQuery($this->pdo, $sql, Array($id));
        return $statement->fetch();        
    }      
    
    

}

?>