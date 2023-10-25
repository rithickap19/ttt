<?php
// Start or resume the session
session_start();
unset($_SESSION['tid']);
if (!isset($_SESSION['tid'])) {
    header("Location:search.php");
} else {
    echo 'Session variable "id" still exists.';
}
?>






