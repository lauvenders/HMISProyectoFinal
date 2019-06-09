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

    <form method="post" action="list_users.php">

  		<?php echo display_error(); ?>
    <div style="overflow-x:auto;">
    <table border="1" style="width:100%; text-align: center; vertical-align: middle;">
          <thead>
              <th>ID</th>
              <th>Username</th>
              <th>E-mail</th>
              <th>Role</th>
              <th>Password</th>
          </thead>
        <?php
        $result = getusers();
          while($row = mysqli_fetch_array($result)){
              echo "<tr><td>"
              .$row['id']."</td><td>"
              .$row['username']."</td><td>"
              .$row['email']."</td><td>"
              .$row['user_type']."</td><td>"
              .$row['password']."</td></tr>";
          }
        ?>
    </table>
  </div>
  </body>
  </html>
