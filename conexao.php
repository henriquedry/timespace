<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "timespace";

	// cria a conexão

	$conn = new mysqli($servername, $username, $password, $dbname);

	// checa a conexão

	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}





