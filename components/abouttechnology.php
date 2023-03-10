<?php
$OurTechnology = <<<MULTILINE
        Our <span class="light-text">Technology</span>
    MULTILINE;
$technologyContent = "We are leveraging data science and Artificial Intelligence to improve farmers' productivity, sustainability,
    and
    prosperity across value chains.";

$technologies = array(
    array(
        "imageUrl" => "#",
        "image" => "images/common/gallery/logo/data Science.jpg",
        "alt" => function ($imageitem) {
            $pathParts = explode("logo/", $imageitem["image"]);
            $fileName = end($pathParts);
            return 'Image of ' . $fileName;
        },
        "header" => "Data Science",
        "body" => "Adapting wild plants and animals for people to use is called farmers were domestication join
                    our incredible.",
        "btnUrl" => "#",
        "btnTitle" => "Read More"
    ),
    array(
        "imageUrl" => "#",
        "image" => "images/common/gallery/logo/articifial Intelligence.jpg",
        "alt" => function ($imageitem) {
            $pathParts = explode("logo/", $imageitem["image"]);
            $fileName = end($pathParts);
            return 'Image of ' . $fileName;
        },
        "header" => "Artificial Intelligence",
        "body" => "The first domesticated animals were dogs, which were used for hunting. Sheep and goats to use
                    is called farmers.",
        "btnUrl" => "#",
        "btnTitle" => "Read More"
    ),
    array(
        "imageUrl" => "#",
        "image" => "images/common/gallery/logo/buyer.jpg",
        "alt" => function ($imageitem) {
            $pathParts = explode("logo/", $imageitem["image"]);
            $fileName = end($pathParts);
            return 'Image of ' . $fileName;
        },
        "header" => "Matching Buyers",
        "body" => "The ground-breaking research took 11 years to complete and is the longest study will start
                    school with.",
        "btnUrl" => "#",
        "btnTitle" => "Read More"
    ),
);

?>


<!-- LATEST NEWS START -->
<div class="container mt-5 mb-5">
    <div class="layer-title text-center">
        <h2>
            <?php echo $OurTechnology; ?>
        </h2>
        <p>
            <?php echo $technologyContent; ?>
        </p>
        <hr>
    </div>
    <div class="news-carousel">

        <div class="owl-carousel owl-theme hover-effects image-hover">
            <?php foreach ($technologies as $tech):?>
            <div class="item">
                <div class="news-card">
                    <figure class="nc-thumb"><a href="<?php echo $tech['imageUrl']; ?>"><img
                                src="<?php echo $tech['image']; ?>" alt="<?php echo $tech['alt']($tech); ?>"></a>
                    </figure>
                    <div class="nc-caption">
                        <div class="media">

                            <div class="media-body">
                                <h4 class="mt-0"><?php echo $tech['header']; ?></h4>
                            </div>
                        </div>
                        <p><?php echo $tech['body']; ?>.</p>
                        <a href="<?php echo $tech['btnUrl']; ?>"
                            class="btn button btn-md btn-outline"><?php echo $tech['btnTitle']; ?><i
                                class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <?php endforeach;?>
        </div>
        <div class="owl-theme">
            <div class="owl-controls">
                <div class="custom-nav owl-nav"></div>
            </div>
        </div>
    </div>
</div>
<!-- LATEST NEWS END -->