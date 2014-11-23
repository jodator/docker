<html>
<head><title>DB test</title></head>
</html>
<body>
<?php

$db = new PDO('mysql:host=db;dbname=test;charset=utf8', 'test', 'test');

foreach ($db->query('show tables;') as $row) {
    var_dump($row);
    echo '<br>';
}
?>
</body>