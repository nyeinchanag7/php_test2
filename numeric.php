<!DOCTYPE html>
<body>
<html>

<?php
  $x=4567;
  var_dump(is_numeric($x));

  echo "<br>";

  $x="4567";
  var_dump(is_numeric($x));

  echo "<br>";

  $x="45.67"+50;
  var_dump(is_numeric($x));

  echo "<br>";

  $x="Hello";
  var_dump(is_numeric($x));
  ?>
 </body>
 </html>