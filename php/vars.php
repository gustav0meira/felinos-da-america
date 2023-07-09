<?php 

	$appName = 'Felinos da America';
	$pageName = str_replace('-', ' ', ucwords(basename(dirname($_SERVER['PHP_SELF']))));

?>

<title><?php echo $pageName . ' | ' . $appName ?></title>