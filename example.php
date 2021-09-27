<?Php
////////////////////////////////////////////
// Collecting data from query string
$collage_role_no=$_GET['collage_role_no'];
// Checking data it is a number or not
if(!is_numeric($collage_role_no)){
echo "Data Error";
exit;
}
// MySQL connection string
require "config.php"; 

$count="SELECT * FROM certificates where collage_role_no=? limit 1";

if($stmt = $connection->prepare($count)){
  $stmt->bind_param('i',$collage_role_no);
  $stmt->execute();

 $result = $stmt->get_result();
 $row=$result->fetch_object();
 echo "<table>";
echo "<tr ><td><b>Name</b></td><td>$row->name</td></tr>
<tr><td><b>Class</b></td><td>$row->class</td></tr>
<tr ><td><b>Mark</b></td><td>$row->mark</td></tr>
<tr><td><b>Address</b></td><td>$row->address</td></tr>
<tr ><td><b>Image</b></td><td>$row->img</td></tr>
";
echo "</table>";
}else{
echo $connection->error;
}
?>
