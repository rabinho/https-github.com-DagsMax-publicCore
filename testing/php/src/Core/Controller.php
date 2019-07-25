<?php


namespace core;


class Controller
{
    public $render;
    public function __construct()
    {
        $this->render = new HtmlRENDER();
        $this->isGETTESTMETHOD();
    }

    public function isGETTESTMETHOD()
    {
        if($_GET && isset($_GET["action"]))
        {
            $methodGETACTION = $_GET["action"];
            if(method_exists($this, $methodGETACTION))
            {
                $this->$methodGETACTION();
            }else if(method_exists($this, "index"))
            {

                $this->index();
            }else
            {
                die("Huvo un error al cargar la acción");
            }
        }
    }

}