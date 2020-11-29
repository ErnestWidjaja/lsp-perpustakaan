<?php 

/**
 * 
 */
class Koneksi 
{
	
	function koneksi()
	{
		$host = "localhost";
		$username = "root";
		$password = "";
		$db = "lsp";
		$conn = mysqli_connect($host,$username,$password,$db);
		return $conn;
	}
}

 ?>