<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Mountains of Christmas' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Life Savers' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Open Sans' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  </head>

  <body class="dharu">
        <nav class="navbar navbar-light bg-light">
            <div class="g4">
                <a href="index.html" class="heading3" style="text-decoration: none;">BookFinder</a>
                <a href="spage.php" class="btn al"> <div style="margin-top: 9px;"> Search </div> </a>
            </div>
        </nav>

        <br>
        <br>

        <div class="align_it">
           <div class="grid5">
            <div class="register">
              <div class="heading2"> Add New Book! </div>
              <br>
              <br>
              <form action="adder.php" method="POST" class="form">
              <input type="text" name="title" placeholder="Book title" class="form__field tx">
              <input type="text" name="a_firstname" placeholder="Author's first name" class="form__field tx">
              <input type="text" name="a_lastname" placeholder="Author's last name" class="form__field tx">
              <input type="text" name="rdate" placeholder="Release date (YYYY-MM-DD)" class="form__field tx">
              <input type="text" name="genre" placeholder="Main Genre" class="form__field tx">
              <br>
              <br>
              <br>
              <button type="submit" name="submitbook" class="btn2 form__field"> Add!
             </button>
           </form>
         </register>
         </div>
        <br>
        <br>
  </body>
</html>