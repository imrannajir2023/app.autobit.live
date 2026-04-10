<?php
session_start();
session_destroy();
header('Location: /autobit/index.php');
exit;
