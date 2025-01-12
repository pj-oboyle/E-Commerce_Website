

<!-- Side Basket Menu-->
<!-- Side Basket Element is used to stored all items selected by the user, it creates an itemised bill of each product and quantity including total costs of order in a side bar-->
<!-- Products can be purcahse from the side basket -->
<!-- Any items in the side basket can be removed by click on their image -->

<!-- the class "sidenav" is used for CSS formatting -->
<!-- The id "mySidenav" is used to indentify this element so it can be scrolled horizonatally using the openNav() and closeNav() functions (Source: navBar.php) -->
<div id="mySidenav" class="sidenav">
<!-- The function closeNav() closes the side basket -->
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <h5>Shopping Basket</h5>
    <div class="d-flex"> 
      <h5>Your Total: </h5>
      <h5 class="balance"></h5> <!-- class "balance" is used to identify this element to place the basket total from updateBasket() functions (Source: paymentScripts.php) -->
    </div>
    <!-- class "cartbtn" is used to format the button. The function closeNav() closes the side basket -->
  <button class="btn btn-outline-success cartbtn" data-toggle="modal" data-target="#staticBackdrop" onclick="closeNav()">Cart- Pay Now</button> <!-- The id "staticBackdrop" is used to indentify the payment modal in payment.php -->
  <h6 >Click on item to remove from basket</h6>
  <div class="container cartItems"></div> <!-- class "cartItems" is used to identify this element so the displayItems() function (Source: paymentScripts.php) can create elements for product details -->
  <a href="#">Contact</a>
</div>
