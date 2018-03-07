<!-- footer -->
<footer id="footer">
<div class="container">
<div class="row">
<div class="col-sm-12 col-md-5">
<h4 class="footer-title">Бидний тухай</h4>
<p>@include('inc.abouttext')</p>
</div>
<div class="col-sm-12 col-md-3">
<h4 class="footer-title">Төхөөрөмжүүд</h4>
<div class="row">
<div class="col">
<ul>
<li><a href="#">Playstation 4</a></li>
<li><a href="#">Xbox One</a></li>
<li><a href="#">PC</a></li>
<li><a href="#">Steam</a></li>
</ul>
</div>
<div class="col">

</div>
</div>
</div>
<div class="col-sm-12 col-md-4">
<h4 class="footer-title">Subscribe</h4>
<p>Subscribe хийж шинэ нийтлэл мэдээллүүдийг цаг тухайд нь аваарай!</p>
<div class="input-group m-t-25">
<input type="text" class="form-control  " placeholder="И-майл хаяг">
<span class="input-group-btn">
            <button class="btn btn-primary" type="button">Subscribe</button>
          </span>
</div>
</div>
</div>
<div class="footer-bottom">
<div class="footer-social">
<a href="https://facebook.com/newe" target="_blank" data-toggle="tooltip" title="Facebook"><i class="fa fa-facebook"></i></a>
<a href="https://twitter.com/" target="_blank" data-toggle="tooltip" title="Twitter"><i class="fa fa-twitter"></i></a>
<a href="https://steamcommunity.com/" target="_blank" data-toggle="tooltip" title="Steam"><i class="fa fa-steam"></i></a>
<a href="https://www.twitch.tv/" target="_blank" data-toggle="tooltip" title="Twitch"><i class="fa fa-twitch"></i></a>
<a href="https://www.youtube.com/" target="_blank" data-toggle="tooltip" title="Youtube"><i class="fa fa-youtube"></i></a>
</div>
<p>Copyright &copy; 2017 <a href="/" target="_blank">Newe</a>. All rights reserved.</p>
</div>
</div>
</footer>
<!-- /footer -->
<!-- vendor js -->
<script src="plugins/jquery/jquery-3.2.1.min.js"></script>
<script src="plugins/popper/popper.min.js"></script>
<script src="plugins/bootstrap/js/bootstrap.min.js"></script>

<!-- plugins js -->
<script src="plugins/lightbox/lightbox.js"></script>
<script src="plugins/owl-carousel/js/owl.carousel.min.js"></script>
<script>
(function($) {
    "use strict";

    // Full Width Carousel
    $('.owl-slide').owlCarousel({
        nav: true,
        loop: true,
        autoplay: true,
        items: 1
    });

    // Recent Reviews
    $('.owl-list').owlCarousel({
        margin: 25,
        nav: true,
        dots: false,
        responsive: {
            0: {
                items: 1
            },
            500: {
                items: 2
            },
            701: {
                items: 3
            },
            1000: {
                items: 4
            }
        }
    });

    // lightbox
    $('[data-lightbox]').lightbox();
})(jQuery);
</script>

<!-- theme js -->
<script src="js/theme.min.js"></script>
</body>
</html>
<!-- /header -->