<!DOCTYPE html>
<html>
  <body>
    <?php
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
    ?>
    <!--<form action="/website/insert.php" method="POST">
      <b>Enter a new lock/item Combo:</b>
      <br>Lock Number:<br>
      <input type="text" name="lockID">
      <br>Item Id:<br>
      <input type="text" name="itemID">
      <br>
      <input type="submit" name="submitCombo" value="Submit">
      <br>
    </form>

    <form action="/website/insert_item.php" method="POST">
      <b>Enter a new item:</b>
      <br>Item Id:<br>
      <input type="number" name="itemID">
      <br>Store Id:<br>
      <input type="number" name="storeID">
      <br>
      Item Name:<br>
      <input type="text" name="itemName">
      <br>
      Item Description:<br>
      <input type="text" name="itemDescription">
      <br>
      Item Price:<br>
      <input type="number" name="itemPrice">
      <br>
      Picture Link:<br>
      <input type="number" name="itemLink">
      <br>
      <input type="submit" name="submitItem" value="Submit">
    </form>-->

  </body>
</html>