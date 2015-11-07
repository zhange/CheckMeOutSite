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
	print_r($result);
}

?>