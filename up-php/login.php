<?php


?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>로그인</title>
</head>
<body>
        <form name = "loginFrm" action="login_process.php" method="post">
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
</body>
</html>