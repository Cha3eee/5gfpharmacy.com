<?php
$array = array();
if(isset($_POST['submit'])){
   $new_value = $_POST['new_value'];
   array_push($array, $new_value);
}
?>
<html>
<body style="text-align: center; border: 2px;">
   <form method="POST">
      <input type="text" name="new_value">
      <input type="submit" name="submit" value="Add to Array">
   </form>
   <?php
   if(!empty($array)){
      echo "<pre>";
      print_r($array);
      echo "</pre>";
   }
   ?>
   <b style="font-size: ;"></b>
</body>
</html>