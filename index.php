<?php

require_once '../config/config.php';

$host = DB_HOST;
$username = DB_USER;
$password = DB_PASS;
$database_name = DB_NAME;

$filename = "backup-" . date("d-m-Y") . ".sql.gz";
$mime = "application/x-gzip";

header( "Content-Type: " . $mime );
header( 'Content-Disposition: attachment; filename="' . $filename . '"' );

$cmd = "mysqldump -u $username --password=$password $database_name | gzip --best";   

passthru( $cmd );

exit(0);


?>
