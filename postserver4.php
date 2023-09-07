<?php
   # explode로 특정 문자에 대해서 분리가 가능함
    $result = explode(',', $_POST['mytext']);
   
    echo '<table border=1 width=500>
   <tr><th colspan=2>인식결과</th></tr>';

    for($i=0;$i<count($result);$i++){
          echo '<tr><td>' . $i . '번째 취미</td><td>' . $result[$i] . '</td></tr>';
    }
    echo '</table>';
?>
