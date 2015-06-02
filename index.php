<?php

require_once 'vendor/autoload.php';
require_once 'settings.php';

echo $twig->render('index/index.html.twig', $data);
