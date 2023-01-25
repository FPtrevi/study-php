<?php
require_once("lib.php");
$board_id = $_POST["board_id"];
$title = $_POST["title"];
$text = $_POST["text"];

?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>글 쓰기</title>
</head>
<body>
        <form name = "frm" action="process_edit.php" method="post">
            <input type="hidden" name="board_id" value="<?=$board_id?>">
            <table border = "1">
                <tr>
                    <th>제목</th>
                    <td>
                        <input type="text" name="title" value="<?=$title?>" />
                    </td>
                </tr>
                <tr>
                    <th>내용</th>
                    <td>
                        <textarea name="text"><?=$text?></textarea>
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