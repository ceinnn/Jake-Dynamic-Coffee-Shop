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
        <a class="navBar" href="menu.php">Menu</a>
        <a class="navBar" href="music.php">Music</a>
        <a class="navBar" href="cms_menu.php">CMS</a>
      </div>
      <div id="rightcolumn">
        <h2>Music</h2>
        <div class="table-container">
          <table>
            <thead>
                <tr>
                    <th class="music-th">Genre</th>
                    <th class="music-th">Schedule</th>
                </tr>
            </thead>
            <tbody>
            <?php
                $result = $conn->query("SELECT * FROM music WHERE status='active'");
                while($row = $result->fetch_assoc()){
                    $formattedtime = date('g:i A', strtotime($row['schedule']));

                    echo "
                        <tr>
                            <td class='music-td'>
                                {$row['genre']}<br />
                            </td>
                            <td class='music-td'>{$formattedtime}</td>
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
