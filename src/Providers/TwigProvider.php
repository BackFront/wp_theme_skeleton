<?php
namespace App\Providers
{
    use Pimple\Container;
    use App\Supports\Twig\TwigFunctionsSupport;

    class TwigProvider extends \Backfront\Support\ServiceProvider
    {
        protected $twigLoader;

        public function boot()
        {
            $this->app->view = $twig = $this->app->container['make'](\Twig_Environment::class, [$this->twigLoader, ['debug' => true]]);
            $this->loadTwigFunctions();
        }

        public function register(Container $container): void
        {
            $this->twigLoader = $this->app->container['make'](\Twig_Loader_Filesystem::class, [
                'paths' => $this->app->TPLPATH
            ]);
        }

        protected function loadTwigFunctions()
        {
            TwigFunctionsSupport::twigAddFunctionDefault($this->app);
            TwigFunctionsSupport::twigAddFunctionAsset($this->app);
            TwigFunctionsSupport::twigAddFunctionGetOpion($this->app);
        }
    }
}