<?php
session_start();
session_destroy();
unset($_SESSION['users_id']);
header("Location:index.php");
