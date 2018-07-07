<?php
require __DIR__.'/autoload.php';

require __DIR__ . '/../helpers/helpers.php';

require __DIR__ . '/../web/web.php';


$uri = urldecode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

\Core\Kernel::tie($uri);



