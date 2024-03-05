<?php
$PageTitle="Stairs | American Staircrafters";
include('templates/header.php');
?>

<section>
    <div class="rails-intro-container">
        <div class="rails-intro-text">
            <h2>Quality Stairs</h2>
            <hr width="20%">
            <p>We offer a wide range of services to meet contractors' needs. We
                will work with you to design a staircase that fits not only the
                dimensions of the space but also the character of the dwelling.
                A well-designed staircase takes into account the railing that
                will accompany those stairs. We pay special attention to you,
                the client, to address your greatest concerns and make sure
                they're reflected in the final product. American Staircrafters
                is committed to quality products, professional service, and fine
                craftsmanship.</p>
        </div>
        <img src="images/image2.JPG" class="rails-intro-img" alt="wood stair and rails with carpet runner and metal balusters">
    </div>
</section>

<!-- Accordian Q & A-->
<!-- <section class="flex" id="seperate" style="margin-top: 40px;">
    <div class="accordian">
        <button type="button" class="accordian_button"> Things to consider
            before ordering stairs:</button>
        <div class="accordian_content">
            <p>1. Contact us early in the project, ideally before you begin
                framing. Details concerning stairs are often lacking on house
                plans.<br><br>
                2. Allow three weeks from time of order to delivery. Staircases
                can vary greatly in their build time.<br><br>
                3. Stairs should match the flooring of your house. New builders
                should try to use the same wood for stairs and floors so they
                look the same when stained. </p>
        </div>
    </div>
</section> -->

<section style="background-color: #f8f8f8">
<div class="stair-considerations__container">
    <h2 class="heading">Considerations when planning a stair project</h2>
    <p class="stair-considerations__item">1. Contact us early in the project, ideally before you begin framing. Details concerning stairs are often lacking on house plans.</p>
    <p class="stair-considerations__item">2. Allow three weeks from time of order to delivery. Staircases can vary greatly in their build time.</p>
    <p class="stair-considerations__item">3. Stairs should match the flooring of your house. New builders should try to use the same wood for stairs and floors so they look the same when stained.</p>
</div>
</section>

<!--Image Gallery-->
<photo-gallery id="stairs-gallery">
    <h2 class="gallery-heading">Staircase Gallery</h2>
    <div class="photo-gallery">
        <div class="gallery-item">
            <p>Refinishing an existing staircase:</p>
            <div class="gallery-item__images-track">
                <div class="gallery-item__images">
                    <img src="images/stairs/7.jpg" alt="natural wood stair, rail and balusters" loading="lazy"
                        data-caption="After">
                    <img src="images/stairs/8.jpg" alt="stair in the process of refinishing" loading="lazy"
                        data-caption="Before">
                </div>
            </div>
            <div class="gallery-item__nav"></div>
        </div>
        <div class="gallery-item">
            <p>Open up a walled-in stair:</p>
            <div class="gallery-item__images-track">
                <div class="gallery-item__images">
                    <img src="images/stairs/5.jpg" alt="open staircase with carpeted treads" loading="lazy"
                        data-caption="After">
                    <img src="images/stairs/6.jpg" alt="walled in staircase" loading="lazy"
                        data-caption="Before">
                </div>
            </div>
            <div class="gallery-item__nav"></div>
        </div>
        <div class="gallery-item">
            <p>Finish out rough built stairs:</p>
            <div class="gallery-item__images-track">
                <div class="gallery-item__images">
                    <img src="images/stairs/3.jpg" alt="dark stained stairs" loading="lazy"
                        data-caption="After">
                    <img src="images/stairs/4.jpg" alt="rough built stairs" loading="lazy"
                        data-caption="Before">
                </div>
            </div>
            <div class="gallery-item__nav"></div>
        </div>
        <div class="gallery-item">
            <p>Convert a carpeted stair to hardwood:</p>
            <div class="gallery-item__images-track">
                <div class="gallery-item__images">
                    <img src="images/stairs/2.jpg" alt="converted wooden staircase" loading="lazy"
                        data-caption="After">
                    <img src="images/stairs/1.jpg" alt="carpeted stair" loading="lazy"
                        data-caption="Before">
                </div>
            </div>
            <div class="gallery-item__nav"></div>
        </div>
        <div class="gallery-item">
            <p>Convert a box stair to open treads</p>
            <div class="gallery-item__images-track">
                <div class="gallery-item__images">
                    <img src="images/stairs/12.jpg" alt="stair with open treads" loading="lazy"
                        data-caption="After">
                    <img src="images/stairs/11.jpg" alt="original standard box stair" loading="lazy"
                        data-caption="Before">
                </div>
            </div>
            <div class="gallery-item__nav"></div>
        </div>
    </div>
</photo-gallery>

<!--Types of Stairs Banner-->
<section>
    <div class="stair-types-container">
        <h2>Types of stairs we offer:</h2>

        <div class="stair-types-columns">
            <div class="types">
                <p>Circular Stairs</p>
                <p>Utility Stairs</p>
                <p>"L" Stairs</p>
            </div>
            <hr class="stair-types-hr">

            <div class="types">
                <p>Box Stairs</p>
                <p>Open Stairs</p>
                <p>Winder Stairs</p>
            </div>
            <hr class="stair-types-hr">

            <div class="types">
                <p>Architectural Stairs</p>
                <p>Straight Run Stairs</p>
                <p>Carpet Stairs</p>
            </div>
            <div class="types">
                <p>Premade Stairs</p>
                <p>Oak Stairs</p>
                <p>Pine Stair Overlay</p>
            </div>
        </div>
    </div>
</section>

<?php include('templates/footer.php'); ?>