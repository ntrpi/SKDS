<?php

namespace Codesses\php\Models
{
    class RoutingHelper 
    {
        private function __construct(){}

        public static function getValue( $key )
        {
            return isset( $_GET[$key] ) ? $_GET[$key] : null;
        }
    }

    // Syntactic sugar.
    class RH extends RoutingHelper {}
}
?>