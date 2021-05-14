<?php

namespace skds\php\Models
{
    use skds\php\Models\Model;
    require_once "Model.php";

    class PostImage extends Model
    {
        public const TABLE_NAME = "postImages";
        public const PRIMARY_KEY_NAME = "postImageId";

        public function __construct()
        {
            parent::__construct( self::TABLE_NAME, self::PRIMARY_KEY_NAME );
        }

        public function getPostImages()
        {
            return $this->getRowObjects();
        }

        public function getPostImage( $postImageId )
        {
            return $this->getRowObject( $postImageId );
        }

        public function getPostImagesWhere( $columnName, $value )
        {
            return $this->getRowObjectsWithValue( $columnName, $value );
        }
    }
}

?>