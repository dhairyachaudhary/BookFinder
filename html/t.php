<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Mountains of Christmas' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Life Savers' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Open Sans' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  </head>

  <body class="dharu">
      <?php
            $host = "localhost";
            $user = "root";
            $password = "";
            $db = "bookfinder";

            $conn=new mysqli($host,$user,$password, $db);

            if ($conn->connect_error) {
              die("Connection failed: " . $conn->connect_error);
            } 
        ?>



        <nav class="navbar navbar-light bg-light">
            <div class="g4">
                <a href="index.html" class="heading3" style="text-decoration: none;">BookFinder</a>
                <a href="add.php" class="btn al"> <div style="margin-top: 9px;"> Add New </div> </a>
            </div>
        </nav>

        <br>
        <br>

        <div class="wrap">
           <form class="search" action="search.php" method="POST">
              <input type="text" name="searchfield" class="searchTerm" placeholder="Search books by title, genre, etc.">
              <button type="submit" name="submit-search" class="searchButton">
                <i class="fa fa-search"></i>
             </button>
           </form>
        </div>


  </body>
</html>