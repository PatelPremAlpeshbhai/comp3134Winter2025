<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($_POST["confirmation"] == $_SESSION["confirmation"]) {
        echo "<div style='color:green;'>Valid request.</div>";
    } else {
        echo "<div style='color:red;'>CSRF detected!</div>";
    }
}
?>
