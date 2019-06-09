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
    <table style="width:100%">
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
              echo "<tr><td style="text-align: center;">"
              .$row['id']."</td><td style="text-align: center;">"
              .$row['username']."</td><td style="text-align: center;">"
              .$row['email']."</td><td style="text-align: center;">"
              .$row['user_type']."</td><td style="text-align: center;">"
              .$row['password']."</td style="text-align: center;"></tr>";
          }
        ?>
    </table>
  </div>
  </body>
  </html>
