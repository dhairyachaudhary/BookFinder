      <?php
            $host = "localhost";
            $user = "root";
            $password = "";
            $db = "bookfinder";

            $conn=new mysqli($host,$user,$password, $db);

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


            header("Location: add.php");