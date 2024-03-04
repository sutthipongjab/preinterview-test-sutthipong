<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>No.4</title>
  </head>
  <body>
    <h1>ข้อ 4</h1>
    <form class="" action="" method="post">
      <table>

        <tr>
          <td><label for="">Date x</label> </td>
          <td><input type="date" name="x" value=""  required> </td>
        </tr>
        <tr>
          <td><label for="">Date y</label> </td>
          <td><input type="date" name="y" value=""  required> </td>
        </tr>
        <tr>
          <td><label for="">Date m</label> </td>
          <td><input type="date" name="m" value=""  required> </td>
        </tr>
       
      </table>
      <tr>
        <td colspan="2">
          <input type="submit" id="button" name="button" value="submit">
        </td>
      </tr>
      <?php
        if (isset($_POST['button'])) {
          $x=$_POST['x'];
          $y=$_POST['y'];
          $m=$_POST['m'];
          $value_x = strtotime($x);
          $value_y = strtotime($y);
          $value_m = strtotime($m);
          check($value_x, $value_y, $value_m);
          
          echo "<br>".$value_x."<br>".$value_y."<br>".$value_m."<br>";
          echo "<br>".$x."<br>".$y."<br>".$m."<br>";
        }

        function check($value_x, $value_y, $value_m){
          if($value_m>$value_y||$value_m<$value_x){
            echo "false, ";
            $cal = $value_m-$value_x;
            $result = $cal/ 86400;
            echo $result." Days";
          }else{
            echo "true, ";
            $cal = $value_m-$value_x;
            $result = $cal/ 86400;
            echo $result." Days";
          }
        }
       ?>
       <br>
       <a href="index.html">กลับหน้าหลัก</a>
    </form>
  </body>
</html>
