<br>

<!--Footer-->
<footer class="container-fluid" >
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
      <h2 class="text-center"><a  href="about.php"  class="text-center">About Us </a></h2><br>
      <h5 class="text-center">Contact Us</h5>
      <p class="text-center"><b>Email Id:</b>info@ruraleducation.co.in</p>
      <p class="text-center"><b>Mobile No:</b>+91-8792560572</p>
      </div>

      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="text-align: right;">  
        <!--Social Icons-->
        <a href="https://twitter.com/cslabyrinth"><i class="fa fa-twitter" aria-hidden="true"></i></a>
        <a href="https://github.com/LabyrinthCS"><i class="fa fa-github" aria-hidden="true"></i></a>
        <a href="https://www.facebook.com/groups/1674462032874265/"><i class="fa fa-facebook" aria-hidden="true"></i></a>
        <br>

        <p  class="text-center" style="padding-top:45px;text-align:right;"> <a href="http://cs.christuniversity.in/labyrinth/index.php" >All Rights Reserved</a> </p>

      </div>
    </div>
  </div>
</footer>

<script>
  $(document).ready(function(){
    $("#nav").sticky({topSpacing:0});
  });
</script>
<script>
  $(document).ready(function(){
    $("#etitle").sticky({topSpacing:0});
  });
</script>

<script type="text/javascript">


        $("#events").owlCarousel({

          nav : true, // Show next and prev buttons
          slideSpeed : 300,
          paginationSpeed : 400,
          autoHeight : true,
          responsiveClass:true,
          responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:3
        },
        1000:{
            items:3
        }
    }
      });

</script>
<script type="text/javascript">


        $("#project").owlCarousel({

          nav : true, // Show next and prev buttons
          slideSpeed : 300,
          paginationSpeed : 400,
          autoHeight : true,
          responsiveClass:true,
          responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:3
        },
        1000:{
            items:3
        }
    }
      });

</script>
<!--FooterClose-->
    <script type="text/javascript">
            $("#events-single").owlCarousel({
              nav : true, // Show next and prev buttons
              slideSpeed : 300,
              paginationSpeed : 400,
              autoHeight : true,
              responsiveClass:true,
              responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:4
            },
            1000:{
                items:4
            }
        }
          });
    </script>
<script type="text/javascript"> 
var config = {
      '.chosen-select' : {allow_single_deselect:true, no_results_text:'Oops, nothing found!', width: "100%"}
    }
    for (var selector in config) {
      $(selector).chosen(config[selector]);
    }
</script>
<script>
  $.widget("ui.dialog", $.ui.dialog, {
    _allowInteraction: function(event) {
        return !!$(event.target).closest(".mce-container").length || this._super( event );
    }
});
</script>
<script>
  $(document).on('focusin', function(e) {
    if ($(e.target).closest(".mce-window").length) {
        e.stopImmediatePropagation();
    }
});
</script>
</body>
</html>