<?php
 $options = [
      'howManyImagesOnPage' => 3,
      'pagingShownNumbers' => 2,
      'directory' => 'uploads/miniature',
    ];
    
	$page = $_REQUEST['page'];
    $offset = ($page - 1) * $options['howManyImagesOnPage'];
    $filelist = scandir($options['directory'], 1);
include('mongodb.php');

include('miniiwater.php');
$db=get_db();

$miniaturkipath='images/miniatury/';
$waterpath='images/znakwodny/';
$num_files = glob($miniaturkipath . "*.{jpg,png}", GLOB_BRACE);
$folder = opendir($miniaturkipath);
$lp=0;

    $selectedFiles = array_slice($filelist, $offset, $options['howManyImagesOnPage']);
	
	$directory = getcwd().'/uploads/miniatury/';
	$filecount = 0;
	$files = glob($directory.'*');
	if($files)
	{
		$filecount = count($files);
	}
	$howManyPages = ceil(($filecount ) / $options['howManyImagesOnPage']);	


$files = glob("images/miniatury/*.*");

  if($num_files > 0)
	{

		?><form action="show_chosen_view.php" method="post"><?php
		while(false !== ($fileNameNew = readdir($folder))) 
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
						<input type="checkbox" name="if_chosen[<?php echo $lp ?>]" value="<?php echo $photo['file_name'] ?>">Zaznacz zdjęcie<br>
						<?php
						$lp=$lp+1;
					echo '</div>';
					}
									
					
				
		
		
		
		}
	?><input type="submit" value="Wyświetl wybrane zdjęcia w osobnej galerii" name="choose_photos"/>
		</form><?php
	}
	
	if ($page <= 1 ? 0 : 1)
	{
		echo '<a href="?page='.($page - 1).'">previous</a>';
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
		echo '<a href="?page='.($page + 1).'">next</a>';
	}
	


?>

