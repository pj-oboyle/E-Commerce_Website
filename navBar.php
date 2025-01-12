


<!-- ################       Navigation Bar HTML         ############## -->
<!-- Code adapted from source: https://getbootstrap.com/docs/4.6/components/navbar/ -->
<!-- Navigation Bar with buttons for opening the side basket and login modals. Also displays user menu and basket total upon successful log in -->

<!-- The class "navCSS" is used for formatting. The class "fixed-top" is used to keep the navbar in place -->
  <nav class="navbar navbar-expand-lg navCSS fixed-top">
      <a class="navbar-brand" href="#">DC COMICS Online</a>
      <!-- The class "navCSS" is used for formatting. -->
      <button class="navbar-toggler navCSS" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span role="button" ><i class="fa fa-bars" aria-hidden="true"></i></span> <!-- Icon taken from: https://fontawesome.com/icons/bars -->
      </button>
      <!-- Elements within this section are hidden on smaller screens -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link highlght" style="font-size: 22px;" href="index.php"><i class="fas fa-home"></i> Home <span class="sr-only">(current)</span></a> <!-- Icon taken from: https://fontawesome.com/icons/cart-plus -->
          </li>
          <!-- Elements for the Basket Side Bar Button -->
          <li class="nav-item" style="padding-left: 30px;"> 
            <button class="btn navCSS my-2 my-sm-0" type="button" onclick="toggleBasket()" data-toggle="collapse" data-target=".navbar-collapse.show"><i class="fas fa-cart-plus"></i> Basket</button> <!-- Icon taken from: https://fontawesome.com/icons/home -->
          </li>
          </li>
          <!-- Elements for the Login Button -->
          <li class="nav-item mr-auto" id="hidelogin" data-toggle="collapse" data-target=".navbar-collapse.show"> <!-- For the Login Button -->
            <button class="btn navCSS my-2 my-sm-0" type="button" id="nav-loginbtn"><i class="fas fa-sign-in-alt"></i> Log In</button>
          </li>
        </ul>
        <!-- For the basket total display element -->
        <ul class="navbar-nav" id="basketNav"> <!-- basketNav is hidden unless logged in -->
            <li>
              <a class="nav-link balance" href="#"></a> <!-- class "balance" is used to identify this element as where to place the basket total from updateBasket() functions (Source: paymentScripts.php) -->
            </li>
            <!-- Elements for the basket Side Bar Button -->
            <li class="nav-item dropdown">
              <!-- id "userIcon" is used to format the user icon in CSS -->
              <p class="nav-link userIcon dropdown-toggle" id="userIcon" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></p> <!-- Displays the welcome greeting and username -->
              <!-- The class "navCSS" is used for formatting. -->
              <div class="dropdown-menu navCSS">
                <a class="dropdown-item" href="#">Account</a>
                <a class="dropdown-item" href="#">Orders</a>
                <a class="dropdown-item" onclick="emptyBasket()" data-toggle="modal" data-target="#alertModal" href="#">Empty Basket</a> <!-- emptyBasket() function clears all the displayed products that are in the side basket -->
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" onclick="logOut()" data-toggle="modal" data-target="#alertModal">Logout</a> <!-- logOut() function logs out the user and hides the user elements (basket total and name) -->
            </div>
            </li>
          </ul>
      </div>
  </nav>

<script>
  // #####################  Side Bar Basket Code #######################
      /*
    *This is the shopping basket functions
    */

    /* Set the width of the side navigation to 300px and the left margin of the page content to 300px and adds a black background color to body (overlay) */
    function openNav() {
      document.getElementById("overlay").style.display = "block"; // Displays the black background (overlay)
      document.getElementById("mySidenav").style.width = "300px"; // Moves the side basket to the right
      document.getElementById("sideScroll").style.marginRight = "300px"; // Shifts all the other elements to the left
 
    }

    /* Set the width of the side navigation to 0 and the left margin of the page content to 0 and hides the overlay */
    function closeNav() {
      document.getElementById("overlay").style.display = "none"; // Hides the black background (overlay)
      document.getElementById("mySidenav").style.width = "0"; // Moves the side basket to the left
      document.getElementById("sideScroll").style.marginRight = "0px"; // Shifts all the other elements to the right


    }

    /* Toggle function for the basket icon */
    function toggleBasket() {
      var x = document.getElementById("mySidenav"); // class "mySidenav" identifies the side basket element in sidebasket.php
      // check the width of the side basket element to determine if it is opened or closed
      if (x.style.width < "250px") {
        openNav(); // uses the above function to open the side basket
      } else {
        closeNav(); // uses the above function to close the side basket
      }
    }


    /** Remove all items from local storage and the basket */
    function emptyBasket () {
      /** Creates a message for the alert box */
      document.getElementById("alert-header").innerHTML = "Thank You"; // Add text to the alert modal to confirm basket has been emptied
      document.getElementById("alert-text").innerHTML = "Shopping basket is now empty"; // Add text to the alert modal to confirm basket has been emptied
      sessionStorage.removeItem("BasketTotal"); // remove the basket total variable from session storage (used to keep track of total cost of order)
      var numProds = products.length; // Gets the number of products stored in the products array (20 items)

      // for loop removes every product stored in local storage
      for (let index = 0; index < numProds; index++) { // the variable numProds is the number of items in the products array (Defined in: paymentScripts.php) 
        localStorage.removeItem("obj" + index); // remove each items in local stoage matching the key "obj+index"
      }
      window.location.reload(); // reload the page to update the basket
    }

    // Log out actions (Hide Basket and User Functions and display a logout message)
    function logOut() {
      sessionStorage.setItem("login", "false"); // Set the login flag to false. This is used to determine if user is logged in when click on products to add to basket
      document.getElementById("basketNav").style.visibility = "hidden"; // Hides the basketNav elements which display the greeting, user name, user menu and basket total
      document.getElementById("hidelogin").style.display = "block"; // Display the login button after logging out (identified using id "hidelogin")
      document.getElementById("alert-header").innerHTML = "Thank You"; // Add text to the alert modal for successful logout
      document.getElementById("alert-text").innerHTML = "You have now logged out."; // Add text to the alert modal for successful logout
      
    }



    </script>