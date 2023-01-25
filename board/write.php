<?php
require_once("lib.php");
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>글 쓰기</title>
</head>
<body>
        <form name = "frm" action="process_write.php" method="post">
            <input type="hidden" name="user_id" value="<?=$_SESSION['id']?>">
            <table border = "1">
                <tr>
                    <th>제목</th>
                    <td>
                        <input type="text" name="title" value="" />
                    </td>
                </tr>
                <tr>
                    <th>내용</th>
                    <td>
                        <textarea name="text" value=""></textarea>
                    </td>
                </tr>
                <tr>
                    <th colspan = "2">
                        <input type="submit" value="등록">
                    </th>
                </tr>
            </table>
        </form>
</body>
</html>