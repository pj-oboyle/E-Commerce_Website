
<?php
  // Step 1: Create variables for database credentials
        $dbhost = "localhost";
        $dbuser = "root";
        $dbpassword = "";
        $dbname = "G00398242";

        $connection = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname);

  // Test if connection occurred
  if(mysqli_connect_errno()) {
    die("DB connection failed: ".
    mysqli_connect_error().
    " (" . mysqli_connect_errno() . ")"
        );
  }

  if (!$connection) 
    {
        die("Could not connect: " . mysqli_connect_error());
    }

  // Step 2: Perform Database Query

  // ######### Comic Book Database ########
  $comicBooks = array();
  $result = mysqli_query($connection, "SELECT * FROM comicBooks"); // select all the comic book data stored in the table
  
  // Parse all the comic book data into the comicBooks array
  while($row = mysqli_fetch_array($result)) {
    $comicBooks[] = $row;
  }


  ###### User Login Database ##############

  $userLogin = array();
  $result = mysqli_query($connection, "SELECT * FROM userLogin"); // select all the user data (uname, password, first name) stored in the table

  // Parse all the user details into the userLogin array
  while($row = mysqli_fetch_array($result)) {
    $userLogin[] = $row;
  }

  // Step 4 Release returned data

  mysqli_free_result($result);

  // Step 5 Close the database connection

  mysqli_close($connection);

?>