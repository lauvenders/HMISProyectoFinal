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
      <tbody>
        <?php
        $conn = new mysqli('127.0.0.1:49452', 'azure', '6#vWHD_$', 'multi_login');
        if($conn -> connect_error){
          die("Connection failed: ". $conn-> connect_error);
        }
        $sql = ("SELECT * FROM multi_login WHERE user_type = "user"");
        $result = $conn->$query($sql);
        while($row = $result->fetch_array()){
            echo "<tr>";
            echo "<td>".$row['id']."</td>";
            echo "<td>".$row['username'].$rowtwo['lastname']."</td>";
            echo "<td>".$row['email']."</td>";
            echo "<td>".$row['user_type']."</td>";
            echo "<td>".$row['password']."</td>";
            echo "</tr>";
        }
        $conn-> close();
        ?>
      </tbody>
    </table>
  </body>
  </html>
