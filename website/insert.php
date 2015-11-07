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
            echo "FUCK";
            die(FormatErrors(sqlsrv_errors()));
        }
        else{
            echo "HELLO WORLD!!!!";
        }

        $lockid = 100;
        $itemid = 300;
        $tsql = "INSERT INTO [checkmeout].[Inventory] VALUES ($lockid,$itemid);";
        //Insert query
        $insertReview = sqlsrv_query($conn, $tsql);
        print_r($result);
    }
?>