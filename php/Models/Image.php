<?php

namespace skds\php\Models
{
    use skds\php\Models\Model;
    require_once "Model.php";

    class Image extends Model
    {
        public const TABLE_NAME = "images";
        public const PRIMARY_KEY_NAME = "imageId";

        public function __construct()
        {
            parent::__construct( self::TABLE_NAME, self::PRIMARY_KEY_NAME );
        }

        public function getImages()
        {
            return $this->getRowObjects();
        }

        public function getImage( $imageId )
        {
            return $this->getRowObject( $imageId );
        }

        public function getImagesWhere( $columnName, $value )
        {
            return $this->getRowObjectsWithValue( $columnName, $value );
        }
    }
}

?>