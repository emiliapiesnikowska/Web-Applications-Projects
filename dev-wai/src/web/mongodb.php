<?php
require '../vendor/autoload.php';
use MongoDB\BSON\ObjectID;

function get_db()
{
	$mongo=new MongoDB\Client(
	"mongodb://localhost:27017/wai",
	[
		'username' => 'wai_web',
		'password' => 'w@i_w3b',
		]);
	$db=$mongo->wai;
return $db;

}


function check_if_logged() 
	{
		if(session_id() == '' || !isset($_SESSION)) {
		 session_start(); 
    if (!isset($_SESSION['zalogowany']))
    {
        header('Location: index.php');
        exit();
    }
	}
	}


function indexzalogowany(){
	 session_start(); 
    if (!isset($_SESSION['zalogowany']))
    {
        header('Location: index.php');
        exit();
    }
}

function index(){
session_start();
 if ((isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowany']==true))
    {
        header('Location: indexzalogowany.php');
        exit();
    }
}

?>