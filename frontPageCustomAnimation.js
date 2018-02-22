<script type="text/javascript">
    jQuery(document).ready(function() {
        jQuery("#wrapper1").delay(15000).fadeOut();
        jQuery("#left").addClass("left-animation");
        jQuery("#right").addClass("right-animation");
        //jQuery("#animation1").fadeOut(15000);
      
  
      
        <!-- pulse animation of vasko logo -->
      
        function pulse1() {
        jQuery(".bela").animate({opacity:0}, 1400, 'linear').
        animate({opacity: 1}, 2400, 'linear');
        }
        pulse1();
        function pulse2() {
        jQuery(".rumena").animate({opacity: 0}, 2550, 'linear').
        animate({opacity: 1}, 3550, 'linear');
        }
        pulse2();
  
        });  
      

jQuery(document).ready(function(){
  jQuery("button").click(function(){
    jQuery("#wrapper1").remove();
  });
});
</script>
