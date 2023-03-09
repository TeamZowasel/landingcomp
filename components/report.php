<!-- Breaking the component items into smaller blocks  -->
<?php  
// First row div items starts
$headingone= htmlspecialchars_decode('
    Start your day with data <br/><span class="light-text text-secondary text-muted format">Get Daily Report</span>
');

$parareportone= "We bring you trending price offers and insights to power your agribusiness dynamically. Get access to our exclusive all-in-one Commodity Market Report across Cash Crops and Grains. We bring you trending price offers from leading buyers to dynamically power your agribusiness, profitability, and projections for the week ahead. Signup for our exclusive all-in-one Commodity Market Report across Cash Crops and Grains.";

$reportoneurl= "#blog-single.html";

$buttononetext= "Signup Now";

$reportimageone= "images/common/gallery/PricePOST.jpg";




// second div items starts 


$reportimagtwo= "images/common/gallery/analystics.jpg";

$headingtwo= htmlspecialchars_decode('
    Market Analytics <br/><span class="light-text text-secondary text-muted format">Get Daily Statistics.</span>
');

$parareporttwo= " Subscribe to our all-exclusive commodity market report and statistical data analytics through a seamless dashboard across all devices. Get all the in-depth reports you need in one place making it easy for you to make your buying decisions. Get access to our real-time price offers from farm-gate, aggregators, and competition offers across grains and cash crops value chains. Grab this opportunity to dynamically power your supply chain and souring plan to save time and money.";

$reporttwourl= "#blog-single.html";

$buttontwotext= "Signup Now";



?>
<!-- Breaking the component items into smaller blocks  -->


<!-- REPORT START -->
<div class="container mt-5 mb-5">
    <div class="row gap">
        <div class="col-lg-7">
            <div class="product-desc-layer">
                <h3 class="featurette-heading text-uppercase pt-3"><?php echo $headingone; ?></h3>
                <p class="pt-2 pr-4 defaultFontSize"><?php echo $parareportone; ?></p>
                <h6 class="mt-4">
                    <a class="specialBtn-font text-btn button btn-outline-white Header-btn" href="<?php echo $reportoneurl; ?>"><?php echo $buttononetext; ?></a>
                </h6>
            </div>
        </div>
        <div class="col-lg-5 col-mt-lg">
            <figure class="product-features">
                <img src="<?php echo $reportimageone; ?>" alt="">
            </figure>
        </div>
    </div>
    <hr class="product-divider">
    <div class="row">
        <div class="order-last order-md-3 col-lg-5 col-mt-lg">
            <figure class="product-features">
                <img src="<?php echo $reportimagtwo; ?>" alt="">
            </figure>
        </div>
        <div class="order-first order-md-9 col-lg-7">
            <div class="product-desc-layer pl-3 pr-5 pt-4">
                <h3 class="featurette-heading text-uppercase"><?php echo $headingtwo; ?></h3>
                <p class="pt-3 defaultFontSize"><?php echo $parareporttwo; ?></p>
                <h6 class="mt-4">
                    <a class="specialBtn-font text-btn button btn-outline-white Header-btn" href="<?php echo $reporttwourl; ?>"> <?php echo $buttontwotext; ?> </a>
                </h6>
            </div>
        </div>
    </div>
</div>
<!-- PRODUCTS END -->