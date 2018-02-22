<?php  


// Do not give access to any page, if config is not defined
if (!defined('__CONFIG__')) {
	echo 'You do not have access to this page.';
	header('Location: ../');
}

?>