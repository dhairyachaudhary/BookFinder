      <?php
            $cleardb_server =  "us-cdbr-east-04.cleardb.com";
      $cleardb_username = "b5656e7ccce606";
      $cleardb_password = "cf391ff3";
      $cleardb_db = "heroku_35490c63a88748e";
      $active_group = 'default';
      $query_builder = TRUE;

      $conn = mysqli_connect($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db);

            if ($conn->connect_error) {
              die("Connection failed: " . $conn->connect_error);
            } 

                $a = $_POST['title'];
                $b = $_POST['a_firstname'];
                $c = $_POST['a_lastname'];
                $d = $_POST['rdate'];
                $e = $_POST['genre'];


                $sql3 = "INSERT INTO books (title, author_first_name, author_last_name, date_published, genre) VALUES ('$a', '$b', '$c', '$d', '$e')";
                mysqli_query($conn, $sql3);

            header("Location: spage.php?add=sucess");