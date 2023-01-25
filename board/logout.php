<?php
require_once("lib.php");

if(!isset($_SESSION['id']) && empty($_SESSION['id']) ){
    echo "로그인을 해야 이용할 수 있는 페이지 입니다. <br> <a href = 'login.php'>로그인</a>";
    exit;
}
session_destroy();

echo "정상 로그아웃 되었습니다.";
echo "<a href='index.php'>홈으로</a>";
?>