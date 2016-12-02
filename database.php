<?php
define('MYSQL_SERVER','localhost');
define('MYSQL_USER', 'root');
define('MYSQL_PASSWORD', '');
define('MYSQL_DB', 'blog');

function db_connect(){
    $conn = mysqli_connect('localhost', 'root' , '', 'blog', '3306')
    or die("Error: ". mysqli_error($conn));

    if (!mysqli_set_charset($conn, "utf8")) {
        printf("Error: ".mysqli_error($conn));
    }
    return $conn;
}
?>

