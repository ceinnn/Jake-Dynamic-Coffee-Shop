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
        <h2>Manage Menu</h2>
        <div class="table-container">
          <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Manage</th>
                </tr>
            </thead>
            <tbody>
            <?php
                $result = $conn->query("SELECT * FROM menu WHERE status='active'");
                while($row = $result->fetch_assoc()){
                    echo "
                        <tr>
                            <td class='name-row'>
                                <strong>{$row['name']}</strong> <br />
                                <small>{$row['description']}</small>
                            </td>
                            <td><strong>$ {$row['price']}</strong></td>
                            <td>
                                <form action='edit_menu.php' method='POST'>
                                    <input type='hidden' name='id' value='{$row['idmenu']}'/>
                                    <button type='submit' class='editbtn'>Edit</button>
                                </form>
                                <form action='archive_product.php' method='POST'>
                                    <input type='hidden' name='id' value='{$row['idmenu']}'/>
                                    <button type='submit' class='archivebtn'>Archive</button>
                                </form>
                            </td>
                        </tr>
                    ";
                }
            ?>
            </tbody>
        </table>
        </div>
      </div>
      <div id="footer">
        Copyright © 2011 Jake's Coffee House<br />
        <a href="mailto:jake@jcoffee.com">jake@jcoffee.com</a>
      </div>
    </div>
  </body>
</html>
