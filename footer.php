
<footer>
	<div class="row">
        <div class="col">
            <h4>About Company Overview</h4>
            <p>Donear Industries Limited an ISO 9001:2008 certified
            company is a pioneer in the textile industry.With more
            than 4 decades of experience in the industry we are
            one of the fastest growing fashion fabric brand. </p>
        </div>
        <div class="col">
            <h4>Donear</h4>
            <a href="#">About Us</a>
            <a href="#">Blog</a>
            <a href="#">Team</a>
            <a href="#">Contact Us</a>
            <a href="#">Careers</a>
        </div>
        <div class="col">
           <h4>Product Categories</h4>
            <a href="#">New Arrivals</a>
            <a href="#">Shirt Fabrics </a>
            <a href="#">Trouser Fabrics</a>
            <a href="#">Blazer Fabrics</a>
            <a href="#">Suit Fabrics</a>
        </div>
        <div class="col">
            <h4>Customer</h4>
            <a href="#">Help and Support</a>
            <a href="#">Shipping and Delivery</a>
            <a href="#">Payment Method</a>
            <a href="#">Terms and Conditions</a>
            <a href="#">Privacy Policy</a>
        </div>
        <div class="col cont">
            <h4>Contact Us</h4>
            <ul>
                <li>
                    <img src="img/call-icon.png">
                    <span>Phone: +91-22-68348100</span>
                </li>
                <li>
                    <img src="img/email-icon.png">
                    <span>Email: <a href="mailto:info@donear.com">info@donear.com</a></span>
                </li>
            </ul>
            <div class="footer_list_grid social fifth_grid">
                <div class="accordion_head">
                    <span class="">Follow us<i class="fas fa-sort-down desk-none"></i></span>
                </div>
                <div class="accordion_body">
                    <ul>
                        <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <hr class="footerhr">
    <div class="site-credits">
        <div class="rights">
            <p>2020 ALL RIGHTS RESERVED</p> 
        </div>
        <div class="credits">
             <p> SITE CREDITS - <a href="https://www.digitallatte.in/" target="blank">DIGITAL LATTE</a></p>
        </div>  
    </div>
</footer><!--footer end-->
<script src="js/jquery.min.js"></script>

 <script src="js/jquery.min.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/jquery.bxslider.js"></script>
<script src="js/bootstrap.min.js"></script>
<script>
    (function($) {

"use strict";

$('nav .dropdown').hover(function(){
    var $this = $(this);
    $this.addClass('show');
    $this.find('> a').attr('aria-expanded', true);
    $this.find('.dropdown-menu').addClass('show');
}, function(){
    var $this = $(this);
        $this.removeClass('show');
        $this.find('> a').attr('aria-expanded', false);
        $this.find('.dropdown-menu').removeClass('show');
});

})(jQuery);

</script>
<script>
$(document).ready(function(){
   $('.home_slider').bxSlider({
    pager:true,
    controls:true,
    auto:true,
    speed: 1500
  });
});
</script>
<script>
    g = $(".stretcher-list");
    g.bind({
        mouseenter: function() {
            $(this).addClass("active");
            $(this).siblings().addClass("inactive")
        },
        mouseleave: function() {
            $(this).removeClass("active");
            $(this).siblings().removeClass("inactive")
        }
    });
</script>
<script>
  $(function(){
        // Check the initial Poistion of the Sticky Header
        var stickyHeaderTop = $('#myHeader').offset().top;

        $(window).scroll(function(){
                if( $(window).scrollTop() > stickyHeaderTop ) {
                        $('#myHeader').css({position: 'fixed', top: '0px'});
                        $('#nav-logo').css("display", "block");

                } else {
                        $('#myHeader').css({position: 'static', top: '0px'});
                        $('#nav-logo').css("display", "none");

                }
        });
  });
</script>
<script>  
$(function() {
    Array.prototype.associate = function(keys) {
      var result = {};
      this.forEach(function (el, i) {
        result[keys[i]] = el;
      });
      return result;
    };
    var action = ['mode', 'pager', 'controls', 'infiniteLoop', 'auto', 'speed', 'pause', 'responsive', 'adaptiveHeight', 'touchEnabled'];
    var value = ['fade', false, true, true, true, 700, 4500, false, true, false]
    var sliders = [];
    $(".bxslider").each(function(i) {
        value[0] = $(this).hasClass('right') ? 'fade' : 'vertical';
        return sliders[i] = $(this).eq(0).bxSlider(value.associate(action));
    });
});
</script>
</body>
</html>
