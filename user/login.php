<?php
$error = (isset($_GET['error']) && $_GET['error'] != '') ? $_GET['error'] : '';
?>

<form action="process.php?action=login" method="POST">
	<input type="text" placeholder="Enter Username" name="username" required></br></br>
	<input type="password" placeholder="Enter Password" name="password" required></br></br>
	
	<button type="submit">Login</button>
</form>
<a href="?view=register">signup</a>