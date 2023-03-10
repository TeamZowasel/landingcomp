<?php
$report = array(
    array(
        "heading" => "Start your day with data",
        "subHeading" => "Get Daily Report ",
        "body" => "We bring you trending price offers and insights to power your agribusiness dynamically. Get
                    access to our exclusive all-in-one Commodity Market Report across Cash Crops and Grains. We
                    bring you trending price offers from leading buyers to dynamically power your agribusiness,
                    profitability, and projections for the week ahead. Signup for our exclusive all-in-one Commodity
                    Market Report across Cash Crops and Grains.",
        "btnText" => "Signup Now",
        "btnUrl" => "#blog-single.html",
        "image" => "images/common/gallery/PricePOST.jpg",
        "imageAlt" => function ($imageitem) {
            $pathParts = explode('gallery/', $imageitem['image']);
            $fileName = end($pathParts);
            return 'Image of ' . $fileName;
        }

    ),
    array(
        "heading" => "Market Analytics",
        "subHeading" => "Get Daily Statistics. ",
        "body" => "Subscribe to our all-exclusive commodity market report and statistical data analytics through a
                    seamless dashboard across all devices. Get all the in-depth reports you need in one place making
                    it easy for you to make your buying decisions. Get access to our real-time price offers from
                    farm-gate, aggregators, and competition offers across grains and cash crops value chains. Grab
                    this opportunity to dynamically power your supply chain and souring plan to save time and money.",
        "btnText" => "Signup Now",
        "btnUrl" => "#blog-single.html",
        "image" => "images/common/gallery/analystics.jpg",
        "imageAlt" => function ($imageitem) {
            $pathParts = explode('/gallery/', $imageitem['image']);
            $fileName = end($pathParts);
            return 'Image of ' . $fileName;
        }

    ),
);
?>


<section>
    <!-- REPORT START -->
    <?php foreach ($report as $item): ?>
        <div class="container mt-5 mb-5">
            <div class="row gap">
                <div class="col-lg-7">
                    <div class="product-desc-layer">
                        <h3 class="featurette-heading text-uppercase pt-3">
                            <?php echo $item['heading']; ?><br />
                            <span class="light-text text-secondary text-muted format">
                                <?php echo $item['subHeading']; ?>
                            </span>
                        </h3>
                        <p class="pt-2 pr-4 defaultFontSize">
                            <?php echo $item['body']; ?>
                        </p>
                        <h6 class="mt-4">
                            <a class="specialBtn-font text-btn button btn-outline-white Header-btn"
                                href="<?php echo $item['btnUrl']; ?>"><?php echo $item['btnText']; ?></a>
                        </h6>
                    </div>
                </div>
                <div class="col-lg-5 col-mt-lg">
                    <figure class="product-features">
                        <img src="<?php echo $item['image']; ?>" alt="<?php echo $item['imageAlt']($item); ?>">
                    </figure>
                </div>
            </div>
            <hr class="product-divider">

        </div>
    <?php endforeach; ?>

    <!-- PRODUCTS END -->
</section>