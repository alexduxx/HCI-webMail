

<<?php
  include 'right-sidebar.php';

 ?>

      </div>  <!--/row   main content + sidebar-right END -->
    </section>
  </section>
<!--main content end-->
<!--footer start-->
<!-- <footer class="site-footer">
    <div class="text-center">
        TEST
        <a href="index.php#" class="go-top">
            <i class="fa fa-angle-up"></i>
        </a>
    </div>
</footer> -->
<!--footer end-->




</section>


<!-- Modal -->
<div class="modal fade" id="writeEmailModal" tabindex="-1" role="dialog" aria-labelledby="writeEmailModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="writeEmailModalLabel">Write Email</h4>
      </div>
      <div class="modal-body">
        <div class="form-group">
                          <label class="col-sm-2 col-sm-2 control-label">To:</label>
                          <div class="col-sm-10">
                              <input type="text" class="form-control">
                          </div>
        </div>
        <div class="form-group">
                          <label class="col-sm-2 col-sm-2 control-label">CC:</label>
                          <div class="col-sm-10">
                              <input type="text" class="form-control">
                          </div>
        </div>
        <div class="form-group">
                          <label class="col-sm-2 col-sm-2 control-label">Subject:</label>
                          <div class="col-sm-10">
                              <input type="text" class="form-control">
                          </div>
        </div>
        <div class="form-group">
                          <label class="col-lg-2 col-sm-2 control-label">From:</label>
                          <div class="col-lg-10">
                              <p class="form-control-static">email@example.com</p>
                          </div>
        </div>
        <div class="form-group">

            <div class="col-md-12">
              <textarea class="form-control" rows="6" placeholder="What's up?" required></textarea>
            </div>
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Save as draft</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal">Send</button>
      </div>
    </div>
  </div>
</div>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/jquery-1.8.3.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="assets/js/jquery.sparkline.js"></script>


    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>

    <script type="text/javascript" src="assets/js/gritter/js/jquery.gritter.js"></script>
    <script type="text/javascript" src="assets/js/gritter-conf.js"></script>

    <!--script for this page-->
    <script src="assets/js/sparkline-chart.js"></script>
	<script src="assets/js/zabuto_calendar.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/annyang/2.6.0/annyang.min.js"></script>
	<script src="js/custom.js"></script>


  <!-- <script type="text/javascript">
          $(document).ready(function () {
          var unique_id = $.gritter.add({
              // (string | mandatory) the heading of the notification
              title: 'Welcome to SomeMail!',
              // (string | mandatory) the text inside the notification
              text: 'Hover me to enable the Close Button. You can close this window by hovering over and pressing the close button on the left side. Free version for <a href="http://blacktie.co" target="_blank" style="color:#ffd777">BlackTie.co</a>.',
              // (string | optional) the image to display on the left
              // image: 'assets/img/ui-sam.jpg',
              // (bool | optional) if you want it to fade out on its own or just sit there
              sticky: true,
              // (int | optional) the time you want it to be alive for before fading out
              time: '',
              // (string | optional) the class name you want to apply to that specific message
              class_name: 'my-sticky-class'
          });

          return false;
          });
  	</script> -->

  	<script type="application/javascript">
          $(document).ready(function () {
              $("#date-popover").popover({html: true, trigger: "manual"});
              $("#date-popover").hide();
              $("#date-popover").click(function (e) {
                  $(this).hide();
              });

              $("#my-calendar").zabuto_calendar({
                  action: function () {
                      return myDateFunction(this.id, false);
                  },
                  action_nav: function () {
                      return myNavFunction(this.id);
                  },
                  ajax: {
                      url: "show_data.php?action=1",
                      modal: true
                  },
                  legend: [
                      {type: "text", label: "Special event", badge: "00"},
                      {type: "block", label: "Regular event", }
                  ]
              });
          });


          function myNavFunction(id) {
              $("#date-popover").hide();
              var nav = $("#" + id).data("navigation");
              var to = $("#" + id).data("to");
              console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
          }
      </script>
</body>
</html>
