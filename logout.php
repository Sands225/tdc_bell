<?php
require 'functions/user-data.php';

setcookie("id", $user_id, time() - 3600);

header("Location: login.php");

?>