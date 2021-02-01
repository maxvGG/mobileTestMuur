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
    <button><a href='?ea=true'>start server</a></button>
</body>

</html>
<?php
require_once 'url.php';

if (isset($_POST['submit'])) {
    $weburl = $_POST['url'];
    $url = new weburl;
    $url->saveToDb($weburl);
    if ($url->urlChecker($weburl)) {
        execjava();
    };
}

function execjava()
{

    exec('java -cp C:\\Users\\maxva\\OneDrive\\Bureaublad\\vaadin\\out\\artifacts\\vaadin_jar\\vaadin.main.jar openwebapp.openwebapp');
}
