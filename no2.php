<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>No.2</title>
  </head>
  <body>
    <h1>ข้อ 2</h1>
    <form class="" action="" method="post">
      <table>

        <tr>
          <td><label for="">ตัวเลข</label> </td>
          <td><input type="number" name="number" value=""  required> </td>
        </tr>
        <tr>
          <td><label for="">ตัวหาร 1 แทน i</label> </td>
          <td><input type="number" name="division1" value=""  required> </td>
        </tr>
        <tr>
          <td><label for="">ตัวหาร 2 แทน j</label> </td>
          <td><input type="number" name="division2" value=""  required> </td>
        </tr>
    
      </table>
      <tr>
        <td colspan="2">
          <input type="submit" id="button" name="button" value="submit">
        </td>
      </tr>
      <?php
        if (isset($_POST['button'])) {
          $n=$_POST['number'];
          $i=$_POST['division1'];
          $j=$_POST['division2'];
          /*
          echo $n;
          echo $i;
          echo $j;
          */
          checknum($n,$i,$j);
        }

        function checknum($n,$i,$j){
          if ($n%$i==0&&$n%$j==0) {
            echo $n." Ping Pong";
          }
          else if ($n%$i==0) {
            echo $n." Ping";
          }
          elseif ($n%$j==0) {
            echo $n." Pong";
          }
          /*
          else{
            echo "fail";
          }
          */
        }
       ?>
       <br>
       <a href="index.html">กลับหน้าหลัก</a>
    </form>
  </body>
</html>
