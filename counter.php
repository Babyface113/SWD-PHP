<?php

$fh = fopen('counter.txt', 'a+');
fwrite($fh, 0);
echo filesize('counter.txt');

// rewind($fh);

// $output = fread($fh, $size);
// echo $output;

?>