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


      // This SQL statement selects ALL from the table 'Locations'
      $tsql = mssql_query("SELECT * FROM [Inventory]");
      //Insert query

      if (!mssql_num_rows($tsql)) {
          echo 'No records found';
      } else {
          for ($i = 0; $i < mssql_num_rows($tsql); ++$i) {
              echo mssql_result($tsql, $i, "Lock_ID");
          }
      }
  ?>