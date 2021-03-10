<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <h1 id="title">Mobile Test Muur</h1>
    <div id="centerbox">
        <form action="index.php" method="POST">
            <input type="text" name="url" placeholder="https://example.com">
            <input type="submit" name="submit" value="submit" placeholder="click me!!!">
            <input type="submit" name="startServer" value="startServer" placeholder="start server" style="margin-top: 10px;">
        </form>
    </div>
    <footer>
        Made by Max van Gorp and Beau Vroegh
        <a id="link" href="https://github.com/maxvGG/mobileTestMuur" target="_blank">souce code</a>
    </footer>
</body>

</html>
<?php
include 'url.php';

if (isset($_POST['submit'])) {
    $weburl = $_POST['url'];
    $url = new weburl;
    $url->saveToDb($weburl);
    if ($url->urlChecker($weburl)) {
        execjava();
    };
}

if (isset($_POST['startServer'])) {
    echo execInBackground(`echo hello`);
    // exec('appium -p 4444');

}
// function execCmd($cmd)
// {
//     // $cmd = 'appium -p 4444';
//     echo "<pre>" .  popen($cmd, "r") . "</pre>";
// }
function execInBackground($cmd = null)
{
    if (!$cmd) {
        echo "no cmd given";
        throw new Exception("No command given");
    }
    // If windows, else
    if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
        system($cmd . " > NUL");
    } else {
        shell_exec("/usr/bin/nohup " . $cmd . " >/dev/null 2>&1 &");
    }
}
function execjava()
{

    exec('java -cp C:\\Users\\maxva\\OneDrive\\Bureaublad\\vaadin\\out\\artifacts\\vaadin_jar\\vaadin.main.jar openwebapp.openwebapp');
}
