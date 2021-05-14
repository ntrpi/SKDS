<?php

namespace php\utl;
{
    require_once "utl.php";

    class Database 
    {
        private static $host = "158.69.17.240:3306";
        private static $database = "skdssite_site";
        private static $userName = "skdssite_me";
        private static $password = "Ent1!ropy";

        private static $dbPdo;
    
        // Static class.
        private function __construct()
        {        
        }

        // Construct the PDO if required, then return PDO.
        public static function getPdo()
        {
            if( self::$dbPdo == null ) {
    
                try {
                    // Establish the connection.
                    $dataSource = "mysql:host=" . self::$host . ";dbname=" . self::$database;
                    self::$dbPdo = new \PDO( $dataSource, self::$userName, self::$password );

                    cl( "DB connected" );

                } catch( \PDOException $e ) {
                    cl( $e->getMessage() );
                    wl( $e->getMessage() );
                    exit();
                }

                // Set some connection attributes.
                self::$dbPdo->setAttribute( \PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION );
            }

            return self::$dbPdo;
        }

        // Use the PDO to run the provided SQL string. Return the PDO statement that was run.
        public static function runSql( $sql )
        {
            // wl( $sql );
            $dbPdo = self::getPdo();
            $pdoStatement = $dbPdo->prepare( $sql );
            $pdoStatement->execute();
            // $pdoStatement->debugDumpParams();
    
            return $pdoStatement;
        }
    
        // Prepare the PDO statement by binding the provided key/value pairs. 
        // Use the PDO to run the SQL, then return the PDO statement.
        public static function runSqlWithParams( $sql, $params )
        {
            // wl( $sql );
            // pp( $params );

            $dbPdo = self::getPdo();
            $pdoStatement = $dbPdo->prepare( $sql );
    
            foreach( $params as $key=>$value ) {
                $pdoStatement->bindParam( ':' . $key, $params->$key );
            }
    
            $pdoStatement->execute();
            // $pdoStatement->debugDumpParams();
    
            return $pdoStatement;
        }

        // $pdoResult is what is returned by the call to PDO execute(). 
        // Get an array of all the rows retrieved from the database, close the cursor, then return the array.
        public static function getRows( $pdoResult )
        {
            $rows = $pdoResult->fetchAll( \PDO::FETCH_OBJ );
            $pdoResult->closeCursor();
            return $rows;
        }

        // Syntactic sugar to execute some SQL and return the array of rows retrieved from the database.
        public static function getDbResult( $sql )
        {
            $pdoResult = self::runSql( $sql );
            return self::getRows( $pdoResult );
        }

        // Syntactic sugar to bind the key/value pairs in $params, 
        // execute some SQL, and return the array of rows retrieved from the database.
        public static function getDbResultWithParams( $sql, $params )
        {
            $pdoResult = self::runSqlWithParams( $sql, $params );
            return self::getRows( $pdoResult );
        }

        // Close the database connection on destruction.
        public function __destruct() {
            $this->dbPdo->close();
        }
    }
}
?> 

<?php
// File created by Sandra Kupfer 2021/03.

// namespace Codesses\php\Models
// {

// use PDOException;

//     class Database {

//         // These variables must be set to the specific database connection information.
//         private static $dbName = "skdssite_Codesses";
//         private static $host = "158.69.17.240:3306";
//         private static $userName = "skdssite_test";
//         private static $password = "tU8U4jB3Cz7yVRK";

//         // Private variables to interact with the database.
//         private static $dataSourceName;
//         private static $dbPdo;
    
//         // Static class.
//         private function __construct()
//         {        
//         }
        
//         // Construct the PDO if required, then return PDO.
//         private static function getPdo()
//         {
//             if( self::$dbPdo == null ) {
//                 self::$dataSourceName  = "mysql:host=" .self::$host . ";dbname=" . self::$dbName;
    
//                 try {
//                 // Establish the connection.
//                 self::$dbPdo = new \PDO( self::$dataSourceName, self::$userName, self::$password );
        
//                 } catch( PDOException $e ) {
//                     echo $e->getMessage()();
//                     exit();
//                 }

//                 // Set some connection attributes.
//                 self::$dbPdo->setAttribute( \PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION );
//             }
//             return self::$dbPdo;
//         }

//         // Use the PDO to run the provided SQL string. Return the PDO statement that was run.
//         public static function runSql( $sql )
//         {
//             // echo $sql;
//             $dbPdo = self::getPdo();
//             $pdoStatement = $dbPdo->prepare( $sql );
//             $pdoStatement->execute();
//             // $pdoStatement->debugDumpParams();
    
//             return $pdoStatement;
//         }
    
//         // Prepare the PDO statement by binding the provided key/value pairs. 
//         // Use the PDO to run the SQL, then return the PDO statement.
//         public static function runSqlWithParams( $sql, $params )
//         {
//             // echo $sql;
//             // var_dump( $params );

//             $dbPdo = self::getPdo();
//             $pdoStatement = $dbPdo->prepare( $sql );
    
//             foreach( $params as $key=>$value ) {
//                 $pdoStatement->bindParam( ':' . $key, $params->$key );
//             }
    
//             $pdoStatement->execute();
//             // $pdoStatement->debugDumpParams();
    
//             return $pdoStatement;
//         }

//         // $pdoResult is what is returned by the call to PDO execute(). 
//         // Get an array of all the rows retrieved from the database, close the cursor, then return the array.
//         public static function getRows( $pdoResult )
//         {
//             $rows = $pdoResult->fetchAll( \PDO::FETCH_OBJ );
//             $pdoResult->closeCursor();
//             return $rows;
//         }

//         // Syntactic sugar to execute some SQL and return the array of rows retrieved from the database.
//         public static function getDbResult( $sql )
//         {
//             $pdoResult = self::runSql( $sql );
//             return self::getRows( $pdoResult );
//         }

//         // Syntactic sugar to bind the key/value pairs in $params, 
//         // execute some SQL, and return the array of rows retrieved from the database.
//         public static function getDbResultWithParams( $sql, $params )
//         {
//             $pdoResult = self::runSqlWithParams( $sql, $params );
//             return self::getRows( $pdoResult );
//         }

//         // Close the database connection on destruction.
//         public function __destruct() {
//             $this->dbPdo->close();
//         }
        
        
//     }
// }


?>