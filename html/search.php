<?php
  include 't.php';
?>


<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Mountains of Christmas' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Life Savers' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Open Sans' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>BookFinder: Search Results</title>

  </head>

  <body class="dharu">
    <br>
    <br>
    <br>
    <div class="heading2"> Search Results</div>
    <br>
    <br>


        <table class="tab">
          <tr>
          <th>Title</th>
          <th>Author Name</th>
          <th>Date Published</th>
          </tr>


            <?php

              if (isset($_POST['submit-search'])){
                $search=mysqli_real_escape_string($conn, $_POST['searchfield']);

                $sql2 = "SELECT * FROM books WHERE title LIKE '%$search%' OR author_first_name LIKE '%$search%' OR author_last_name LIKE '%$search%' OR genre LIKE '%$search%'";
                $res = mysqli_query($conn, $sql2);
                if ($res->num_rows > 0) {
                while($row = $res->fetch_assoc()) {
                  echo "<tr><td>" . $row["title"]. "</td><td>" .$row["author_first_name"] . " ". $row["author_last_name"] . "</td><td>" . $row["date_published"] . "</td></tr>";
                }
              } 
            }else {
                echo "0 results";
              }
            ?>
          </table>
      <br>
  </body>
</html>