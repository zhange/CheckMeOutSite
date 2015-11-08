<!DOCTYPE html>
<html>
  <body>
  <?php
      $serverName = "tcp:yc4lfe5q04.database.windows.net,1433";
      $userName = 'checkmeout_admin@yc4lfe5q04';
      $userPassword = 'YHack2015';
      $dbName = "checkmeout_db";
      $table = "Inventory";

      $connectionOptions = array("Database"=>$dbName,
          "Uid"=>$userName, "PWD"=>$userPassword);
      $conn = sqlsrv_connect($serverName, $connectionOptions);
      if($conn == false){
          echo("OH NO");
          die(FormatErrors(sqlsrv_errors()));
      }
      $query = "SELECT * FROM checkmeout.Inventory";
      $result = mssql_query($query);
      echo $result;
      // This SQL statement selects ALL from the table 'Locations'
      /*while($record = mssql_fetch_array($result)){
        echo(count($record));
      }*/
      //Insert query
      //$tsql = sqlsrv_query($query);
      //print(count($stmt));
      //echo $stmt;
    ?>

    <form action="/website/insert.php" method="POST">
      <b>Enter a new lock/item Combo:</b>
      <br>Lock Number:<br>
      <input type="number" name="lockID">
      <br>Item Id:<br>
      <input type="number" name="itemID">
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
      <input type="text" name="itemLink">
      <br>
      <input type="submit" name="submitItem" value="Submit">
    </form>

    <form action="/website/delete_item.php" method="POST">
      <b>Enter a new lock/item Combo:</b>
      <br>Item Id:<br>
      <input type="number" name="itemID">
      <br>
      <input type="submit" name="delete" value="Submit">
      <br>
    </form>
  </body>
</html>