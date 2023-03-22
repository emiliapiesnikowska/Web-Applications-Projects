<?php
include('mongodb.php');
$db=get_db();
	$Title=$_POST['filetitle'];
	$Author=$_POST['name'];
	
		

if(isset($_POST['submit'])){
	$file=$_FILES['file'];
	
	$fileName=$_FILES['file']['name'];
	$fileTmpName=$_FILES['file']['tmp_name'];
	$fileSize=$_FILES['file']['size'];
	$fileError=$_FILES['file']['error'];
	$fileType=$_FILES['file']['type'];
	
	
		
		
	$fileExt=explode('.', $fileName);
	$fileActualExt=strtolower(end($fileExt));
	
	$allowed=array('jpg','jpeg','png');
	
	if(in_array($fileActualExt,$allowed)){
		if($fileError===0){
			if($fileSize<1000000){
				$fileNameNew=uniqid('', true).".".$fileActualExt;
				$fileDestination='images/oryginal/'.$fileNameNew;
				move_uploaded_file($fileTmpName, $fileDestination);
				header('Location:contact.php');
				
				
			$photo=[
		'author'=>$Author,
		'title'=>$Title,
		'name'=>$fileNameNew
			];
		$db->photos->insertOne($photo);
		
		
				include('miniiwater.php');
			}else {
				echo "Twój plik jest za duży <a href='contact.php'>wróć do galerii</a>";
            }
		}else{
			echo "Podczas wysyłania pliku wystąpił błąd <a href='contact.php'>wróć do galerii</a>";
		}
	} else{
	echo "Przesłany plik ma złe rozszerzenie <a href='contact.php'>wróć do galerii</a>";
	}
}


?>


