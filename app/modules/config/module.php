<?php

use Pagekit\Config\ConfigManager;

return [

    'name' => 'config',

    'main' => function ($app) {

        $app['config'] = function ($app) {

            if (!$this->config['cache']) {
                $this->config['cache'] = $app['path.cache'];
            }

            return new ConfigManager($app['db'], $this->config);
        };

        if ($app['config.file']) {
            $app['module']->addLoader(function ($name, array $config) use ($app) {

                if ($values = $app['config']->get($name)) {
                    $config = array_replace_recursive($config, ['config' => $values->toArray()]);
                }

                return $config;
            });
        }

        $app->on('kernel.terminate', function () use ($app) {
            foreach ($app['config'] as $name => $config) {
                $app['config']->set($name, $config);
            }
        });

    },

    'require' => [

        'database'

    ],

    'autoload' => [

        'Pagekit\\Config\\' => 'src'

    ],

    'config' => [

        'table'  => '@system_config',
        'prefix' => 'config.',
        'cache'  => ''

    ]

];
