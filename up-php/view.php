<?php
include_once("config/db_conn.php");
$sql = "select * from members where idx = {$_GET['view_no']}";
$result = mysqli_query($connect, $sql);
$row = mysqli_fetch_array($result);
mysqli_close($connect);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>보기</title>
</head>
<body>
    <input type="hidden" name="e_idx", value = <?=$row['idx']?>>
    <table border = '1'>
        <tr>
            <th>회원명</th>
            <td>
                <?=$row['name']?>
            </td>
        </tr>
        <tr>
            <th>나이</th>
            <td>
                <?=$row['age']?>
            </td>
        </tr>
        <tr>
            <th>성별</th>
            <td>
                <?=$row['gender']?>
            </td>
        </tr>
        <tr>
            <td>
                <a href='./index.php'>목록</a>
            </td>
            <td>
                <a href='./edit.php?edit_no=<?=$_GET['view_no']?>'>수정</a>
            </td>
        </tr>
    </table>
</body>
</html>