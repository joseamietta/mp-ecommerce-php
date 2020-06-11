<?php
$request = file_get_contents('php://input');

file_put_contents('output.txt', $request);