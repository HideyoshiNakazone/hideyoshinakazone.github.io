<?php
    
    $db_connection = pg_connect("host=localhost dbname=moderno user=hideyoshi password=vhnb2901");

    if($db_connection) {
        echo '<script>console.log("Sucessufly connected to database!"); </script>';
    } else {
        echo '<script>console.log("Connection to database failed!"); </script>';
    }
    
?>