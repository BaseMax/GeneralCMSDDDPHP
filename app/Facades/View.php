<?php

namespace CMS\Facades;

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

class View extends Facade
{
    private Environment $twig;
    private FilesystemLoader $loader;
    public function __construct(FilesystemLoader $loader)
    {
        $this->loader = $loader;
        $this->twig = new Environment($this->loader, [
            "cache" => BASE_PATH . "/app/Cache"
        ]);
    }

    public static function render(string $file_name, array $variables = []): string
    {
        return (new static(
            new FilesystemLoader(VIEW_PATH)
        ))->loader($file_name, $variables);
    }

    private function loader(string $file_name, array $variables = []): string
    {
        return $this->twig->render($file_name, $variables);
    }
}
