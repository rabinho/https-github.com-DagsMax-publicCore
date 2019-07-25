<?php


namespace core;


class Config extends \ParentConfig
{


    public function __construct()
    {
        parent::__construct();

    }

    public function getControllerDefault()
    {

        $controllerDefault = $this->extractorDATAFILEJSON( "Config/controllers.md");
        return $controllerDefault[2];
    }
    public function getControllers()
    {
        $controllers = $this->extractorDATAFILEJSON( "Config/controllers.md");
        return $controllers;
    }

}