<!DOCTYPE html>
<head>
  <title>確認画面</title>
    <link rel = "stylesheet" href = "style.css">
</head>
<body>
  <?php

$purpose = $_POST['purpose'];
$Todo1 = $_POST['Todo1'];
$Todo2 = $_POST['Todo2'];
$Todo3 = $_POST['Todo3'];
$Todo4 = $_POST['Todo4'];

$flag = 0;

if ($purpose == "") {
  echo "最終目標が入力されていません <br>";
  $flag = 0;
}else{
  $flag = 1;
}

if($Todo1 == "" || $Todo2 == "" || $Todo3 == "" || $Todo4 == ""){
  echo "Todoが入力されていません <br>";
}

?>
<?php
if($flag == 1){
   echo '内容の確認<br>
        <form method="post" action="index.php">
        Todo1:<?php echo $Todo1; ?><br>
        Todo2:<?php echo $Todo2; ?><br>
        Todo3:<?php echo $Todo3; ?><br>
        Todo4:<?php echo $Todo4; ?><br>

        <!-- hidden -->
        <input type="hidden" name="purpose" value="<?php echo $purpose ?>">
        <input type="hidden" name="Todo1" value="<?php echo $Todo1 ?>">
        <input type="hidden" name="Todo2" value="<?php echo $Todo2 ?>">
        <input type="hidden" name="Todo3" value="<?php echo $Todo3 ?>">
        <input type="hidden" name="Todo4" value="<?php echo $Todo4 ?>">';

   echo '<input type="submit" value="OK">';
}
?>
<a href="javascript:history.back();">戻る</a>
</form>
</body>
