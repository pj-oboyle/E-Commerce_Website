<script>
    // Various functions for calculating basket total and generating product elements used by multiple elements thoughout the website
    
    var products = <?php echo json_encode($comicBooks); ?>; // Stores all the product data retrieved from the database in this varaiable
    const balanceClass = document.getElementsByClassName("balance"); // class "balance" is used to identify the element to place the basket total from functions
    const cartClass = document.getElementsByClassName("cartItems"); // class "cartItems" is for identifying the element where to place the product details in the side basket (Source: sideBasket.php) 
    const imgFiles = document.body.getElementsByClassName("card-img-top"); // class "card-img-top" is used to identify the image element in the comicDeck.php
    const euroSign = '€';

    /** This function creates all the elements to add a comic to the side basket after clicking on a product or "add to basket" button */
    function displayItems(prodCode) {
      
      var itemClass = document.getElementsByClassName("item"+ prodCode); // uses input int to determine the product class name
      var element = document.getElementById("comic" + prodCode); // uses input int to determine the product id name
      var obj = "obj" + prodCode;      
      
      // check to see if the item elements have already been created and if does not recreate those elements
      if(typeof(element) != 'undefined' && element != null){

        var item01 = parseInt(localStorage.getItem(obj)); // convert the quantity variable stored in local storage and convert it to an int
        item01 += 1; // add one to the quantity
        localStorage.setItem(obj, item01); // set the updated quantity back to the local storage variable
        document.getElementById("quantity" + prodCode).innerHTML = "Items: x" + localStorage.getItem(obj); // update the quantity display element in the side basket

      } else{  
    
        /* If the item has not been placed in the side  basket before then
        * create a new section for items details (image, title, price and quantity) of the selected product */
        var section = document.createElement("div"); // creates a new div
        section.className = "item" + prodCode;
        
        section.id = "comic" + prodCode;
        cartClass[0].appendChild(section); // add a section for the product's elements

        /* Create a section for the comic book image */
        var imgElement = document.createElement("img");
        var src = imgFiles[(prodCode)].getAttribute("src");

        /** Set various attributes for the image after creating it */
        imgElement.id = "comic" + prodCode; // creates a product specific id for this element
        imgElement.setAttribute("src", src); 
        imgElement.setAttribute("width", "50");
        imgElement.setAttribute("height", "auto");
        imgElement.setAttribute("style", "cursor: pointer;");
        imgElement.setAttribute("onclick", "removeBasket("+prodCode+")");
        imgElement.setAttribute("alt", products[prodCode]["comicTitle"]);
        itemClass[0].appendChild(imgElement);

        /* Create a section for comic title*/
        var paragraph = document.createElement("p");
        paragraph.id = "comic" + prodCode; // creates a product specific id for this element 
        paragraph.setAttribute("style", "cursor: pointer; white-space: nowrap; display: inline-flex;");
        paragraph.setAttribute("onclick", "removeBasket("+prodCode+")");
        paragraph.innerText = products[prodCode]["comicTitle"];
        itemClass[0].appendChild(paragraph);

        /* Create a section for comic price*/
        var paragraph = document.createElement("p");
        paragraph.id = "comic" + prodCode; // creates a product specific id for this element 
        paragraph.setAttribute("style", "cursor: pointer; white-space: nowrap; display: inline-flex;");
        paragraph.innerText = "€" + products[prodCode]["price"];
        itemClass[0].appendChild(paragraph);

        /* Create a section for quantity of items in the basket*/
        var paragraph = document.createElement("p");
        paragraph.id = "quantity" + prodCode; // creates a product specific id for this element 
        localStorage.setItem(obj, 1); // Set the quantity to 1 in local stoarge varaiable
        paragraph.setAttribute("style", "cursor: pointer; white-space: nowrap; display: inline-flex;");
        paragraph.innerText = "Items: x" + localStorage.getItem(obj);
        itemClass[0].appendChild(paragraph);
      }
    }

      /* Method gets all the items and quantites in the basket
       * by retrieving values stored in local storage */
      function getOrder() {
        var numProds = products.length; // Gets the number of products stored in the products array (20 items)
        var arr = []; // This will be used to store all the product that have been placed in the basket
        for (let index = 0; index < numProds; index++) {
          var item = localStorage.getItem("obj" + index); // gets the product key for local storage
          var temp = new Order(); // create a new temp Order object
          // check that there is an item stored in local stoarge (if its not there then it has not been addded to the basket)
          if (item != null) {
            temp.comId = parseInt(products[index]["comicID"] - 1); // Gets the comicID from the products array
            temp.qty = parseInt(localStorage.getItem("obj" + index)); // gets the quantity of the product stored in the local storage variable for that item
            arr.push(temp); // Stores all the products and their quantites to the array
          }
        } return arr;
      }
  
      // Constructor for Order Object (used to store basket items)
      function Order(comicID, quantity) {
        this.comId = comicID;
        this.qty = quantity;
      }
  
  
      // Variable stores all the comics and their quantites that were placed in the basket
      var order = getOrder();

      // Calculates the basket total using values stored in the
      function getBasTotal() {
        var total = 0; // variable for keeping track of overall total
        order = getOrder(); // retrieves order varaibales (comicID & quantity) stored in local storage
        var index = 0; // counter
        // This loops through all items stored in the Order object
        do {
          if (order.length > 0) {
            var x = order[index].comId; // stores the comic book index (which is the comicID), which corresponds to thye comic in the products array
            total += order[index].qty * products[x]["price"]; // keeps a cumulative sum of all the item times their quantity in the Order object
            index++;
          }
        } while (index < order.length)
        return total;
      }
  


  
      // Function is used to repopulate the basket if the page is refreshed
      function fillBasket() {
        
        if (order != null) {
          for (let i = 0; i < order.length ; i++) {
            var qty = order[i].qty; // The quantity of the comic
            for (let j = 0; j < qty; j++) {
              displayItems(order[i].comId); // add this comic to basket x times quantity
            }
          }
        }
      }
  
      /* Recalculates the basket */
      function updateBasket() {
        basketValue = getBasTotal(); // uses the getBasTotal function to calculate the order total from the items in the basket
        /** Creates a session storage variable called BasketTotal for storing the order total cost, this variable is used for keeping track of the order total
         * and is used to relcalulate the total when removing items from the basket */
        var sessionBasket = sessionStorage.setItem("BasketTotal", basketValue);  
        var getBasket = sessionStorage.getItem("BasketTotal", basketValue);
        
        // updates the basket total elements on screen
        for (let i =0; i < balanceClass.length; i++) { // balanceClass is a variable used to identify all the elements displaying basket total
          balanceClass[i].innerHTML = euroSign + (getBasket*1).toFixed(2); // Update the three basket totals (navigation bar, side basket and payment modal)
        }
  
      }

</script>
