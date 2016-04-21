<?php
include_once './libs/const.php';
include_once './libs/search.php';
$_pageid = 5;
?>
<?php
//Check if search data was submitted
if ( isset( $_GET['s'] ) ) {
  // Include the search class
  include_once('./libs/request_user.php');
  
  // Instantiate a new instance of the search class
  //$search = new search();
  
  // Store search term into a variable
  echo "hello sssssssssssssssssssss";
  $search_term = htmlspecialchars($_GET['s'], ENT_QUOTES);
   echo "hello sir $search_term";
  // Send the search term to our search class and store the result
  $search_results = $search->search($search_term);
  echo "serach results $search_results";
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
        $_TITLE = "Blinx Home page";
        include_once './tags/common/head.php';
        ?>
    </head>
    <body>
	<?php include_once './tags/global_header/header.php'; ?>
        <!-- begin:slider -->
        <div class="sr-topbar"></div>
        <!-- begin:tagline -->
        <div class="container">
	<form action="" method="get">
	  <div class="col-md-3" style="padding:0">
             <input type="search" class="form-control" name="s" placeholder="check for the code"> </input>
        </div>
        <div class="col-md-2" style="padding:0">
                <button class="btn btn-primary" type="submit" value="search">Search</button>
        </div>
	</form>
	</div>
	<div class="sr-topbar2"></div>
        <!-- end:tagline -->
        <?php include_once './tags/global_header/footer.php'; ?>
        <!-- end:copyright -->
        <?php include_once './tags/common/scripts.php'; ?>
    </body>
</html>
