<?php
require_once("Sql.php");


$this->setData('defaults',array(
        'title' => 'tytuł')
);
$this->setData('database',array(
    'sql_host' => sql_host,
    'sql_name' => sql_name,
    'sql_user' => sql_user,
    'sql_pass' => sql_pass
));



$this->setData('app_default', 'user');
$this->setData('module_default', 'index');
$this->setData('section_default', 'index');











?>