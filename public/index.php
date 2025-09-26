<?php
function dumb(...$args) {
    echo '<pre>';
    var_dump(...$args);
    echo '</pre>';
}

switch ($_SERVER['REQUEST_URI']) {
    case '/':
        include __DIR__ . '/../views/index.php';
        break;
    case '/us':
        include __DIR__ . '/../views/us.php';
        break;
    default:
        echo '404 page not found';
}