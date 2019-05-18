<?php

namespace App\Supports\Twig
{

    class TwigFunctionsSupport
    {
        public static function twigAddFunctionDefault(&$app)
        {
            $app->view->addExtension(
                $app->container['make'](\Twig\Extension\DebugExtension::class)
            );
        }

        public static function twigAddFunctionAsset(&$app)
        {
            $app->view->addFunction(
                $app->container['make'](\Twig_SimpleFunction::class, [
                    'name' => 'asset',
                    'callable' => function($src = null) use ($app) {
                        return $app->ASSETS_PATH . DIRECTORY_SEPARATOR . $src;
                    }
                ])
            );
        }

        public static function twigAddFunctionGetOpion(&$app)
        {
            if(function_exists('get_option')):
                $app->view->addFunction(
                    $app->container['make'](\Twig_SimpleFunction::class, [
                        'name' => 'get_option',
                        'callable' => function(string $option, mixed $default = null)
                        {
                            return get_option($option, $default);
                        }
                    ])
                );
            endif;
        }
    }

}


