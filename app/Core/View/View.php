<?php

namespace App\Core\View;

use Exception;

class View
{
    private string $ext = ".html";
    private string $path = "/src/views/";

    public function __construct($view)
    {
        try {
            $view = ROOT . $this->path . $view . $this->ext;

            if (file_exists($view)) {
                $this->render($view);
            } else {
                echo 'This view does not exist.';
            }
        } catch (Exception $exception) {
            echo $exception->getMessage();
        }
    }

    private function render(string $view)
    {
        ob_start();
        require $view;
        ob_end_flush();
    }
}
