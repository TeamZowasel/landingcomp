<?php
    $compare = "COMPARE</strong>
    NOW";
    $image = "./images/common/gallery/Rectangle3141.png";
    $alt = explode('gallery/', $image);
    $innovation = "THE SPIRIT <br />OF INNOVATION";
    $body = " If you are looking for a fun, challenging, fast-paced work environment with growth opportunities,
    come join our incredible.";
    $btnText = "Get Started";
?>


<!-- ------------------------- COMPARISON SECTION -------------------------- -->
<div class="bg-skyblue pb-5 pt-4">
    <div class="col-lg-9 col-12 mx-auto py-5">
        <div class="small-titlesize-font text-center mb-4">
            <strong class="defaultFontFamily xtrabold"><?php echo $compare;?>
        </div>
        <div class="form-group">
            <select id="choices-multiple-remove-button" placeholder="Select companies to compare" class="form-control"
                multiple>
                <option value="cargil">Cargil Cocoa Promise</option>
                <option value="cocoa-horizons">Cocoa Horizons</option>
                <option value="Fairtrade">Fairtrade</option>
                <option value="nestle">Nestle Innovative Income Accelerator Program</option>
                <option value="Rainforest-alliance">Rainforest Alliance</option>
                <option value="Zowasel-sustainabilty">Zowasel Sustainability</option>
            </select>
        </div>
        <div class="text-capitalize pb-4">
            <div class="d-flex justify-content-between mb-3">
                <div class="choice-filters">
                    <input type="checkbox" name="" id=""> value drivers
                </div>
                <div class="choice-filters">
                    <input type="checkbox" name="" id=""> premium distribution
                </div>
                <div class="choice-filters">
                    <input type="checkbox" name="" id=""> premium value
                </div>
                <div class="choice-filters">
                    <input type="checkbox" name="" id=""> value chain focus
                </div>
            </div>
            <div class="d-flex justify-content-between">
                <div class="choice-filters">
                    <input type="checkbox" name="" id=""> Sustainability issues addressed
                </div>
                <div class="choice-filters">
                    <input type="checkbox" name="" id=""> Funding
                </div>
                <div class="choice-filters">
                    <input type="checkbox" name="" id=""> social capital
                </div>
                <div class="choice-filters">
                    <input type="checkbox" name="" id=""> Consumer label
                </div>
            </div>
        </div>
        <div class="text-center mb-3">
            <button type="button" onclick="showSelections()"
                class="defaultFontSize col-4 button-default sm-top-spacing">Compare</button>
        </div>
    </div>
</div>
<!-- ---------------------- END OF COMPARISON SECTION ---------------------- -->

<div class="container mb-5">
    <div class="row">
        <div class="col-12 col-md-5 overlap-margin">
            <img src="<?php echo $image;?>" alt="<?php echo $alt[1];?>" height="95%">
        </div>
        <div class="col-12 col-md-7 bg-darkblue p-4">
            <div class="col-lg-10 col-12 mx-auto">
                <h1 class="mb-3 small-titlesize-font defaultFontFamily text-white pt-3">
                <?php echo $innovation;?>
                </h1>
                <p class="text-white defaultFontSize defaultFontFamily">
                    <?php echo $body;?>
                </p>
                <button type="button" class="smSmallFont button-default"><?php echo $btnText;?></button>
            </div>
        </div>
    </div>
</div>