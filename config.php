<?Php
$host = "localhost"; // Change the database host if not on same server
$database = "sql_tutorial";// Change your database name
$username = "user";      // Your database user name 
$password = "";      // Your database password

//error_reporting(0);// With this no error reporting will be there
///// Do not Edit below //////
$connection=mysqli_connect($host,$username,$password,$database);
if (!$connection) {
    echo "Error: Unable to connect to MySQL.<br>";
    echo "<br>Debugging errno: " . mysqli_connect_errno();
    echo "<br>Debugging error: " . mysqli_connect_error();
    exit;
}
?>
