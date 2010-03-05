<?php
function build() {
	//File Lists
	$out .= "<pre>" . `mv -f PRCO303/index.html ./` . "</pre>";
	$out .= "<pre>" . `mv -f PRCO303/mapserver/ ./` . "</pre>";
	$out .= "<pre>" . `mv -f PRCO303/scripts/ ./` . "</pre>";
	return $out;
}
?>
