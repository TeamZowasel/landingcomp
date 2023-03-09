<?php
    // background image
    $parallaxImage = "images/common/gallery/market1place.jpg";
    // our mission header
    $missionHeader = <<<MULTILINE
        Zowasel <br /><span class="light-text">Our Mission </span>
    MULTILINE;
    // mission content
    $missionContent = "We're on a mission to build sustainable value chains across communities, people, and the
    planet.";
    // contact url
    $contactURl = "contact.html";
    // button title
    $SignUp =  <<<MULTILINE
        SignUp Today <i class="fa-solid fa-arrow-right"></i>
    MULTILINE;
?>

    <!-- PARALLAX START -->
    <div class="careers-parallax mt-5"
        style="background-image: url(<?php echo $parallaxImage;?>) !important;">
        <div class="container">
            <div class="cp-bg-layer">
                <div class="cp-content">
                    <h3> <?php echo $missionHeader;?></h3>
                    <p><?php echo $missionContent;?></p>
                    <a href="<?php echo $contactURl;?>" class="btn button btn-white"><?php echo $SignUp;?></a>
                </div>
            </div>
        </div>
    </div>
    <!-- PARALLAX END -->