<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
    <h1>WEB</h1>
    <ol>
        <li><a href = "index.php?id=HTML">HTML</a></li>
        <li><a href = "index.php?id=CSS">CSS<a></li>
        <li><a href = "index.php?id=JavaScript">JavaScript</a></li>
    </ol>
    <h2>
        <?php
            echo $_GET['id'];
        ?>
    </h2>
    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veniam qui culpa temporibus nobis modi dignissimos natus harum dolorem minima doloremque corporis similique iste doloribus perspiciatis, reprehenderit, est explicabo laborum magni.
</body>
</html>