<?php
   if($_POST['myid'] == ""){
       echo '<script>';
      echo "alert('아이디를 입력해주세요!!');";
      echo 'history.back();';
      echo '</script>';
   }
   # 이부분에서 두개를 나눠서 진행해도 좋을듯?
   if($_POST['mypw1'] == "" || $_POST['mypw2'] == ""){
       echo '<script>';
      echo "alert('비밀번호를 입력해주세요!!');";
      echo 'history.back();';
      echo '</script>';
   }
   //첫번째 규칙 입력한 아이디의 길이는 6자~12자 사이다!
   if(strlen($_POST['myid']) >12 || strlen($_POST['myid']) < 6){
       echo '<script>';
      echo "alert('아이디는 6~12자여야합니다!');";
      echo 'history.back();';
      echo '</script>';
   }
  
   if($_POST['mypw1'] != $_POST['mypw2']){
      echo '<script>';
      echo "alert('비밀번호를 잘못 입력하셨습니다!');";
      echo 'history.back();';
      echo '</script>';
   }

   echo $_POST['myid'];
   echo '<BR>';
   echo $_POST['mypw1'];
   echo '<BR>';
   echo $_POST['mypw2'];
   echo '<BR>';
   echo $_POST['gender'];
   echo '<BR>';
   if(isset($_POST['hobby1'])){
   echo $_POST['hobby1'];
   }
   echo '<BR>';
   if(isset($_POST['hobby2'])){
   echo $_POST['hobby2'];
   }
   echo '<BR>';
   if(isset($_POST['hobby3'])){
   echo $_POST['hobby3'];
   }
   echo '<BR>';
   if(isset($_POST['hobby4'])){
   echo $_POST['hobby4'];
   }
   echo '<BR>';
   if(isset($_POST['hobby5'])){
   echo $_POST['hobby5'];
   }
   echo '<BR>';
?>

