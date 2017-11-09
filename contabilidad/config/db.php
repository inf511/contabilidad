<?php

return [
    'class' => 'yii\db\Connection',
   // 'dsn' => 'mysql:host=localhost;dbname=yii2basic',
     'dsn' => 'pgsql:host=localhost;dbname=dbcontabilidad',
	'username' => 'postgres',
    'password' => '159753',
    'charset' => 'utf8',

    // Schema cache options (for production environment)
    //'enableSchemaCache' => true,
    //'schemaCacheDuration' => 60,
    //'schemaCache' => 'cache',
];
