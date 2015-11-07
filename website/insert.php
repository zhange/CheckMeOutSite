<?php
    
    function OpenConnection(){
        
        echo "HELLO";
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

        $lockid = $_POST['lockID']
        $itemid = $_POST['itemID']
        $tsql = "INSERT INTO [checkmeout].[Inventory] VALUES ($lockid,$itemid);";
        //Insert query
        $insertReview = sqlsrv_query($conn, $tsql);
        print_r($result);
    }

    function InsertData($lockid, $itemid){
        // $conn = OpenConnection();
        // $tsql = "INSERT checkmeout_db.Inventory (Lock_ID, Item_ID) VALUES ("$lockid", "$itemid)";";);

        // $insertReview = sqlsrv_query($conn, $tsql);
        // if($insertReview == FALSE)
        //     die(FormatErrors( sqlsrv_errors()));
        // echo "Product Key inserted is :";   

        // sqlsrv_close($conn);
    
    }


    // $conn = OpenConnection();
    // InsertData($_POST['lockID'], $_POST['itemid']);
?>