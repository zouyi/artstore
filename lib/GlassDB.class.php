<?php
/*
   Handles database access for the TypesGlass table. 

 */
class GlassDB 
{  
    private $pdo = null;
    private static $baseSQL = "SELECT GlassID, Title, Description, Price FROM TypesGlass ";
    
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
        $sql = self::$baseSQL . " WHERE GlassID=?";
        $statement = DatabaseHelper::runQuery($this->pdo, $sql, Array($id));
        return $statement->fetch();        
    }      
    
    

}

?>