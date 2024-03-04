<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>No.5</title>
  </head>
  <body>
    <h1>ข้อ 5</h1>
    <form class="" action="" method="post">
      <table>

        <tr>
          <td><label for="">คำสั่ง</label> </td>
          <td><input type="text" name="i" value=""  required> </td>
        </tr>
       
      </table>
      <tr>
        <td colspan="2">
          <input type="submit" id="button" name="button" value="submit">
        </td>
      </tr>
      <?php
         $url = array();
         //$url = array("www.geerang.com", "www.youtube.com","www.google.com");
         $input = array();
          //echo "<br>";
          //echo "url "; print_r($url);
          //echo "<br>";
          //echo "input "; print_r($input);
        if (isset($_POST['button'])) {
          $i=$_POST['i'];
       
          if ($i=="prev"){
            if(empty($url)){
              echo "<br>No website to previous";
            }else{
              echo prev($url);
            }
          }elseif ($i=="next") {
            if(empty($url)){
              echo "<br>No website to go";
            }else{
              echo next($url);
            }
          }elseif ($i=="current"){
            echo "<br>Now you on ".current($url);
          }elseif ($i=="all"){
            echo "[";
            foreach( $url as $u ) {
              echo "<a href=https://$u>"."{$u}"."</a>,";
            }
            echo "]";
          }else{
            $input = explode(" ", $i);
            $r=0;
            foreach ($input as $key => $in){
              //echo $in."<br/>";
              if($in!="input"){
                $url[] =$in;
              }
            }
          }
          echo "url "; print_r($url);
         //echo "input "; print_r($input);
         //print_r($url);
        }
       ?>
       <br>
       <a href="index.html">กลับหน้าหลัก</a>
    </form>
  </body>
</html>
