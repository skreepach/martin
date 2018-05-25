<?php
require 'vendor/autoload.php';
require 'connection.php';
$app = new \atk4\ui\App('Martin');
$layout = $app->initLayout('Centered');
$form = $app->add('Form');
$form->setModel(new Friends($db));
$button = $app ->add('Button');
?>
