<?php 
    $SustainabilityHeader = "Sustainability";
    $backgroundimageColor = "rgba(13, 22, 58, 0.7), rgba(6, 10, 26, 0.7)";
    $backgroundImage = "images/newpic/chart.jpg";
    $imageList = [
        ["path" => "./images/common/gallery/Rectangle3134.png", "alt" => "Rectangle3134"],
        ["path" => "./images/common/gallery/Rectangle3135.png", "alt" => "Rectangle3135"],
        ["path" => "./images/common/gallery/Rectangle3136.png", "alt" => "Rectangle3136"],
        ["path" => "./images/common/gallery/Rectangle3137.png", "alt" => "Rectangle3137"],
        ["path" => "./images/common/gallery/Rectangle3138.png", "alt" => "Rectangle3138"],
    ];
?>

<div class="pages-heros" style="background-image:linear-gradient(<?php echo $backgroundimageColor;?>), url(<?php echo $backgroundImage;?>);">
        <div class="container">
            <div class="banner-title text-center">
                <h1 class="specialtitle-font text-uppercase text-white"><?php echo $SustainabilityHeader;?></h1>
            </div>
            <div class="position-absolute" style="bottom: -27%">
                <div class="col-12 mx-auto">
                    <div class="row">
                        <?php foreach($imageList as $image) { ?>
                        <div class="col-2 position-relative custom-xs-right-spacing">
                            <img src="<?php echo $image['path'];?>" alt="<?php echo $image['alt'];?>">
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
