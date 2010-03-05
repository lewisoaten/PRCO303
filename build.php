<?php
function build() {
	//File Lists
	$out .= "<pre>" . `mv -f index.html ../` . "</pre>";
	$out .= "<pre>" . `mv -f deploy.php ../` . "</pre>";
	$out .= "<pre>" . `mv -fr mapserver/ ../` . "</pre>";
	$out .= "<pre>" . `mv -fr scripts/ ../` . "</pre>";
	return $out;
}
?>
