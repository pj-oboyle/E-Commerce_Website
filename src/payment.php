


  <!-- ################       Payment Modal         ############## -->
  <!-- Code adapted from source: https://getbootstrap.com/docs/4.6/components/modal/ -->
  <!-- A modal is used to display the payment transaction window, where the user can enter card details to complete the purchase process -->
  <!-- The input card details values are stored into variables but there is no validation performed -->

  <!-- The id "staticBackdrop" is used to identify the payment modal for display and hiding function-->
  <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Place Order</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          
          <!-- Start of the checkout elements here -->
          <div class="container">
            <div class="row">
            <div class="col-md-1"></div>
                  <!-- Ten columns for the payment elements -->
                  <div class='col-md-10'>
                    <form> <!-- Start of payment form elements -->
                      <div class="form-row">
                        <div class='col-md-12 form-group required'>
                          <label class='control-label'>Name on Card</label>
                          <!-- class "CSSForm" is used to format the payment elements -->
                          <input class='CSSForm form-control' name="cardHolder" value="John Doe" type='text'>
                        </div>
                      </div>
                      <div class='form-row'>
                        <div class='col-md-12 form-group card required'>
                          <label class='control-label'>Card Number</label>
                          <!-- class "CSSForm" is used to format the payment elements -->
                          <input autocomplete='off' class='CSSForm form-control card-number' name="cardNo" size='20' value="1111-2222-3333-4444" type='text'>
                        </div>
                      </div>
                      <div class='form-row'>
                        <div class='col-sm-4 form-group cvc required'>
                          <label class='control-label'>CVC</label>
                          <!-- class "CSSForm" is used to format the payment elements -->
                          <input autocomplete='off' class='CSSForm form-control card-cvc' name="cvcNo" placeholder='eg. 311' size='4' type='text'>
                        </div>
                        <div class='col-sm-4 form-group expiration required'>
                          <label class='control-label'>Expiration</label>
                          <select class='form-control card-expiry-month' name="month" type='text'>
                            <option value="01">January</option>
                            <option value="02">February </option>
                            <option value="03">March</option>
                            <option value="04">April</option>
                            <option value="05">May</option>
                            <option value="06">June</option>
                            <option value="07">July</option>
                            <option value="08">August</option>
                            <option value="09">September</option>
                            <option value="10">October</option>
                            <option value="11">November</option>
                            <option value="12">December</option>
                          </select>
                        </div>
                        <div class='col-sm-4 form-group expiration required'>
                          <label class='control-label'> </label>
                          <!-- class "CSSForm" is used to format the payment elements -->
                          <input class='CSSForm form-control card-expiry-year' name="year" placeholder='YYYY' size='4' value="2024" type='text'>
                        </div>
                      </div>
                      <div class='form-row'>
                        <div class='col-md-12'>
                          <!-- class "balance" is used to identify this element to place the basket total from updateBasket() functions (Source: paymentScripts.php) -->
                          <div class='form-control btn btn-info' onclick="toggleBasket()">Total:<span class='balance' style="font-size: 16px"></span> 
                          </div>
                        </div>
                      </div>
                      <div class='form-row'>
                        <div class='col-md-12 form-group'>
                          <button class='form-control btn btn-primary' id="submit-button" type='button'>Pay »</button>
                        </div>
                      </div>
                    </form> <!-- End of payment form elements -->
                  </div>
            <div class="col-md-1"></div>
          </div>
        </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        </div>
      </div>
    </div>
  </div>

  <script>

    // ################# Payment Scripts ##################


      // This is a check on a click of the submit button for processing an order
      $(document).ready(function() {
      $("#submit-button").click(function() {
       
        /** Get all the inputs from the payment transaction
         * and store them in the below variables
         * There is no payment validation performed but these
         * varaibles could be used for that purpose
         */
        cardname = $("input[name='cardHolder']").val();
        cardNum = $("input[name='cardNo']").val();
        cvcNum = $("input[name='cvcNo']").val();
        expMonth = $(".card-expiry-month option").filter(":selected").val();
        expYear = $("input[name='year']").val();
       
      
      var basTest = parseInt(sessionStorage.getItem("BasketTotal")); // get the basket total stored in session storage and parse as an int
      // Check if the basket total is greater than zero
      if (basTest > 0) {
        
        document.getElementById("alert-header").innerHTML = "Thank You"; // Add text to the alert modal for successful payment transaction
        document.getElementById("alert-text").innerHTML = "Order accepted."; // Add text to the alert modal for successful payment transaction
        randGIF(); // Function displays a random gif image in the alert box element (source: alertModal.php)
        sessionStorage.removeItem("BasketTotal");

        /* All items in the basket are stored in local stoarge so this
        for loop, loops through all the items and removes any that are present in local storage */
        for (let index = 0; index < 20; index++) {
          localStorage.removeItem("obj" + index);
        }

        $("#staticBackdrop").modal("hide"); // Closes the checkout modal
        $("#alertModal").modal("show"); // Display the alert modal
        updateBasket(); // the updateBasket() function recalculates the basket total (Source: purchaseScripts.php)
        
        // if the basket total is not greater than zero then there is no items in the basket
        } else {
        document.getElementById("alert-header").innerHTML = "Please try again."; // Add text to the alert modal for failed payment transaction
        document.getElementById("alert-text").innerHTML = "Please place items in your basket."; // Add text to the alert modal for failed payment transaction
        randGIF(); // Function displays a random gif image in the alert box element (source: alertModal.php)
        $("#staticBackdrop").modal("hide"); // Closes the checkout modal
        $("#alertModal").modal("show"); // Display the alert modal
        
        
      }
      
      return false;
      })
      
    });
      
  </script>
