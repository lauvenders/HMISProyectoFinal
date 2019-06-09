<?php include('../functions.php')?>

  <!DOCTYPE html>
  <html>
  <head>
  	<title>Registration system PHP and MySQL - User List</title>
  	<link rel="stylesheet" type="text/css" href="../style.css">
  	<style>
  		.header {
  			background: #003366;
  		}
  	</style>
  </head>
  <body>
    <div class="header">
      <h2> Admin - User List</h2>
    </div>

    <table style="width:100%">
          <tr>
              <th>ID</th>
              <th>Username</th>
              <th>E-mail</th>
              <th>Role</th>
              <th>Password</th>
          </tr>
        <?php
        $result = getusers();
          while($row = fetch_array($result)){
              echo "<tr><td>".$row['id']."</td><td>".$row['username']."</td><td>".$row['email'].
              "</td><td>".$row['user_type']."</td><td>".$row['password']."</td></tr>";
          }
        ?>
    </table>
  </body>
  </html>
