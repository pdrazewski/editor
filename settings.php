<?php

$project = new Twig_Loader_Filesystem('../');
$loader1 = new Twig_Loader_Filesystem('templates');

$loader = new Twig_Loader_Chain(array($project, $loader1));
$twig = new Twig_Environment($loader);
$twig->addExtension(new Twig_Extension_StringLoader());
$data = array('base_url' => 'base/base.html.twig');