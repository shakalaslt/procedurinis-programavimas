<?php
function get_pallets ($plotas,$a,$b,$palete) {
return ceil($plotas/($a*$b)/$palete);


}

echo get_pallets(5000,0.3,0.2,500);
