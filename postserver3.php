<?php
   if($_POST['sub1'] > 100 || $_POST['sub1'] < 0){
      echo '<script>';
      echo "alert('점수입력이 잘못 되었습니다!');";
      echo 'history.back();';
      echo '</script>';
   }

   if($_POST['sub1'] > 90) $result1 = 'A';
   else if($_POST['sub1'] > 80) $result1 = 'B';
   else if($_POST['sub1'] > 70) $result1 = 'C';
   else if($_POST['sub1'] > 60) $result1 = 'D';
   else $result1 = 'F';

   if($_POST['sub2'] > 90) $result2 = 'A';
   else if($_POST['sub2'] > 80) $result2 = 'B';
   else if($_POST['sub2'] > 70) $result2 = 'C';
   else if($_POST['sub2'] > 60) $result2 = 'D';
   else $result2 = 'F';

   if($_POST['sub3'] > 90) $result3 = 'A';
   else if($_POST['sub3'] > 80) $result3 = 'B';
   else if($_POST['sub3'] > 70) $result3 = 'C';
   else if($_POST['sub3'] > 60) $result3 = 'D';
   else $result3 = 'F';

   if($_POST['sub4'] > 90) $result4 = 'A';
   else if($_POST['sub4'] > 80) $result4 = 'B';
   else if($_POST['sub4'] > 70) $result4 = 'C';
   else if($_POST['sub4'] > 60) $result4 = 'D';
   else $result4 = 'F';

   if($_POST['sub5'] > 90) $result5 = 'A';
   else if($_POST['sub5'] > 80) $result5 = 'B';
   else if($_POST['sub5'] > 70) $result5 = 'C';
   else if($_POST['sub5'] > 60) $result5 = 'D';
   else $result5 = 'F';         
?>

<table border=1 width=500>
  <tr><th colspan=2>학점 결과!</th></tr>
  <tr><td width=200>컴퓨터개론</td><td><?php echo $result1; ?></td></tr>
  <tr><td>이산수학</td><td><?php echo $result2; ?></td></tr>
  <tr><td>컴퓨터그래픽스</td><td><?php echo $result3; ?></td></tr>
  <tr><td>비주얼프로그래밍</td><td><?php echo $result4; ?></td></tr>
  <tr><td>물리학개론</td><td><?php echo $result5; ?></td></tr>
</table>
