<?php
  include('../functions.php');
  ?>

  <!DOCTYPE html>
  <html>
  <head>
  	<title>Registration system PHP and MySQL - Create user</title>
  	<link rel="stylesheet" type="text/css" href="../style.css">
  	<style>
  		.header {
  			background: #003366;
  		}
  		button[name=register_btn] {
  			background: #003366;
  		}
  	</style>
  </head>
  <body>
    <div class "header">
      <h2> Admin - User List</h2>
    </div>

    <form method="post" action="list_users.php">

      <?php echo display_error(); ?>

    <table class="table table-striped">
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
          $query = mysql_query("SELECT * FROM multi_login where user_type = "user"");
          while($row = mysql_fetch_array($query)){
              echo "<tr>";
              echo "<td>".$row['id']."</td>";
              echo "<td>".$row['username']."</td>";
              echo "<td>".$row['email']."</td>";
              echo "<td>".$row['user_type']."</td>";
              echo "<td>".$row['password']."</td>";
              echo "</tr>";
          }
          ?>
      </tbody>
</table>
