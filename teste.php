<?php 
echo ($_SERVER['HTTPS'] && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http') .'://'. $_SERVER['SERVER_NAME'] . dirname($_SERVER['REQUEST_URI']);
?>