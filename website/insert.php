<?php
    function OpenConnection(){
        $serverName = "tcp:yc4lfe5q04.database.windows.net,1433";
        $userName = 'checkmeout_admin@yc4lfe5q04';
        $userPassword = 'YHack2015';
        $dbName = "checkmeout_db";
        $table = "Inventory";

        $connectionOptions = array("Database"=>$dbName,
            "Uid"=>$userName, "PWD"=>$userPassword);
        $conn = sqlsrv_connect($serverName, $connectionOptions);
        if($conn == false){
            die(FormatErrors(sqlsrv_errors()));
        }
        $lockid = $_POST["lockID"];
        $itemid = $_POST["itemID"];    

        $tsql = "INSERT INTO [checkmeout].[Inventory] VALUES ($lockid,$itemid);";
        //Insert query
        $insertReview = sqlsrv_query($conn, $tsql);
    }

    $lockid = $_POST["lockID"];
    $itemid = $_POST["itemID"];    

    OpenConnection();

?>