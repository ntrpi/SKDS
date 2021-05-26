<?php

use skds\php\Models\{FeaturedPost, Post, PostImage};
require_once "Models/FeaturedPost.php";
require_once "Models/Post.php";
require_once "Models/PostImage.php";

$dbHelper = new FeaturedPost();
$featuredPosts = $dbHelper->getFeaturedPosts();

function getTextDiv( $isRight, $title, $description, $link )
{
    $textRightClass = $isRight ? " text-sm-right" : "";

    $div = '<div class="post-content' . $textRightClass . '">';
    $div .= '<h3><a href="' . $link . '">' . $title . '</a></h3>';
    $div .= '<p>' . $description . '</p>';
    $div .= '<a class="post-btn" href="' . $link . '"><i class="fa fa-arrow-right"></i></a>';
    $div .= '</div>';
    return $div;
}

function getImageDiv( $image, $altText )
{
    $div = '<div class="post-thumb">';
    $div .= '<img class="img-fluid" src="' . $image . '" alt="' . $altText . '">';
    $div .= '</div>';
    return $div;
}

$counter = 0;
$postDivs = array();
$postHelper = new Post();
$postImageHelper = new PostImage();
foreach( $featuredPosts as $fPost ) {

    $postId = $fPost->postId;
    $post = $postHelper->getPost( $postId );

    $postImageId = $fPost->postImageId;
    $postImage = $postImageHelper->getPostImage( $postImageId );

    $isRight = $counter % 2 == 0;
    $fadeDirection = $isRight ? "right" : "left";

    $dataOasDelay = $counter > 1 ? ' data-aos-delay"200" ' : "";

    $div = '
        <div class="col-lg-6">
            <div class="single-rpost d-sm-flex align-items-center" data-aos="fade-' . $fadeDirection . '"' . $dataOasDelay . ' data-aos-duration="800" >';
    if( $isRight ) {
        $div .= getTextDiv( $isRight, $post->title, $post->description, $fPost->link );
        $div .= getImageDiv( '../' . $postImage->image, $postImage->altText );
    } else {
        $div .= getImageDiv( '../' . $postImage->image, $postImage->altText );
        $div .= getTextDiv( $isRight, $post->title, $post->description, $fPost->link );
    }
    $div .= '</div></div>';
    array_push( $postDivs, $div );

    $counter++;
}
?>


<!-- Recent Posts Start -->
<section class="recent-posts" id="posts">
    <div class="container">
        <div class="title text-center">
            <h2 class="title-blue">Featured Posts</h2>
        </div>
        <div class="container">
            <div class="row">
                <?php
                    foreach( $postDivs as $div ) {
                        echo $div;
                    }
                ?>
            </div>
        </div>
    </div>
</section>
<!-- Recent Posts End -->
