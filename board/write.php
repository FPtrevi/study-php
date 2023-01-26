<?php
require_once("lib.php");
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <script src="//code.jquery.com/jquery.min.js"></script>
    <title>글 쓰기</title>
</head>
<body>
        <!-- <form name = "frm" action="process_write.php" method="post"> -->
            <input type="hidden" id="user_id" value="<?=$_SESSION['id']?>">
            <table border = "1">
                <tr>
                    <th>제목</th>
                    <td>
                        <input type="text" id="title" value="" />
                    </td>
                </tr>
                <tr>
                    <th>내용</th>
                    <td>
                        <textarea id="text" value=""></textarea>
                    </td>
                </tr>
                <tr>
                    <th>
                        <a href="index.php">돌아가기</a>
                    </th>
                    <th>
                        <button onclick= go()>등록</button>
                    </th>
                </tr>
            </table>
        <!-- </form> -->
        <script>
            function go(){
                $.ajax({
                    url: "process_write.php",
                    type: "post",
                    data: {
                        title: $('#title').val(),
                        text: $('#text').val(),
                        user_id: $('#user_id').val(),
                    },
                }).done(function(data){
                    // $('#result').text(data);
                    // location.reload(); // 새로고침
                    location.href="index.php"; // 페이지 이동
                })
            }
        </script>
</body>
</html>