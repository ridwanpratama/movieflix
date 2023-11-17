<?php
$error_message = $_GET['error_message'] ?? 'Something went wrong.';
$stack_trace = $_GET['stack_trace'] ?? '';

print('ERROR: '); 
echo "<br>";
print_r($error_message);
echo "<br>";
print_r(nl2br($stack_trace));