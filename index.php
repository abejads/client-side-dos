<?php

// error_reporting(0);
include('func.php');
include('ratelimit.php');
include('waf.php');

$isi = read_file();

if($isi[2] == "false") {
	
	echo "Selamat datang " . $_GET['name'] . "!";

?>
<form>
Masukkan nama:
<input name="name">
<button type="submit">Submit</button>
</form>


<?php 

} else if($isi[2] == "true") {
	
?>

<center>
	<h1>Access Denied</h1>
	<p>Reason: <?php echo $isi[3]; ?>
</center>

<?php

}

?>
