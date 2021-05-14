<?php

namespace skds\php\Models
{
    use skds\php\Models\Model;
    require_once "Model.php";

    class FeaturedPost extends Model
    {
        public const TABLE_NAME = "featuredPosts";
        public const PRIMARY_KEY_NAME = "featuredPostId";

        public function __construct()
        {
            parent::__construct( self::TABLE_NAME, self::PRIMARY_KEY_NAME );
        }

        public function getFeaturedPosts()
        {
            return $this->getRowObjects();
        }

        public function getFeaturedPost( $featuredPostId )
        {
            return $this->getRowObject( $featuredPostId );
        }

        public function getFeaturedPostsWhere( $columnName, $value )
        {
            return $this->getRowObjectsWithValue( $columnName, $value );
        }
    }
}

?>