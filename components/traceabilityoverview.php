<!-- Breakin the components into smaller blocks begins  -->
<?php
// header text 
$traceheadone= htmlspecialchars_decode('
    TRACEABILITY <span class="light-text">OVERVIEW
');
// Paragragh text 
$traceparatext= htmlspecialchars_decode('
    Track and source sustainably supply chain
    <p class="defaultFontSize">
        We enable crop buyers to monitor and trace crops comprehensively from farm to factory.
        KFC >> Cultivation Practics >> Crop Origin >>Crop Quality Specs >> Warehouse >>> Shipment>> Sustainability >>
        Recommendation
    </p>
');

// list array 
$tracelist = array (
    array(
        "list" => "Reliable data with first-mile traceability"
    ),
    array(
        "list" => "Sustainability goals progress tracking"
    ),
    array(
        "list" => "Brand credibility & differentiation that meet consumer demands"
    ),
    array(
        "list" => "True visibility into food supply sources"
    ),
    array(
        "list" => "Confidence in brands & products"
    ),
    array(
        "list" => "Efficient Supply Chain Visibility from farm to fark"
    ),
);

$tracebtnurl= "#";

$tracebtntext= "Sign Up Now ";

$tracetopimg= "https://home.growsel.com/images/common/gallery/truckdriver.jpg"



?>

<!-- WIDE SECTION CONTENT START -->
<div class="ws-wrapper mt-5 mb-5">
    <div class="row no-gutters">
        <div class="order-last order-md-3 col-lg-6">
            <div class="section-parallax" style="height: 600px; background-position: center !important; background-repeat: no-repeat !important; background-size: cover !important; position: relative; background:url(<?php echo $tracetopimg; ?>);"> </div>
        </div>
        <div class="order-first order-md-9 col-lg-6">
            <div class="ws-section-content">
                <div class="ws-inner-content">
                    <h2 class="xslarge-titlesize-font mb-0"><?php echo $traceheadone; ?></h2>
                    <p class="text-uppercase xtrabold text-secondary textsize-font mt-1"><?php echo $traceparatext; ?></p>
                    <ul class="mb-4 mt-3 defaultFontSize">
                        <?php
                            for( $x=0; $x<count($tracelist); $x++ ){
                                echo'
                                <li>'.$tracelist[$x]["list"].'</li>
                                ';
                            }
                        ?>
                    </ul>
                    <a class="btn button" href="<?php echo $tracebtnurl; ?>" role="button"><?php echo $tracebtntext; ?></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- WIDE SECTION CONTENT START -->