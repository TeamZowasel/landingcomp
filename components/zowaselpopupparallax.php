        <?php      

        $heading= htmlspecialchars_decode(<<<MULTILINE
        Providing the finest products <br /> <span class="light-text">to the best feed suppliers.</span>

        MULTILINE);



        $popupparagraphtwo= htmlspecialchars_decode(<<<MULTILINE
        Helping farmers to emerging markets maximize their profits. <br>
        We use agronomic machine learning, remote sensing, and mobile phones.

        MULTILINE);

        $popupbutton= htmlspecialchars_decode(<<<MULTILINE


        MULTILINE);

        $calltoactionurl= "contact.html";


        $buttontext = htmlspecialchars_decode(<<<MULTILINE
        Schedule a Demo <i class="fa-solid fa-arrow-right"></i>

        MULTILINE);

        $popupimage = "https://images.pexels.com/photos/14699589/pexels-photo-14699589.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1";





        ?>



<div id="Start-para" class="p-5  popup-parallax" style="background-size:cover; background:url(<?php echo $popupimage; ?>)">
            <div class="col-md-10 pt-5 pb-3 col-12 mx-md-auto text-center text-white">
                <a class="popup-youtube d-block" target="_blank" href="https://medium.com/zowasel">
                    <div class="pulse"><i class="fas fa-play"></i></div>
                </a>
                <h2   class="text-white" style="margin: 60px 0 25px"><?php echo $heading; ?>
                </h2>
               
                <p class="text-white mb-4"><?php echo $popupparagraphtwo; ?></p>
                <div class="parallax-btn">
                    <a href="<?php echo $calltoactionurl; ?>" class="btn button btn-white"><?php echo $buttontext; ?></a>
                    
                    <!-- <a href="blog-left-sidebar.html" class="btn button">Zowasel's  Media <i class="fa-solid fa-arrow-right"></i></a> -->
                </div>
                <!-- <div>
                    <a href="contact.html" class="button-default text-white orange-btn">Schedule a Demo <i class="fa-solid fa-arrow-right"></i></a>
                </div> -->
            </div>
        </div>