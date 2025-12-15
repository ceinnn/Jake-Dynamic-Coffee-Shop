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
        <a class="navBar" href="cms_menu.php">Back</a>
      </div>
      <div id="rightcolumn">
        <?php
            $id = $_POST['id'];
            echo "<h2>Edit Product ID: $id</h2>";
            $result = $conn->query("SELECT * FROM menu WHERE idmenu= $id ");
            while($row = $result->fetch_assoc()){
                echo "
                    <form action='update_product.php' method='POST'>
                        <input type='hidden' name='id' value='{$row['idmenu']}'>

                        <label for='name'>Name:</label>
                        <input type='text' id='name' name='name' value='{$row['name']}' required>

                        <label for='desc'>Description:</label>
                        <input type='text' id='desc' name='desc' value='{$row['description']}' required>

                        <label for='price'>Price:</label>
                        <input type='number' step='0.01' id='price' name='price' value='{$row['price']}' required>

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
