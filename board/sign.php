<?php
require_once("lib.php");
$libs = paging("board", 1);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form name = 'frm' action="process_sign.php" method = "post" onSubmit='return CheckFrom()';>
        <table border = '1'>
            <tr>
                <th>아이디</th>
                <td>
                    <input type="text" name="users_id" value='' />
                </td>
            </tr>
            <tr>
                <th>비밀번호</th>
                <td>
                    <input type="password" name="users_pw" value='' />
                </td>
            </tr>
            <tr>
                <th>별명</th>
                <td>
                    <input type="text" name="name" value='' />
                </td>
            </tr>
            <tr>
                <td colspan = '2'>
                    <input type="submit" value="확인">
                </td>
            </tr>
        </table>
    </form>
    <a href="index.php">돌아가기</a>
    <script>
        function CheckFrom(){
            if(frm.users_id.value == ''){
                frm.users_id.focus();
                alert('아이디를 입력해 주세요');
                return false;
            }else if(frm.users_pw.value == ''){
                frm.users_pw.focus();
                alert('비밀번호를 입력해 주세요');
                return false;
            }else if(frm.name.value == ''){
                frm.name.focus();
                alert('별명을 입력해 주세요');
                return false;
            }
        }
    </script>
</body>
</html>