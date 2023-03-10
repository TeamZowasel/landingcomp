<!-- Breaking the component items into smaller blocks  -->
<?php  

$headingone= htmlspecialchars_decode('
        TRACEABILITY OVERVIEW <br/><span class="light-text text-secondary text-muted format">
            We sign contracts and domiciliation
            <span class="d-block">
                from vetted trusted buyers
            </span>
        </span>
');

$parasafetyone= "Zowasel screened enterprise buyers based on their company formation, payment terms, off-take capacity, and financial
records to determine/verify proof of income and payments capacity.

Zowasel signs Fulfillment Agreements with buyers, after which the buyer issues payment domiciliation to join the
platform.

Zowasel verifies every crop seller on the platform using their BVN, NIN, crop quality knowledge, and souring networks to
determine/verify proof delivery capacity.";

$safetyoneurl= "#blog-single.html";

$buttononetext= "Signup Now";

$safetyimageone= "images/common/gallery/law.jpg";




// second div items starts 


$safetyimagetwo= "images/newpic/happyfarmer3.jpg";

$headingtwo= htmlspecialchars_decode('
        Transaction security <br />
        <span class="light-text text-secondary text-muted format">
            Every customer is verified to securely trade
            <span class="d-block">
                with a trusted counterparty
            </span>
        </span>
');

$parasafetytwo= "We match buyers and sellers of the same commodity. You decide on pricing and terms together, Zowasel enforces smart contracts and ensures that all transactions are shipped and payments are made after delivery without any issues. To protect customers and ourselves, we follow the normal buyers' payment terms by making payments after delivery.";

$safetytwourl= "#blog-single.html";

$buttontwotext= "Signup Now";



?>
<!-- Breaking the component items into smaller blocks  -->

<!-- Safety section starts here  -->
<div class="container mt-5 mb-5">
    <div class="row gap">
        <div class="col-lg-7">
            <div class="product-desc-layer">
                <h3 class="featurette-heading text-uppercase"><?php echo $headingone; ?></h3>
                <p class="pt-3 pr-5 defaultFontSize"><?php echo $parasafetyone; ?></p>
                <h6 class="mt-4">
                    <a class="specialBtn-font text-btn button btn-outline-white Header-btn" href="<?php echo $safetyoneurl; ?>"><?php echo $buttononetext; ?></a>
                </h6>
            </div>
        </div>
        <div class="col-lg-5 col-mt-lg">
            <figure class="product-features">
                <img src="<?php echo $safetyimageone; ?>" alt="law">
            </figure>
        </div>
    </div>
    <hr class="product-divider">
    <div class="row">
        <div class="order-last order-md-3 col-lg-5 col-mt-lg">
            <figure class="product-features">
                <img src="<?php echo $safetyimagetwo; ?>" alt="happyfarmer3">
            </figure>
        </div>
        <div class="order-first order-md-9 col-lg-7">
            <div class="product-desc-layer pl-3 pr-5">
                <h3 class="featurette-heading text-uppercase"><?php echo $headingtwo; ?></h3>
                <p class="pt-3 defaultFontSize"><?php echo $parasafetytwo; ?></php></p>
                <h6 class="mt-4">
                    <a class="specialBtn-font text-btn button btn-outline-white Header-btn" href="<?php echo $safetytwourl; ?>"><?php echo $buttontwotext; ?></a>
                </h6>
            </div>
        </div>
    </div>
 
</div>
<!-- Safety section ends here  -->