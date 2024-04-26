<?php
$sql = 'SELECT * FROM user ORDER BY RAND() LIMIT 1';
$res = mysqli_query($conn, $sql);
$user = mysqli_fetch_all($res, MYSQLI_ASSOC);