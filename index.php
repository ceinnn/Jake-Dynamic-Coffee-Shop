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
        <a class="navBar" href="index.php">Home</a>
        <a class="navBar" href="menu.php">Menu</a>
        <a class="navBar" href="music.php">Music</a>
        <a class="navBar" href="cms_menu.php">CMS</a>
      </div>
      <div id="rightcolumn">
        <p>Come in and experience...</p>
        <img
          id="coffeepic"
          class="floatright"
          src="./img/latte.jpg"
          alt="coffee cup"
          width="200"
          height="200"
        />
        <ul>
          <li>Specialty Coffee and Tea</li>
          <li>Freshly made sandwiches</li>
          <li>Bagels, Muffins, and Organic Snacks</li>
          <li>Music and Poetry Readings</li>
          <li>Open mic nights</li>
          <li>...</li>
        </ul>
        <p>
          23 Pine Road <br />
          Nottingham, NG1 5YU <br />
          0115 9324567
        </p>
      </div>
      <div id="footer">
        Copyright © 2011 Jake's Coffee House<br />
        <a href="mailto:jake@jcoffee.com">jake@jcoffee.com</a>
      </div>
    </div>
  </body>
</html>
