<?php


namespace core;


class App
{
    protected $controllerMain;
    protected $controllers;
    public $controllerTest;
    public $controllerDeploy = [];
    public function __construct()
    {
        $this->controllers = new \core\Config();
        $this->isGETTEST();
    }

    protected function isGETTEST()
    {
        $controllers = $this->controllers->getControllers();

        if($_GET && isset($_GET["controller"]))
        {
            foreach ($controllers as $controller)
            {
                if($_GET["controller"] === $controller)
                {

                    $this->controllerMain = $controller;
                    $this->loadControllers($this->controllerMain);
                }
            }


        }else
        {

            /*acá va el default controller*/
            $this->controllerMain = $this->controllers->getControllerDefault();
            $this->loadControllers($this->controllerMain);


        }

        if(class_exists($this->controllerMain))
        {
            $loadController = new $this->controllerMain();
        }else
        {
            die("Error al cargar el controlador, comuniquese con el administrador");
        }
    }

    protected function loadControllers($controller)
    {
        if(file_exists("Controllers/$controller.php"))
        {
            require_once "Controllers/$controller.php";

        }

    }

}