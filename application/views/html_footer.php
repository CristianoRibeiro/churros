
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="<?=base_url('dist/js/bootstrap.min.js');?>"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="<?=base_url('assets/js/ie10-viewport-bug-workaround.js');?>"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.js"></script>

    <script>
     (function($) {
       "use strict";

       $('body').scrollspy({
           target: '.navbar-fixed-top',
           offset: 60
       });

       new WOW().init();

       $('a.page-scroll').bind('click', function(event) {
           var $ele = $(this);
           $('html, body').stop().animate({
               scrollTop: ($($ele.attr('href')).offset().top - 60)
           }, 1450, 'easeInOutExpo');
           event.preventDefault();
       });

       $('#collapsingNavbar li a').click(function() {
           /* always close responsive nav after click */
           $('.navbar-toggler:visible').click();
       });

       $('#galleryModal').on('show.bs.modal', function (e) {
          $('#galleryImage').attr("src",$(e.relatedTarget).data("src"));
       });

   })(jQuery);
  </script>
  </body>
</html>
