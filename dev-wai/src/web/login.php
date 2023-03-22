<?php
 session_start();
     
   if ((!isset($_POST['login'])) || (!isset($_POST['haslo'])))
    {
        header('Location: index.php');
        exit();
    }
	
require_once('mongodb.php');

 $logpsw=$_POST['haslo'];
 $loglogin=$_POST['login'];
 
 $db=get_db();


 $query = array('login' => $loglogin);
	$users= $db->users->find($query);
 
 foreach ($users as $user) {
		if ($user != null)  {		
			if (password_verify($logpsw, $user['password'])) {
				
				$_SESSION['zalogowany'] = true;
				 unset($_SESSION['blad']);
				$_SESSION['user_id']=$loglogin  ;
				header('Location:indexzalogowany.php');
			
			}
			}
		}
		
	

				
				$_SESSION['blad']='<span style="color:red">Nieprawidłowy login lub hasło</span>';
				header('Location:index.php');
				

 ?>