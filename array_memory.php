<?php
echo basename(__FILE__).': ';

$array = array();
for($i = 0; $i < 100000; ++$i){
    $array[] = 0;
}

echo round(memory_get_peak_usage() / (1048510), 2)." MB";
