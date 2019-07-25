<?php





class Inicio extends \core\Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function listar()
    {
        $this->render->renderView("inicio/index",$data);

    }

}