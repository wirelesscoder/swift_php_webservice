<?php
//
// Created by rigerd
// Copyright © 2016 wirelesscoder. All rights reserved.
//
// connect to mysql database, read table, store result in array,
// encode the array to JSON and output the results 
//
// ---------------------------------------------------------------------------------------------------------------------------------------
//
//		<?php
//		  // db constant
//		  define('DB_USER', 'DBUser');
//		  define('DB_PASSWORD','DBPassword');
//		  define('DB_NAME','DBName');
//		  define('DB_HOST', 'DBHost');
//
//		  $tableName = 'DBTable';
//		  
//		  //Connection to MySQL-database
//		  $dbcon = @mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) OR die('Could not connect to MySQL ' . mysqli_connect_error());
//      <?   
//
// ---------------------------------------------------------------------------------------------------------------------------------------

	// give dbconnect $dbcon, define table name in $tableName 
	include 'connect.php'; 
	
	// array to hold the data
	$resultArray = array();
	$tempArray = array();
	  
	// select ALL from table 
	$sql = "SELECT * FROM " . $tableName;
	 
	// check for results
	if ($result = mysqli_query($dbcon, $sql))
	{
		// Loop through each row in the result set
		while($row = $result->fetch_object())
		{
			//add each row into our results array
			$tempArray = $row;
		    array_push($resultArray, $tempArray);
		}
	 
		// encode the array to JSON and output the results
		echo json_encode($resultArray);
	}
	 
	// Close connections
	mysqli_close($con);
?>
