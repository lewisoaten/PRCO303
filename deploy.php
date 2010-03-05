<?php
//Get latest version
`cd /var/www`;
$output .= "<pre>" . `git clone git://github.com/caecus/PRCO303.git` . "</pre>";

//File Lists
$output .= "<pre>" . `mv -f PRCO303/index.html ./` . "</pre>";
$output .= "<pre>" . `mv -f PRCO303/deploy.php ./` . "</pre>";

//Clean Up
$output .= "<pre>" . `rm -Rf PRCO303` . "</pre>";

$fh = fopen("/var/www/build/build_".date(DATE_ATOM).".html", 'w') or die("can't open file");
fwrite($fh, $output);
fclose($fh);
?>
