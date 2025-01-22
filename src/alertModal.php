
 <!-- ################     Alert Modal         ############## -->
 <!-- Code adapted from source: https://getbootstrap.com/docs/4.6/components/modal/ -->
<!-- Alert Modal for displaying various messages relating to login/purchase/subsription/errors-->
<!-- Each time the alert modal is displayed one of three random gif is displayed inside the modal box -->

<!-- Start of alert modal for displaying various messages relating to login/purchase/subsription/errors-->
<div class="container">
  <!-- id "alertModal" is used to identify the element for display functions in various other files -->
  <div class="modal fade" id="alertModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <!-- class "alertCSS" is used to format the header in CSS -->
        <div class="modal-header alertCSS"> 
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" id="alert-header">Modal Header</h4>
        </div>
        <div class="modal-body">
        <!-- id "gifId" is used to to place a random image in the image box using the randGIF() function -->
        <img src="assets/JustLeag03.gif" id="gifId" alt="Justice League Gif01" class="d-block w-100 img-fluid">
          <p id="alert-text">Some text in the modal.</p>
        </div>
        <!-- class "alertCSS" is used to format the footer in CSS -->
        <div class="modal-footer alertCSS">
          <!-- id "alert-btn" is used to format the close button in CSS -->
          <button type="button" onclick="refresh()" class="btn btn-default" id="alert-btn" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
</div>

<script>

  // function adds a random gif to the alert modal using the math.random function
  function randGIF() {
    var num = Math.floor((Math.random() * 3) + 1); // generate a random number between 1 - 3
    var img = "assets/JustLeag0" + num + ".gif"; // concatenate the image file path fragment and random number to complete the file path

    document.getElementById("gifId").src = img; // set the image source attribute to the random gif
  
  }

  // function to refresh the page when a alert modal is closed (used to keep the side basket up-to-date and reset varaibles after a successful purchase)
  function refresh() {
    window.location.reload();
  }


</script>
