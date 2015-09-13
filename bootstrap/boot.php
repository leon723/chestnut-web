<?php

$app = new Chestnut\Application(realpath("../"));

$app->boot();

require $app['path'] . DIRECTORY_SEPARATOR . "route.php";

return $app;
