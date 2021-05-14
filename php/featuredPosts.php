<?php

use php\utl\{DB,MSql};
require_once "utl/Database.php";
require_once "utl/MySqlHelper.php";

$mysqlHelper = new MSql( "featuredPosts", "featuredPostId" );
$sql = $mysqlHelper->getFindWhereSql( "postId" );
$params = MSql::getParam( "postId", "1" );

$featuredPosts = DB::getDbResultWithParams( $sql, $params );
var_dump( $featuredPosts );



$title = "";
$description = "";
$tags = "";
$link = "";
$image = "";



?>


<!-- Recent Posts Start -->
    <section class="recent-posts">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="single-rpost d-sm-flex align-items-center" data-aos="fade-right" data-aos-duration="800">
                        <div class="post-content text-sm-right">
                            <time datetime="2019-04-06T13:53">15 Oct, 2019</time>
                            <h3><a href="#">Proudly for us to build stylish</a></h3>
                            <p><a href="#">Seanding</a>, <a href="#">Website</a>, <a href="#">E-commerce</a></p>
                            <a class="post-btn" href="#"><i class="fa fa-arrow-right"></i></a>
                        </div>
                        <div class="post-thumb">
                            <img class="img-fluid" src="assets/images/post1.jpg" alt="Post 1">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="single-rpost d-sm-flex align-items-center" data-aos="fade-left" data-aos-duration="800">
                        <div class="post-thumb">
                            <img class="img-fluid" src="assets/images/post2.jpg" alt="Post 1">
                        </div>
                        <div class="post-content">
                            <time datetime="2019-04-06T13:53">15 Oct, 2019</time>
                            <h3><a href="#">Remind me to water the plants</a></h3>
                            <p><a href="#">Seanding</a>, <a href="#">Website</a>, <a href="#">E-commerce</a></p>
                            <a class="post-btn" href="#"><i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="single-rpost d-sm-flex align-items-center" data-aos="fade-right" data-aos-delay="200"
                        data-aos-duration="800">
                        <div class="post-content text-sm-right">
                            <time datetime="2019-04-06T13:53">15 Oct, 2019</time>
                            <h3><a href="#">Add apples to the grocery list</a></h3>
                            <p><a href="#">Seanding</a>, <a href="#">Website</a>, <a href="#">E-commerce</a></p>
                            <a class="post-btn" href="#"><i class="fa fa-arrow-right"></i></a>
                        </div>
                        <div class="post-thumb">
                            <img class="img-fluid" src="assets/images/post3.jpg" alt="Post 1">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="single-rpost d-sm-flex align-items-center" data-aos="fade-left" data-aos-delay="200"
                        data-aos-duration="800">
                        <div class="post-thumb">
                            <img class="img-fluid" src="assets/images/post4.jpg" alt="Post 1">
                        </div>
                        <div class="post-content">
                            <time datetime="2019-04-06T13:53">15 Oct, 2019</time>
                            <h3><a href="#">Make it warmer downstairs</a></h3>
                            <p><a href="#">Seanding</a>, <a href="#">Website</a>, <a href="#">E-commerce</a></p>
                            <a class="post-btn" href="#"><i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <a href="#" class="btn btn-primary">See More</a>
            </div>
        </div>
    </section>
    <!-- Recent Posts End -->
