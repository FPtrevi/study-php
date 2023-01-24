<?php
require_once("lib.php");

// if(!isset($_SESSION['user_id']) && empty($_SESSION['user_id']) ){
//     echo "로그인을 해야 이용할 수 있는 페이지 입니다. <br> <a href = 'login.php'>로그인</a>";
//     exit;
// }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>등록</title>
</head>


<body><!-- 폼 태그에 파일 업로드가 있다면  enctype='multipart/form-data' 필수-->
    <form name = 'frm' action = "write_process.php" method = 'post' onSubmit='return CheckFrom();'>
        <table border = '1'>
            <tr>
                <th>아이디</th>
                <td>
                    <input type="text" name="user_id" value='' />
                </td>
            </tr>
            <tr>
                <th>비밀번호</th>
                <td>
                    <input type="password" name="user_pw" value='' />
                </td>
            </tr>
            <tr>
                <th>회원명</th>
                <td>
                    <input type="text" name="name" value='' />
                </td>
            </tr>
            <tr>
                <th>나이</th>
                <td>
                    <input type="text" name="age" value='' />
                </td>
            </tr>
            <tr>
                <th>성별</th>
                <td>
                    <label>
                        <input type="radio" name="gender" value='남' checked /> 남
                    </label>
                    <label>
                        <input type="radio" name="gender" value='여' /> 여
                    </label>
                </td>
            </tr>
            <tr>
                <th>사진</th>
                <td>
                    <input type="file" name="photo" value = "" />
                </td>
            </tr>
            <tr>
                <td colsapn = '2'>
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