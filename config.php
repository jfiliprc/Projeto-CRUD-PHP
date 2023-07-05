<?php
define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('BASE', 'cadastro');

try{
	$conn = new PDO('mysql:host='. HOST. ';dbname=' . BASE, USER, PASS);	
} catch ( PDOException $e ) {
	echo "Erro: " . $e->getMessage() . " <br />";
}
