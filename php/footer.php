<?php


use skds\php\Models\Image;
use skds\php\Models\Project;
use skds\php\Models\ProjectImage;

require_once "Models/Project.php";
require_once "Models/Image.php";
require_once "Models/ProjectImage.php";

$projectHelper = new Project();
$projects      = $projectHelper->getProjects();

$projectDivs        = array();
$imageHelper        = new Image();
$projectImageHelper = new ProjectImage();
$counter            = 0;
foreach( $projects as $proj ) {if ( $counter == 4 ) {break;
	}
	$counter++;

	$projectId   = $proj->projectId;
	$projectName = $proj->name;
	$projectLink = $proj->link;

	$projectImages = $projectImageHelper->getProjectImagesWhere( "projectId", $projectId );
	$imageId       = 0;
	$orderNumber   = 2;
	foreach( $projectImages as $projImg ) {if ( $projImg->orderNumber < $orderNumber ) {$imageId     = $projImg->imageId;
			$orderNumber = $projImg->orderNumber;
		}
	}

	$image    = $imageHelper->getImage( $imageId );
	$imageSrc = $image->path;
	$altText  = $image->altText;

	$div = "
    <div class=\"media\">
        <a class=\"rcnt-img\" href=\"{$projectLink}\"><img src=\"{$imageSrc}\" alt=\"{$altText}\"></a>
        <div class=\"media-body ml-3\">
            <h4 class=\"h6\"><a href=\"{$projectLink}\">{$projectName}</a></h4>
        </div>
    </div>";

	array_push( $projectDivs, $div );
}
?>

<!-- Footer Start -->
<footer>
  <!-- Widgets Start -->
  <div class="footer-widgets">
    <div class="container">
      <div class="row">

        <section class="col-md-4">
          <div class="single-widget contact-widget" data-aos="fade-up" data-aos-delay="0">
            <h3 class="widget-title text-uppercase h6">Sandra K&uuml;pfer</h3>
            <div class="testimonials p-3 pt-5">
              <div class="test-img" data-aos="fade-up" data-aos-delay="0" data-aos-offset="0">
                <img src="img/headshots/HeadShot1.png" alt="Headshot of Sandra Kupfer.">
              </div>
            </div>
            <h6 class="widget-title">&nbsp;</h6>
            <div class="media">
              <i class="fa fa-map-marker mr-2" aria-hidden="true"></i>
              <div class="media-body ml-3">
                <h4 class="h6">Address</h4>
                <span>
                9-423 Westwood Dr.<br>
                Kitchener, ON
                </span>
              </div>
            </div>
            <div class="media">
              <i class="fa fa-envelope-o" aria-hidden="true"></i>
              <div class="media-body ml-3">
                <h4 class="h6">Email</h4>
                <a href="mailto:kupfer.sandra.m@gmail.com" style="text-decoration: none;">
                  <div class="d-inline-block">kupfer.sandra.m</div>
                  <div class="d-inline">@gmail.com</div>
                </a>
              </div>
            </div>
            <div class="media">
              <i class="fa fa-phone mr-1" aria-hidden="true"></i>
              <div class="media-body ml-3">
                <h4 class="h6">Phone</h4>
                <a href="tel:+610791803458"> +1 (519) 573-8255</a>
              </div>
            </div>
          </div>
          <div class="subscribe-widget">
            <ul class="nav social-nav ml-5">
              <li><a href="https://www.linkedin.com/in/sandra-kupfer/" aria-label="Github"><i class="fa fa-linkedin mt-2" aria-hidden="true"></i></a></li>
              <li><a href="https://github.com/ntrpi" aria-label="Github"><i class="fa fa-github mt-2" aria-hidden="true"></i></a></li>
            </ul>
          </div>
        </section>

        <section class="col-md-4">
          <div class="single-widget recent-post-widget" data-aos="fade-up" data-aos-delay="400">
            <h3 class="widget-title h6">Projects</h3>
            <?php
            foreach($projectDivs as $div) {
              echo $div;
            }
            ?>
          </div>
        </section>

        <section class="col-md-4" id="contact">
          <div class="single-widget" data-aos="fade-up" data-aos-delay="800">
            <h4 class="widget-title h6">Contact Me</h4>
            <form class="contact-form" method="get">
              <div class="subscribe-widget">
                <div class="input-group my-3">
                  <label for="contactName" class="sr-only">Your name</label>
                  <input class="form-control" name="contactName" id="contactName" type="text" placeholder="Your Name">
                  <span class="accent"></span>
                </div>
                <div class="input-group my-3">
                  <label for="contactEmail" class="sr-only">Your email</label>
                  <input class="form-control" name="contactEmail" id="contactEmail" type="email" placeholder="Your Email">
                  <span class="accent"></span>
                </div>
                <div class="input-group my-3">
                  <label for="contactMessage" class="sr-only">Your message</label>
                  <textarea class="form-control" name="contactMessage" id="contactMessage" cols="30" rows="10" placeholder="Your Message"></textarea></textarea>
                  <span class="accent"></span>
                </div>
              </div>
              <div class="input-group my-3">
                <input class="btn btn-primary" type="submit" value="Send">
              </div>
            </form>
          </div>
        </section>

      </div>
    </div>
  </div>
  <!-- Widgets End -->
  <!-- Foot Note Start -->
  <div class="foot-note">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="footer-content text-center text-lg-left d-lg-flex justify-content-between align-items-center">
            <p class="mb-0" data-aos="fade-right" data-aos-offset="0">&copy; 2021 All Rights Reserved.
            </p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="footer-content text-center text-lg-left d-lg-flex justify-content-between align-items-center">
            <p class="mb-0"><a href="./privacy.php">Privacy Policy</a></p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="footer-content text-center text-lg-left d-lg-flex justify-content-between align-items-center">
            <p class="mb-0" data-aos="fade-left" data-aos-offset="0"><a href="sitemap.html">Sitemap</a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Foot Note End -->
</footer>
<!-- Footer Endt -->