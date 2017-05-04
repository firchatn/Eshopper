<?php
$link = mysql_connect('localhost', 'root', 'root');
if (!$link) {
die('Could not connect: ' . mysql_error());
}
$sql = 'CREATE DATABASE database_name';
if (mysql_query($sql, $link)) {
echo "Database my_db created successfully\n";
} else {
echo 'Error creating database: ' . mysql_error() . "\n";
}
if (!mysql_select_db('database_name')){
die('Could not select database: ' . mysql_error());
}
?>
