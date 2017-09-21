<<?php 
$pnuorodos = [['name'=> 'Delfi', 'url' => 'http://delfi.lt'],['name'=> '15min', 'url' => 'http://15min.lt']];



function printlinks($nuorodos){

foreach ($nuorodos as $nuoroda) {
	echo  '<a href="' .$nuoroda['url'] . '">' . $nuoroda['name'] . '</a>';
}
}



printlinks($pnuorodos);

































 ?>