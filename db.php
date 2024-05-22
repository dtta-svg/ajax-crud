<?php

// $username = 'wzrngrevfz';
// $password = 'RWXbdbtUv$gE5pMi';
// $connection = new PDO( 'mysql:host=my-frist-webasite-server.mysql.database.azure.com;dbname=dtta', $username, $password );


$con = mysqli_init();
mysqli_ssl_set($con,NULL,NULL, NULL, NULL);
mysqli_real_connect($conn, "my-curd-app-server.mysql.database.azure.com", "djnuccgrnn", "m$laHeq$COiK2MLP", "dtta", 3306, MYSQLI_CLIENT_SSL);
 
?>
