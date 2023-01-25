<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>로그인</title>
</head>
<body>
        <form name = "loginFrm" action="process_login.php" method="post" onSubmit='return CheckFrom()'>
            <table border = "1">
                <tr>
                    <th>아이디</th>
                    <td>
                        <input type="text" name="user_id" value="" />
                    </td>
                </tr>
                <tr>
                    <th>비밀번호</th>
                    <td>
                        <input type="password" name="user_pw" value="" />
                    </td>
                </tr>
                <tr>
                    <th colspan = "2">
                        <input type="submit" value="로그인">
                    </th>
                </tr>
            </table>
        </form>
        <a href="index.php">돌아가기</a>
        <a href="sign.php">회원가입</a>
        <script>
        function CheckFrom(){
            if(loginFrm.user_id.value == ''){
                loginFrm.user_id.focus();
                alert('아이디를 입력해 주세요');
                return false;
            }else if(loginFrm.user_pw.value == ''){
                loginFrm.user_pw.focus();
                alert('비밀번호를 입력해 주세요');
                return false;
            }
        }
    </script>
</body>
</html>