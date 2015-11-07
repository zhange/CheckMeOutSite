<?php
 
	try{
        $serverName = "tcp:yc4lfe5q04.database.windows.net,1433";
        $connectionOptions = array("Database"=>"checkmeout_db",
            "Uid"=>"checkmeout_admin@yc4lfe5q04", "PWD"=>"YHack2015","Encrypt"="yes";);
        $conn = sqlsrv_connect($serverName, $connectionOptions);
        if($conn == false)
            die(FormatErrors(sqlsrv_errors()));
    }
    catch(Exception $e){
        echo("Error!");
    }
 
// This SQL statement selects ALL from the table 'Locations'
$sql = "SELECT * FROM [checkmeout].[Inventory]";
 
// Check if there are results
if ($result = sqlsrv_query($conn, $tsql))
{
	// If so, then create a results array and a temporary one
	// to hold the data
	$resultArray = array();
	$tempArray = array();
 
	// Loop through each row in the result set
	while($row = $result->fetch_object())
	{
		// Add each row into our results array
		$tempArray = $row;
	    array_push($resultArray, $tempArray);
	}
 
	// Finally, encode the array to JSON and output the results
	echo json_encode($resultArray);
}

?>