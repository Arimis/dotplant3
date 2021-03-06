<?php

$config = [
    'adminEmail' => 'admin@example.com',
    'yii.migrations' => [
        '@yii/rbac/migrations/',
        '@DevGroup/ExtensionsManager/migrations',
        '@DevGroup/Measure/migrations',
        '@DevGroup/Multilingual/migrations',
    ],
    'icon-framework' => 'fa',
    'PolyglotTranslationPath' => '@app/messages/polyglot.js',
    'deferred.env' => [
        'HOME' => '/Users/bethrezen',
    ],
    'uploadPath' => '@webroot/files/',
    'admin.layout' => '@app/views/layouts/admin',
    'modelSortPermission' => [], // array of model class names available to sorting in the next format: ['app\models\AwesomeModel' => 'permission-name',]
];

$generatedConfig = __DIR__ . '/generated/params-generated.php';
if (file_exists($generatedConfig)) {
    $config = \yii\helpers\ArrayHelper::merge($config, require($generatedConfig));
}

$localConfig = __DIR__ . DIRECTORY_SEPARATOR . 'params-local.php';
if (file_exists($localConfig)) {
    $config = \yii\helpers\ArrayHelper::merge($config, require($localConfig));
}

return $config;
