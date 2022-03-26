<?php

if (!file_exists("/tmp/ip-".$_SERVER['REMOTE_ADDR'])) {

	file_write(time(), 1, "false", "None");

} else {
	
	$isi = read_file();

	file_write($isi[0], $isi[1] + 1, $isi[2], $isi[3]);

	if((int) $isi[0] + 120 < time() && $isi[2] == "false") {
		file_write(time(), 1, "false", "None");
	}
} 

$isi = read_file();

# RATELIMIT 30 REQUEST / 2 MENIT
if((int) $isi[1] >= 30) {

	file_write($isi[0], $isi[1], "true", "Rate Limit");

}

?>
