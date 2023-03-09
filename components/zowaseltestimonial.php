        <?php

        
$testimonials = array(
            array(
                "testimony" => "
                We've experienced rapid growth with Zowasel, and we see a lot of interest in the
                                                marketplace from the changes we've
                                                made. That's because Zowasel has helped us to better understand buyers’ crop
                                                quality specifications, our deliveries are
                                                targeted at meeting individual customers’ unique crop expectations. This is
                                                genuinely helpful for our target buyers and
                                                our agribusiness.",
                "picture" => "images/newpic/update/port1.jpg",
            "fullname" => "Anna Folake",
            "state" => "- Ondo"

            ),

        array(
                "testimony" =>  "
                Finding Zowasel was one of those rare “hallelujah” moments you experience in the
                                                agribusiness supply chain. Simply put,
                                                we get more returns for our crops, faster and with ease. We do not need to start
                                                chasing off-taking for Purchase Orders
                                                anymore"
                                               ,
                "picture" => "images/newpic/update/port3.jpg",
            "fullname" => "Mike Adejoh",
            "state" => "- Kogi"

            )
             array(
                "testimony" =>  "
                Finding Zowasel was one of those rare “hallelujah” moments you experience in the
                                                agribusiness supply chain. Simply put,
                                                we get more returns for our crops, faster and with ease. We do not need to start
                                                chasing off-taking for Purchase Orders
                                                anymore"
                                               ,
                "picture" => "images/newpic/update/port3.jpg",
            "fullname" => "Mike Adejoh",
            "state" => "- Kogi"

            )
);



        ?>
        
        
 
 
 <!-- CONTACT AND TESTIMONIALS START -->
        <div id="contact" class="front-parallax  xmb-5 Test-Height " >
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-lg-5">
                        <div class="fp-contact">
                            <h3>Get in Touch </h3>
                            <p>Send us you message and we will get back to you!</p>
                            <div class="contact-form">
                                <form id="contact-form" method="post" action="contact.php">
                                    <div class="messages"></div>
                                    <div class="controls">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input id="form_name" type="text" name="name"
                                                        class="form-control custom-form" placeholder="Name" required="required"
                                                        data-error="Firstname is required.">
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input id="form_email" type="email" name="email"
                                                        class="form-control custom-form" placeholder="Email address"
                                                        required="required" data-error="Valid email is required.">
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input id="form_phone" type="tel" name="phone"
                                                        class="form-control custom-form" placeholder="Please enter your phone">
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <textarea id="form_message" name="message" class="form-control custom-form"
                                                        placeholder="Your message" rows="3" required="required"
                                                        data-error="Please,leave us a message."></textarea>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="btn-contact">
                                            <input type="submit" class="btn btn-contact button" value="Send message">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="fp-testiminial">
                            <div class="testimonial-carousel-alt">
                                <div class="owl-carousel owl-theme">



                                    <!-- ALL TESTIMONIALS HERE  -->
                                    
                                    <?php 
                                    for( $x=0; $x<count($testimonials); $x++ ){
                                        echo' <div class="item">
                                        <div class="testimonials-content">
                                            <p>'.$testimonials[$x]["testimony"].'</p>
                                        </div>
                                        <div class="author-info">
                                            <div class="media">
                                                <img src="'.$testimonials[$x]["picture"].'" class="mr-3" alt="...">
                                                <div class="media-body">
                                                    <h5 class="mt-0">'.$testimonials[$x]["fullname"].' </h5>
                                                    <p>'.$testimonials[$x]["state"].'</p>
                                                 </div>
                                            </div>
                                        </div>
                                </div>';

                        }

?>













                                <!--  ALL TESTIMONIALS ENDS HERE -->



                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- CONTACT AND TESTIMONIALS END -->