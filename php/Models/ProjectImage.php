<?php

namespace skds\php\Models
{
    use skds\php\Models\Model;
    require_once "Model.php";

    class ProjectImage extends Model
    {
        public const TABLE_NAME = "projectImages";
        public const PRIMARY_KEY_NAME = "projectImageId";

        public function __construct()
        {
            parent::__construct( self::TABLE_NAME, self::PRIMARY_KEY_NAME );
        }

        public function getProjectImages()
        {
            return $this->getRowObjects();
        }

        public function getProjectImage( $projectImageId )
        {
            return $this->getRowObject( $projectImageId );
        }

        public function getProjectImagesWhere( $columnName, $value )
        {
            return $this->getRowObjectsWithValue( $columnName, $value );
        }
    }
}

?>