<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>No.1</title>
  </head>
  <body>
    <h1>ข้อ 1</h1>
    <form class="" action="" method="post">
      <table>

        <tr>
          <td><label for="">ตัวเลข</label> </td>
          <td><input type="number" name="number" value=""  required> </td>
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
          //echo $n;
          checknum($n);
        }

        function checknum($n){
          if ($n%3==0&&$n%5==0) {
            echo $n." Ping Pong";
          }
          else if ($n%3==0) {
            echo $n." Ping";
          }
          elseif ($n%5==0) {
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
