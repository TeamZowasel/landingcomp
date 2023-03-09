<!-- Breaking components into blocks  -->
<?php
    $topheading= "Decision for Nature";
    $traceheadingthree= htmlspecialchars_decode('
        Zowasel<span class="light-text"> Services</span>
    ');
    $traceparathree="Learn How We can Help you </br> People, Community, and the Planet. ";

    $traceservices = array (
        array(
            "picture" => "images/common/sack.png",
            "header" => "MarketPlace",
            "paragrahtext" => "Marketplace digitally connects a wide set of stakeholders across the agricultural
                                supply chain including farmers, cooperatives, merchants, manufacturers, and processors to save time and money.",
            "link" => "#",
            "linktext" => "Join our marketplace",
        ),
        array(
            "picture" => "images/common/statistics.png",
            "header" => "Market Report",
            "paragrahtext" => "We bring you trending price offers and insights to power your agribusiness
                                    dynamically.
                            With Zowasel Insights, you can access updated reports on price offers, shipment, and
                            more for your commodities.",
            "link" => "#",
            "linktext" => "Signup Now",
        ),
        array(
            "picture" => "https://img.freepik.com/premium-photo/gps-navigator-icon-mapgenerative-ai_391052-11254.jpg?size=626&ext=jpg&uid=R24624365&ga=GA1.2.1975834317.1657554233&semt=sph",
            "header" => "Tracability",
            "paragrahtext" => "Our Sustainability program can help you make tangible progress toward your climate
                                action goals by enabling the scalable
                                sourcing of sustainably grown crops and measuring the impact of verified
                                agricultural practices – all backed by science
                                and data.",
            "link" => "#",
            "linktext" => "Learn more",
        ),
        array(
            "picture" => "images/common/blockchain.jpg",
            "header" => "Blockchain",
            "paragrahtext" => "Our Blockchain-based solution backed by Thought AI helps to simplify and unlocks
                                improved efficiency, sustainability,and traceability of harvest as 
                                well as reducing food wastage and fraud.",
            "link" => "#",
            "linktext" => "Learn more",
        ),
        array(
            "picture" => "images/common/cryptocurrency.jpg",
            "header" => "Crypto-Currency",
            "paragrahtext" => "We are leveraging Cryptocurrency to help improve access to finance in emerging
                                markets, significantly reduce high
                                transaction fees and to speed up easy wallet-to-wallet payment plus international
                                transfers.",
            "link" => "#",
            "linktext" => "Learn more",
        ),
        array(
            "picture" => "images/common/artificial intelligences.jpg",
            "header" => "Artificial Intelligence",
            "paragrahtext" => "We leverage real-time data analytics and automated process to correlate variables
                                such as weather, temperature, digital agronomics, soil conditions to find patterns to improve crop quality, and yield.",
            "link" => "#",
            "linktext" => "Learn more",
        ),
        
       
    );

?>
<!--TRACEABILITY PARTNERS WRAPPER -->
<div class="carousel-parallax2 mt-5">
    <div class="container">
        <div class="carousel-parallax-content">
            <div class="cp-title">
                <h5><?php echo $topheading; ?></h5>
                <h2><?php echo $traceheadingthree; ?></h2>
                <p><?php echo $traceparathree; ?></p>

            </div>
            <div class="custom-carousel2">
                <div class="owl-carousel owl-theme">
                    <!-- Array items  -->
                    <?php
                    for( $x=0; $x<count($traceservices); $x++){
                        echo'
                            <div class="item">
                                <div class="thumbnail-box">
                                    <figure class="thumbnail-box-img">
                                        <img src="'.$traceservices[$x]["picture"].'" alt="">
                                    </figure>
                                    <div class="thumbnail-box-caption">
                                        <h3>'.$traceservices[$x]["header"].'</h3>

                                        <p>'.$traceservices[$x]["paragrahtext"].'</p>
                                        <h5><a href="'.$traceservices[$x]["link"].'">'.$traceservices[$x]["linktext"].'</a></h5>
                                    </div>
                                </div>
                            </div>
                        ';
                    }
                    ?>
                   
                </div>
                <div class="owl-theme">
                    <div class="owl-controls">
                        <div class="custom-nav owl-nav"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>