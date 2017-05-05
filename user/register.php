<?php
$message = (isset($_GET['message']) && $_GET['message'] != '') ? $_GET['message'] : '';
?>

<?=$message;?>

<form action="process.php?action=register" method="POST">
	USERNAME *</br>
	<input type="text" name="username" placeholder="your username">
	</br></br>
	
	FIRST NAME *</br>
	<input type="text" name="firstname" placeholder="your first name">
	</br></br>
	
	LAST NAME *</br>
	<input type="text" name="lastname" placeholder="your last name">
	</br></br>
	
	PASSWORD *</br>
	<input type="password" name="password" placeholder="enter password">
	</br></br>
	
	REPEAT PASSWORD *</br>
	<input type="password" name="repeatpassword" placeholder="enter password">
	</br></br>
	
	<input type="submit" value="Register">
</form>
</div>