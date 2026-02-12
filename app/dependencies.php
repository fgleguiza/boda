<?php

declare(strict_types=1);

use App\Application\Settings\SettingsInterface;
use App\Database\Database;
use DI\ContainerBuilder;
use Monolog\Handler\StreamHandler;
use Monolog\Logger;
use Monolog\Processor\UidProcessor;
use Psr\Container\ContainerInterface;
use Psr\Log\LoggerInterface;

return function (ContainerBuilder $containerBuilder) {

    $containerBuilder->addDefinitions([

        LoggerInterface::class => function (ContainerInterface $c) {
            $settings = $c->get(SettingsInterface::class);

            $loggerSettings = $settings->get('logger');
            $logger = new Logger($loggerSettings['name']);

            $logger->pushProcessor(new UidProcessor());

            $logger->pushHandler(
                new StreamHandler(
                    $loggerSettings['path'],
                    $loggerSettings['level']
                )
            );

            return $logger;
        },

        \PDO::class => function () {
            return Database::conexion();
        },

    ]);
};
