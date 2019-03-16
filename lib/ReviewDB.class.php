<?php
/*
   Handles database access for the Reviews table. 

 */
class ReviewDB 
{  
    private static $baseSQL = "SELECT RatingID, PaintingID, ReviewDate, Rating, Comment FROM Reviews ";
    
    private $pdo = null;
    
    public function __construct($connection) {
        $this->pdo = $connection;
    }    
    
    public function getAll()
    {
        $sql = self::$baseSQL . ' ORDER BY PaintingID, ReviewDate';
        $statement = DatabaseHelper::runQuery($this->pdo, $sql, null);
        return $statement;        
    }   
    
    public function findById($id)
    {
        $sql = self::$baseSQL . " WHERE ReviewID=?";
        $statement = DatabaseHelper::runQuery($this->pdo, $sql, Array($id));
        return $statement->fetch();        
    }    

    public function findForPainting($paintingId)
    {
        $sql = self::$baseSQL . " WHERE PaintingID=?";       
        $statement = DatabaseHelper::runQuery($this->pdo, $sql, Array($paintingId));
        return $statement;        
    }
    
    public function AverageForPainting($paintingId)
    {
        $sql = "SELECT AVG(Rating) AS averageRating FROM Reviews WHERE PaintingID=?";       
        $statement = DatabaseHelper::runQuery($this->pdo, $sql, Array($paintingId));
        return $statement->fetchColumn();        
    }    

}

?>