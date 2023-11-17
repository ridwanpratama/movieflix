<?php
function handle_error(Throwable $exception) {
    $error_message = urlencode($exception->getMessage());
    $stack_trace = $exception->getTraceAsString();
    header("Location: error_page.php?error_message=$error_message&stack_trace=$stack_trace");
    exit();
}

set_exception_handler('handle_error');