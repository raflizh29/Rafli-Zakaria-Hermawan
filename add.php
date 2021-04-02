<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="./contact_files/css" rel="stylesheet">

    <title>web</title>

    <link rel="stylesheet" type="text/css" href="./contact_files/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="./contact_files/font-awesome.css">

    <link rel="stylesheet" href="./contact_files/style.css">

    </head>
    
    <body>
    
    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader loaded">
      <div class="preloader-inner">
        <span class="dot"></span>
        <div class="dots">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
    </div>
    <!-- ***** Preloader End ***** -->
    
    
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky background-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="home.php" class="logo">TUGAS <em>BASIS DATA</em></a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav" style="display: none;">
                            <li><a href="home.php">Home</a></li>
                            
                            
                            
                            <li><a href="add.php" class="active">ISI DATA</a></li> 
    
    <li><a href="index.php">Database</a></li>
                        </ul>          
                        <a class="menu-trigger">
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <section class="section section-bg" id="call-to-action" style="bg-color:#ffffff">
        <div class="container">
            <div class="row">
                
	<head>
	<title>Add Users</title>
</head>
 

	
	<br/><br/>
 
	<form action="add.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr> 
				<td>Name</td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr> 
				<td>Email</td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr> 
				<td>Mobile</td>
				<td><input type="text" name="mobile"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="Add"></td>
			</tr>
		</table>
	</form>
	
	<?php
 
	// Check If form submitted, insert form data into users table.
	if(isset($_POST['Submit'])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$mobile = $_POST['mobile'];
		
		// include database connection file
		include_once("config.php");
				
		// Insert user data into table
		$result = mysqli_query($mysqli, "INSERT INTO users(name,email,mobile) VALUES('$name','$email','$mobile')");
		
		// Show message when user added
		echo "User added successfully. ";
	}
	?>


    <!-- ***** Features Item Start ***** -->
    
    <!-- ***** Features Item End ***** -->
   
    <!-- ***** Contact Us Area Starts ***** -->
    
    <!-- ***** Contact Us Area Ends ***** -->
    
    <!-- ***** Footer Start ***** -->
 

    <!-- jQuery -->
    <script src="./contact_files/jquery-2.1.0.min.js.download"></script>

    <!-- Bootstrap -->
    <script src="./contact_files/popper.js.download"></script>
    <script src="./contact_files/bootstrap.min.js.download"></script>

    <!-- Plugins -->
    <script src="./contact_files/scrollreveal.min.js.download"></script>
    <script src="./contact_files/waypoints.min.js.download"></script>
    <script src="./contact_files/jquery.counterup.min.js.download"></script>
    <script src="./contact_files/imgfix.min.js.download"></script> 
    <script src="./contact_files/mixitup.js.download"></script> 
    <script src="./contact_files/accordions.js.download"></script>
    
    <!-- Global Init -->
    <script src="./contact_files/custom.js.download"></script>

  
</body></html>