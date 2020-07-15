<?php

$_fn=realpath(__DIR__."/../data")."/base.db";

return [
    'class' => 'yii\db\Connection',
    // 'dsn' => 'mysql:host=localhost;dbname=yii2basic',
    // 'dsn' => 'sqlite:/test-eliseev/data/base.db',
    'dsn' => 'sqlite:'.$_fn,
    'username' => 'root',
    'password' => '',
    'charset' => 'utf8',

    // Schema cache options (for production environment)
    //'enableSchemaCache' => true,
    //'schemaCacheDuration' => 60,
    //'schemaCache' => 'cache',
];
