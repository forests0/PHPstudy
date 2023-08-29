<?php
   echo $_POST['myid'];
   echo '<BR>';
   echo $_POST['mypw'];
   echo '<BR>';
   echo $_POST['gender'];
   echo '<BR>';
   if(isset($_POST['hobby1'])){
   echo $_POST['hobby1'];
   }
   else{
   echo 'no';
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
