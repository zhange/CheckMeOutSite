<?php
    
    function OpenConnection(){
        $serverName = "tcp:yc4lfe5q04.database.windows.net,1433";
        $userName = 'checkmeout_admin@yc4lfe5q04';
        $userPassword = 'YHack2015';
        $dbName = "checkmeout_db";
        $table = "Inventory";

        $connectionInfo = array("Database"=>$dbName, "UID"=>$userName, "PWD"=>$userPassword, "MultipleActiveResultSets"=>true);
        
        $conn = sqlsrv_connect($serverName, $connectionOptions);
        if($conn == false){
            echo "string";
            die(FormatErrors(sqlsrv_errors()));
        }

        $lockid = $_POST['lockID']
        $itemid = $_POST['itemid']
        $tsql = "INSERT Inventory (Lock_ID, Item_ID) VALUES ('$lockid', '$itemid');";
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