<?php
    //Create Database connection
        //open connection to mysql db
    $connection = mysqli_connect("host_url","user","pw","dbname") or die("Error " . mysqli_error($connection));
 
     //fetch table rows from mysql db
    $sql = "select * from isa_skateparks";
    $result = mysqli_query($connection, $sql) or die("Error in Selecting " . mysqli_error($connection));
	
	$result="";
 
$json = array();
$result = mysqli_query ($connection, $sql);
while($row = mysqli_fetch_array ($result))     
{
    $bus = array(
	'isa_skateparksid' => $row['isa_skateparksid'],
		'isa_name' => $row['isa_name'],
        'isa_description' => $row['isa_description'],
        'isa_address' => $row['isa_address'],
		'isa_phone' => $row['isa_phone'],
		'isa_email' => $row['isa_email'],
		'isa_latitude' => $row['isa_latitude'],
		'isa_longitude' => $row['isa_longitude'],
		'isa_rating' => $row['isa_rating'],
		'isa_image' => $row['isa_image'],
		'isa_comment' => $row['isa_comment'],
		'isa_website' => $row['isa_website']
    );
    array_push($json, $bus);
}

$jsonstring = json_encode($json);
echo $jsonstring;

    //close the db connection
    mysqli_close($connection);
?>
