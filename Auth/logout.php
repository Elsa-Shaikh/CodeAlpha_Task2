<?php
include "conn.php";
session_unset();
session_destroy();

header("Location: http://localhost/internship_Task_2/index.php");

?>