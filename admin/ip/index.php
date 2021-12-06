<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Track My IP</title>
    <script>
        function redirect() {
            track = document.getElementById("ipredirect").value;
            var url = "http://167.99.112.134/admin/ip/track/"+track;

            window.location.href=url;
            return false;
        }
    </script>
</head>

<body>
    <div class="header">
        <h2>Cyber-Dominators</h2>
    </div>
    <form method="post" action="">
        <div class="input-group">
            <label>Enter IP:</label>
            <input type="text" id="ipredirect" name="ip">
        </div>
        <div class="input-group">
            <a id="link" href="">
            <button type="submit" class="btn" name="login_user" onclick="return redirect()">TRACK</button>
            </a>
        </div>
        <div>
            Tracked IP's <a href="http://167.99.112.134/admin/ip/track/">Click to view the logs</a>

        </div>

    </form>
</body>

</html>

<?php

if (isset($_POST["ip"])) {
    $ip = $_POST["ip"];
    $filename = $ip . ".txt";
    $file = fopen("ip.txt", 'wa+');
    fwrite($file, $ip);
    fclose($file);
}
?>