<?php

// Output to the browser console.
function cl( $output, $with_script_tags = true ) 
{
    $js_code = 'console.log(' . json_encode($output, JSON_HEX_TAG) . ');';
    if( $with_script_tags ) {
        $js_code = '<script>' . $js_code . '</script>';
    }
    echo $js_code;
}

// Echo with a newline.
function wl( $someString )
{
    echo $someString . "</br>";
}

// Pretty print an object. 
function pp( $obj )
{
    $jsonData = json_encode( $obj, JSON_PRETTY_PRINT );
    echo "<pre> {$jsonData} </pre>";
}


?>