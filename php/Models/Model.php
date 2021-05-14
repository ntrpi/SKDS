<?php

namespace skds\php\Models
{
    use skds\php\utl\{MySqlHelper,DB};

    require_once( $_SERVER['DOCUMENT_ROOT'] . "/php/utl/MySqlHelper.php" );
    require_once( $_SERVER['DOCUMENT_ROOT'] . "/php/utl/Database.php" );

    // This class is intended to act as a bridge between the database and the html generator scripts.
    class Model 
    {
        private $sqlHelper;

        protected function __construct( $tableName, $primaryKeyName )
        {
            $this->sqlHelper = new MySqlHelper( $tableName, $primaryKeyName );            
        }

        // Return the number of rows for this table in the database.
        protected function getNumRows()
        {
            $result = DB::getDbResult( $this->sqlHelper->getCountSql() );
            return $result->rowCount();
        }

        // Return an array of objects, where each object is a row in the database,
        // and the columns and values are its properties.
        protected function getRowObjects()
        {
            return DB::getDbResult( $this->sqlHelper->getListSql() );
        }

        // Return an object that has the columns and values of the row in the database with the given primary key
        // as its properties.
        protected function getRowObject( $id )
        {
            $results = DB::getDbResultWithParams( 
                $this->sqlHelper->getFindSql(), 
                $this->sqlHelper->getPrimaryKeyParam( $id ) 
            );
            return $results[0];
        }

        // Return the objects for the rows that have the value for the given column.
        // Basically SELECT * with a single WHERE clause.
        protected function getRowObjectsWithValue( $columnName, $value )
        {
            return DB::getDbResultWithParams( 
                $this->sqlHelper->getFindWhereSql( $columnName, $value ), 
                MySqlHelper::getParam( $columnName, $value ) 
            );
        }
        
    }
}

?>