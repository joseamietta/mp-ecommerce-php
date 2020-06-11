<?php
$request = file_get_contents('php://input');

file_put_contents('notification.log', $request, FILE_APPEND);