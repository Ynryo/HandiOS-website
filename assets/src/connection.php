<?php
$servername = "127.0.0.1:3306";
$username = "qgkenujx_project";
$password = "?IUnhWl1h2qR2?n2$$";
$dbname = "qgkenujx_handios";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("<p class=\"error\">Connexion échouée : " . $conn->connect_error . "</p>");
}
mysqli_set_charset($conn, "utf8mb4");

function get_client_ip()
{
    $ipaddress = '';

    if (getenv('HTTP_CLIENT_IP'))
        $ipaddress = getenv('HTTP_CLIENT_IP');
    else if (getenv('HTTP_X_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
    else if (getenv('HTTP_X_FORWARDED'))
        $ipaddress = getenv('HTTP_X_FORWARDED');
    else if (getenv('HTTP_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_FORWARDED_FOR');
    else if (getenv('HTTP_FORWARDED'))
        $ipaddress = getenv('HTTP_FORWARDED');
    else if (getenv('REMOTE_ADDR'))
        $ipaddress = getenv('REMOTE_ADDR');
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
}