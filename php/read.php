<?php

include "db_conn.php";
$sql = "SELECT * FROM users ORDER BY name ASC";
$result = mysqli_query($conn, $sql);
?>