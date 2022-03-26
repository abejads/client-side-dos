<?php

function file_write($time, $visit_count, $blocked, $reason) {

	$myfile = fopen(sys_get_temp_dir() ."/ip-".$_SERVER['REMOTE_ADDR'], "w");
	$txt = time() . "|" . $visit_count . "|" . $blocked . "|" . $reason;
	fwrite($myfile, $txt);
	fclose($myfile);

}

function read_file() {

	$myfile = fopen(sys_get_temp_dir() . "/ip-".$_SERVER['REMOTE_ADDR'], "r");
	$isi_file = fgets($myfile);
	$split = explode("|", $isi_file);
	fclose($myfile);
	return $split;
}

?>