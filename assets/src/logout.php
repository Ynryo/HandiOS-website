<?php
session_start();
unset($_SESSION["session_id"]);
unset($_SESSION["user_id"]);
unset($_SESSION["user_type"]);
header("Location: /login/");
