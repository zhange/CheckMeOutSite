<!DOCTYPE html>
<html>
  <body>
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

  </body>
</html>