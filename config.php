<?php

try {
	$pdo = new PDO('mysql:dbname=examphp; host=localhost', 'root', 'root');
} catch (PDOException $e) {
	die($e->getMessage());
}