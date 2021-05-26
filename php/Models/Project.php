<?php

namespace skds\php\Models
{
    use skds\php\Models\Model;
    require_once "Model.php";

    class Project extends Model
    {
        public const TABLE_NAME = "projects";
        public const PRIMARY_KEY_NAME = "projectId";

        public function __construct()
        {
            parent::__construct( self::TABLE_NAME, self::PRIMARY_KEY_NAME );
        }

        public function getProjects()
        {
            return $this->getRowObjects();
        }

        public function getProject( $projectId )
        {
            return $this->getRowObject( $projectId );
        }

        public function getProjectsWhere( $columnName, $value )
        {
            return $this->getRowObjectsWithValue( $columnName, $value );
        }
    }
}

?>