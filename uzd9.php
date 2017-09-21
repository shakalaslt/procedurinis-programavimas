<<?php 




function format_number_e($t){

	$ta= explode ("", $t);
	return "8" . $ta[1] . "" . $ta[2]; 


}


$tel = "+370 688 77777";
echo format_number_e($tel);









function format_number($t){
	return str_replace ("+370", "8", $t);
}
$tel = "+370 688 77777";
echo format_number($tel);

/* explode funkcija padalint i kelis masyvu elementus