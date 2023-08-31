<?php
   if($_POST['name'] != '녹칸다'){
     //내가 원하는 이름이 아니니까 돌려보내겠다!
      echo '<script>';
      echo "alert('내가 원하는 이름이 아니네요!');";
      echo 'history.back();';
      echo '</script>';
   }else{

      //화면에 출력!
  echo '<h1>당신의 이름은 ';
  echo $_POST['name'];
  echo '이고, 당신의 연령은 ';
  echo $_POST['age'];
  echo '입니다!</h1>';
   }
?>
