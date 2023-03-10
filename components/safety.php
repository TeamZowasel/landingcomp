<!-- Breaking the component items into smaller blocks  -->
<?php  

$safety = array(
    array(
        "heading" => "TRACEABILITY OVERVIEW",
        "subHeading" => "We sign contracts and domiciliation <br> from vetted trusted buyers ",
        "body" => "Zowasel screened enterprise buyers based on their company formation, payment terms, off-take capacity, and financial
                   records to determine/verify proof of income and payments capacity.
                   Zowasel signs Fulfillment Agreements with buyers, after which the buyer issues payment domiciliation to join the
                   platform. Zowasel verifies every crop seller on the platform using their BVN, NIN, crop quality knowledge, and souring networks to
                   determine/verify proof delivery capacity.",
        "btnText" => "Signup Now",
        "btnUrl" => "#blog-single.html",
        "image" => "images/common/gallery/law.jpg",

    ),
    array(
        "heading" => "Transaction security ",
        "subHeading" => " Every customer is verified to securely trade <br> with a trusted counterparty ",
        "body" => "We match buyers and sellers of the same commodity. You decide on pricing and terms together, Zowasel enforces smart contracts and ensures that all transactions are shipped and payments are made after delivery without any issues. 
                   To protect customers and ourselves, we follow the normal buyers' 
                   payment terms by making payments after delivery.",
        "btnText" => "Signup Now",
        "btnUrl" => "#blog-single.html",
        "image" => "images/newpic/happyfarmer3.jpg",
        "imageAlt" => function ($imageitem) {
            $pathParts = explode('/gallery/', $imageitem['image']);
            $fileName = end($pathParts);
            return 'Image of ' . $fileName;
        }

    ),
  
);
    




?>
<!-- Breaking the component items into smaller blocks  -->

<!-- Safety section starts here  -->
<div class="container mt-5 mb-5">
    <?php 
        for( $x=0; $x<count($safety); $x++){ 
            if(($x+0)%2 == 0){
                ?>

                <div class="row gap">
                    <div class="col-lg-7">
                        <div class="product-desc-layer">
                            <h3 class="featurette-heading text-uppercase"><?php echo $safety[$x]['heading']; ?>
                                <br/>
                                <span class="light-text text-secondary text-muted format">
                                <?php echo $safety[$x]['subHeading']; ?>
                                </span>
                            </h3>
                            <p class="pt-3 pr-5 defaultFontSize"><?php echo $safety[$x]['body']; ?></p>
                            <h6 class="mt-4">
                                <a class="specialBtn-font text-btn button btn-outline-white Header-btn" href="<?php echo $safety[$x]['btnUrl']; ?>"> <?php echo $safety[$x]['btnText']; ?></a>
                            </h6>
                        </div>
                    </div>
                    <div class="col-lg-5 col-mt-lg">
                        <figure class="product-features">
                            <img src="<?php echo $safety[$x]['image']; ?>" alt="law">
                        </figure>
                    </div>
                </div>
                <hr class="product-divider">

    <?php 
    }else{ ?>
                <div class="row gap">
                    <div class="col-lg-5 col-mt-lg">
                        <figure class="product-features">
                            <img src="<?php echo $safety[$x]['image']; ?>" alt="law">
                        </figure>
                    </div>
                    <div class="col-lg-7">
                        <div class="product-desc-layer">
                            <h3 class="featurette-heading text-uppercase"><?php echo $safety[$x]['heading']; ?>
                                <br/>
                                <span class="light-text text-secondary text-muted format">
                                <?php echo $safety[$x]['subHeading']; ?>
                                </span>
                            </h3>
                            <p class="pt-3 pr-5 defaultFontSize"><?php echo $safety[$x]['body']; ?></p>
                            <h6 class="mt-4">
                                <a class="specialBtn-font text-btn button btn-outline-white Header-btn" href="<?php echo $safety[$x]['btnUrl']; ?>"> <?php echo $safety[$x]['btnText']; ?></a>
                            </h6>
                        </div>
                    </div>
                </div>
                <hr class="product-divider">
    <?php }  }   
    ?>
 
</div>
<!-- Safety section ends here  -->