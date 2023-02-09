<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Register Exercise PHP_DB</title>
</head>

<body>
	<?php
	require_once 'nav.html';
	?>

	<h1>Register</h1>

	<?php
	$firstName = '';
	$lastName = '';
	$email = '';

	// Make sure button is clicked
	if (isset($_POST['registerBtn'])) {
		$errors = array();
		$firstName = $_POST['firstname'];
		$lastName = $_POST['lastname'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$cPassword = $_POST['cPassword'];

		// Validations
		if (empty($firstName))
			$errors['firstname'] = 'First name is mandatory !';
		if (empty($lastName)) {
			$errors['lastname'] = 'Last name is mandatory !';
		}

		// clear the inputs for names

		/*
		we can use this when we declare the variable i.e.:
		$firstName = strip_tags(trim($_POST['firstname']));
		*/
		$firstName = trim($firstName);
		$firstName = strip_tags($firstName);

		$lastName = trim($lastName);
		$lastName = strip_tags($lastName);

		if (empty($email))
			$errors['email'] = 'Email is mandatory !';
		else if (strlen($email) < 8 or strlen($email) > 50) {
			$errors['email'] = 'Email must be between 8 and 50 characters long.';
		}

		// clear and verify the email
		$email = filter_var($email, FILTER_SANITIZE_EMAIL);
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			$errors['email'] = 'Must enter a valid email!';
		}

		if (strlen($password) < 8)
			$errors['password'] = 'Passwords must be at least 8 characters long.';
		else if ($password != $cPassword) {
			$errors['password'] = 'Passwords must match';
		}

		// Only if NO errors
		if (empty($errors)) {
			/* echo "First name : $firstName<br>";
			echo "Last name : $lastName<br>";
			echo "Email : $email<br>"; */

			if (isset($_POST['newsletter']))
				echo "Subscribed to the newsletter.<br>";

			// hash the password
			$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

			$conn = mysqli_connect('localhost', 'jsilva', 'j0m4n3ls', 'spotify');

			if ($conn) {
				$query = "INSERT INTO users (first_name, last_name, email, password)
						VALUES('$firstName', '$lastName', '$email', '$password')";

				$result = mysqli_query($conn, $query);

				mysqli_close($conn);

				if ($result) {
					echo 'Data successfully entered in the db!';
					$firstName = '';
					$lastName = '';
					$email = '';
				} else {
					echo 'Insert not successful! Check your code.';
				}
			} else {
				echo 'Problem connecting to the DB<br>';
			}
		} else {
			/* foreach ($errors as $key => $value) {
				echo "$key : $value<br>";
			} */
		}
	}
	?>

	<form method="post">
		<input type="text" name="firstname" placeholder="First name" value="<?php echo $firstName; ?>">
		<?php
		if (isset($errors['firstname']))
			echo $errors['firstname'];
		?>
		<br>
		<input type="text" name="lastname" placeholder="Last name" value="<?php echo $lastName; ?>">
		<?php
		if (isset($errors['lastname']))
			echo $errors['lastname'];
		?>
		<br>

		<input type="email" name="email" placeholder="E-mail" value="<?php echo $email; ?>">
		<?php
		if (isset($errors['email']))
			echo $errors['email'];
		?>
		<br>

		<input type="text" name="password" placeholder="Password">
		<?php
		if (isset($errors['password']))
			echo $errors['password'];
		?>
		<br>

		<input type="text" name="cPassword" placeholder="Confirm Password"><br>
		<label for="news">Subscribe to the newsletter</label>
		<input type="checkbox" name="newsletter" id="news"><br>
		<input type="submit" name="registerBtn" value="Signin">
	</form>
</body>

</html>