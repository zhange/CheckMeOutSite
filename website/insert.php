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
            echo "HELLO";
            die(FormatErrors(sqlsrv_errors()));
        }
        else{
            echo "HELLO WORLD";
        }

        $lockid = $_POST['lockID']
        $itemid = $_POST['itemID']
        $tsql = "INSERT INTO" checkmeout_db.Inventory "(Lock_ID, Item_ID) VALUES ('100','200')";
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