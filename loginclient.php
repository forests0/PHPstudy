<html> <!-- html문서의 시작 -->
  <head> <!-- head부분 -->
     <title>이것은 제목입니다!</title>
  </head>
  <body> <!-- body부분 -->
    <form method=post action=server.php>
     <table border=1 width=500>
        <tr><td colspan=2><img src=title.png></td></tr>
        <tr><td>아이디</td><td><input type=text name=myid></td></tr>
        <tr><td>패스워드</td><td><input type=password name=mypw1></td></tr>
        <tr><td>패스워드(확인)</td><td><input type=password name=mypw2></td></tr>
        <tr><td>성별</td><td>남:<input type=radio name=gender value='male' checked>여:<input type=radio value='female' name=gender></td></tr>
        <tr><td>취미</td>
            <td>
                 등산:<input type=checkbox name=hobby1><BR>
                 낚시:<input type=checkbox name=hobby2><BR>
                 영화:<input type=checkbox name=hobby3><BR>
                 캠핑:<input type=checkbox name=hobby4><BR>
                 당구:<input type=checkbox name=hobby5><BR>
            </td>
        </tr>
        <tr><td colspan=2 align=center><input type=submit value=가입완료></td></tr>
     </table> 
     </form>
  </body>
</html> <!-- html문서의 종료 -->
