<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Track My IP</title>
</head>

<body>
    <div class="header">
        <h2>Cyber-Dominators</h2>
    </div>

    <form method="post" action="">
        <div class="input-group">
            <label>Enter IP:</label>
            <input type="text" name="ip">
        </div>
        <div class="input-group">
            <button type="submit" class="btn" name="login_user">TRACK</button>
        </div>
        <div>
            Tracked IP's <a href="">Click to view the logs</a>

        </div>

    </form>
</body>

</html>

<?php

if (isset($_POST["ip"])) {
    $ip = $_POST["ip"];
    $filename = $ip . ".txt";
    $file = fopen($filename, 'w');
    fwrite($file, $ip);
    fclose($file);
}
?>