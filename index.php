<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
<title> Archive </title> 
</head>

<body>
<h1>Available websites for <a href="docker.xyz">docker.xyz</a></h1>
<p class="machine" id=1>
<?php 
    $hosts = [
        ["Portainer", "docker.xyz", 9000],
        ["Transmission", "docker.xyz", 9091],
        ["Emby", "docker.xyz", 8096],
        ["Smokeping", "docker.xyz", 8035],
        ["Torrents.csv", "docker.xyz", 8902],
        ["LibreSpeed", "docker.xyz", 8888],
    ];

    foreach($hosts as $host) {
        if ($socket = fsockopen($host[1], $host[2], $errno, $errstr, 1)) {
            echo '<a target="_blank" href="http://' . $host[1] . ':' . $host[2] . '">' . $host[0] . '</a> <br>';
            fclose($socket);
        }
    }
?>
</p>

<h1>Available websites for <a href="render.xyz">render.xyz</a></h1>
<p class="machine" id=2>
<?php
    $hosts = [
        ["FFmpeg", "render.xyz", 8080],
    ];

    foreach($hosts as $host) {
        if ($socket = fsockopen($host[1], $host[2], $errno, $errstr, 1)) {
            echo '<a href="' . $host[1] . ':' . $host[2] . '">' . $host[0] . '</a> <br>';
            fclose($socket);
        }
    }
?>
</p>
</body>
</html>
