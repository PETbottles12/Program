<html>
<head>
  <title>TEST</title>
  <body>

    <?php

$input_data = $_GET['text1'];
print('入力した値は'.$input_data.'<br>');
print('帰ってきた値の形は'.gettype($input_data).'<br>');

$input_data2 = $_GET['text2'];
print('入力したデータ'.$input_data2.'<br>');
print('帰ってきた値の形は'.gettype($input_data2));
     ?>
   </body>
</html>
