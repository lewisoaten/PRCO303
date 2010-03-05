<?php
function build() {
	//Old File Lists
	$out .= "<pre>" . `rm -Rf index.html` . "</pre>";
	$out .= "<pre>" . `rm -Rf scripts` . "</pre>";
	$out .= "<pre>" . `rm -Rf mapserver` . "</pre>";

	//New File Lists
	$out .= "<pre>" . `mv -f PRCO303/index.html ./` . "</pre>";
	$out .= "<pre>" . `mv -f PRCO303/scripts ./` . "</pre>";

	$out .= "<pre>" . `mv -f PRCO303/mapserver ./` . "</pre>";
	$out .= "<pre>" . `chmod -R 777 mapserver/tmp` . "</pre>";
	return $out;
}
?>
