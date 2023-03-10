<?php
$SustainabilityHeader = "Zowasel Sustainability";
$SustainabilityHeaderUnder = "Comparison Program";
$SustainabilityBody = "The Agricultural Sustainability Comparison Program is a comprehensive program designed to compare the sustainability of different agricultural operations. The program includes various components, such as assessing environmental impacts, evaluating economic performance, and measuring social impacts. The program also provides resources to help farmers better understand and improve their sustainability practices. It includes interactive tools, such as a sustainability comparison dashboard and a sustainability scorecard, which enable farmers to compare their operations with other farms and identify areas for improvement. Additionally, the program provides resources to help farmers develop and implement management plans that enhance their sustainability practices.";
$btnText = "Join Now";
$sustainText = "Comparing Sustainability Practices of Different Types of Agriculture";
$image = "../images/common/gallery/gallery-1.jpg";
?>
<!-- CONTENT START -->
<div class="mt-5 pt-5">
    <section class="comparison-section-bg mt-4">
        <!-- PRICING START -->
        <div class="white-overlay"></div>
        <div class="container pb-2">
            <div class="position-relative layer-title text-center mb-3">
                <h2><?php echo $SustainabilityHeader; ?><br><?php echo $SustainabilityHeaderUnder; ?></h2>
                <h5 class="sustain-texth5"><?php echo $sustainText; ?></h5>
            </div>
            <div class="container mb-4">
                <div class="text-center col-12 col-lg-10 mx-auto">
                    <p class="sustain-text">
                        <?php echo $SustainabilityBody; ?>
                    </p>
                    <button type="button" class="button-default mt-2"><?php echo $btnText; ?></button>
                </div>
            </div>
            <div class="col-12 mb-5 col-lg-10 mx-auto sustainability-truck-bg" style="background: url(<?php echo $image; ?>) cover center"></div>
        </div>
    </section>
</div>
<!-- CONTENT END -->
