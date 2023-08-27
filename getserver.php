<?php
  //page1.php에서 name과 age값이 넘어온다(get)
  echo '<h1>당신의 이름은 ';
  echo $_GET['name'];
  echo '이고, 당신의 연령은 ';
  echo $_GET['age'];
  echo '입니다!</h1>';
?>
