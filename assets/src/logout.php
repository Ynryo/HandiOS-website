<?php
session_start();
unset($_SESSION["hos_session_id"]);
unset($_SESSION["hos_user_id"]);
unset($_SESSION["hos_user_type"]);
header("Location: /login/");