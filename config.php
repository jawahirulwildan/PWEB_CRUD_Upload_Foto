<?php
$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'pendaftaran_siswa_foto';
$port = 3307;

// Open a new connection to the MySQL server
$pdo = new PDO('mysql:host='.$hostname.';dbname='.$database.';port='.$port, $username, $password);