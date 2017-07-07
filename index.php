<?php
echo $_GET['hub_challenge'];
$input = json_decode(file_get_contents('php://input'), true);

error_log(print_r($input,True));

?>
