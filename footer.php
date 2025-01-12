


 <!-- ################       Footer HTML         ############## -->

 <footer class="container-fluid col-md-12">
    <!-- Code block to create three columns to divide the footer into sections -->
    <!-- Contact Us Section -->
    <div class='col-md-4'>
      <h3>Contact Us</h3>
      <ol  style="list-style: none;">
        <li>123 Main Street</li>
        <li>Ballycastle</li>
        <li>Mayo</li>
        <li>F87 BC24</li>
        <li>Tel: +353 97 167 1718</li>
        <li>Email: sales@dccomics.com</li>
      </ol>
    </div>
    <!-- Account Section -->
    <div class='col-md-4'>
      <h3>Account</h3>
      <ul>
        <li>My Account</li>
        <li>My Wishlist</li>
        <li>Order History</li>
        <li>Forgotten Password</li>
     </ul>
    </div>
    <div class='col-md-4'>
    <!-- Newsletter Section -->
      <h3>Subscribe to our Newsletter</h3>
      <form>
        <div style="display: inline-flex">
          <label for="email">Enter Your Email</label>
          <!-- id "email-box" used in subscription validation function below and for CSS formatting -->
          <input id="email-box" type="email" name="email" placeholder="email@mailbox.com" required>
        </div>
        <!-- class navCSS used for buton formatting -->
        <button type="button" class="btn navCSS" onclick="sub()">Subscribe</button> <!-- sub() function is used for submit and email validation -->
      </form>
    </div>
  <!-- End of block of code to  divide the footer into sections -->
</footer>

<script>
    
    // Form checking and email validation for the subscribe to newsletter button
    function sub() {
      // id "email-box" used to grab the email input box element
        var email = document.getElementById("email-box");
        var mf = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/; // Source: https://www.w3resource.com/javascript/form/email-validation.php

        // Check the input of email box input to see if matches the above email validation regex expression "mf"
        if (mf.test(email.value)) {
            document.getElementById("alert-header").innerHTML = "Thank You"; // Add text to the alert modal for successful login
            document.getElementById("alert-text").innerHTML = "You have now subscribed to our newsletter."; // Add text to the alert modal for successful login
            randGIF(); // Function displays a random gif image in the alert box element (source: alertModal.php)
            $("#alertModal").modal("show"); // Display the alert modal
        }
        else {
            document.getElementById("alert-header").innerHTML = "Please try again."; // Add text to the alert modal for failed input
            document.getElementById("alert-text").innerHTML = "Please enter a valid email address."; // Add text to the alert modal for failed input
            randGIF(); // Function displays a random gif image in the alert box element (source: alertModal.php)
            $("#alertModal").modal("show"); // Display the alert modal
        }
        }


</script>