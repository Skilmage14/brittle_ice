<?

$host = '127.0.0.1';
$root = 'root';
$pass = '';
$db_name = 'Overturn';

$connection = mysqli_connect($host, $root, $pass, $db_name);
		if($connection == false)
		{	
			echo "No Connection to the Database";
			echo mysqli_connect_error();
		}


?>