<?php
session_start();
if(!$_SESSION['nome']) {
	header('Location: loga.php');
	exit();
}