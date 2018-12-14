<!doctype html> 
<html>
<head>
	<?php include("../../inc/meta.php") ?>
  	
    <link rel="stylesheet" href="style.css">
  	<title>Live Search</title>
 	<?php include("../../inc/header.php") ?>
    

	
    <h1><span>Live Search Of Speakers</span></h1>

    </div>

<div id="canvas" class="container group">
    
	
    <div id="primaryContent" class="group">
	    
       <div id="searchArea">
            <label for="search">Live Search </label>
            <p>Enter name/info to start the search </p>
            <input type="search" placeholder="enter name/info" name="search" id="search">


       </div>

        <div id="update"></div>
        
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script> 
       <script src="script.js"></script>
 

    </div> <!-- main content -->
    <!--
    <div id="secondaryContent">
    
    
    </div><!-- right col content --> 
    
    </div>
   
   
	<?php include("../../inc/footer.php") ?> 
    
    
    

</body>
</html>