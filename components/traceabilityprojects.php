<!-- Breaking components into smaller blocks begins  -->
<?php 
    $traceheadingtwo= htmlspecialchars_decode('
    Our <span class="light-text">Projects</span>
    ');

    $traceprojectbtns= array (
        array(
            "btnnclass"=>"active",
            "btnnurl" => "*",
            "btnnurlname" => "All",
        ),
        array(
            "btnnclass"=>"",
            "btnnurl" => ".land",
            "btnnurlname" => "Land",
        ),
        array(
            "btnnclass"=>"",
            "btnnurl" => ".equipment",
            "btnnurlname" => "Equipment",
        ),
        array(
            "btnnclass"=>"",
            "btnnurl" => ".farm",
            "btnnurlname" => "Farm",
        ),
    );

    $traceprojects = array (
        array(
            "category" => "land",
            "catimgone" => "images/newpic/bkgrd2.jpg",
            "catimagetwo" => "images/newpic/bkgrd2.jpg",
            "boldtext" => "Land",
        ),
        array(
            "category" => "farm",
            "catimgone" => "images/common/gallery/ag-pic-12.jpg",
            "catimagetwo" => "images/newpic/havert3.jpg",
            "boldtext" => "Farm",
        ),
        array(
            "category" => "equipment",
            "catimgone" => "images/common/gallery/blog-prev-2.jpg",
            "catimagetwo" => "images/common/gallery/blog-prev-2.jpg",
            "boldtext" => "Equipment",
        ),
        array(
            "category" => "farm",
            "catimgone" => "images/common/gallery/maizefarm1 (1).jpg",
            "catimagetwo" => "images/common/gallery/maizefarm1 (1).jpg",
            "boldtext" => "Farm",
        ),
        array(
            "category" => "land",
            "catimgone" => "images/common/gallery/maize.jpg",
            "catimagetwo" => "images/common/gallery/maize.jpg",
            "boldtext" => "Land",
        ),
        array(
            "category" => "farm",
            "catimgone" => "images/common/gallery/cocoa.jpg",
            "catimagetwo" => "images/common/gallery/cocoa.jpg",
            "boldtext" => "Farm",
        ),
        array(
            "category" => "equipment",
            "catimgone" => "images/newpic/machinn.jpg",
            "catimagetwo" => "images/newpic/machinn.jpg",
            "boldtext" => "Equipment",
        ), 
        array(
            "category" => "farm",
            "catimgone" => "images/common/gallery/ag-two-research.jpg",
            "catimagetwo" => "images/common/gallery/ag-two-research.jpg",
            "boldtext" => "Farm",
        ),   
        array(
            "category" => "equipment",
            "catimgone" => "images/newpic/heiko-janowski-XLmWt913EOc-unsplash.jpg",
            "catimagetwo" => "images/newpic/heiko-janowski-XLmWt913EOc-unsplash.jpg",
            "boldtext" => "Equipment",
        ), 
    );


?>

<!-- PROJECT GRID START -->
<div class="container mt-5 mb-5">
    <div class="layer-title text-center">
        <h2><?php echo $traceheadingtwo; ?></h2>
    </div>
    <div class="filter-container">
        <ul class="filter">
            <!-- Array for buttons top  -->
            <?php
                for( $x=0; $x<count($traceprojectbtns); $x++){
                    echo'
                    <li class="'.$traceprojectbtns[$x]["btnnclass"].'" data-filter="'.$traceprojectbtns[$x]["btnnurl"].'">'.$traceprojectbtns[$x]["btnnurlname"].'</li>
                    ';
                }
            ?>
            <!-- <li class="active" data-filter="*">All</li>
            <li data-filter=".land">Land</li>
            <li data-filter=".equipment">Equipment</li>
            <li data-filter=".farm">Farm</li> -->
        </ul>
    </div>
    <div class="grid" id="kehl-grid">
        <div class="grid-sizer"></div>

        <!-- Array for block grid elements  -->
            <?php
                for( $x=0; $x<count($traceprojects); $x++){
                    echo'
                        <div class="grid-box '.$traceprojects[$x]["category"].' ">
                            <a class="image-popup-vertical-fit" href="'.$traceprojects[$x]["catimgone"].'">
                                <div class="image-mask"></div>
                                <img src="'.$traceprojects[$x]["catimagetwo"].'" alt="" />
                                <h3>'.$traceprojects[$x]["boldtext"].'</h3>
                            </a>
                        </div>
                    ';
                }
            ?>
<!-- Array for block grid elements ends  -->
    </div>
</div>
<!-- PROJECT GRID END --> 