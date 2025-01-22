<!-- ################       Head HTML         ############## -->
<!-- Code adapted from source: https://getbootstrap.com/docs/4.6/components/carousel/ -->
<!-- A carousel displayed at the page top used to randomly display images upon page load -->
    
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel" data-interval="300"> <!-- time interval between slides (data-interval) set to 300 to speed up the carousel  -->
        <ol class="carousel-indicators">
        <!-- data targets for all 7 carousel images -->
            <li data-target="#carouselExampleCaptions" data-slide-to="0"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="4"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="5"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="6"></li>
        </ol>
      <!-- Wrapper for the slides-->
        <div class="carousel-inner d-block">
            <div class="carousel-item">
                <!-- Each image has it's own overlay text -->
                <img src="assets/comicBanner01.jpg" alt="Comic Slider 01" class="d-block w-100 img-fluid" >
                <div class="carousel-caption d-none d-md-block">
                    <h5>Free Shipping</h5>
                    <p>Get your order delivered for free when you spend over €20.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/comicBanner02.jpg" alt="Comic Slider 02" class="d-block w-100 img-fluid" >
                <div class="carousel-caption d-none d-md-block">
                    <h5>Earn Reward Points</h5>
                    <p>Earn reward points towards more comics.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/comicBanner03.jpg" alt="Comic Slider 03" class="d-block w-100 img-fluid" >
                <div class="carousel-caption d-none d-md-block">
                    <h5>Many Ways To Pay</h5>
                    <p>We accept all forms of payment.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/comicBanner04.jpg" alt="Comic Slider 04" class="d-block w-100 img-fluid" >
                <div class="carousel-caption d-none d-md-block">
                    <h5>14-day Returns</h5>
                    <p>100% satisfaction or you can return your items for free.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/comicBanner05.jpg" alt="Comic Slider 05" class="d-block w-100 img-fluid" >
                <div class="carousel-caption d-none d-md-block">
                    <h5>Customer Support</h5>
                    <p>Feel free to contact us by email or phone.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/comicBanner06.jpg" alt="Comic Slider 06" class="d-block w-100 img-fluid" >
                <div class="carousel-caption d-none d-md-block">
                    <h5>New Titles Every Week</h5>
                    <p>We stock a wide range of the latest and greatest DC Comics.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/comicBanner07.jpg" alt="Comic Slider 07" class="d-block w-100 img-fluid" >
                <div class="carousel-caption d-none d-md-block">
                    <h5>Subscribe To Our Newsletter</h5>
                    <p>Get all the latest information about your favourite heroes.</p>
                </div>
            </div>
        </div>
        <!-- End of wrapper for the slides -->

      <!-- Wrapper for the side buttons -->
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
         <!-- End of wrapper for the buttons -->
    </div>


<script>

    var $item = $('.carousel-item'); // class "carousel-item" is the div for each carousel image

    var $numberofSlides = $('.carousel-item').length; // get the total number of slides for the random variable
    var $currentSlide = Math.floor((Math.random() * $numberofSlides)); // Randomly creates a number between 0 and 6


    // Randomly moves the slides in the carousel to one of 7 images using the data-slide-to attribute
    $('.carousel-indicators li').each(function(){
    var $slideValue = $(this).attr('data-slide-to'); // this "data-slide-to" attribute tells carousel which image to go to
    if($currentSlide == $slideValue) { // use the random number to determine which of the "carousel-indicators" list elements to set to active
        $(this).addClass('active');
        $item.eq($slideValue).addClass('active');
    } else { // if the current slide isn't the radnom number remove it's active attribute
        $(this).removeClass('active');
        $item.eq($slideValue).removeClass('active');
    }
    });


</script>
