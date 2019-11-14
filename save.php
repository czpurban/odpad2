<?php
// the $_POST[] array will contain the passed in filename and filedata
// the directory "data" must be writable by the server

/*
_POST['filename'] = isset($_POST['filename']) ? intval($_POST['filename']) : 'DEFAULT';

$filename = "/home/czpurban/www/study1/data/" . $_POST['filename'];

$data = $_POST['filedata'];
*/

$request_body = file_get_contents('php://input');

$input = json_decode($request_body, true);

$filename = "/home/czpurban/www/study1/data/" . time() . '_' . $input['filename'];

$data = $input['filedata'];

// write the file to disk
file_put_contents($filename, $data);
