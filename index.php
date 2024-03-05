<?php
$PageTitle="Home | American Staircrafters of Maryland";
function customPageHeader(){?>
<!--Arbitrary HTML Tags-->
<?php }
include('templates/header.php');
?>

<!--Slider-->
<section class="slider-wrapper">
    <div class="imgSliderSlider" onmouseleave="slideChange()"
        onmouseenter="slideStop()">
        <div class="imgSliderSlide">
            <!-- ALL images need alt tags! -->
            <!-- can we have more internal links to other parts of the site? -->
            <!-- improve mobile menu -->
            <!-- adjust slider to include more picture? -->
            <img src="images/image1.JPG" alt="staircase and railing with landing looking from top of steps" />
            <div class="imgSliderTextContainer">
                <p class="imgSliderHeader" role="heading">Railings</p>
                <p class="imgSliderText">Renew your home's beauty</p>
                <button class="imgSliderBtn"><a href="rails.php">LEARN
                        MORE</a></button>
            </div>
        </div>
        <div class="imgSliderSlide">
            <img src="images/IMG_0963.JPG" alt="large dual winding staircase from the main floor"/>
            <div class="imgSliderTextContainer2">
                <p class="imgSliderHeader2" role="heading">Stairs</p>
                <p class="imgSliderText2">Custom design and finishing</p>
                <button class="imgSliderBtn"><a href="stairs.php">LEARN
                        MORE</a></button>
            </div>
        </div>
        <div class="imgSliderSlide">
            <img src="images/IMG_1025.JPG" alt="small staircase with metal balusters"/>
            <div class="imgSliderTextContainer2">
                <p class="imgSliderHeader2" role="heading">View Our Work</p>
                <p class="imgSliderText2">Professional, reliable and friendly.
                </p>
                <button class="imgSliderBtn"><a
                        href="rails.php#rails-gallery">SEE
                        GALLERY</a></button>
            </div>
        </div>
        <!-- <div class="imgSliderSlide">
            <img src="images/IMG_1025.JPG" />
            <div class="imgSliderTextContainer2">
                <p class="imgSliderHeader2">Staining and Finishing</p>
                <p class="imgSliderText2">Professional, reliable and friendly.
                </p>
                <button class="imgSliderBtn"><a href="contact.php">LEARN
                        MORE</a></button>
            </div>
        </div> -->

        <a class="imgSliderPrev" onclick="prevSlide()" role="button">&#10096</a>
        <a class="imgSliderNext" onclick="nextSlide()" role="button">&#10097</a>

        <div class="imgSliderDotContainer" style="text-align: center"></div>
    </div>
</section>

<!--Welcome Text-->
<section class="welcome-wrapper">
    <div class="welcome-container">
        <h1 id="mainContent">Specializing in stairs, handrails, and balusters since 1998</h1>
        <hr width="20%">
        <p>Welcome to American Staircrafters home on the web. Whether you are a
            builder constructing a new home, a contractor involved in a remodel,
            or a homeowner with a stair needing updating, if you have a project
            involving stairs and railings, American Staircrafters has the
            expertise to help make your project become a beautiful reality. From
            start to project completion, you will get fast, professional
            service, quality craftsmanship, and competitive pricing.</p>
        <a href="about.php" class="basic-btn">ABOUT US</a>
    </div>
</section>

<!--Services-->
<section class="services-wrapper">
    <div class="services-container">
        <h3 class="services-header">Services We Offer</h3>
        <div class="service-items">
            <div class="info">
                <a href="stairs.php"><img src="images/IMG_1442.png" alt="light stained wooden staircase"></a>
                <h4>STAIRCASES</h4>
                <p>- New stairs for new construction & remodeling
                    <br>- Custom stairs and design
                    <br>- Stair remodeling
                    <br>- Stair parts
                </p>
            </div>

            <div class="info">
                <a href="rails.php"><img src="images/4714.png" alt="top down view of curved wood railing"></a>
                <h4>RAILINGS</h4>
                <p>- Installation of all types of rails:
                    <br>• Traditional
                    <br>• Iron Balusters
                    <br>• Cable
                    <br>• Staining and finishing
                </p>
            </div>
        </div>
    </div>
</section>

<!--What sets us apart-->
<section class="services-wrapper">
    <div class="services-container" style="background-color: #ffffff;">
        <h3 class="services-header">What sets American Staircrafters apart?</h3>
        <div class="service-items priorities">
            <div class="info">
                <img src="images/icon-customer.png" alt="person icon">
                <h4>CUSTOMER-FOCUSED</h4>
                <p>Our #1 priority is <span id="bold">you</span> the customer.
                </p>
            </div>
            <div class="info">
                <img src="images/icon-pictures.png" alt="image icon">
                <h4>REAL RESULTS</h4>
                <p>Every picture on this website is our <span
                        id="bold">own</span>
                    work.</p>
            </div>
            <div class="info">
                <img src="images/icon-quality.png" alt="magnifying glass icon">
                <h4>DETAIL-DRIVEN</h4>
                <p>We pay special attention to the <span id="bold">small</span>
                    details.</p>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="map-container">
        <img src="images/map.jpg" alt="map of central maryland, frederick, hagerstown, germantown, rockville">
        <div>
            <p class="map-heading" role="heading">Serving the greater Frederick, central
                Maryland area</p>
            <p class="map-text">Located in Myersville, Maryland, Dave has been
                serving the tri-state area with high quality craftmanship for
                over 25 years.</p>
        </div>
    </div>
</section>

<div class="bottom-btn-container">
    <button class="bottom-btn"><a href="contact.php">Call or text<br>(301) 748 -
            9400</a></button>
</div>

<?php include('templates/footer.php'); ?>