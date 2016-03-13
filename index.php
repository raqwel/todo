<!DOCTYPE html>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
<script type="text/javascript" src="todo.js"></script>

<head>
  <title>Todo</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>

  <!-- データベースでTodoを管理する(予定) -->
  <!-- このページだけで作業全部サポートできるとか-->
  <!-- 作業用BGMの提供とかカレンダー提示とかブラウザとか見れたりとか-->
  <div id="content">
    <div id="Purpose">
      <?php
if(isset($_POST['purpose'])){
  $purpose = $_POST['purpose'];
  echo 'あなたの最終目標は';
  echo $purpose;
  echo 'です！';
  echo '<br>そのためにすることは<br>';
}else{
  echo '目標が設定されていません！<br>';
  echo '目標を入力してください';
}
?>
    </div>

    <!-- アニメーションのバー -->
    <div id="rect"></div>
    <div id="rect2"></div>

    <div id="Todo4">
      <?php
if(isset($_POST['Todo4'])){
  $Todo4 = $_POST['Todo4'];
  echo $Todo4;
  echo '<br>';
}
?>
    </div>

    <div id="Todo3">
      <?php
if(isset($_POST['Todo3'])){
  $Todo3 = $_POST['Todo3'];
  echo $Todo3;
  echo '<br>';
}
?>
    </div>

    <div id="Todo2">
      <?php
if(isset($_POST['Todo2'])){
  $Todo2 = $_POST['Todo2'];
  echo $Todo2;
  echo '<br>';
}
?>
    </div>

    <div id="Todo1">
      <?php
if(isset($_POST['Todo1'])){
  $Todo1 = $_POST['Todo1'];
  echo $Todo1;
  echo '<br>';
}?>
    </div>

    <div id="Start">
      <?php
  if((!isset($_POST['Todo1']) && !isset($_POST['Todo2']) && !isset($_POST['Todo3']) && !isset($_POST['Todo4']))) {
  echo '小目標が設定されていません！<br>';
  echo '小目標を入力してください<br>';
}else{
  echo 'Start!';
}
?>
    </div>

  </div>


  <div id="input">
    <a href="input.html">入力フォームへ</a>
  </div>
  <footer></footer>
</body>
