<?php
if ( $_SESSION['logado'] != true ) {
	header('location: ' . dirname( $_SERVER['PHP_SELF'] ) . '/index.php');
}