<?php
session_start(['cookie_lifetime' => 86400]);
if(!isset($_SESSION["session_id"]) and !isset($_SESSION["user_id"]) and $_SERVER["REQUEST_URI"] !== "/signin/" and $_SERVER["REQUEST_URI"] !== "/login/"){
    header("Location: /login/");
}