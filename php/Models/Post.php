<?php

namespace skds\php\Models
{
    use skds\php\Models\Model;
    require_once "Model.php";

    class Post extends Model
    {
        public const TABLE_NAME = "posts";
        public const PRIMARY_KEY_NAME = "postId";

        public function __construct()
        {
            parent::__construct( self::TABLE_NAME, self::PRIMARY_KEY_NAME );
        }

        public function getPosts()
        {
            return $this->getRowObjects();
        }

        public function getPost( $postId )
        {
            return $this->getRowObject( $postId );
        }

        public function getPostsWhere( $columnName, $value )
        {
            return $this->getRowObjectsWithValue( $columnName, $value );
        }
    }
}

?>