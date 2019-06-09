<?php include('../functions.php') ?>

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

      </tbody>
    </table>
  </body>
  </html>
