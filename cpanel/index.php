<?php
header("HTTP/1.1 301 Moved Permanently");
header("Location: " . $_SERVER['HTTP_HOST']);
exit();
?>
