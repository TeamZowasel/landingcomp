<!DOCTYPE html>
<html lang="en-US" class="no-js">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- TITLE -->
    <title>Zowasel HomePage</title>
    <meta name="description"
        content="Modern HTML Template ideal for business like agriculture, vegetables and organic food.">
    <meta name="keywords"
        content="agriculture, eco, farm, food, Fresh Fruit, fruits, healthy food, landscape, organic, organic food, products, vegetables">

    <!-- FONT AWESOME ICONS LIBRARY -->
    <link rel="stylesheet" href="fonts/css/all.min.css">
    <script src="https://kit.fontawesome.com/3dc7f12c51.js" crossorigin="anonymous"></script>

    <!--BOOTSTRAP  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>


    <!-- Amination Scroll-->
    <!-- <link rel="stylesheet" href="aos-by-red.css"> -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!--  FAVICON  -->
    <link rel="shortcut icon" href="images/logos/favicon.png">

    <!-- CSS LIBRARY STYLES -->
    <link rel="stylesheet" href="css/lib/bootstrap.min.css">
    <link rel="stylesheet" href="css/lib/slick.min.css">
    <link rel="stylesheet" href="css/lib/owl.carousel.min.css">
    <link rel='stylesheet' href="css/lib/flickity.min.css">
    <link rel='stylesheet' href="css/lib/magnific-popup.min.css">
    <link rel='stylesheet' href="css/lib/aos.min.css">
    <link rel='stylesheet' href="css/lib/navbar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css" />

    <!-- CSS TEMPLATE STYLES -->
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/stylesheet.css">
    <link rel="stylesheet" href="css/responsive.css">
    <!-- <link rel="stylesheet" href="/css/cropcss.css">
    <link rel="stylesheet" href="/css/buttonstyle.css"> -->


    <!-- MODERNIZR LIBRARY -->
    <script src="js/modernizr-custom.js"></script>


    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
    var Tawk_API = Tawk_API || {},
        Tawk_LoadStart = new Date();
    (function() {
        var s1 = document.createElement("script"),
            s0 = document.getElementsByTagName("script")[0];
        s1.async = true;
        s1.src = 'https://embed.tawk.to/63f8699031ebfa0fe7ef0c3f/1gq15oo5s';
        s1.charset = 'UTF-8';
        s1.setAttribute('crossorigin', '*');
        s0.parentNode.insertBefore(s1, s0);
    })();
    </script>
    <!--End of Tawk.to Script-->





</head>

<body>




    <!-- TEST COMPONENT STARTS HERE  -->



    <?php require("./components/aboutmission.php");   ?>






    <!-- TEST COMPONENT ENDS HERE  -->



    <!-- JAVASCRIPTS -->
    <script src='js/lib/jquery-3.5.1.min.js'></script>
    <script src='js/lib/plugins.js'></script>
    <script src='js/lib/bootstrap.min.js'></script>
    <!-- <script src='js/lib/flickity.pkgd.min.js'></script> -->
    <!-- <script src='js/lib/nav-fixed-top.js'></script> -->
    <script src='js/lib/aos.min.js'></script>
    <script src='js/lib/owl.carousel.min.js'></script>
    <script src='js/lib/world-map.min.js'></script>
    <script src='js/main.js'></script>
    <script src='js/slider.js'></script>
    <!-- JAVASCRIPTS END -->
    <script>
    // get all zowasel benefit buttons and associated information
    let benefitBtns = document.querySelectorAll(".zowa-benefits");
    let benefitDetails = document.querySelectorAll(".zowa-benefits-details");

    // remove the hide class from the first benefit content by default
    const hideAllBenefitContent = () => {
        for (let i = 0; i < benefitDetails.length; i++) {
            benefitDetails[i].classList.add("d-none");
        }
    };
    hideAllBenefitContent();

    benefitDetails[0].classList.remove("d-none");
    // make the details of the clicked benefit button visible
    for (let i = 0; i < benefitBtns.length; i++) {
        benefitBtns[i].addEventListener("click", () => {
            hideAllBenefitContent();
            benefitDetails[i].classList.remove("d-none");
        });
    }


    $(".slider").owlCarousel({
        loop: true,
        autoplay: true,
        autoplayTimeout: 5000, //5000ms = 5s;
        autoplayHoverPause: true,
    });
    </script>
    <script type="text/javascript">
    $(document).ready(function() {
        $("#news-slider").owlCarousel({
            items: 3,
            navigation: true,
            navigationText: ["", ""],
            autoPlay: true
        });
    });
    </script>
    <script src="/js/script.js"></script>
    <script src="/js/accordionmobile.js"></script>

</body>

</html>