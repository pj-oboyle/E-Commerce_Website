<!doctype html>
<html lang="en">

  <!-- Head Element -->
  <?php
    include_once("head.php");
  ?>

  <body>

    <!-- The focus to basket overlay element -->
    <div id="overlay" onclick="closeNav()"></div> <!-- uses the closeNav() function to display elements (Function source: navBar.php) -->

    <!-- Alert Modal for displaying various messages relating to login/purchase/subsription/errors-->
    <?php
      include_once("alertModal.php");
    ?>


      
    <!-- Side Basket Element is used to stored all items selected by the user, it creates an itemised bill of each product and quantity including total costs of order in a side bar-->
    <!-- Products can be purcahse from the side basket -->
    <!-- Any items in the side basket can be removed by click on their image -->
    <?php
      include_once("sideBasket.php");
    ?>



    <!-- All elements within this div are moved to the left when the side basket element opens-->
    <div id="sideScroll">

      <!-- Navigation Bar with buttons for opening the side basket and login modals. Also displays user menu and basket total upon successful log in -->
      <?php
        include_once("navBar.php");
      ?>
        
      <!-- Login Box Modal which validates using the user information stored in the userLogin table in the database -->
      <!-- User cannot place items into the basket unless they are first logged in -->
      <?php
        include_once("loginBox.php");
      ?>

      <!-- Image Carousel which displays a random image from the image set upon page refresh-->
      <?php
        include_once("carousel.php");
      ?> 
      
      <!-- Product details section -->
      <div class="productInfo">
        <h2>The Dark Knight Collection</h2>
        <p>DC has featured Batman in many comic books, including comics published under its imprints such as Vertigo and Black Label. The longest-running Batman comic, Detective Comics, is the longest-running comic book in the United States</p>
      </div>

      <!-- Card Deck: Comic Book/Products Display Element displays clickable elements for each of the comic book products -->
      <?php
        include_once("comicDeck.php");
      ?>

      <!-- Payment transaction modal used to complete an order after items have been placed in the basket -->
      <!-- User cannot complete a transaction unless they have placed items into the basket -->
      <?php
        include_once("payment.php");
        ?>
      

    </div> <!-- End of Side Scrolll -->
        
   
  
    <!-- Footer Element with a newsletter subscription form that has email validation-->
    <?php
      include_once("footer.php");
    ?>


    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) Source: https://getbootstrap.com/docs/5.0/getting-started/introduction/ -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    

    <!-- Scripts for the basket items -->
    <?php
      include_once("purchaseScripts.php");
    ?>

    <script>
    
      // Account details Object Constructor
      function Account(userID, username, name, password) {
          this.accId = userID;
          this.user = username;
          this.fName = name;
          this.pwd = password;
      }

      // Account Objects
      var userAccounts = new Account();
      var userAccounts = <?php echo json_encode($userLogin); ?>; // parse the user details stored in the database to the userAccounts obeject
      

      /* First time logging in, this sets the basket total elements to zero */
      var basketValue = (0.00).toFixed(2); // This code initially sets the basket total to zero formatted two decimal places
      for (let i =0; i < balanceClass.length; i++) {
          balanceClass[i].innerHTML = euroSign + basketValue; // assign the basket total to the balance elements using the balanceClass (Defined in: purchaseScripts.php)
      }
      

      var isLogin = sessionStorage.getItem("login"); // gets the login flag variable from session storage

      // This function loads all the product data/user information on loading the screen
      window.onload = function() {
        
        // Checks if there is an ordered stored in local storage
        order = getOrder(); // Gets stored basket item(s) from local stoarge
        if (order.length !== 0) {
          
          updateBasket(); // update the basket total using the updateBasket function (Source: purchaseScripts.php)
          fillBasket(); // add the comics to the side basket using the fillBasket function (Source: purchaseScripts.php)

          // assign the basket total cost to the the balance elements
          var basketValue = getBasTotal().toFixed(2); // getBastTotal() function calculates the total cost of all the items in the basket (Source: purchaseScripts.php)
          for (let i =0; i < balanceClass.length; i++) {
            balanceClass[i].innerHTML = euroSign + basketValue; // assign the basket total to the the balance elements using the balanceClass (Defined in: purchaseScripts.php)
          }
        }

        // This displays or hides the basket total in the Navbar depending if logged in or not
        if (isLogin === "true") {
          document.getElementById("basketNav").style.visibility = "visible"; // Displays the basket total in the navigation bar
          document.getElementById("userIcon").innerHTML = "Hi " + sessionStorage.getItem("fname") + "!"; // in the navigation bar, display the user's first name  which is stored in the user database
          document.getElementById("hidelogin").style.display = "none"; // closes the login button in the navigation bar
        } else {
          document.getElementById("basketNav").style.visibility = "hidden"; // Hides the basket total in the navigation bar
        }

        // Loads the comic book details (Title name and price) for each comic to the product display deck element
        for (let index = 0; index < 20; index++) {
            document.getElementById("ComTitle" + index).innerHTML = products[index]["comicTitle"]; // each comic book title element has an id code (ComTitle + number) 
            document.getElementById("ComPrice" + index).innerHTML = "<strong>Price:<strong> &#8364;" + products[index]["price"]; // each comic book price element has an id code (ComPrice + number)  
          }
          

      }


    </script>




  </body>
</html>