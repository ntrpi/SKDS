<?php

namespace skds\php\utl
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