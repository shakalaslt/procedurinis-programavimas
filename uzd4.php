<?php
$a = [10, 20 ,45 ,7 ,8 ,9];

$sk=8;


function rask($masyvas, $skaicius) {
              if (in_array($skaicius,$masyvas )){

              	echo "radau";
              } else {
              	echo "neradau";
              }

}
rask ($a, $sk);






