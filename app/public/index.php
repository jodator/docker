<!doctype html>
<html>
<head><title>Data volume test</title></head>
<body>
<p>Check "/app/data/" folder.</p>
</body>
</html>
<?php

$fileName = '/app/data/request' . date('Y-m-d-His') . '.tmp';
$fileHandler = fopen($fileName, 'w');

fwrite($fileHandler, 'This is just a test of data volume');

fclose($fileHandler);