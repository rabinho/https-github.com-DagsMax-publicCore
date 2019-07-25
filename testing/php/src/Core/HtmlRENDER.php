<?php


namespace core;


class HtmlRENDER
{
    public function renderView($nameView, $data = null)
    {
        if(file_exists("Views/$nameView.php"))
        {
            include "Views/$nameView.php";
        }else
        {
            die("No existe la página");
        }
    }

}