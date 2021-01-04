<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="index.php" method="POST">
        <input type="text" name="url" placeholder="https://example.com">
        <input type="submit" name="submit" value="submit" placeholder="click me!!!">
    </form>
</body>

</html>
<?php
require_once 'url.php';

if (isset($_POST['submit'])) {
    execjava();
    $weburl = $_POST['url'];
    $url = new weburl;
    $url->saveToDb($weburl);
}

function execjava()
{
    exec('java -cp C:\\xampp\\htdocs\\mobile test muur\\vaadin.main.jar openwebapp.openwebapp');
}
