<?php session_start(); ?>
<?php
unset($_SESSION['login']);
header('Location:/');
?>