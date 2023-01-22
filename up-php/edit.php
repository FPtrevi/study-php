<?php
include_once("config/db_conn.php");
$sql = "select * from members where idx = {$_GET['edit_no']}";
$result = mysqli_query($connect, $sql);
$row = mysqli_fetch_array($result);
$idx = $row['idx'];
$name = $row['name'];
$age = $row['age'];
$gender = $row['gender'];
mysqli_close($connect);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>등록</title>
</head>
<body>
    <form name = 'frm' action = "edit_process.php" method = 'post' onSubmit='return CheckFrom();'>
        <input type="hidden" name="e_idx", value = <?=$idx?>>
        <table border = '1'>
            <tr>
                <th>회원명</th>
                <td>
                    <input type="text" name="name" value='<?=$name?>' />
                </td>
            </tr>
            <tr>
                <th>나이</th>
                <td>
                    <input type="text" name="age" value='<?=$age?>' />
                </td>
            </tr>
            <tr>
                <th>성별</th>
                <td>
                    <?php
                        $checked1 = "";
                        $checked2 = "";
                        if($row['gender'] == "남"){
                            $checked1 = "checked";
                            $checked2 = "";
                        }else if($row['gender'] == "여"){
                            $checked1 = "";
                            $checked2 = "checked";
                        }else{
                            $checked1 = "";
                            $checked2 = "";
                        }
                    ?>
                    <label>
                        <input type="radio" name="gender" value='남' <?=$checked1?> /> 남
                    </label>
                    <label>
                        <input type="radio" name="gender" value='여' <?=$checked2?>/> 여
                    </label>
                </td>
            </tr>
            <tr>
                <td>
                <a href='./index.php'>목록</a>
                </td>
                <td>
                    <input type="submit" value="저장" />
                </td>
            </tr>
        </table>
    </form>

    <script>
        function CheckFrom(){
            if(frm.name.value == ''){
                frm.name.focus();
                alert('이름을 입력해 주세요');
                return false;
            }else if(frm.age.value == ''){
                frm.age.focus();
                alert('나이를 입력해 주세요');
                return false;
            }
        }
    </script>
</body>
</html>