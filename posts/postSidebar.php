<?php

use skds\php\utl\RH;
require_once( __DIR__ . "/../php/utl/RoutingHelper.php" );
$currentPostId = RH::getValue( RH::VAL_POST );


use skds\php\Models\{FeaturedPost, Post, PostImage};
$modelsDir = __DIR__  . "/../php/Models/";
require_once( $modelsDir. "FeaturedPost.php" );
require_once( $modelsDir. "Post.php" );
require_once( $modelsDir. "PostImage.php" );

$dbHelper = new FeaturedPost();
$featuredPosts = $dbHelper->getFeaturedPosts();

$listItems = array();
$postHelper = new Post();
$postImageHelper = new PostImage();
foreach( $featuredPosts as $fPost ) {

    $postId = $fPost->postId;
    if( $postId == $currentPostId ) {
        continue;
    }
    
    $post = $postHelper->getPost( $postId );
    $postLink = $fPost->link;

    $postImageId = $fPost->postImageId;
    $postImage = $postImageHelper->getPostImage( $postImageId );

    $li = "<li>
        <a href=\"{$postLink}\">
            <div>
                <span class=\"mr-2\">{$post->created}</span>
            </div>
            <img src=\"{$postImage->image}\" alt=\"$postImage->altText\" class=\"img-fluid mr-4\">
            <div class=\"text\">
                <h4>{$post->title}</h4>
            </div>
        </a>
    </li>";

    array_push( $listItems, $li );
}
?>












<!-- https://preview.colorlib.com/#wordify -->
<div class="col-md-12 col-xl-4 sidebar">
    <div class="sidebar-box">
        <div class="bio text-center">
            <img src="./img/headshots/HeadShot1.png" alt="Headshot of Sandra Kupfer."
                class="img-fluid w-25 m-4">
            <div class="bio-body">
                <h2>Sandra K&uuml;pfer</h2>
                <p>I am a software developer, artist, wife, and mother of two great kids. When I'm not coding and solving technical problems, I am making things or driving my kids to their various activities.</p>
                <p><a href="#" class="btn btn-primary">More</a></p>
            </div>
        </div>
    </div>

    <div class="sidebar-box">
        <h3 class="heading mt-5 mb-3">Popular Posts</h3>
        <div class="post-entry-sidebar">
            <ul class="list-unstyled">
            <?php
                    foreach( $listItems as $li ) {
                        echo $li;
                    }
                ?>
            </ul>
        </div>
    </div>
</div>


