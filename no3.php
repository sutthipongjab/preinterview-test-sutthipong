<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>No.3</title>
  </head>
  <body>
    <h1>ข้อ 3</h1>
    <form class="" action="" method="post">
      <table>

        <tr>
          <td><label for="">ข้อมูล</label> </td>
          <td><input type="text" name="text" value=""  required> </td>
        </tr>
        <tr>
          <td><label for="">อักษรที่ต้องตรวจสอบ</label> </td>
          <td><input type="text" name="compair" value="" required> </td>
        </tr>
       
      </table>
      <tr>
        <td colspan="2">
          <input type="submit" id="button" name="button" value="submit">
        </td>
      </tr>
      <?php
        if (isset($_POST['button'])) {
          $a=$_POST['text'];
          //echo $n;
          $x=$_POST['compair'];
          $arrays = explode(',',$a);
          
          /*
            echo "<br>";
            echo $a."<br>" .$x."<br>";
            print_r($arrays);
            echo "<br>";
            echo implode(",",array_keys($arrays));
            var_dump($array);
            echo "<br>";
          */
        }
        $n=0;
        $f=0;
        $result = array();
        $index = array();
        foreach($arrays as $key => $array){
          $n++;

          if(strpos($array, $x) !== false){
              //echo "Word Found!";
              $result[] = $array;
              $index[] = $key;
          } else{
              $f++;
          }
          //echo $n." ".$key." ".$array;
        }
        /*
          print_r($result);
          print_r($index);
        */
        //output
        if($f==count($arrays)){
          echo "<br>No results found";
        }else{ 
          echo "<br>[".implode(",",$result)."]<br>";
          echo implode(",",$index);
        }

       ?>
       <br>
       <a href="index.html">กลับหน้าหลัก</a>
    </form>
  </body>
</html>
