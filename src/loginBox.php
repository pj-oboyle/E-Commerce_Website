<!-- ################       Login Box HTML         ############## -->
<!-- Code adapted from source: https://getbootstrap.com/docs/4.6/components/modal/ -->
<!-- Login Box Modal which validates using the user information stored in the userLogin table in the database -->
<!-- User cannot place items into the basket unless they are first logged in -->

<!-- JQuery library used for the login valiadation function -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

<!-- Code block for the login modal -->
<!-- id "loginBox is used to indetify the login box element in function which hide and show the all login box elements -->
  <div id="loginBox" class="modal-login"> 
    <div class="loginArea modal-lg"> <!-- class "loginArea" is used identify the login modal for formatting during screen resizing-->
      <form class="modal-content-login animate loginForm" action="index.php" method="post"> <!-- class "loginForm" is used in the validation function-->
        <div class="imgcontainer container-flex"> <!-- class "imgcontainer" is used for CSS formatting-->
          <span onclick="toggleLogin()" class="close" title="Close Modal">&times;</span> <!-- the togglelogin() function opens and closes the login modal -->
          <img src="assets/GothamSkyline.jpg" alt="Skyline" class="imgcontainer">
          <img src="assets/BatmanLogo.gif" alt="Avatar" class="avatar"> <!-- class "avatar" is used for positioning the image -->
        </div>

        <div class="container bg-black">
          <label for="uname1"><strong>Username</strong></label>
          <input type="text" placeholder="Enter Username" name="uname" required>

          <label for="pwd1"><strong>Password</strong></label>
          <input type="password" placeholder="Enter Password" name="psw" required>
              
          <button class="loginbtn" type="submit">Login</button>
          <label>
            <input type="checkbox" checked="checked" name="remember"> Remember me
          </label>
        </div>

        <div class="container" style="background-color:#294561; color: #ffffff">
          <button type="button" onclick="toggleLogin()" class="loginbtn cancelbtn">Cancel</button> <!-- the togglelogin() function opens and closes the login modal -->
          <span class="psw">Forgot <a class="highlght" href="#">password?</a></span>
        </div>
      </form>
    </div>
  </div>

<script>

     // ##################### Login box Code ##########################
    
    const navloginbtn = document.getElementById("nav-loginbtn"); // id "nav-loginbtn" identifies the login button in the navigation bar for opening and closing the login box 
    const loginBox = document.getElementById('loginBox'); // id "loginBox" is the div that encloses all the login box elements, used for functions below
    
    // When the user clicks anywhere outside of the login modal box, it closes the login box
    window.onclick = function(event) {
        if (event.target == loginBox) {
            loginBox.style.display = "none";
        }
    }
 

    // This displays the login modal
    var toggle = "off"; // on/off toggle switch variable for toggleLogin() function 
    
    function toggleLogin() {
      // uses the toggle variable to keep track if login box is visible or hidden
      if (toggle == "off") {
        toggle = "on"; 
        loginBox.style.display ='block'; // displays the login box
      } else {
        toggle = "off";
        loginBox.style.display ='none'; // hides the login box
      }
    }

    // Used by both close button and cancel button in the login box to close the login screen
    function closeLogin() {
      loginBox.style.display='none';
    }
    

    // Event listener on the login button in the navigation bar for a click, which would display the login box
    navloginbtn.addEventListener('click', (e) => {
      toggleLogin(); // function toggles between displaying and hiding the login screen      
    })


    // Validates the user log in details on submission of the form with class "loginForm"
    $(document).ready(function() {
      $(".loginForm").submit(function() {
        logname = $("input[name='uname']").val(); // Gets the value from the username input box
        passwrd = $("input[name='psw']").val(); // Gets the value from the password input box

        // for loop checks every user in the userAccounts array
        for (let index = 0; index < userAccounts.length; index++) { // userAccounts array stores log in details for all the users
          if (logname == userAccounts[index]["userName"] && passwrd == userAccounts[index]["userPass"]) { // if the input matches the corresponding user name and password stored in userAccounts array
            sessionStorage.setItem("login", "true"); // Set the login status to true (used to display hidden elements)
            var name = userAccounts[index]["firstName"]; // variable to store the users first name from the userAccounts array
            sessionStorage.setItem("fname", name); // Creates a variable in sesssion storage to store the user's first name
            return true; // returns true for successful login
          } else {
            document.getElementById("alert-header").innerHTML = "Incorrect Deatils."; // Add text to the alert modal for failed login
            document.getElementById("alert-text").innerHTML = "Please try again."; // Add text to the alert modal for failed login
            randGIF(); // Function displays a random gif image in the alert box element (source: alertModal.php)
            $("#alertModal").modal("show"); // Display the alert modal
            
            }
          }
            
          return false; // Keeps login box open unless correct input enetered
      });
        
    });




</script>
