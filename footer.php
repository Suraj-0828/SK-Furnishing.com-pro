<footer class="footer-wrapper">
    <div class="footer-container container">
        <div class="footer-column four columns" id="footer-widget-1">
            <div id="text-5" class="widget widget_text greennature-item greennature-widget">
                <div class="textwidget">
                    <p><a href="https://skfurnishing.com/">
                    <img src="images/logo/logo-6.png" alt="" /> </a></p>
                    <p>Discover stylish and affordable furniture for every room at <span style="color: #FEC428">New home furnishing and mattress.</span> From cozy sofas to elegant dining sets, find
                        everything you need to make your home beautiful and comfortable.</p>
                </div>
            </div>
        </div>
        <div class="footer-column four columns" id="footer-widget-2">
            <div id="text-9" class="widget widget_text greennature-item greennature-widget">
                <h3 class="greennature-widget-title">Contact Info</h3>
                <div class="clear"></div>
                <div class="textwidget"><span class="clear"></span><span class="greennature-space" style="margin-top: -6px; display: block;"></span> Shop no. 4 Zahoor Palace, Opp L&t Gate no. 6 Sakivihar Road, Powai 400072.

                    <span class="clear"></span><span class="greennature-space" style="margin-top: 10px; display: block;"></span>

                    <i class="greennature-icon fa fa-phone" style="vertical-align: middle; color: #fff; font-size: 16px; "></i>+91 9821576320

                    <span class="clear"></span><span class="greennature-space" style="margin-top: 10px; display: block;"></span>

                    <i class="greennature-icon fa fa-mobile" style="vertical-align: middle; color: #fff; font-size: 20px; "></i>+91 7738029600


                    <span class="clear"></span><span class="greennature-space" style="margin-top: 10px; display: block;"></span>

                    <i class="greennature-icon fa fa-envelope-o" style="vertical-align: middle; color: #fff; font-size: 16px; "></i>
                    newhomefurnishin@skfurnishing.com
                    <span class="clear"></span><span class="greennature-space" style="margin-top: 10px; display: block;"></span>
                    <i class="greennature-icon fa fa-envelope-o" style="vertical-align: middle; color: #fff; font-size: 16px; "></i>
                    khansarfarazssk@gmail.com
                </div>
            </div>
        </div>
        <div class="footer-column four columns" id="footer-widget-4">
            <div id="gdlr-recent-portfolio2-widget-6" class="widget widget_gdlr-recent-portfolio2-widget greennature-item greennature-widget">
                <h3 class="greennature-widget-title">Recent Works</h3>
                <div class="clear"></div>
                <div class="greennature-recent-port2-widget">
                    <div class="recent-port-widget-thumbnail">
                        <a href="category.php"><img src="images/footer-image/f1.jpg" alt="" width="150" height="150" /></a>
                    </div>
                    <div class="recent-port-widget-thumbnail">
                        <a href="category.php"><img src="images/footer-image/f2.jpg" alt="" width="150" height="150" /></a>
                    </div>
                    <div class="recent-port-widget-thumbnail">
                        <a href="category.php"><img src="images/footer-image/f3.jpg" alt="" width="150" height="150" /></a>
                    </div>
                    <div class="recent-port-widget-thumbnail">
                        <a href="category.php"><img src="images/footer-image/f4.jpg" alt="" width="150" height="150" /></a>
                    </div>
                    <div class="recent-port-widget-thumbnail">
                        <a href="category.php"><img src="images/footer-image/f5.jpg" alt="" width="150" height="150" /></a>
                    </div>
                    <div class="recent-port-widget-thumbnail">
                        <a href="category.php"><img src="images/footer-image/f6.jpg" alt="" width="150" height="150" /></a>
                    </div>
                    <div class="recent-port-widget-thumbnail">
                        <a href="category.php"><img src="images/footer-image/f7.jpg" alt="" width="150" height="150" /></a>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
        <div class="clear"></div>
    </div>

    <div class="row text-center mr-auto mt-10">
        <div class="col-lg-12 mb-2">
            <span class="copyrights-text"> Copyright ©
                <script>
                    document.write(new Date().getFullYear())
                </script>
                <span style="color: #FEC428">New home furnishing and mattress</span>, All Rights and Reserved. Powered by <a href="https://www.itarsia.com/" target="_blank" style="color: #FEC428"> Itarsia India Limited.</a>
            </span>
        </div>
    </div>
</footer>

<a href="https://wa.me/9821576320" target="_blank" class="floatwhatsapp">
           <img src="images/logo/whatsapp-icon.png" class="my-float1" alt="">
       </a>

<div class="greennature-payment-lightbox-overlay" id="greennature-payment-lightbox-overlay"></div>


</div>
<!-- body-wrapper -->

<script type='text/javascript' src='js/jquery/jquery.js'></script>
<script type='text/javascript' src='js/jquery/jquery-migrate.min.js'></script>
<script>
    var ms_grabbing_curosr = 'plugins/masterslider/public/assets/css/common/grabbing.html',
        ms_grab_curosr = 'plugins/masterslider/public/assets/css/common/grab.html';
</script>

<!-- scroll section for id and # -->

<!-- scroll section for id and # -->


<!-- banner slider script start -->


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<script type="text/javascript">
  $(document).ready(function(){
    $('.slider').slick({
      autoplay: true,
      autoplaySpeed: 2000,
      prevArrow: '<span class="prev">&#10094;</span>',
      nextArrow: '<span class="next">&#10095;</span>'
    });
  });
</script>

<script>
    let sliderIndex = 1;
    autoSlide();

    function autoSlide() {
        showSlides(sliderIndex);
        sliderIndex++;
        setTimeout(autoSlide, 4000); // Change slide every 2 seconds
    }

    function moveSlide(n) {
        showSlides(sliderIndex += n);
    }

    function showSlides(n) {
        const slides = document.querySelectorAll('.slider2 ul li');
        if (n > slides.length) {
            sliderIndex = 1;
        }
        if (n < 1) {
            sliderIndex = slides.length;
        }
        for (let i = 0; i < slides.length; i++) {
            slides[i].style.display = 'none';
        }
        slides[sliderIndex - 1].style.display = 'block';
    }
</script>

<!-- banner slider script close -->


<script type='text/javascript' src='plugins/superfish/js/superfish.js'></script>
<script type='text/javascript' src='js/hoverIntent.min.js'></script>
<script type='text/javascript' src='plugins/dl-menu/modernizr.custom.js'></script>
<script type='text/javascript' src='plugins/dl-menu/jquery.dlmenu.js'></script>
<script type='text/javascript' src='plugins/jquery.easing.js'></script>
<script type='text/javascript' src='plugins/fancybox/jquery.fancybox.pack.js'></script>
<script type='text/javascript' src='plugins/fancybox/helpers/jquery.fancybox-media.js'></script>
<script type='text/javascript' src='plugins/fancybox/helpers/jquery.fancybox-thumbs.js'></script>
<script type='text/javascript' src='plugins/flexslider/jquery.flexslider.js'></script>
<script type='text/javascript' src='plugins/jquery.isotope.min.js'></script>
<script type='text/javascript' src='js/plugins.js'></script>
<script type='text/javascript' src='plugins/masterslider/public/assets/js/masterslider.min.js'></script>
<script type='text/javascript' src='plugins/jquery.transit.min.js'></script>
<script type='text/javascript' src='plugins/gdlr-portfolio/gdlr-portfolio-script.js'></script>

<script src="js/script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>



<script>
    (function($) {
        "use strict";

        $(function() {
            var masterslider_d1da = new MasterSlider();

            // slider controls
            masterslider_d1da.control('arrows', {
                autohide: true,
                overVideo: true
            });
            masterslider_d1da.control('bullets', {
                autohide: false,
                overVideo: true,
                dir: 'h',
                align: 'bottom',
                space: 6,
                margin: 25
            });
            // slider setup
            masterslider_d1da.setup("slider_1", {
                width: 1140,
                height: 800,
                minHeight: 0,
                space: 0,
                start: 1,
                grabCursor: false,
                swipe: true,
                mouse: false,
                keyboard: true,
                layout: "fullwidth",
                wheel: false,
                autoplay: false,
                instantStartLayers: false,
                mobileBGVideo: false,
                loop: true,
                shuffle: false,
                preload: 0,
                heightLimit: true,
                autoHeight: false,
                smoothHeight: true,
                endPause: false,
                overPause: true,
                fillMode: "fill",
                centerControls: true,
                startOnAppear: false,
                layersMode: "center",
                autofillTarget: "",
                hideLayers: false,
                fullscreenMargin: 0,
                speed: 20,
                dir: "h",
                parallaxMode: 'swipe',
                view: "basic"
            });



            $("head").append("<link rel='stylesheet' id='ms-fonts'  href='http://fonts.googleapis.com/css?family=Montserrat:regular,700%7CCrimson+Text:regular' type='text/css' media='all' />");

            window.masterslider_instances = window.masterslider_instances || {};
            window.masterslider_instances["5_d1da"] = masterslider_d1da;
        });

    })(jQuery);
</script>

</body>

</html>