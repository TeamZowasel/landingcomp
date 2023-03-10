<?php
    // Set the background image for the parallax effect
    $parallaxImage = "images/common/gallery/market1place.jpg";
    
    // Set the header for the mission statement
    $missionHeader = <<<MULTILINE
        Zowasel <br /><span class="light-text">Our Mission </span>
    MULTILINE;
    
    // Set the content for the mission statement
    $missionContent = "We're on a mission to build sustainable value chains across communities, people, and the planet.";
    
    // Set the URL for the contact page
    $contactURl = "contact.html";
    
    // Set the title for the sign up button
    $SignUp =  <<<MULTILINE
        SignUp Today <i class="fa-solid fa-arrow-right"></i>
    MULTILINE;
?>

<!-- Parallax effect starts here -->
<div class="careers-parallax mt-5" style="background-image: url(<?php echo $parallaxImage;?>) !important;">
    <div class="container">
        <div class="cp-bg-layer">
            <div class="cp-content">
                <!-- Display the mission statement header -->
                <h3><?php echo $missionHeader;?></h3>
                
                <!-- Display the mission statement content -->
                <p><?php echo $missionContent;?></p>
                
                <!-- Display the sign up button with a link to the contact page -->
                <a href="<?php echo $contactURl;?>" class="btn button btn-white"><?php echo $SignUp;?></a>
            </div>
        </div>
    </div>
</div>
<!-- Parallax effect ends here -->
