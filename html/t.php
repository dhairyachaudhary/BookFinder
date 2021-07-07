<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Mountains of Christmas' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Life Savers' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Open Sans' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>BookFinder: Search</title>

  </head>

  <body class="dharu">
        <nav class="navbar navbar-light bg-light">
            <div class="g4">
                <div class="heading3">BookFinder</div>
                <a href="login.html" class="btn al"> <div style="margin-top: 9px;"> Log In </div> </a>
            </div>
        </nav>

        <br>
        <br>

        <div class="wrap">
           <form class="search">
              <input type="text" class="searchTerm" placeholder="What are you looking for?">
              <button type="submit" class="searchButton">
                <i class="fa fa-search"></i>
             </button>
           </form>
        </div>

        <br>
        <br>
        <br>

          <table class="tab">
          <tr>
          <th>Title</th>
          <th>Author Name</th>
          <th>Date Published</th>
          </tr>


            <?php
            $host = "localhost";
            $user = "root";
            $password = "";
            $db = "bookfinder";

            $conn=new mysqli($host,$user,$password, $db);

            if ($conn->connect_error) {
              die("Connection failed: " . $conn->connect_error);
            } 

            $sql = "SELECT title, author_first_name, author_last_name, date_published FROM books";
            $result = $conn->query($sql);



            if ($result->num_rows > 0) {
              while($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row["title"]. "</td><td>" .$row["author_first_name"] . " ". $row["author_last_name"] . "</td><td>" . $row["date_published"] . "</td></tr>";
              }
            } else {
              echo "0 results";
            }
            ?>
          </table>


      <div class="footer-basic">
          <footer>
            <div class="grid2">
          <div class="list-inline-item"> Home </div>
          <div class="list-inline-item"> Services </div>
          <div class="list-inline-item"> About </div>
          <div class="list-inline-item"> Terms </div>
          <div class="list-inline-item"> Privacy </div>
        </div>
          </footer>
      </div>

      <br>
  </body>
</html>