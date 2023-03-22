<?php
include('mongodb.php');

include('miniiwater.php');
$db=get_db();

$miniaturkipath='images/miniatury/';
$waterpath='images/znakwodny/';
$photos= glob($miniaturkipath . "*.{jpg,png}", GLOB_BRACE);
$folder = opendir($miniaturkipath);
$if=0;





 $options = [
      'zdjecianastronie' => 8,
      'numerki' => 2,
	  'directory' => "images/miniatury/",
    ];

$page  = isset($_GET['page']) ? (int) $_GET['page'] : 1;
$offset = ($page - 1) * $options['zdjecianastronie'];
$filelist = scandir($options['directory'], 1);



$selectedFiles = array_slice($filelist, $offset, $options['zdjecianastronie']);

	$filecount = 0;
	foreach($photos as $photo)
	{
		$filecount++;
	}
	$howManyPages = ceil($filecount / $options['zdjecianastronie']);



$files = glob("images/miniatury/*.*");

$fileNameNew = readdir($folder)



		
		?><form action="wybrane.php" method="post"><?php
	if($filecount > 0)
	{

		?><form action="wybrane.php" method="post"><?php
		
		foreach ($selectedFiles as $fileNameNew) 
	{
					$query=[
					'name'=>$fileNameNew
					];
					$photo = $db->photos->findOne($query);
					$filepath=$miniaturkipath.$fileNameNew;
					$fullfilepath=$waterpath.$fileNameNew;
					$extension = strtolower(pathinfo($filepath ,PATHINFO_EXTENSION));
					
					if($extension=='jpg' || $extension =='png') {
					
					echo ' <div id="zdjecie">';
					echo '<a href="'.$fullfilepath.'" rel="prettyphoto[gallery1]">';
					echo ' <div id="miejsce">';
					echo '<img src="'.$filepath.'" alt="Gallery #2" />    ';
					echo '</div>';
					echo "</a>";
					echo 'Autor zdjęcia: ';
					echo $photo['author'];
					echo '<br/>Tytuł zdjęcia: ';
					echo $photo['title'];
					?></br>
						<input type="checkbox" name="checked[<?php echo $if ?>]" value="<?php echo $photo['name'] ?>">Zaznacz zdjęcie<br>
						<?php
						$if=$if+1;
				
					echo '</div>';
					
					}
									
					
	}		
	
		
		
	}
	echo '<div>';
	?><input type="submit" value="Galeria wybranych zdjęć" name="wybrane"/>
		</form><?php
	
if ($page <= 1 ? 0 : 1)
	{
		echo '<a href="?page='.($page - 1).'">poprzednia</a>';
		echo ' ';
	}

	for ($i = 1; $i <= $howManyPages; $i++)
	{
		echo '<a href="?page='.$i.'">'.$i.'</a>';
		echo ' ';
	}
	
	if ($page >= $howManyPages ? 0 : 1)
	{
		echo ' ';
		echo '<a href="?page='.($page + 1).'">kolejna</a>';
	}
echo '</div>';
?>