<?php
/*
   Handles database access for the Shapes table. 

 */
class ShapeDB 
{  
    private static $baseSQL = "SELECT ShapeID, ShapeName FROM Shapes ";
    
    private $pdo = null;
    
    public function __construct($connection) {
        $this->pdo = $connection;
    }    
    
    public function getAll()
    {
        $statement = DatabaseHelper::runQuery($this->pdo, self::$baseSQL, null);
        return $statement;        
    }   
    
    public function findById($id)
    {
        $sql = self::$baseSQL . " WHERE ShapeID=?";
        $statement = DatabaseHelper::runQuery($this->pdo, $sql, Array($id));
        return $statement->fetch();
        
    }    

}

?>