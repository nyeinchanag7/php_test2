<!DOCTYPE html>
<html>
<body>
<?php
   $x=4567;
   echo var_dump(is_int($x));

   echo "<br>";

   $x=45.67;
   echo var_dump(is_int($x));
?>
</body>
</html>