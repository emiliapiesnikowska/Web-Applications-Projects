<?php
	require('mongodb.php');
	//string password_hash ( string $password , integer $algo [, array $options ] )
	
	
	
	if(isset($_POST['register'])){
	$email=$_POST['mail'];
	$login=$_POST['username'];
	$psw=$_POST['password'];
	$psw2=$_POST['password2'];
	
	}
	$udanarejestracja=1;
	
	if($psw!==$psw2){
		echo "Hasła się różnią  <a href='index.php'>Spróbuj ponownie</a>";
		$udanarejestracja=0;
	}
	
	if(empty($login) || empty($email) || empty($psw) || empty($psw2) ) {
		echo "Pozostawiono puste pola! <a href='index.php'>Spróbuj ponownie</a>";
		$udanarejestracja=0;
		
	}
	
	
	$safe_password = password_hash($psw, PASSWORD_DEFAULT);
	
	$db=get_db();
	$collection=$db->users;
	$user = [
	'login'=>$login,
	'email'=>$email,
	'password'=>$safe_password
	];
	
	$query = array('login' => $login);
		$users= $db->users->find($query);
		foreach ($users as $user) {
			if ($user != null)  {		
				if ($user['login'] = $login) {
					echo "Login zajęty! <a href='index.php'>Spróbuj ponownie</a>";
					$udanarejestracja=0;
					
				}
			}
		}
		
		if($udanarejestracja===1){
			$db->users->insertOne($user);
			echo "Rejestracja zakończona powodzeniem. <a href='index.php'>Wróć aby się zalogować</a>";
		} else {
			echo " Rejestracja nieudana";
			}
	
?>