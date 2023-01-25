<?php
require_once("lib.php");
$view_no = $_GET['view_no'];

//select * from board inner join user on board.user_id = user.id
$sql = "select * from board where id = {$view_no}";
$result = mysqli_query($connect, $sql);
$row = mysqli_fetch_array($result);

$i_board_id = $row['id'];
$i_board_title = $row['title'];
$i_board_text = $row['text'];
$i_board_pw = $row['pw'];
$i_board_time = $row['date'];
$i_user_id = $row['user_id'];

$sql = "select * from user where id = '{$i_user_id}'";
$result = mysqli_query($connect, $sql);
$row = mysqli_fetch_array($result);

$user_name = $row['name'];





?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>view</title>
</head>
<body>
    <a href="index.php">홈으로</a>
    <h2><?=$i_board_title?></h2>
    <p>글쓴이 : <?=$user_name?></p><br>
    <div><?=$i_board_text?></div><br>
    <?php
        if(isset($_SESSION['id']) && $_SESSION['id'] == $i_user_id){
            //수정
            echo "<form action='edit.php' method='post'>";
            echo "<input type='hidden' name='board_id' value = '{$i_board_id}'>";
            echo "<input type='hidden' name='title' value = '{$i_board_title}'>";
            echo "<input type='hidden' name='text' value = '{$i_board_text}'>";
            echo "<input type = 'submit' value = '수정'>";
            echo "</form>";
            //삭제
            echo "<form action='process_delete.php' method='post'>";
            echo "<input type='hidden' name='id' value = '{$i_board_id}'>";
            echo "<input type = 'submit' value = '삭제'>";
            echo "</form>";
        }
    ?>
    <hr>
    <div>
        <p><b>댓글</b></p>
        <?php
            //댓글 가져오기
            $sql = "select * from reply inner join user on user.id = reply.user_id where board_id = {$i_board_id}";
            $result = mysqli_query($connect, $sql);
            while($row = mysqli_fetch_array($result)){
                echo "<p>";
                echo $row['name']."<br>";
                echo $row['text']."<br>";
                echo $row['time']."<br>";
                echo "</p>";
            }
        ?>
        <hr>
        <form name = "frm" action = "process_reply.php" method = "post">
            <input type="hidden" name="board_id" value ="<?=$view_no?>" />
            <p><input type="text" name="reply" value = '' /></p>
            <input type="submit" value="등록">
        </form>
    </div>
</body>
</html>