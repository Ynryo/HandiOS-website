<?php
session_start();
if (isset($_SESSION["session_id"])) {
    $user_type = $_SESSION["user_type"];
    if ($user_type == 3) {
        echo "<p class=\"success\">Connected</p>";
        header("Location: /nurse/");
    } else if ($user_type == 4) {
        echo "<p class=\"success\">Connected</p>";
        header("Location: /family/");
    }
} else {
    header("Location: /login/");
}
