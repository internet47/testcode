
<?php 	

	// $link  = mysql_connect('localhost', 'root', 'fvn2012');
	// 		if (!$link) 
	// 		{
	// 			die('Could not connect: ' . mysql_error());
	// 		}
	// 		mysql_select_db('sample');


$servername = "localhost";
$username = "root";
$password = "fvn2012";
$dbname = "sample";
			// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


	$sql = "SELECT * FROM contact";
	$result = $conn->query($sql);
	$temp =array();

	if ($result->num_rows > 0) 
	{
				while($rows= $result->fetch_assoc())
				{
					array_push($temp,array('id'=>$rows['id'],'Name'=>$rows['name'],'Email'=>$rows['email'],'tinhtrang'=>$rows['status'],'created'=>$rows['created']));
				}
	}
	
	echo json_encode($temp);
	die();	

?>
  