<?php
require_once("Mysql.php");


$this->setData('defaults',array(
        'title' => 'tytuł')
);
$this->setData('database',array(
    'mysql_host' => mysql_host,
    'mysql_name' => mysql_name,
    'mysql_user' => mysql_user,
    'mysql_pass' => mysql_pass
));



$this->setData('app_default', 'user');
$this->setData('module_default', 'index');
$this->setData('section_default', 'index');











?>