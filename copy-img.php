<?php 


for($i=1;$i<=604;$i++){
	ini_set('max_execution_time', 3600);

	$content = file_get_contents("http://cdn.ksu.edu.sa/quran/ayat/safahat1/$i.png");
	//Store in the filesystem.
	$fp = fopen("imgs/$i.png", "w");
	fwrite($fp, $content);
	fclose($fp);
}


?>