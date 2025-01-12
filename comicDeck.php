
 <!-- ################      Card Deck: Comic Book/Products         ############## -->
<!-- Code adapted from source: https://getbootstrap.com/docs/4.6/components/card/ -->
<!-- Creates a container to display all the comic book titles and prices  --> 
<!-- Items can be added to the shopping basket by clicking on the image or the add to basket button. The Remove button can remove an item from the basket -->

<!-- Start of conatiner for all the comic book display elements (images/title/prices) -->
<!-- class "card-area is used to format the conatiner when the screen is above a certain size using CSS-->
  <div class="container card-area">
    <div class="card-deck">
        <div class="row hidden-md-up">
          <div class="col-md-3">
            <!-- Card 01 div-->
              <div class="card">
                <!-- addBasket() function adds the prooduct to the side basket elemnet upon click the image-->
                <!-- id "imghover" is used to create an effect when the the cursor is over the image  -->
                <img src="assets/comics/batman01.jpg" onclick="addBasket(0)" class="card-img-top imghover" alt="Batman Comic #01" style="width:100%">
                <!-- class "hidecardetxt" is used for formatting and hiding the enclosed elements on smaller screens -->
                <div class="card-body text-center hidecardtext">
                  <p id="ComTitle0"></p> <!-- Empty element used to display comic title which is added when the index.php page loads (Source: window.onload function in index.php) -->
                  <p id="ComPrice0"></p> <!-- Empty element used to display comic price which is added when the index.php page loads (Source: window.onload function in index.php) -->
                  <a class="card-link" onclick="addBasket(0)">Add to Basket</a> <!-- addBasket() function adds the prooduct to the side basket elemnet upon click the button-->
                  <a class="card-link" onclick="removeBasket(0)">Remove</a> <!-- removeBasket() function removes the prooduct to the side basket elemnet upon click the button-->
                </div>
              </div>
          </div>
          <div class="col-md-3">
            <!-- Card 02 div-->
            <div class="card">
              <img src="assets/comics/batman02.jpg" onclick="addBasket(1)" class="card-img-top imghover" alt="Batman Comic #02" style="width:100%">
              <div class="card-body text-center hidecardtext">
                <p id="ComTitle1"></p>
                <p id="ComPrice1"></p>
                <a class="card-link" onclick="addBasket(1)">Add to Basket</a>
                <a class="card-link" onclick="removeBasket(1)">Remove</a>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <!-- Card 03 div-->
            <div class="card">
              <img src="assets/comics/batman03.jpg" onclick="addBasket(2)" class="card-img-top imghover" alt="Batman Comic #03" style="width:100%">
              <div class="card-body text-center" id="hidecardtext">
                <div class="hidecardtext">
                  <p id="ComTitle2"></p>
                  <p id="ComPrice2"></p>
                  <a class="card-link" onclick="addBasket(2)">Add to Basket</a>
                  <a class="card-link" onclick="removeBasket(2)">Remove</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <!-- Card 04 div-->
            <div class="card">
              <img src="assets/comics/batman04.jpg" onclick="addBasket(3)" class="card-img-top imghover" alt="Batman Comic #04" style="width:100%">
              <div class="card-body text-center">
                <div class="hidecardtext">
                  <p id="ComTitle3"></p>
                  <p id="ComPrice3"></p>
                  <a class="card-link" onclick="addBasket(3)">Add to Basket</a>
                  <a class="card-link" onclick="removeBasket(3)">Remove</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <div class="row">
          <div class="col-md-3">
             <!-- Card 05 div-->
              <div class="card">
                <img src="assets/comics/batman05.jpg" onclick="addBasket(4)" class="card-img-top imghover" alt="Batman Comic #05" style="width:100%">
                <div class="card-body text-center">
                  <div class="hidecardtext">
                    <p id="ComTitle4"></p>
                    <p id="ComPrice4"></p>
                    <a class="card-link" onclick="addBasket(4)">Add to Basket</a>
                    <a class="card-link" onclick="removeBasket(4)">Remove</a>
                  </div>
                </div>
              </div>
          </div>
          <div class="col-md-3">
            <!-- Card 06 div-->
            <div class="card">
              <img src="assets/comics/batman06.png" onclick="addBasket(5)" class="card-img-top imghover" alt="Batman Comic #06" style="width:100%">
              <div class="card-body text-center">
                <div class="hidecardtext">
                  <p id="ComTitle5"></p>
                  <p id="ComPrice5"></p>
                  <a class="card-link" onclick="addBasket(5)">Add to Basket</a>
                  <a class="card-link" onclick="removeBasket(5)">Remove</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <!-- Card 07 div-->
            <div class="card">
              <img src="assets/comics/batman07.jpeg" onclick="addBasket(6)" class="card-img-top imghover" alt="Batman Comic #07" style="width:100%">
              <div class="card-body text-center">
                <div class="hidecardtext">
                  <p id="ComTitle6"></p>
                  <p id="ComPrice6"></p>
                  <a class="card-link" onclick="addBasket(6)">Add to Basket</a>
                  <a class="card-link" onclick="removeBasket(6)">Remove</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <!-- Card 08 div-->
            <div class="card">
              <img src="assets/comics/batman08.jpg" onclick="addBasket(7)" class="card-img-top imghover" alt="Batman Comic #08" style="width:100%">
              <div class="card-body text-center">
                <div class="hidecardtext">
                  <p id="ComTitle7"></p>
                  <p id="ComPrice7"></p>
                  <a class="card-link" onclick="addBasket(7)">Add to Basket</a>
                  <a class="card-link" onclick="removeBasket(7)">Remove</a>
                </div>
              </div>
            </div>
          </div>
        </div> 
        <div class="row">
          <div class="col-md-3">
            <!-- Card 09 div-->
            <div class="card">
              <img src="assets/comics/batman09.jpg" onclick="addBasket(8)" class="card-img-top imghover" alt="Batman Comic #09" style="width:100%">
              <div class="card-body text-center">
                <div class="hidecardtext">
                  <p id="ComTitle8"></p>
                  <p id="ComPrice8"></p>
                  <a class="card-link" onclick="addBasket(8)">Add to Basket</a>
                  <a class="card-link" onclick="removeBasket(8)">Remove</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <!-- Card 10 div-->
            <div class="card">
              <img src="assets/comics/batman10.jpg" onclick="addBasket(9)" class="card-img-top imghover" alt="Batman Comic #10" style="width:100%">
              <div class="card-body text-center">
                <div class="hidecardtext">
                  <p id="ComTitle9"></p>
                  <p id="ComPrice9"></p>
                  <a class="card-link" onclick="addBasket(9)">Add to Basket</a>
                  <a class="card-link" onclick="removeBasket(9)">Remove</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <!-- Card 11 div-->
            <div class="card">
              <img src="assets/comics/batman11.jpg" onclick="addBasket(10)" class="card-img-top imghover" alt="Batman Comic #11" style="width:100%">
              <div class="card-body text-center">
                <div class="hidecardtext">
                  <p id="ComTitle10"></p>
                  <p id="ComPrice10"></p>
                  <a class="card-link" onclick="addBasket(10)">Add to Basket</a>
                  <a class="card-link" onclick="removeBasket(10)">Remove</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <!-- Card 12 div-->
            <div class="card">
              <img src="assets/comics/batman12.jpg" onclick="addBasket(11)" class="card-img-top imghover" alt="Batman Comic #12" style="width:100%">
              <div class="card-body text-center">
                <div class="hidecardtext">
                  <p id="ComTitle11"></p>
                  <p id="ComPrice11"></p>
                  <a class="card-link" onclick="addBasket(11)">Add to Basket</a>
                  <a class="card-link" onclick="removeBasket(11)">Remove</a>
                </div>
              </div>
            </div>
          </div>
          </div>

        <div class="row">
          <div class="col-md-3">
            <!-- Card 13 div-->
            <div class="card">
              <img src="assets/comics/batman13.jpg" onclick="addBasket(12)" class="card-img-top imghover" alt="Batman Comic #13" style="width:100%">
              <div class="card-body text-center">
              <div class="hidecardtext">
                  <p id="ComTitle12"></p>
                  <p id="ComPrice12"></p>
                  <a class="card-link" onclick="addBasket(12)">Add to Basket</a>
                  <a class="card-link" onclick="removeBasket(12)">Remove</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <!-- Card 14 div-->
            <div class="card">
              <img src="assets/comics/batman14.jpg" onclick="addBasket(13)" class="card-img-top imghover" alt="Batman Comic #14" style="width:100%">
              <div class="card-body text-center">
                <div class="hidecardtext">
                  <p id="ComTitle13"></p>
                  <p id="ComPrice13"></p>
                  <a class="card-link" onclick="addBasket(13)">Add to Basket</a>
                  <a class="card-link" onclick="removeBasket(13)">Remove</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <!-- Card 15 div-->
            <div class="card">
              <img src="assets/comics/batman15.jpg" onclick="addBasket(14)" class="card-img-top imghover" alt="Batman Comic #15" style="width:100%">
              <div class="card-body text-center">
                <div class="hidecardtext">
                  <p id="ComTitle14"></p>
                  <p id="ComPrice14"></p>
                  <a class="card-link" onclick="addBasket(14)">Add to Basket</a>
                  <a class="card-link" onclick="removeBasket(14)">Remove</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <!-- Card 16 div-->
            <div class="card">
              <img src="assets/comics/batman16.jpg" onclick="addBasket(15)" class="card-img-top imghover" alt="Batman Comic #16" style="width:100%">
              <div class="card-body text-center">
                <div class="hidecardtext">
                  <p id="ComTitle15"></p>
                  <p id="ComPrice15"></p>
                  <a class="card-link" onclick="addBasket(15)">Add to Basket</a>
                  <a class="card-link" onclick="removeBasket(15)">Remove</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3">
            <!-- Card 17 div-->
            <div class="card">
              <img src="assets/comics/batman17.jpg" onclick="addBasket(16)" class="card-img-top imghover" alt="Batman Comic #13" style="width:100%">
              <div class="card-body text-center">
                <div class="hidecardtext">
                  <p id="ComTitle16"></p>
                  <p id="ComPrice16"></p>
                  <a class="card-link" onclick="addBasket(16)">Add to Basket</a>
                  <a class="card-link" onclick="removeBasket(16)">Remove</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <!-- Card 18 div-->
            <div class="card">
              <img src="assets/comics/batman18.jpg" onclick="addBasket(17)" class="card-img-top imghover" alt="Batman Comic #14" style="width:100%">
                <div class="card-body text-center">
                  <div class="hidecardtext">
                    <p id="ComTitle17"></p>
                    <p id="ComPrice17"></p>
                    <a class="card-link" onclick="addBasket(17)">Add to Basket</a>
                    <a class="card-link" onclick="removeBasket(17)">Remove</a>
                  </div>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <!-- Card 19 div-->
            <div class="card">
              <img src="assets/comics/batman19.jpg" onclick="addBasket(18)" class="card-img-top imghover" alt="Batman Comic #15" style="width:100%">
              <div class="card-body text-center">
                  <div class="hidecardtext">
                    <p id="ComTitle18"></p>
                    <p id="ComPrice18"></p>
                    <a class="card-link" onclick="addBasket(18)">Add to Basket</a>
                    <a class="card-link" onclick="removeBasket(18)">Remove</a>
                  </div>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <!-- Card 20 div-->
            <div class="card">
              <img src="assets/comics/batman20.jpg" onclick="addBasket(19)" class="card-img-top imghover" alt="Batman Comic #16" style="width:100%">
                <div class="card-body text-center">
                  <div class="hidecardtext">
                    <p id="ComTitle19"></p>
                    <p id="ComPrice19"></p>
                    <a class="card-link" onclick="addBasket(19)">Add to Basket</a>
                    <a class="card-link" onclick="removeBasket(19)">Remove</a>
                  </div>
              </div>
            </div>
          </div>
        </div>
    </div>
  </div>


  <script>

    /* Removes an item from the side Basket, it takes an input int to determine the corresponding element id */
    function removeItem(prodCode) {
      var obj = "obj" + prodCode; // the key for the product quantity stored in local stoarge
      var item01 = parseInt(localStorage.getItem(obj)); // Retrives the quantity of the item stored in local storage
      var idExists = document.getElementById("comic" + prodCode); // variable used to determine if clicked comic is already in basket
      var price = products[prodCode]["price"]; // variable stores the price value stored for that product in the products array

      /** Removes the quantity from local storage (used for basket calculation) */
      // A check to see if the that product's elements are present in the basket
      if (idExists) {      
        // If the quantity of the product is greater than 1, then removes one from the total
        if (localStorage.getItem(obj) > 1) {
            item01 -= 1;
            localStorage.setItem(obj, item01); // Set the quantity stored in local storage to 1 less
            document.getElementById("quantity" + prodCode).innerHTML = "Items: x" + localStorage.getItem(obj);
          /** If there is only one left deletes the element by Id and the value from local storage */
        } else {
            var id = "comic" + prodCode; // the comic id used to idenitfy the correspnding element in the side basket
            var myobj = document.getElementById(id); // variable for the comic element in the side basket
            myobj.remove(); // Removes the element
            localStorage.removeItem(obj); // Delete the item completely from local storage
        }
          
      }
    }

    /* Adds items from the side Basket takes an input int to determine the corresponding element id */
    function addBasket (prodCode) {
      
      var chkLogin = sessionStorage.getItem("login"); // variable to check if user is logged in, flag is stored in session storage upon login
      if (chkLogin === "true") {
        displayItems(prodCode); // Function used to create all the product elements (Source: purchaseScripts.php)

        /* Event listener for clicks on the buttons/images so that the basket totals can be updated on screen
           uses the class "hidecardtext" and the input arguement "prodCode" to add event to the correct product/comic book
           updateBasket() function updates all elements with a calculated basket total (updateBasket() source: purchaseScripts.php)*/
        document.getElementsByClassName("hidecardtext")[prodCode].addEventListener("click", updateBasket()); 
        
        } else {
          // If user is not logged in, then display the following alert box
          document.getElementById("alert-header").innerHTML = "Welcome"; // Add text to the alert modal for login prompt
          document.getElementById("alert-text").innerHTML = "Please log in to purchase items"; // Add text to the alert modal for login prompt
          randGIF(); // Function displays a random gif image in the alert box element (source: alertModal.php)
          $("#alertModal").modal("show"); // Display the alert modal
        }
    }

    /** This removes the cost of one item from the elements displaying basket total and updates the basket total elements on screen using the input int */
    function removeBasket(item) {

      var exist = localStorage.getItem("obj" + item); // variable for the corresponding product in session storage
      // checks if the item has a stored value in session storage
      if (exist > 0) {
        var temp = sessionStorage.getItem("BasketTotal", basketValue); // Stores the basket total from session storage to a temp variable for subtraction calculation
        var removeProd = products[item]["price"]; // variable stores the price of a single product corresponding to the input arguement "item"
        
        /** Subtracts a single price unit of the corresponding product from the basket total */
        sessionBasket = Math.round((temp - removeProd)*100)/100; /* Had to do this to get the strings into a float */
        sessionStorage.setItem("BasketTotal", sessionBasket); // Sets the basket total in session storage to the new value
        
        // updates the basket total elements on screen
        for (let i =0; i < balanceClass.length; i++) { // "balanceClass" is a variable used to identify all the elements displaying basket total (Defined in: purchaseScripts.php)
          balanceClass[i].innerHTML = euroSign + (sessionBasket*1).toFixed(2); /* Update the three basket totals (navigation bar, side basket and payment modal) */
        }

        removeItem(item); // function removes the corresponding item from the side basket
      }
    }

  </script>