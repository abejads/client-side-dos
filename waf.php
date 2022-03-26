<?php

$blacklisted = ['script', 'OR', '<', '>', 'SLEEP', "'", '"'];

# WAF deteksi wordlist di atas
foreach($blacklisted as $list) {

	if(strpos($_GET['name'], $list) !== false) {
		file_write($isi[0], $isi[1], "true", "WAF Blocked");
	}

}

?>
