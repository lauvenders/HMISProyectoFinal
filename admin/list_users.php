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

    <table style="width:100%">
      <thead>
          <tr>
              <th>ID</th>
              <th>User</th>
              <th>Email</th>
              <th>Role</th>
              <th>Password</th>
          </tr>
      </thead>
        <?php
        $conn = mysqli_connect('127.0.0.1:49452', 'azure', '6#vWHD_$', 'multi_login');
        if($conn -> connect_error){
          die("Connection failed: ". $conn-> connect_error);
        }
        $sql = "SELECT * FROM `users` WHERE 1";
        $result = $conn->$query($sql);
        if($result -> num_rows > 0){
          while($row = $result->fetch_assoc()){
              echo "<tr><td>".$row["id"]."</td><td>".$row["username"].$rowtwo["lastname"]."</td><td>".$row["email"].
              "</td><td>".$row["user_type"]."</td><td>".$row["password"]."</td></tr>";
          }
        }
        else{
          echo "0 results";
        }
        $conn-> close();
        ?>
    </table>
  </body>
  </html>
