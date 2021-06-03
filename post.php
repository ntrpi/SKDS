<?php

use skds\php\utl\RH;
use skds\php\Models\Post;

require_once "php/utl/RoutingHelper.php";
require_once "php/Models/Post.php";

// TODO: if no ID is found, redirect somewhere.
$postId = RH::getValue( RH::VAL_POST );

$postDb = new Post;
$postObj = $postDb->getPost( $postId );

$postFile = "./posts/" . $postObj->fileName . ".php";
$postTitle = $postObj->title;
?>

<html lang="en">
<head>
    <?php include_once "./php/head.php"; ?>
    <!-- Document title -->
    <title><?= $postTitle ?></title>
</head>
<body>

    <?php include_once "./php/header.php"; ?>
    
    <main>
        <?php include_once "$postFile"; ?>
    </main>
    
    <?php include_once "./php/footer.php"; ?>

    <?php include_once "./php/bodyScripts.php"; ?>
</body>
</html>