<?php include('../functions.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit user</title>
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
	<div class="header">
		<h2>Admin - Edit User</h2>
	</div>

	<form method="post" action="edit_user.php">

		<?php echo display_error();
		if (isset($_GET['edit'])) {
				$id = $_GET['edit'];
				$update = true;
				$record = mysqli_query($db, "SELECT * FROM info WHERE id=$id");

				if (count($record) == 1 ) {
					$n = mysqli_fetch_array($record);
					$username = $n['username'];
					$email = $n['email'];
		      $user_type = $n['user_type'];
				}
			}
		?>

		<div class="input-group">
			<input type="hidden" name="id" value="<?php echo $id; ?>">
    </div>
    <div class="input-group">
      <label>Username</label>
      <input type="text" name="username" value="<?php echo $username; ?>">
    </div>
    <div class="input-group">
      <label>Email</label>
      <input type="email" name="email" value="<?php echo $email; ?>">
    </div>
    <div class="input-group">
      <label>User type</label>
      <select name="user_type" id="user_type" >
        <option value=""></option>
        <option value="admin">Admin</option>
        <option value="user">User</option>
      </select>
    </div>
    <div class="input-group">
      <button type="submit" class="btn" name="update">Update</button>
    </div>
  </form>
  </body>
  </html>
