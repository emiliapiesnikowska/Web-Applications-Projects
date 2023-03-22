<?php

require_once 'mongodb.php';
if(!isset($_POST['checked'])) {
		exit();
		}
	$checked = $_POST['checked'];
	
	$waterpath = 'images/znakwodny';
	$minipath = 'images/miniatury/';
	$files = scandir($minipath);
	$numoffiles = count($files)-2;
	$if = 0;
	if(count($checked) > 0)
	{
	?><form action="wybrane.php" method="post"><?php
	 for($i=0;$i<$numoffiles;$i++)
	 {
				if(isset($checked[$i])) 
				{
					echo ' <div id="zdjecie">';
					?><a href="<?php echo $waterpath . $checked[$i]; ?>" target="_blank"><img src="<?php echo $minipath . $checked[$i]; ?>"/></a>
					<?php
					$db = get_db();
					$query = [
						'name' => $checked[$i]
					];
					$photo = $db->photos->findOne($query);
					?>
					<p><?php
					echo "Title: " . $photo['title'];?></br><?php
					echo "Author: " . $photo['author'];?></br></p>
					<input type="checkbox" name="checked[<?php echo $if ?>]" value="<?php echo $photo['name']?>" checked>Zaznacz zdjęcie<br>
					<?php
					$if = $if + 1;	
					echo '</div>';
				}
	  }
	  ?><input type="submit" value="Usuń odznaczone zdjęcia z wyróżnionych" name="wybrane"/>
	 
	 </form><?php
	}

?>