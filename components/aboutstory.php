<?php
    // set the side image
    $sideImage = 'images/newpic/update/mancall.jpg';
    // set the side image alt value
    $sideImageAlt = explode('/update/', $sideImage);

    // set the story header
    $storyHeader = 'OUR STORY';
    // set the story intro
    $storyIntro = "We are Zowasel";
    // set the story content
    $storyContent  = "The idea of starting an agricultural technology company came as a result of our founder’s
        observation of how difficult it was for his mother to access the market to trade her commodities and access credit to
        finance her trade in Nigeria. <br /> <br />
        Today, the vision has created a robust ecosystem by building a sustainable agricultural
        value chain. Offering easy,
        fast, and accessible technology suited for both online and offline markets, enabling
        farmers to increase their
        productivity, better crop quality, and increase revenues by selling beyond their
        traditional local markets <br /> <br />
        Zowasel is leveraging data science and artificial intelligence to improve productivity,
        sustainability, and
        profitability for smallholder farmers from seed to market.
    " ;

    // set the signature image
    $signature = 'images/common/signature.png';
    // set the signature image alt value
    $signatureAlt = explode('/update/', $signature);
?>

<!-- ABOUT US START -->
<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-lg-5">
            <figure class="agroly-about-img">
                <img src="<?php echo $sideImage;?>" alt="<?php echo $sideImageAlt[1];?>">
            </figure>
        </div>
        <div class="col-lg-7 col-mt-lg">
            <div class="about-agroly-info">
                <h5><?php echo $storyHeader; ?></h5>
                <h2><?php echo $storyIntro; ?></h2>
                <p><?php echo $storyContent; ?></p>
                <figure class="signature">
                    <img src="<?php echo $signature;?>" alt="<?php echo $signatureAlt[1];?>">
                </figure>
            </div>
        </div>
    </div>
</div>
<!-- ABOUT US END -->