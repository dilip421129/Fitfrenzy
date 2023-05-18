<?php
	session_start();

	if(isset($_POST['signup'])){

		$firstname = trim($_POST['firstname']);
		$lastname = trim($_POST['lastname']);
		$email = trim($_POST['email']);
		$password = $_POST['password'];
		$cpassword =$_POST['cpassword'];;

		if(empty($firstname) || empty($lastname) || empty($email) || empty($password) || empty($cpassword)){
			$_SESSION['error'] = 'Fill up all required fields';
			header('location: signup.php');
			exit();
		}
		else if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
			$_SESSION['error'] = 'Invalid email format';
			header('location: signup.php');
			exit();
		}
		else if($password !== $cpassword){
			$_SESSION['error'] = 'Passwords do not match';
			header('location: signup.php');
			exit();
		}
		else{

			require_once 'db.php';
			// require_once 'includes/conn.php';
			//check if email exists
			$stmt = $pdo->prepare('SELECT * FROM users WHERE email = :email');
			$stmt->execute(['email'=>$email]);

			if($stmt->rowCount()){
				$_SESSION['error'] = 'Email already exists';
				header('location: signup.php');
				exit();
			}
			else{

				//encrypt password
				$password = password_hash($password, PASSWORD_DEFAULT);

				//insert record into database
				$stmt = $pdo->prepare('INSERT INTO users(firstname,lastname,email,password) VALUES (:firstname,:lastname,:email,:password)');
				$result = $stmt->execute(['firstname'=>$firstname,'lastname'=>$lastname,'email'=>$email,'password'=>$password]);

				if($result){
					$_SESSION['success'] = 'Account created successfully. You can now login';
					header('location: login.php');
				}
				else{
					$_SESSION['error'] = 'Something went wrong. Cannot create account';
					header('location: signup.php');
				}

				$pdo->close();

			}

		}

	}
	else{
		$_SESSION['error'] = 'Fill up signup form first';
		header('location: signup.php');
	}
?>
