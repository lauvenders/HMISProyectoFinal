<?php
include('functions.php');
if (!isLoggedIn()) {
	$_SESSION['msg'] = "You must log in first";
	header('location: login.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit profile</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="header">
	<h2>Edit profile</h2>
</div>
<form method="post" action="editProfile.php">
	<?php echo display_error(); ?>
	<div class="input-group">
		<label>Username</label>
		<input type="text" name="username" value="<?php echo $username; ?>">
	</div>
	<div class="input-group">
		<label>Email</label>
		<input type="email" name="email" value="<?php echo $email; ?>">
	</div>
	<div class="input-group">
		<button type="submit" class="btn" name="edit_btn">Confirm</button>
	</div>
</form>
</body>
</html>
