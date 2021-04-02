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
                
	    
    <?php
// Create database connection using config file
include_once("config.php");
 
// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC");
?>
 
<html>
<head>    
    <title>Homepage</title>
</head>
 
<body>

 
    <table width='80%' border=1>
 
    <tr>
        <th>Name</th> <th>Mobile</th> <th>Email</th> <th>Update</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['name']."</td>";
        echo "<td>".$user_data['mobile']."</td>";
        echo "<td>".$user_data['email']."</td>";    
        echo "<td><a href='edit.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";        
    }
    ?>
    </table>
</body>


	

            </div>
        </div>
    </section>

    <!-- ***** Features Item Start ***** -->
    
    <!-- ***** Features Item End ***** -->
   
    <!-- ***** Contact Us Area Starts ***** -->
    
    <!-- ***** Contact Us Area Ends ***** -->
    
    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p>
              Bandung,  31 Maret 2021         
                    </p>
                </div>
            </div>
        </div>
    </footer>

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