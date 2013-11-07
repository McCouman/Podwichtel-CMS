<?php
/**
* Podwichteln 
*
* @ord includes
* @inc// function array
* @author Michael Kaufmann (M.C.)
*/

include("../inc/functions-shuffle.php");
?>

<h2>Podwichteln Test</h2>
<?php

//Die Teilnehmer
$podcast = $array = Array(

/*'2 - '.*/ 'FragezeichenPod',
/*'3 - '.*/ 'Gedankenfieber',
/*'4 - '.*/ 'Kauderwelsch Avantgarde',
/*'5 - '.*/ 'Raidenger',
/*'6 - '.*/ 'Der Bobsonbob Podcast',
/*'7 - '.*/ 'Ebbes Noch',
/*'8 - '.*/ 'Hysterika - der Podcast',
/*'9 - '.*/ 'Der will doch nur spielen!',
/*'10 - '.*/ 'PegasoPodcast',
/*'11 - '.*/ 'Lichtspielhaus - Der wirklich wahre Kino-Podcast',
/*'12 - '.*/ 'Die Esel und Teddy Show',
                );
                
//Ausgabe Übersicht mit Bildern                
$images = Array(               
 '2-fragezeichenpod.jpg',
 '3-gedankenfieber.jpg',
 '4-kauderwelschavantgarde.jpg',
 '5-raidenger.png',
 '6-bobsonbob.jpg',
 '7-ebbesnoch.png',
 '8-hysterika.jpg',
 '9-derwilldochnurspielen.jpg',
 '10-pegasopodcast.jpg',
 '11-lichtspielhaus.jpg',
 '12-dieeselundteddyshow.png',
);

$array = array_shuffle($array);

echo '<pre>';
print_r($podcast);
print_r($array);
echo '</pre>';


for($i=0; $i < count($podcast); $i++){
   
   	for($i=0; $i < count($array); $i++){
   		echo '<span style="color:#f00;">'.$podcast[$i]."</span> => ";	
   		echo '<span style="color:#0a0;">'.$array[$i]."</span><br>";
	}
}


echo '<h3>Outliner Veröffentlichung</h3>
<textarea style="width:100%; height: 100%;">';
for($i=0; $i < count($podcast); $i++){
   	
   	
   	
   	for($i=0; $i < count($array); $i++){
   	
   	
   	
   		for($i=0; $i < count($images); $i++){
   				
   				
   				echo '<img src="'.$images[$i]. '"> '.$podcast[$i]." => " .$array[$i]."<br>\n";
	
	
		}
	}
}
echo '</textarea>';

?>