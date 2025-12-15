<?php include "db_conn.php"; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Jake's Coffee Shop</title>

    <link rel="stylesheet" href="styles.css?v=<?php echo time(); ?>" />
  </head>
  <body>
    <div id="container">
      <div id="logo">
        <h1>Jake's Cofee Shop</h1>
      </div>
      <div id="leftcolumn">
        <a class="navBar" href="cms_music.php">Back</a>
      </div>
      <div id="rightcolumn">
        <?php
            $id = $_POST['id'];
            echo "<h2>Edit Music ID: $id</h2>";
            $result = $conn->query("SELECT * FROM music WHERE idmusic= $id ");
            while($row = $result->fetch_assoc()){
                echo "
                    <form action='update_music.php' method='POST'>
                        <input type='hidden' name='id' value='{$row['idmusic']}'>

                        <label for='genre'>Genre:</label>
                        <input type='text' id='genre' name='genre' value='{$row['genre']}' required>

                        <label for='sched'>Schedule:</label>
                        <input type='time' id='sched' name='sched' value='{$row['schedule']}' required>

                        <button type='submit' class='updatebtn'>Update</button>
                    </form>
                ";
            }
        ?>
      </div>
      <div id="footer">
        Copyright © 2011 Jake's Coffee House<br />
        <a href="mailto:jake@jcoffee.com">jake@jcoffee.com</a>
      </div>
    </div>
  </body>
</html>
