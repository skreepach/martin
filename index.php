<?php
require 'vendor/autoload.php';
require 'connection.php';
$app = new \atk4\ui\App('Martin');
require 'visual.php';
$layout = $app->initLayout('Centered');
/*$form = $app->add('Form');
$form->setModel(new Friends($db));
?> */
