<?php
// set the background image  
$backgroundImage = "images/newpic/HANATU-BULUS.jpg";
$ourVision = "OUR VISION";
$missionStatement = "We're on a mission to build sustainable value chains across communities, people,
                    and the planet.";

$zowasel = array(
    array(
        "image" => "images/icons/farmer.svg",
        "alt" => function ($imageitem) {
            $pathParts = explode("icons/", $imageitem["image"]);
            $fileName = end($pathParts);
            return 'Image of ' . $fileName;
        },
        "header" => "GROWERS",
        "body" => "increase your productivity and profitability, earn more from your harvest.",
    ),
    array(
        "image" => "images/icons/time-money-svgrepo-com.svg",
        "alt" => function ($imageitem) {
            $pathParts = explode("icons/", $imageitem["image"]);
            $fileName = end($pathParts);
            return 'Image of ' . $fileName;
        },
        "header" => "CORPORATES",
        "body" => "Save time and money, connect with our network of vetted growers.",
    ),
    array(
        "image" => "images/icons/agronomy.svg",
        "alt" => function ($imageitem) {
            $pathParts = explode("icons/", $imageitem["image"]);
            $fileName = end($pathParts);
            return 'Image of ' . $fileName;
        },
        "header" => "TRUST & SAFETY",
        "body" => "Every member of our Network is verified to sucurely trade with a trusted
                    counter party.",
    ),
    array(
        "image" => "images/icons/wheat.svg",
        "alt" => function ($imageitem) {
            $pathParts = explode("icons/", $imageitem["image"]);
            $fileName = end($pathParts);
            return 'Image of ' . $fileName;
        },
        "header" => "ZERO HUNGER",
        "body" => "Our Mission is to fight aganist Zero Hunger.",
    ),
);

// for the counter
$counter = array(
    array(
        "image" => "images/icons/connection-svgrepo-com.svg",
        "alt" => function ($imageitem) {
            $pathParts = explode("icons/", $imageitem["image"]);
            $fileName = end($pathParts);
            return 'Image of ' . $fileName;
        },
        "dataCounter" => 4006,
        "body" => "Connections",
    ),
    array(
        "image" => "images/icons/farm.svg",
        "alt" => function ($imageitem) {
            $pathParts = explode("icons/", $imageitem["image"]);
            $fileName = end($pathParts);
            return 'Image of ' . $fileName;
        },
        "dataCounter" => 833,
        "body" => "Corp Centers",
    ),
    array(
        "image" => "images/icons/rating-svgrepo-com.svg",
        "alt" => function ($imageitem) {
            $pathParts = explode("icons/", $imageitem["image"]);
            $fileName = end($pathParts);
            return 'Image of ' . $fileName;
        },
        "dataCounter" => 1458,
        "body" => "Testimonials",
    ),
    array(
        "image" => "images/icons/certificate-quality-award-education-medal-svgrepo-com.svg",
        "alt" => function ($imageitem) {
            $pathParts = explode("icons/", $imageitem["image"]);
            $fileName = end($pathParts);
            return 'Image of ' . $fileName;
        },
        "dataCounter" => 106,
        "body" => "Awards Received",
    ),
);
?>

<!-- WIDE SECTION SERVICES START -->
<div class="ws-feature mt-5 mb-5">
    <div class="row no-gutters">
        <div class="col-lg-6">
            <div class="ws-feature-left" style="background-image: url(<?php echo $backgroundImage; ?>);">
            </div>
        </div>
        <div class="col-lg-6">
            <div class="ws-feature-right">
                <div class="feature-right-content pb-4">
                    <div class="layer-box">
                        <div class="missiontext ">
                            <h2 class="mt-3">
                                <?php echo $ourVision; ?>
                            </h2>
                            <h5>
                                <?php echo $missionStatement; ?>
                            </h5>

                        </div>
                        <hr class="line-mission ">
                    </div>
                    <?php foreach ($zowasel as $agenda): ?>
                        <div class="layer-box">
                            <div class="media">
                                <img src="<?php echo $agenda['image']; ?>" class="mr-3"
                                    alt="<?php echo $agenda['alt']($agenda); ?>">
                                <div class="media-body">
                                    <h4 class="mt-0">
                                        <?php echo $agenda['header']; ?>
                                    </h4>
                                    <p>
                                        <?php echo $agenda['body']; ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
    <div class="counter-wrapper">
        <div class="container width">
            <?php foreach ($counter as $count): ?>
                <div class="counter-inner-box">
                    <div class="media">
                        <img src="<?php echo $count['image']; ?>" class="mr-3" alt="<?php echo $count['alt']($count); ?>">
                        <div class="media-body">
                            <div class="counter" data-count="<?php echo $count['dataCounter']; ?>">0</div>
                            <p>
                                <?php echo $count['body']; ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<!-- WIDE SECTION SERVICES END -->