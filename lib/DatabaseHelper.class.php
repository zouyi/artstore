<?php

class DatabaseHelper {
 
    public static function setConnectionInfo($values=array()) {
          $connString = $values[0];
          $user = $values[1]; 
          $password = $values[2];
        
         // echo $connString;
        //  echo $user;
        //  echo $password;
          
          $pdo = new PDO($connString,$user,$password);
          $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          return $pdo;      
    }


    public static function runQuery($pdo, $sql, $parameters=array())     {
        // Ensure parameters are in an array
        if (!is_array($parameters)) {
            $parameters = array($parameters);
        }

        $statement = null;
        if (count($parameters) > 0) {
            // Use a prepared statement if parameters 
            $statement = $pdo->prepare($sql);
            $executedOk = $statement->execute($parameters);
            if (! $executedOk) {
                throw new PDOException;
            }
        } else {
            // Execute a normal query     
            $statement = $pdo->query($sql); 
            if (!$statement) {
                throw new PDOException;
            }
        }
        return $statement;
    }    
    
}




?>
