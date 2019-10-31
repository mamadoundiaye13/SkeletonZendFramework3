<?php
namespace GetHtmlUrl;

use Zend\Router\Http\Segment;
use Zend\ServiceManager\Factory\InvokableFactory;

return [
    'router' => [
        'routes' => [
            'zend-skeleton-module' => [
                'type'    => Segment::class,
                'options' => [
                    'route'    => '/toto[/:action]',
                    'defaults' => [
                        'controller' => Controller\SkeletonController::class,
                        'action'     => 'index',
                    ],
                ],
            ],
        ],
    ],

    'controllers' => [
        'factories' => [
            Controller\SkeletonController::class => InvokableFactory::class,
        ],
    ],

    'view_manager' => [

        'template_path_stack' => [
            'ZendSkeletonModule' => __DIR__ . '/../view',
        ],
    ],
];
