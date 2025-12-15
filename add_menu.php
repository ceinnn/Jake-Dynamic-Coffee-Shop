<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Dashboard</title>

    <link rel="stylesheet" href="styles.css?v=<?php echo time(); ?>" />
  </head>
  <body>
    <div id="container">
      <div id="logo">
        <h1>Admin Jake</h1>
      </div>
      <div id="leftcolumn">
        <a class="navBar" href="index.php">Home</a>
        <a class="navBar" href="cms_menu.php">Manage Menu</a>
        <a class="navBar" href="add_menu.php">Add Menu</a>
        <a class="navBar" href="archived_menu.php">Archived Menu</a>
        <br>
        <a class="navBar" href="cms_music.php">Manage Music</a>
        <a class="navBar" href="add_music.php">Add Music</a>
        <a class="navBar" href="archived_music.php">Archived Music</a>
      </div>
      <div id="rightcolumn">
        <h2>Add Menu</h2>
        <form action="add_product.php" method="POST">
          <label for="name">Name:</label>
          <input type="text" id="name" name="name" required>

          <label for="desc">Description:</label>
          <input type="text" id="desc" name="desc" required>

          <label for="price">Price:</label>
          <input type="number" step="0.01" id="price" name="price" required>

          <button type="submit" class="addbtn">Add</button>
        </form>
      </div>
      <div id="footer">
        Copyright © 2011 Jake's Coffee House<br />
        <a href="mailto:jake@jcoffee.com">jake@jcoffee.com</a>
      </div>
    </div>
  </body>
</html>
