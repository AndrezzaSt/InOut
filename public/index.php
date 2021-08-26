<?php
    require_once(dirname(__FILE__, 2) . '/src/config/config.php' );
    require_once(dirname(__FILE__, 2) . '/src/models/login.php' );
    


print_r(User::get(['id' => 1], 'id, name, email'));

foreach(User::get([], 'name') as $user) {
    echo $user->name;
    echo '<br>';
}