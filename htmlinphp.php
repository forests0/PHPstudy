<html>
   <head>
<?php
    $valuess = "hi";
    echo "<script>";
    echo "function myfunction(){";
    // `` 를 사용해서 변수를 안에서 사용하고 싶은 경우에는 이렇게 사용하면 될듯.
    echo `document.getElementById('mytext').value='{$valeuss}'`; 
    echo "}";
    echo "</script>";
?>
   </head>
   <body>
       <input id=mytext type=text>
       <input type=button value='눌러보세요!' onClick='myfunction()'>
   </body>
</html>
