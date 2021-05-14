<?php

namespace php\utl
{
    class MySqlHelper 
    {        
        // The name of the database table.
        protected $tableName;

        // The name of the primary key.
        protected $primaryKeyName;

        // The sql to get the number of rows in the table.
        protected $countSql;

        // The sql to get everything from the table.
        protected $listSql;

        // The sql to get a row from the table with the given primary key.
        protected $findSql;

        // The sql to delete a row from the table with the given primary key.
        protected $deleteSql;

        // The sql to update a row from the table with the given primary key.
        protected $updateSql1;
        protected $updateSql2;

        // $tableName: The name of the database table.
        // $primaryKeyName: The name of the primary key.
        public function __construct( $tableName, $primaryKeyName ) 
        {
            $this->tableName = $tableName;
            $this->primaryKeyName = $primaryKeyName;
            $this->countSql = "SELECT COUNT(*) FROM " . $tableName;
            $this->listSql = "SELECT * FROM " . $tableName;
            $this->findSql = "SELECT * FROM " . $tableName . " WHERE " . $primaryKeyName . " = :" . $primaryKeyName;
            $this->deleteSql = "DELETE FROM " . $tableName . " WHERE " . $primaryKeyName . " = :" . $primaryKeyName;
            $this->updateSql1 = "UPDATE " . $tableName . " SET ";
            $this->updateSql2 = " WHERE " . $primaryKeyName . " = :" . $primaryKeyName;

        }

        public function getCountSql()
        {
            return $this->countSql;
        }

        public function getListSql()
        {
            return $this->listSql;
        }

        public function getFindSql()
        {
            return $this->findSql;
        }

        public function getFindWhereSql( $columnName )
        {
            $sql = $this->listSql . " WHERE " . $columnName . " = :" . $columnName;
            return $sql;
        }

        public function getDeleteSql()
        {
            return $this->deleteSql;
        }

        // Generate and return the mysql to update a row. One of the
        // properties of $params should be the primary key and value, 
        // indicating which row to update.
        // $params: An object with key == column and value == value pairs.
        public function getUpdateSql( $params )
        {
            // Set up the sql.
            $sql = $this->updateSql1;
            foreach( $params as $key=>$value ) {
                if( $key == $this->primaryKeyName ) {
                    continue;
                }
                $sql .= "{$key} = :{$key}, ";
            }
            
            // Strip trailing comma.
            $sql = substr( $sql, 0, strlen( $sql ) - 2 );

            // Finish sql.
            $sql .= $this->updateSql2;

            return $sql;
        }

        // Given an array of key names to use as keys and an associated array to use as values,
        // return an object with the key/value pairs as properties.
        public static function getParams( array $keyNames, array $values = null )
        {
            $params = new \stdClass();
            $numItems = sizeof( $keyNames );
            for( $i = 0; $i < $numItems; $i++ ) {
                $columnName = $keyNames[$i];
                $params->$columnName = $values != null ? $values[$i] : "";
            }
            return $params;
        }

        public static function getParam( $key, $value )
        {
            $param = new \stdClass();
            $param->$key = $value;
            return $param;
        }
    }

    // Syntactic sugar.
    class MSql extends MySqlHelper {}
}
?>