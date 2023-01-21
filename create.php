<?php
$conn = mysqli_connect('localhost', 'deu20171194', '20171194', 'deu20171194');
$sql = "select * from topic";
$result = mysqli_query($conn, $sql);
$list = '';
while($row = mysqli_fetch_array($result)){
    $escaped_title = htmlspecialchars($row['title']);
    $list = $list."<li><a href=\"index.php?id={$row['id']}\">{$escaped_title}</a></li>";
    // echo $row['description'];
}
$article = array(
'title'=>'welcome',
'description' => 'Hello, web'
);

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>WEB</title>
</head>
<body>
    <h1><a href="index.php">WEB</a></h1>
    <ol>
        <?=$list?>
    </ol>
    <a href="create.php">create</a>
    <form action="process_create.php" method = "POST">
        <p><input type="text" name = "title" placeholder = "title"></p>
        <p><textarea name="description" placeholder = "description"></textarea></p>
        <p><input type="submit"></p>
    </form>
</body>
</html>