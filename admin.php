<?php
require 'vendor/autoload.php';
session_start();
require 'connection.php';
$app = new \atk4\ui\App('Админ игры');
$layout = $app->initLayout('Centered');
if((isset($_SESSION['admin_access'])) && ($_SESSION['admin_access'] !='XnbvVF')){
header('error.php');
}
$crud=$app->layout->add('CRUD');
$crud->setModel(new Friends($db));
$crud->menu->addItem('Reload' , new \atk4\ui\jsReload($crud));

/*$button2 = $app->add(['Button' ,'refresh 4 juicy text']);
$button->on('click' , \atk4\ui\jsReload($seg,['name'=>'New name']))*/
