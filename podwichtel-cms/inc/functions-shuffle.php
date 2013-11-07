<?php
/**
*
* Podwichteln - Array Funktion
* @inc// function array test
* @author Michael Kaufmann (M.C.)
* @param array $array
* @return array
*
*/

function array_shuffle($array)
{
  $ary_keys = array_keys($array);
  $ary_values = array_values($array);
  shuffle($ary_values);
  foreach($ary_keys as $key => $value) {
    if (is_array($ary_values[$key]) AND $ary_values[$key] != NULL) {
      $ary_values[$key] = array_shuffle($ary_values[$key]);
    }
    $new[$value] = $ary_values[$key];
  }
  return $new;
}

/*
<h2>Podwichteln Test</h2>
<?php
$test = $array = Array( 'a', 'b' );              
$images = Array( 'a', 'b' );

$array = array_shuffle($array);

echo '<pre>';
#print_r($test);
#print_r($array);
echo '</pre>';


for($i=0; $i < count($test); $i++){
   
   	for($i=0; $i < count($array); $i++){
   		echo '<span style="color:#f00;">'.$test[$i]."</span> => ";	
   		echo '<span style="color:#0a0;">'.$array[$i]."</span><br>";
	}
}

echo '<h3>Outliner Veröffentlichung</h3>
<textarea style="width:100%; height: 100%;">';
for($i=0; $i < count($test); $i++){
   	
   	
   	
   	for($i=0; $i < count($array); $i++){
   	
   	
   	
   		for($i=0; $i < count($images); $i++){
   				
   				
   				echo '<img src="'.$images[$i]. '"> '.$test[$i]." => " .$array[$i]."<br>\n";
	
	
		}
	}
}
echo '</textarea>';
*/
?>