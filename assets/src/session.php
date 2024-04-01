<?php
session_start(['cookie_lifetime' => 86400]);
if (!isset($_SESSION["hos_session_id"]) and !isset($_SESSION["hos_user_id"]) and $_SERVER["REQUEST_URI"] !== "/signup/" and $_SERVER["REQUEST_URI"] !== "/login/") {
    header("Location: /login/");
}