<?php
    // set the headers for the our partners and supporters
    $partnersSupportersHeader = <<<MULTILINE
        Meet Our <br /><span class="light-text">Partners & Supporters</span>
    MULTILINE;
    // set the URL for the Zowasel media page
    $zowaselMediaURL = '#';
    // set the media button title
    $zowaselMediaBtn = <<<MULTILINE
        Zowasel Media <i class="fa-solid fa-arrow-right"></i>
    MULTILINE;

    /// Array of supporter logos for the first row
    $supporterLogosOne = [
        "images/common/gallery/logo/giz-logo_edited.webp",
        "images/common/gallery/logo/Fi_10years.webp",
        "images/common/gallery/logo/Jica.webp",
        "images/common/gallery/logo/Promosidor.webp",
    ];
    // Array of supporter logos for second row
    $supporterLogosTwo = [
        "images/common/gallery/logo/WFP.webp",
        "images/common/gallery/logo/Jica.webp",
        "images/common/gallery/logo/MC.webp",
        "images/common/gallery/logo/giz-logo_edited.webp",
    ];
?>


<!-- CALL TO ACTION START -->
<div class="cta-counter mt-5 mb-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="cta-content">
                    <h3><?php echo $partnersSupportersHeader;?></h3>
                </div>
            </div>
            <div class="col-md-6">
                <div class="cta-btn">
                    <a href="<?php echo $zowaselMediaURL;?>" class="btn button"><?php echo $zowaselMediaBtn;?></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- CALL TO ACTION END -->

<!-- Loop through the array to generate the HTML code -->
<!-- COUNTER START -->
<div class="container mb-5">
    <div class="counter-wrapper-alt">
        <div class="row">
            <?php foreach ($supporterLogosOne as $logoPath): ?>
            <?php
                // Extract the last word after "/logo/" in the logo path
                $parts = explode('/logo/', $logoPath);
                $altText = end($parts);
            ?>
            <div class="col-md-6 col-lg-3">
                <div class="media counter-col-alt counter-border-right-alt">
                    <img class="img1" src="<?php echo $logoPath; ?>" class="mr-2" alt="<?php echo $altText; ?>">
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<div class="container mb-5 changecont">
    <div class="counter-wrapper-alt">
        <div class="row">
            <?php foreach ($supporterLogosTwo as $logoPath): ?>
            <?php
                // Extract the last word after "/logo/" in the logo path
                $parts = explode('/logo/', $logoPath);
                $altText = end($parts);
            ?>
            <div class="col-md-6 col-lg-3">
                <div class="media counter-col-alt counter-border-right-alt">
                    <img class="img1" src="<?php echo $logoPath; ?>" class="mr-2" alt="<?php echo $altText; ?>">
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>