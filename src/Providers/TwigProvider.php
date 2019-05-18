<?php
namespace App\Providers
{
    use Pimple\Container;

    class TwigProvider extends \Backfront\Support\ServiceProvider
    {
        protected $twigLoader;

        public function boot()
        {
            $this->app->view =
            $twig = $this->app->container['make'](\Twig_Environment::class, [
                'loader' => $this->twigLoader
            ]);
            $this->registerTwigFunctionAsset($twig);
        }

        public function register(Container $container): void
        {
            $this->twigLoader = $this->app->container['make'](\Twig_Loader_Filesystem::class, [
                'paths' => $this->app->TPLPATH
            ]);
        }

        protected function registerTwigFunctionAsset(\Twig_Environment $twig): void
        {
            $this->app->view->addFunction(
                $this->app->container['make'](\Twig_SimpleFunction::class, [
                    'name' => 'asset',
                    'callable' => function($src = null) {
                        return $this->app->ASSETS_PATH . DIRECTORY_SEPARATOR . $src;
                    }
                ])
            );
        }
    }
}