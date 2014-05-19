<?php


/* read the request values */
$raw_request_values = file_get_contents('php://input');


error_log('***********************************');
error_log($raw_request_values);
error_log('***********************************');