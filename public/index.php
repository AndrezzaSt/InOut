<?php
    require_once(dirname(__FILE__, 2) . '/src/config/database.php' );

    $sql = 'select * from users';
    Database::getResultFromQuery($sql);

    while($row = $result->fetch_assoc()){
        print_r($row);
        echo '<br>';
    }
