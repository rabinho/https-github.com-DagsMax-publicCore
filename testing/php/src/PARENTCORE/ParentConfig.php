<?php


class ParentConfig
{
    public $fileGENERAL;
    public $dataGENERAL;
    public function __construct()
    {

    }
    public function extractorDATAFILEJSON($fileGENERAL)
    {
        $this->fileGENERAL = $fileGENERAL;
        if(isset($fileGENERAL))
        {
            if(file_exists($fileGENERAL))
            {
                $data = file_get_contents($fileGENERAL);
                $body = json_encode($data, true);
                $body = rtrim($body, "/");
                $body = trim($body, "/");
                $body = explode(":", $body);
                return $this->dataGENERAL = $body;

            }else
            {
                die("No se ha encontrado el archivo");
            }

        }else
        {
            die("No se ha especificado la ruta del archivo");

        }
    }

}