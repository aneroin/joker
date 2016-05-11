<?php
$pid = 913593;
$output = posix_kill($pid, 9); 
echo $output;
?>