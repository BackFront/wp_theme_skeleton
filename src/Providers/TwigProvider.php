<?php

 namespace App\Providers
 {
     class TwigProvider extends \Backfront\Support\ServiceProvider
     {
        public function boot()
        {
        }

         public function register() : void
         {
             $twigLoader = $this->app->container['make'](\Twig_Loader_Filesystem::class, self::getInstance()->TPLPATH);
             $this->app->twig = $this->app->container['make'](\Twig_Environment::class, $twigLoader);
             $this->registerTwigFunctionAsset();
         }

         protected function registerTwigFunctionAsset() : void
         {
            $this->app->twig->addFunction(new \Twig_SimpleFunction('assets', function($src = null) {
                return $this->app->TPLPATH . DIRECTORY_SEPARATOR . $src;
            }));
         }
     }
 }